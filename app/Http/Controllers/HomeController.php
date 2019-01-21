<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Book;
use App\Models\Author;

class HomeController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        return view('frontend.index');
    }

    public function showCategory()
    {
        $categories = Category::all();

        return view('frontend.category.list', compact('categories'));
    }

    public function showDetailCategory($slug)
    {
        $id = $this->getIDFromSlug($slug);
        $category = Category::findOrFail($id);
        $books = $category->books()->paginate(config('customs.paginate.number_of_page'));

        return view('frontend.category.detail', compact('category', 'books'));
    }

    public function showListBook()
    {
        $books = Book::paginate(config('customs.paginate.number_of_page'));
        
        return view('frontend.book.list', compact('books'));
    }

    public function showDetailBook($slug)
    {
        $id = $this->getIDFromSlug($slug);
        $book = Book::with('authors', 'categories')->findorFail($id);

        $recommendBooks = Book::with([
            'categories' => function($query) use ($book){
                if(isset($book->categories)){
                    $query->where('categories.id', $book->categories[0]->id);
                }
            },
            'authors'
        ])->inRandomOrder()->get();
        
        return view('frontend.book.detail', compact('book', 'recommendBooks'));
    }

    public function showBookByAuthor($slug)
    {   
        $id = $this->getIDFromSlug($slug);

        $author = Author::findOrFail($id);

        $books = Book::with([
            'authors' => function($query) use ($id){
                $query->where('authors.id', $id);
            }
        ])->paginate(config('customs.paginate.number_of_page'));

        return view('frontend.author.list', compact('author', 'books'));
    }

    public function getIDFromSlug($slug)
    {
        $slug = explode('-', $slug);
        return (int) end($slug);
    }
}
