<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function famous(){
        
        return view('famousauthor', [
            "title" => "Famous Author",
            "authors" => Author::all()
        ]);
    }
}
