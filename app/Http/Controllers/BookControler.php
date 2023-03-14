<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookControler extends Controller
{
    public function index(){

        $books = Book::with(['author', 'category'])->latest();
        if(request('search')){
            $books->where('bookName', 'like', '%' . request('search') . '%')
            ->orWhere('author', 'like', '%' . request('search') . '%');
        }
         
        return view('index', [
            "title" => "Home",
            // "books" => Book::->all()
            "books" => $books->get()
        ]);
    }
    
}
