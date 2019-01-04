@extends('frontend.master')

@section('title', 'Register')

@section('header')
    
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="image-book">
                <h1>Đăng kí thành viên</h1>
            </div>
        </div>
    </div>
</div>
<!-- List Book -->
<div class="book bg-skew bg-skew-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('register') }}" method="POST" role="form">
                    @csrf

                    <div class="form-group">
                        <label for="">Tên bạn:</label>
                        <input name="name" type="text" class="form-control" id="" placeholder="Nguyễn Văn A" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                            <p class="error-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">Email:</label>
                        <input name="email" type="email" class="form-control" id=""  value="{{ old('email') }}" placeholder="anv@gmail.com">
                        @if ($errors->has('email'))
                            <p class="error-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">Mật khẩu:</label>
                        <input name="password" type="password" class="form-control" id="">
                        @if ($errors->has('password'))
                            <p class="error-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">Nhập lại khẩu:</label>
                        <input name="password_confirmation" type="password" class="form-control" id="">
                    </div>
                
                    <button type="submit" class="btn btn-primary">Đăng kí</button>
                </form>
                
            </div>

            <div class="col-md-6">
                <a class="btn btn-pill btn-primary" href="{{ route('login') }}" role="button">Đăng nhập ngay</a>
                <div class="term">
                    <p>Khi bạn đăng ký thành viên tại LMS đồng nghĩa bạn phải tuân theo các quy định tại website.
                    <p><a href="#">Quy định tại LMS</a></p>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection

@section('footer')
    
@endsection
