@extends('frontend.master')

@section('title', 'Login')

@section('header')
    
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="image-book">
                <h1>Thông tin tài khoản</h1>
            </div>
        </div>
    </div>
</div>
<div class="book bg-skew bg-skew-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                <p>Họ và tên: {{ Auth::user()->name }}</p>
                <p>Email: {{ Auth::user()->email }}</p>
                <p>
                    <span><a href="">Sửa thông tin</a></span> | 
                    <span><a href="{{ route('changepassword') }}">Đổi mật khẩu</a></span>
                </p>
            </div>          
        </div>
    </div>
</div>
@endsection

@section('footer')
    
@endsection
