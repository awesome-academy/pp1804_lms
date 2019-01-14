
@extends('frontend.master')

@section('title', 'Thư viện')

@section('header')
    
@endsection

@section('content')
<div class="book bg-skew bg-skew-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>SÁCH MỚI CẬP NHẬT</h2>
            </div>
            
            @include('frontend.partials.list-book')
            
        </div>
    </div>
</div>
@endsection

@section('footer')
    
@endsection
