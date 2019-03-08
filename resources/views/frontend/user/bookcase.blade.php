@extends('frontend.master')

@section('title')
    {{ trans('bookcase.name') }}
@endsection

@section('header')
    
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="image-book">
                <h1>{{ trans('bookcase.name') }}</h1>
            </div>
        </div>
    </div>
</div>
<div class="book bg-skew bg-skew-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">{{ session()->get('success') }}</div>
                @endif
                
                <p class="text-warning">{{ trans('bookcase.term_warning') }}</p>               
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>{{ trans('bookcase.ordinal_numbers') }}</th>
                                <th>{{ trans('bookcase.image') }}</th>
                                <th>{{ trans('bookcase.book_name') }}</th>
                                <th>{{ trans('bookcase.borrow_date') }}</th>
                                <th>{{ trans('bookcase.return_date') }}</th>
                                <th>{{ trans('bookcase.status') }}</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($borrows as $borrow)
                                <tr>
                                    <td>#{{ $borrow->id }}</td>
                                    <td><img src="{{ asset("images") }}/{{ $borrow->book->image['url'] }}" style="width: 100px;" alt=""></td>
                                    <td><a href="{{ route('book.detail', $borrow->book->slug.'-'.$borrow->book->id) }}">{{ $borrow->book->name }}</a></td>
                                    <td>{{ date('d-m-Y', strtotime($borrow->start_time)) }}</td>
                                    <td>{{ date('d-m-Y', strtotime($borrow->end_time)) }}</td>
                                    <td>
                                        @if($borrow->status == config('customs.book.status.waiting'))
                                            <p class="text-warning">{{ trans('enum.waiting') }}</p>
                                        @elseif($borrow->status == config('customs.book.status.approved'))
                                            @if(strtotime($borrow->end_time) <= strtotime(now()))
                                                <p class="text-danger">{{ trans('enum.out_of_date') }}</p>
                                            @else
                                                <p class="text-success">{{ trans('enum.approved') }}</p>
                                            @endif
                                        @elseif($borrow->status == config('customs.book.status.cancel'))
                                            <p class="text-info">{{ trans('enum.cancel') }}</p>
                                        @elseif($borrow->status == config('customs.book.status.returned'))
                                            <p class="text-default">{{ trans('enum.returned') }}</p>
                                        @else
                                            <p class="text-default">{{ trans('enum.unknown') }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if($borrow->status == config('customs.book.status.waiting'))
                                            <a href="{{ route('book.cancel', $borrow->id) }}" onclick="return confirm('{{ trans('bookcase.msg.confirm_delete') }}');">{{ trans('bookcase.button.cancel') }}</a>
                                        @elseif($borrow->status == config('customs.book.status.cancel'))
                                            <a href="{{ route('borrow', $borrow->book->id) }}" class="text-warning">{{ trans('bookcase.button.re_borrow') }}</a>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                
                            @endforelse
                        </tbody>
                    </table>
                    {{ $borrows->links() }}
                </div>
                
            </div>           
        </div>
    </div>
</div>
@endsection

@section('footer')
    
@endsection
