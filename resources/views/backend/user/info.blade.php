@extends('backend.master')

@section('title', 'Users')

@section('header')
    
@endsection

@section('body')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">User Info</h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Kitchen Sink
                        <a href="{{ route('admin.users.create') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New User</a>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($users as $user)
                                        <tr>
                                            <td>#{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->role }}</td>
                                            <td>
                                                <a class="btn btn-warning btn-xs" href="{{ route('admin.users.edit', $user->id) }}"><i class="fa fa-edit"></i> Edit</a>
                                                <a class="btn btn-danger btn-xs" href="#"><i class="fa fa-remove"></i> Delete</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <p>Chua co user nao</p>
                                    @endforelse
                                    
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->

@endsection

@section('footer')
    
@endsection