@extends('backend.master')

@section('title')
    {{ trans('author.author') }}
@endsection

@section('header')
    
@endsection

@section('body')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{ trans('author.author') }}</h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        ...
                        <a href="{{ route('admin.authors.create') }}" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> {{ trans('author.add') }}</a>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ trans('author.name') }}</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($authors as $author)
                                        <tr>
                                            <td>#{{ $author->id }}</td>
                                            <td>{{ $author->name }}</td>
                                            <td>
                                                <a class="btn btn-warning btn-xs" href="{{ route('admin.authors.edit', $author->id) }}"><i class="fa fa-edit"></i> {{ trans('action.edit') }}</a>
                                                <a class="btn btn-danger btn-xs" href="#" onclick="event.preventDefault();
                                                document.getElementById('delete-form{{ $author->id }}').submit();"><i class="fa fa-remove"></i> {{ trans('action.delete') }}</a>

                                                <form id="delete-form{{ $author->id }}" action="{{ route('admin.authors.destroy', $author->id) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <p>{{ trans('author.empty') }}</p>
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