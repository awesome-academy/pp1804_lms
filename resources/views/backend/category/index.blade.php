@extends('backend.master')

@section('title')
    {{ trans('category.category') }}
@endsection

@section('header')
    
@endsection

@section('body')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{ trans('category.category') }}</h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        ...
                        <a href="{{ route('admin.categories.create') }}" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> {{ trans('category.add') }}</a>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ trans('category.name') }}</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($categories as $category)
                                        <tr>
                                            <td>#{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>
                                                <a class="btn btn-warning btn-xs" href="{{ route('admin.categories.edit', $category->id) }}"><i class="fa fa-edit"></i> {{ trans('action.edit') }}</a>
                                                <a class="btn btn-danger btn-xs" href="#" onclick="event.preventDefault();
                                                document.getElementById('delete-form{{ $category->id }}').submit();"><i class="fa fa-remove"></i> {{ trans('action.delete') }}</a>

                                                <form id="delete-form{{ $category->id }}" action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <p>{{ trans('category.empty') }}</p>
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