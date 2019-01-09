@extends('frontend.master')

@section('title', 'Cuốn sách yêu thích')

@section('header')
    
@endsection

@section('content')
<div class="book bg-skew bg-skew-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Cuốn sách bạn đã thích</h2>
            </div>
            
            @include('frontend.partials.list-book')
            
        </div>
    </div>
</div>
@endsection

@section('footer')
    
@endsection
