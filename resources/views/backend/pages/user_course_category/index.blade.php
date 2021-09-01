@extends('backend.layouts.master')
@section('page-title','Use Course Category')
@section('backend-stylesheet')
<!-- DataTables -->
<link href="{{ url('backend/assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('backend/assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="{{ url('backend/assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

<style>
  .icon-list-demo i {
    margin-right: 0px;
  }
  .del-btn{
    cursor: pointer;
  }
</style>
@endsection
@section('page-content')
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-12">
          <div class="page-title-box">
            <h4 class="page-title float-left">Course Category Lists</h4>
            <ol class="breadcrumb float-right">
              <li class="breadcrumb-item"><a href="#">Mashtor</a></li>
              <li class="breadcrumb-item active"><a href="#">Course Category Lists</a></li>
            </ol>
            <div class="clearfix"></div>
          </div>
        </div>
      </div><!-- end row -->
    </div> <!-- container -->
  </div>
  <!-- content -->

  <!-- Categories -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
            <div class="card-box table-responsive">
                <!-- Add Category Create Triger -->
                @include('backend.partials._message')
                <button type="button" class="btn btn-dark  waves-effect waves-light mb-col-2 mb-sm-3 mb-md-4" data-toggle="modal" data-target="#category"><i class="zmdi zmdi-plus"></i>Add New Course Category</button>
                <h4 class="m-t-0 header-title pb-3">User Course Category <strong>({{ $user_course_category->count() }})</strong></h4>
                <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                        <th>#Sl</th>
                        <th>User Course Category Name</th>
                        <th>Lat Update</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($user_course_category as $key=>$data)
                      <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $data->user_course_category_name }}</td>
                        <td>{{ $data->updated_at }}</td>
                        <td class="icon-list-demo text-center">
                          <a href="{{ url('admin/user-course-category-edit', $data->id) }}"><i class="zmdi zmdi-edit zmdi-sm"></i></a>
                          <button type="button" class="btn p-0 del-btn"  onclick="deleteifno({{ $data->id }})">
                            <i class="zmdi zmdi-delete"></i>
                          </button>
                          <form id="delete-form-{{ $data->id }}" action="{{ url('admin/user-course-category-delete', $data->id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                          </form>
                        </td>  
                      </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
      </div>
    </div><!-- end row -->
  </div>
  <!-- End Categories -->

<!-- Create Category Modal -->
<div class="modal fade" id="category" tabindex="-1" aria-labelledby="category" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Create User Course Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ url('admin/user-course-category-store') }}" method="POST">
        @csrf
        <div class="modal-body">
            <div class="form-group">
                <label for="category-name">User Course Category Name</label>
                <input type="text" class="form-control" id="category-name" name="user_course_category_name">
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
          <button type="button" class="btn btn-danger waves-effect waves-light" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
</div>
<!-- End Create Category Modal -->
@endsection
@section('backend-scripts')
<!-- Required datatable js -->
<script src="{{ url('backend/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('backend/assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Responsive examples -->
<script src="{{ url('backend/assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ url('backend/assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
<!-- Data Table script -->
<script>
  $(document).ready(function() {
    // Default Datatable
    $('#datatable').DataTable();
    // Responsive Datatable
    $('#responsive-datatable').DataTable();
    table.buttons().container().appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
  });
</script>
<!-- Sweet Aleart Js -->
<script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
<script type="text/javascript">
  function deleteifno(id) {
    swal({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'No, cancel!',
      confirmButtonClass: 'btn btn-success',
      cancelButtonClass: 'btn btn-danger',
      buttonsStyling: false,
      reverseButtons: true
    }).then((result) => {
      if (result.value) {
          event.preventDefault();
          document.getElementById('delete-form-'+id).submit();
      } else if (
          // Read more about handling dismissals
          result.dismiss === swal.DismissReason.cancel
      ) {
          swal(
              'Cancelled',
              'Your data is safe :)',
              'error'
          )
      }
    })
  }
</script>

<script type='text/javascript'>
  function preview_image(event) 
  {
   var reader = new FileReader();
   reader.onload = function()
   {
    var output = document.getElementById('output_image');
    output.src = reader.result;
   }
   reader.readAsDataURL(event.target.files[0]);
  }
  </script>
@endsection