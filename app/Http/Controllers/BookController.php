<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class BookController extends Controller
{
    public function dashboard(): View {
        return view('dashboard');
    }

    public function index(): View {
        $paginate = Book::paginate(30);
        return view('books.index', ['books' => $paginate]);
    }
}
