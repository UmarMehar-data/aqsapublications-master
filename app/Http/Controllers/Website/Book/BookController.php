<?php

namespace App\Http\Controllers\Website\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function books()
    {
        $books = Book::with(['prices' =>function($query){
            return $query->where('status',1);}])->orderBy('id','DESC')->get();
        // return $books;
        $carts = Cart::with('book')->where('user_id',Auth::id())->get();

        return view('website.books.index',get_defined_vars());
    }

    /**  Book Detail Page  **/
    public function BookDetail($id)
    {
        $book = Book::with(['prices' =>function($query){
            return $query->where('status',1);}])->where('id',$id)->first();
            // return $book;
        $carts = Cart::with('book')->where('user_id',Auth::id())->get();

        return view('website.books.bookDetailPage',get_defined_vars());
    }
}
