@extends('backend.master')

@section('title')
    {{ trans('book.add') }}
@endsection

@section('header')

@endsection

@section('body')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{ trans('book.add') }}</h1>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    ...
                </div>
                <div class="panel-body">
                    <div class="row">
                        <form role="form" action="{{ route('admin.books.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="col-md-8">
                                <div class="form-group col-md-12">
                                    <label>{{ trans('book.name') }}</label>
                                    <input name="name" class="form-control" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <p class="help-block">{{ $errors->first('name') }}</p>
                                    @endif
                                </div>
    
                                <div class="form-group col-md-6">
                                    <label>{{ trans('book.number_of_page') }}</label>
                                    <input name="number_of_page" class="form-control" value="{{ old('number_of_page') }}">
                                    @if ($errors->has('number_of_page'))
                                        <p class="help-block">{{ $errors->first('number_of_page') }}</p>
                                    @endif
                                </div>
    
                                <div class="form-group col-md-6">
                                    <label>{{ trans('book.quantity') }}</label>
                                    <input name="quantity" class="form-control" value="{{ old('quantity') }}">
                                    @if ($errors->has('quantity'))
                                        <p class="help-block">{{ $errors->first('quantity') }}</p>
                                    @endif
                                </div>
    
                                <div class="form-group col-md-6">
                                    <label>{{ trans('book.publisher') }}</label>
                                    <input name="publisher" class="form-control" value="{{ old('publisher') }}">
                                    @if ($errors->has('publisher'))
                                        <p class="help-block">{{ $errors->first('publisher') }}</p>
                                    @endif
                                </div>
    
                                <div class="form-group col-md-6">
                                    <label>{{ trans('book.publisher') }}</label>
                                    <select name="author" class="form-control" id="sel1">
                                        @foreach ($authors as $author)
                                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('author'))
                                        <p class="help-block">{{ $errors->first('author') }}</p>
                                    @endif
                                </div>
    
                                <div class="form-group col-md-12">
                                    <label>{{ trans('book.description') }}</label>
                                    <textarea name="description" id="mytextarea" class="col-md-12" cols="30" rows="10">{{ old('description') }}</textarea>
                                    @if ($errors->has('description'))
                                        <p class="help-block">{{ $errors->first('description') }}</p>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group col-md-6">
                                    <label for="">Category</label>
                                    @forelse ($categories as $category)
                                        <label class="checkbox">
                                            <input type="checkbox" name="cate[]" value="{{ $category->id }}">{{ $category->name }}
                                        </label>
                                    @empty
                                        <p>Chưa có Category nào, vui lòng thêm một category.</p>
                                    @endforelse
                                </div>

                                <div class="form-group col-md-12">
                                    <label>{{ trans('book.avatar') }}</label>
                                    <p><img src="https://cdn.shopify.com/s/files/1/1030/1879/t/9/assets/no-image.svg?1459663434439316077" alt=""></p>
                                    <input name="avatar" type="file" class="form-control">
                                    @if ($errors->has('avatar'))
                                        <p class="help-block">{{ $errors->first('avatar') }}</p>
                                    @endif
                                </div>
                            </div>

                            <div class="orm-group col-md-12">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-plus"></i> {{ trans('action.add') }}</button>
                            </div>
                        </form>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->

@endsection

@section('footer')
    <script src="{{ asset('bower_components/tinymce/tinymce.min.js') }}"></script>
    <script type="text/javascript">
        tinymce.init({
          selector: '#mytextarea'
        });
    </script>
@endsection