@extends('layouts.master')
@section('page_main_content')

@if(session('msg'))
        <div class="alert alert-success alert-dismissible notify">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i>Success!</h4>
            {{ session('msg') }}
        </div>
@endif
@if ($errors->any())
	<div class="alert alert-danger alert-dismissible notify">
	    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	    <h4><i class="icon fa fa-warning"></i>Error!</h4>
	    @foreach ($errors->all() as $error){{ $error }}@endforeach
	</div>
@endif

<div class="box">
    <div class="box-header">
        <h1 class="box-title">User List</h1>
    </div>

<section class="content">
    <div class="row">
            <div class="col-xs-12">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <table id="example1" class="table table-bordered table-hover dataTable text-center" role="grid" aria-describedby="example1_info">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Change Password</th>

                        </tr>
                    </thead>
                            
                    <tbody>
                    	@php $i = 0 @endphp
                        @foreach($users as $user)
                        <tr>
                        	<td>{{ $user->id }}</td>
                        	<td>{{ $user->name }}</td>
                        	<td>{{ $user->email }}</td>
                        	<td>{{ $user->user_role == 1 ? 'SuperAdmin' : 'User' }}</td>
                        	<td>{{ $user->status == 1 ? 'Active' : 'Inactive' }}
                        		<span>
                        			<a href="/change-status/{{$user->id}}" class="btn btn-warning btn-sm">Change</a>
                        		</span>
                        	</td>
                        	<td>
                        		<form action="/change-pass" method="post" class="form-group">
                        			@csrf
                        			<input onmouseover="type = 'text'" onmouseout="type = 'password';" type="password" name="password" class="form-control input-sm showPass" required>
                        			<input type="hidden" name="id" value="{{$user->id}}">
                        			<button type="submit" class="btn btn-danger btn-sm">Change</button>
                        		</form>
                        	</td>
                        </tr>
                        @php $i++ @endphp
                        @endforeach
                    </tbody>
                            
                </table>
            </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
        </div>
</section>

</div>

@endsection