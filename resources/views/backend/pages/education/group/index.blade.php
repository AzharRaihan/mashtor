@extends('backend.layouts.master')
@section('page-title',' Group ')
@section('page-content')
<div class="content">
	<div class="container-fluid">
		
		<div class="container">
			<h3 class="text-center"> Group </h3> <hr>
			<div class="row justify-content-center">
				<div class="col-md-6">
					@include('backend.partials._message')
					<form action="{{route('group.store')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="">Group Name</label>
							<input type="text" class="form-control" name="group_name" required>
						</div>
						<div class="form-group">
							<label for="">Level</label>
							<select name="level" id="" class="form-control" required>
								<option value="">Select Level</option>
								@foreach($level as $data)
								<option value="{{$data->id}}">{{$data->level}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="">Status</label>
							<select name="status" id="" class="form-control">
								<option value="1">Publish</option>
								<option value="0">Unpublish</option>
							</select>
						</div>
						<br>
						<input type="submit" class="btn btn-success float-right" value="Add">
					</form> <br><br>
					<table class="table table-bordered">
						<thead>
							<th>Sl.</th>
							<th>Level</th>
							<th>Group</th>
							<th>Status</th>
							<th>Action</th>
						</thead>
						<?php $i=0;?>
						@foreach($groups as $data)
						<?php $i++; ?>
						<tr>
							<td>{{$i}}</td>
							<td>{{$data->level_id}}</td>
							<td>{{$data->group_name}}</td>
							<td>{{$data->status}}</td>
							<td>
								<a href="{{route('group.edit',$data->id)}}" class="btn btn-info">edit</a>
								
								<form action="{{route('group.destroy',$data->id)}}" method="POST" style="display: inline-block;">
									@method('DELETE')
									{{csrf_field()}}
									
									
									<button type="" class="btn btn-outline-danger" onClick="return deleteconfirm();"><i class="zmdi zmdi-delete"></i>
									</button>
								</form>
							</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
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