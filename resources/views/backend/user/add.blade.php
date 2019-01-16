@extends('backend.master')

@section('title')
    {{ trans('user.add') }}
@endsection

@section('header')
    
@endsection

@section('body')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{ trans('user.add') }}</h1>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    ...
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" action="{{ route('admin.users.store') }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label>{{ trans('user.name') }}</label>
                                    <input name="name" class="form-control" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <p class="help-block">{{ $errors->first('name') }}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="email" class="form-control" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <p class="help-block">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>{{ trans('user.role') }}</label>
                                    <select name="role" class="form-control">
                                        <option value="admin" {{ (old('role') == 'admin')?'selected':'' }}>Admin</option>
                                        <option value="user" {{ (old('role') == 'user')?'selected':'' }}>User</option>
                                    </select>
                                    @if ($errors->has('role'))
                                        <p class="help-block">{{ $errors->first('role') }}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>{{ trans('user.password') }}</label>
                                    <input name="password" class="form-control">
                                    @if ($errors->has('password'))
                                        <p class="help-block">{{ $errors->first('password') }}</p>
                                    @endif
                                </div>

                                <button class="btn btn-primary" type="submit"><i class="fa fa-plus"></i> {{ trans('action.add') }}</button>
                            </form>
                        </div>
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
    
@endsection