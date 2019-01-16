@extends('backend.master')

@section('title')
    {{ trans('user.user') }}
@endsection

@section('header')
    
@endsection

@section('body')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{ trans('user.user') }}</h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        ...
                        <a href="{{ route('admin.users.create') }}" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> {{ trans('user.add') }}</a>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ trans('user.name') }}</th>
                                        <th>Email</th>
                                        <th>{{ trans('user.role') }}</th>
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
                                                <a class="btn btn-warning btn-xs" href="{{ route('admin.users.edit', $user->id) }}"><i class="fa fa-edit"></i> {{ trans('action.edit') }}</a>
                                                
                                                @if (auth()->id() <> $user->id)
                                                    <a class="btn btn-danger btn-xs" href="#" onclick="event.preventDefault();
                                                    document.getElementById('delete-form{{ $user->id }}').submit();"><i class="fa fa-remove"></i> {{ trans('action.delete') }}</a>

                                                    <form id="delete-form{{ $user->id }}" action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <p>{{ trans('user.emptyuser') }}</p>
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