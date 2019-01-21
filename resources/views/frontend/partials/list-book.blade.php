@forelse ($books as $book)
    <div class="col-md-2">
        <div class="item">
            <a href="{{ route('book.detail', $book->slug.'-'.$book->id) }}">
                <img src="{{ isset($book->image->url) ? asset(config('customs.upload.image_path')) . '/' . $book->image->url : '' }}" alt="{{ $book->name }}">
                <h3>{{ $book->name }}</h3>
            </a>
            <p>Tac gia 1</p>
        </div>
    </div>
@empty
    <div class="col-md-12">
        <p>{{ trans('book.noitem') }}</p>
    </div>
@endforelse

<div class="col-md-12">
    <div class="paginate">
        {{ $books->links() }}
    </div>
</div>
