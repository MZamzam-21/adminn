<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use PDF;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();

        return view('home', compact('user'));
    }
    public function books()
    {
        $user = Auth::user();
        $books = Book::all();

        return view('book', compact('user','books'));
    }
    public function print_books()
    {
        $books = Book::all();

        $pdf = PDF::loadview('print_books', ['books' => $books]);
        return $pdf->download('data_buku.pdf');
    }
}
