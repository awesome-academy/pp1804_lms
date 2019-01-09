@extends('frontend.master')

@section('title', 'Danh muc')

@section('header')
    
@endsection

@section('content')
<div class="category bg-skew bg-skew-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>DANH MỤC</h2>
            </div>
            
            @forelse ($categories as $category)
                <div class="col-md-4">
                    <div class="item">
                    <h3><a href="{{ route('category.detail', $category->slug.'-'.$category->id ) }}">{{ $category->name }}</a></h3>
                    </div>
                </div>
            @empty
            @endforelse
            
        </div>
    </div>
</div>
@endsection

@section('footer')
    
@endsection
