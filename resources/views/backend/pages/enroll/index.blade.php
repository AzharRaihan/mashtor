@extends('backend.layouts.master')
@section('page-title','Tutors')
@section('page-content')
<!-- Start content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Users</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashoard</a></li>
                        <li class="breadcrumb-item active">users</li>
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
                              
                                <thead class="thead-default">
                                    <tr>
                                        
                                        <th data-priority="0">Sl.</th>
                                        <th data-priority="1">Name</th>
                                        <th data-priority="1">Email</th>
                                        <th data-priority="1">Course Name</th>
                                        <th data-priority="1">Discount</th>
                                        <th data-priority="1">Created At</th>
                                        <th data-priority="3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0;?>
                                    @foreach($enrolls as $user)
                                    <?php $i++; ?>
                                    <tr>
                                        
                                        <td>{{$i}}</td>
                                        <td>{{$user->fullname}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->discount}}</td>
                                        
                                        
                                        <td>{{$user->enrolsCreatedAt}}</td>
                                        
                                        <td>
                                            <a href="{{url('/admin/show/enroll',$user->enrollsId)}}" class="btn btn-outline-info"><i class="zmdi zmdi-eye"></i></a>
                                            <a href="{{url('/admin/delete/enroll',$user->enrollsId)}}" onClick="return deleteconfirm();" class="btn btn-outline-danger"><i class="zmdi zmdi-delete"></i></a>
                                            
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

