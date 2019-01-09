@extends('frontend.master')

@section('title', 'Login')

@section('header')
    
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="image-book">
                <h1>Đăng nhập</h1>
            </div>
        </div>
    </div>
</div>
<div class="book bg-skew bg-skew-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('login') }}" method="POST" role="form">
                    @csrf
                    
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input name="email" type="text" class="form-control" value="{{ old('email') }}" autofocus placeholder="anv@gmail.com">
                        @if ($errors->has('email'))
                            <p class="error-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">Mật khẩu:</label>
                        <input name="password" type="password" class="form-control" required>
                        @if ($errors->has('password'))
                            <p class="error-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </p>
                        @endif
                    </div>
                
                    <button type="submit" class="btn btn-primary">Đăng nhập</button>
                    <a href="{{ route('password.request') }}">Quên mật khẩu</a>
                </form>
                
            </div>

            <div class="col-md-6">
                <div class="page-right">
                    <a class="btn btn-pill btn-primary" href="{{ route('register') }}" role="button">Tạo tài khoản</a>
                    <div class="term">
                        <p>Luôn miễn phí và sẽ mãi là như vậy.</p>
                        <p>Khi bạn đăng ký thành viên tại LMS đồng nghĩa bạn phải tuân theo các quy định tại website.
                        <p><a href="#">Quy định tại LMS</a></p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection

@section('footer')
    
@endsection
