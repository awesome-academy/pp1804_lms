
@extends('frontend.master')

@section('title')
    {{ $book->name }}
@endsection

@section('header')
    
@endsection

@section('content')
<div class="book bg-skew bg-skew-light">
    <div class="container">
        <div class="row">
            
            <div class="col-md-4">
                <div class="image-book">
                    <img src="{{ isset($book->image->url) ? asset(config('customs.upload.image_path')) . '/' . $book->image->url : '' }}" alt="{{ $book->name }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="detail-book">
                    <h1 class="title">{{ $book->name }}</h1>
                    <p class="author"><a href="{{ route('author.detail', $book->authors['slug'].'-'.$book->author_id) }}">{{ $book->authors['name'] }}</a></p>
                    <p>SKU:  {{ $book->sku }}</p>
                    <p>{{ trans('book.publisher') }}: {{ $book->publisher }}</p>
                    <p>{{ trans('book.number_of_page') }}: {{ $book->number_of_page }} {{ trans('book.page') }}</p>
                    <p>{{ trans('book.quantity') }}: {{ $book->quantity }} {{ trans('book.tome') }}</p>
                    <p>{{ trans('book.category') }}: 
                        @if (isset($book->categories))
                            @foreach($book->categories as $category)
                                <a href="{{ route('category.detail', $category->slug.'-'.$category->id) }}">{{ $category['name'] }}</a>
                            @endforeach
                        @endif
                    </p>
                    
                    <div class="book-button">
                        @if (auth()->check())
                            <a class="btn btn-pill btn-primary" href="{{ route('borrow', $book->id) }}" role="button">{{ trans('book.button.borrow') }}</a>
                        @else
                            <a class="btn btn-pill btn-primary" href="{{ route('login') }}" role="button">{{ trans('book.button.borrow') }}</a>
                        @endif
                
                        <a href="javascript:" class="add-to-wishlist active">
                            <span data-placement="bottom" data-toggle="tooltip" data-title="Thêm Vào Yêu Thích" data-original-title="" title="">
                                <i class="fas fa-heart fa-2x"></i>
                            </span>
                        </a>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</div>

<div class="book-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="description">
                    <h3>Giới Thiệu Sách</h3>
                    <div class="description-detail">
                        {{ $book->description }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- cothebanthich -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Có thể bạn cũng thích</h3>
            </div>

            @foreach ($recommendBooks as $book)
                <div class="col-md-2">
                    <div class="item">
                        <a href="{{ route('book.detail', $book->slug.'-'.$book->id) }}">
                            <img src="{{ isset($book->image->url) ? asset(config('customs.upload.image_path')) . '/' . $book->image->url : '' }}" alt="{{ $book->name }}">
                            <h3>{{ $book->name }}</h3>
                        </a>
                        <p>{{ $book->authors['name'] }}</p>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>

    <!-- comment -->
    <div class="comment">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Nhận xét</h3>
                </div>
                <div class="box-comment">
                    <div class="item">
                        <div class="col-md-2">
                            <div class="avatar">
                                <img src="" alt="">
                                <p>Trà My</p>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="content">
                                <p>Cuốn sách này là tác phẩm đầu tiên của Nguyễn Nhật Ánh mà mình chọn đọc. Cuốn có nội dung chính là tình bạn giữa mèo Gấu và chuột Tí hon, với nội dung phụ là chuyện tình yêu của mèo Gấu với mèo Áo Hoa. Chàng mèo Gấu trong này như một thi sĩ thất tình mà vẫn cố níu giữ chút hi vọng cho chuyện tình của bản thân. :3</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="col-md-2">
                            <div class="avatar">
                                <img src="" alt="">
                                <p>Ngoc Nhi</p>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="content">
                                <p>Cuốn sách này là tác phẩm đầu tiên của Nguyễn Nhật Ánh mà mình chọn đọc. Cuốn có nội dung chính là tình bạn giữa mèo Gấu và chuột Tí hon, với nội dung phụ là chuyện tình yêu của mèo Gấu với mèo Áo Hoa. Chàng mèo Gấu trong này như một thi sĩ thất tình mà vẫn cố níu giữ chút hi vọng cho chuyện tình của bản thân. :3</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <input type="text"/>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-primary">Đăng nhập xét</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
    
@endsection
