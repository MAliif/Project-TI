<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class BookController extends Controller
{
    public function index(): View {
        return view('books.index', ['books' => Book::all()]);
    }
}
