<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BookRequest;
use Illuminate\Support\Str;
use App\Models\Book;
use App\Models\Author;
use App\Models\Image;
use App\Models\Category;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::paginate(config('customs.paginate.number_of_page'));

        return view('backend.book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = Author::all();

        $categories = Category::all();

        return view('backend.book.add',compact('authors', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        $book = Book::create([
            'sku' => rand(10000, 99999).strtotime("now"),
            'name' => $request->name, 
            'slug' => $request->name, 
            'description' => $request->description, 
            'number_of_page' => $request->number_of_page,
            'quantity' => $request->quantity, 
            'publisher' => $request->publisher, 
            'author_id' => $request->author,
        ]);

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $fileName = (string) Str::uuid().'.'.$file->getClientOriginalExtension();
            $file->move(config('customs.upload.image_path'), $fileName);

            $image = new Image(['url' => $fileName]);
            $book->image()->save($image);
        }

        if ($request->has('cate')) {
            $book->categories()->attach($request->cate);
        } else {
            $book->categories()->attach(config('customs.default_cate'));
        }

        return redirect()->route('admin.books.index')
        ->with('success','Product store successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $authors = Author::all();
        $categories = Category::all();
        $listCateOfBook = $book->categories->pluck('id')->toArray();

        return view('backend.book.edit', compact('book', 'authors', 'categories', 'listCateOfBook'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        if ($request->hasFile('avatar')) 
        {
            $file = $request->file('avatar');
            $fileName = (string) Str::uuid().'.'.$file->getClientOriginalExtension();
            $file->move(config('customs.upload.image_path'), $fileName);

            $book->removeImage();
            $image = new Image(['url' => $fileName]);
            $book->image()->delete();
            $book->image()->save($image);
        }

        if ($request->has('cate')) {
            $book->categories()->sync($request->cate);
        } else {
            $book->categories()->attach(config('customs.default_cate'));
        }

        $book->update($request->only('name', 'slug', 'description', 'number_of_page', 'quantity', 'publisher', 'author_id'));

        return redirect()->route('admin.books.index')
        ->with('success','Product update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->categories()->detach();
        $book->removeImage();
        $book->image()->delete();
        $book->delete();

        return redirect()->route('admin.books.index')
        ->with('success','Product deleted successfully');
    }
}
