@extends('backend.layouts.master')
@section('page-title','Course Outline')
@section('page-content')
<!-- Start content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Course Outline</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashoard</a></li>
                        <li class="breadcrumb-item active">Course Outline</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <div class="table-rep-plugin">
                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped table-bordered">
                                <a href="{{route('courseoutline.create')}}" class="btn btn-outline-info">Create Course Outline</a><br><br>
                                <thead class="thead-default">
                                    <tr>
                                        
                                        <th data-priority="0">Sl.</th>
                                        <th data-priority="1">Course</th>
                                        <th data-priority="1">Course Category</th>
                                        <th data-priority="1">Topic Title</th>
                                        <th data-priority="1">Topic Description</th>
                                        <th data-priority="3">Status</th>
                                        <th data-priority="1">Date</th>
                                        <th data-priority="3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0;?>
                                    @foreach($courseoutlines as $quotation)
                                    <?php $i++; ?>
                                    <tr>
                                        
                                        <td>{{$i}}</td>
                                        <?php
                                            $course_title = DB::table('courses')->where('id',$quotation->course)->first();

                                        ?>
                                        <td><?php if (isset($course_title)) {
                                            echo $course_title->course_title;
                                        } ?></td>
<td>
                                            <?php
                                                $coursecatsdsd = DB::table('course_categories')->where('id',$course_title->course_cat)->first();
                                                if(isset($coursecatsdsd->name) && !empty($coursecatsdsd->name)){echo $coursecatsdsd->name;}
                                            ?>
                                        </td>
                                        <td>{{$quotation->topic_title}}</td>
                                        
                                         <td>{!! $quotation->topic_details !!}</td>
                                        <td>
                                            <span class="label <?php if($quotation->status==1){?>label-success <?php } else {?> label-danger <?php } ?>"> <?php if($quotation->status==1){?>Active <?php }else {?>Inactive<?php } ?></span>
                                        </td>
                                        
                                        
                                        
                                        <td>{{$quotation->created_at}}</td>
                                        
                                        <td>
                                            <a href="{{route('courseoutline.edit',$quotation->id)}}" class="btn btn-outline-info"><i class="zmdi zmdi-edit"></i></a>
                                            <form action="{{route('courseoutline.destroy',$quotation->id)}}" method="POST" style="display: inline-block;">
                                                @method('DELETE')
                                                {{csrf_field()}}
                                                
                                                
                                                <button type="" class="btn btn-outline-danger" onClick="return deleteconfirm();"><i class="zmdi zmdi-delete"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
        </div> <!-- container -->
        </div> <!-- content -->
        <script>
        function deleteconfirm()
        {
        deletedata = confirm("Are you sure to delete permanently?");
        if (deletedata != true)
        {
        return false;
        }
        }
        </script>
        @endsection