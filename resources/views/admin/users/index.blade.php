@extends('admin.layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Users
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Myblog</a></li>
        <li><a href="/admin/">Admin</a></li>
        <li class="active">Users</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listing Users</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <a href="{{route('users.create')}}" class="btn btn-success">Create</a>
              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>E-mail</th>
                  <th>Avatar</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
	                <tr>
	                  <td>{{$user->id}}</td>
	                  <td>{{$user->name}}</td>
	                  <td>{{$user->email}}</td>
	                  <td>
	                    <img src="{{$user->getImage()}}" alt="" class="img-responsive" width="150">
	                  </td>
	                  <td><a href="{{route('users.edit', $user->id)}}" class="fa fa-pencil"></a> 
	                  {{Form::open(['route'=>['users.destroy', $user->id], 'method'=>'delete'])}}
	                  <button onclick="return confirm('are you sure?')" type="submit" class="delete">
	                   <i class="fa fa-remove"></i>
	                  </button>

	                   {{Form::close()}}
	                  </td>
	                </tr>
                @endforeach

                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection