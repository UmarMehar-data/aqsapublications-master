<?php

namespace App\Http\Controllers\Website\Home;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**  Home Page  **/

    public function index(){
        $carts = Cart::with('book')->where('user_id',Auth::id())->get();
        // return $carts;
        return view('website.home.index',get_defined_vars());
    }

}
