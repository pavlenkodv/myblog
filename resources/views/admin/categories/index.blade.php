@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" xmlns:font-size="http://www.w3.org/1999/xhtml"
         xmlns:color="http://www.w3.org/1999/xhtml" xmlns:background-color="http://www.w3.org/1999/xhtml">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                All Categories
                <small>it all starts here</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="/admin">Admin</a></li>
                <li class="active">Categories</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Categories List</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route('categories.create')}}" class="btn btn-success">Add</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->title}}</td>
                                <td>
                                    <a href="{{route('categories.edit', $category->id)}}" class="fa fa-pencil">
                                    </a>
                                     {{Form::open(['route'=>['categories.destroy', $category->id], 'method'=>'delete'])}}
                                    <button type="submit" :class="delete" onclick="return confirm('are you sure?')" class="fa fa-remove" style="font-size:20px; color:#337ab7; border:0; ; background-color:transparent">
                                    </button>
                                </td>
                                {{Form::close()}}
                            </tr>
                        @endforeach
                        </tbody>
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