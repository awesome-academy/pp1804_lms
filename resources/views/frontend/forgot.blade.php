@extends('frontend.master')

@section('title', 'Forgot Password')

@section('header')
    
@endsection

@section('content')
<div class="book bg-skew bg-skew-light">
    <div class="container">
        <div class="row">
            
            <div class="col-md-6">
                <div class="image-book">
                    <h1>Khôi phục mật khẩu</h1>
                </div>

                <form action="" method="POST" role="form">

                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="text" class="form-control" id="" placeholder="anv@gmail.com">
                    </div>
                
                    <button type="submit" class="btn btn-primary">Gửi mã kích hoạt</button>
                    <p>Một đường link đặt mật khẩu mới đã được gửi đến email mà bạn đăng kí, nếu bạn sở hữu email đó bạn sẽ đặt lại được mật khẩu mới cho mình.</p>
                </form>
                
            </div>
            
        </div>
    </div>
</div>
@endsection

@section('footer')
    
@endsection
