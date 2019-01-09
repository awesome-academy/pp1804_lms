@extends('frontend.master')

@section('title', 'Đổi mật khẩu')

@section('header')
    
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="image-book">
                <h1>Đổi mật khẩu</h1>
            </div>
        </div>
    </div>
</div>
<div class="book bg-skew bg-skew-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('changepassword') }}" method="POST" role="form">
                    @csrf

                    <div class="form-group">
                        <label for="">Mật khẩu cũ:</label>
                        <input name="oldPassword" type="password" class="form-control" required>
                        @if ($errors->has('oldPassword') || session('oldPassword'))
                            <p class="error-feedback" role="alert">
                                <strong>{{ $errors->first('oldPassword') }} {{ session('oldPassword') }}</strong>
                            </p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">Mật khẩu mới:</label>
                        <input name="password" type="password" class="form-control" required>
                        @if ($errors->has('password'))
                            <p class="error-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">Nhập lại mật khẩu:</label>
                        <input name="password_confirmation" type="password" class="form-control" required>
                    </div>
                
                    <button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
                </form>
                
            </div>           
        </div>
    </div>
</div>
@endsection

@section('footer')
    
@endsection
