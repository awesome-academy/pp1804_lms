@extends('backend.master')

@section('title')
    {{ trans('book.book') }}
@endsection

@section('header')
    
@endsection

@section('body')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{ trans('book.book') }}</h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        ...
                        <a href="{{ route('admin.books.create') }}" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> {{ trans('book.add') }}</a>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ trans('book.name') }}</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($books as $book)
                                        <tr>
                                            <td>#{{ $book->id }}</td>
                                            <td>{{ $book->name }}</td>
                                            <td>
                                                <a class="btn btn-warning btn-xs" href="{{ route('admin.books.edit', $book->id) }}"><i class="fa fa-edit"></i> {{ trans('action.edit') }}</a>
                                                <a class="btn btn-danger btn-xs" href="#" onclick="event.preventDefault();
                                                document.getElementById('delete-form{{ $book->id }}').submit();"><i class="fa fa-remove"></i> {{ trans('action.delete') }}</a>

                                                <form id="delete-form{{ $book->id }}" action="{{ route('admin.books.destroy', $book->id) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <p>{{ trans('book.empty') }}</p>
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