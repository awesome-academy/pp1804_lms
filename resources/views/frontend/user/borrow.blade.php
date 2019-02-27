@extends('frontend.master')

@section('title')
    {{ trans('borrow.name') }}
@endsection

@section('header')
    
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="image-book">
                <h1>{{ trans('borrow.name') }}</h1>
            </div>
        </div>
    </div>
</div>
<div class="book bg-skew bg-skew-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>{{ trans('book.name') }}: {{ $book->name }}</h3>

                @if (session()->has('error'))
                    <div class="alert alert-danger" role="alert">{{ session()->get('error') }}</div>  
                @endif

                <form action="{{ route('borrow', $book->id) }}" method="POST" role="form">
                    @csrf

                    <div class="form-group">
                        <label for="">{{ trans('borrow.borrow_date') }}:</label>
                        <input name="starttime" type="date" class="form-control" required>
                    </div>
                
                    <div class="form-group">
                        <label for="">{{ trans('borrow.return_date') }}:</label>
                        <input name="endtime" type="date" class="form-control" required>
                    </div>
                
                    <button type="submit" class="btn btn-primary">{{ trans('borrow.name') }}</button>
                </form>
                
                
            </div>           
        </div>
    </div>
</div>
@endsection

@section('footer')
    
@endsection
