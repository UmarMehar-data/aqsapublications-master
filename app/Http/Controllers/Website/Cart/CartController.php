<?php

namespace App\Http\Controllers\Website\Cart;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnSelf;

class CartController extends Controller
{

    /**  add to Cart function **/

    public function addTOCart(Request $request)
    {

        $book_id = $request->input('bookID');
        $book_qty = $request->input('bookQTY');
        $book_price = $request->input('bookPrice');

        if(Auth::check()){
            // checking book exists in our database or not
            $bookCheck = Book::where('id',$book_id)->exists();
            if($bookCheck){
                // checking booking already added to cart or not
                if(Cart::where('book_id',$book_id)->where('user_id',Auth::id())->exists()){
                    return response()->json(['success'   => true, 'message'   =>'Already Added To Cart!', 'response' => [] ]);
                }
                else{
                    // Add to cart System
                    $cartItem = new Cart();
                    $cartItem->user_id = Auth::user()->id;
                    $cartItem->book_id = $book_id;
                    $cartItem->book_qty = $book_qty;
                    $cartItem->book_price = $book_price;
                    $cartItem->save();
                    return response()->json(['success'   => true, 'message'   =>'Added To Cart!', 'response' => [] ]);
                }


            }
        }
        else{
            return response()->json(['success'   => true, 'message'   => 'Login To Continue!', 'response' => [] ]);
        }
    }



    /**  Cart Item Listing **/
    public function cartItem()
    {
        $carts = Cart::with('book')->where('user_id',Auth::id())->get();
        return view('website.shoping.cart',get_defined_vars());
    }






    /**  Delete Item from Cart  **/

    public function destroy(Request $request)
    {
        $cartBookID = $request->all();
        Cart::destroy($cartBookID);

        return response()->json(['success'   => true, 'message'   =>'Book Deleted successfully!', 'response' => [] ]);

    }


    /**    Update the cart Items  Qty **/
    public function updateCart(Request $request)
    {
        $id = $request->input('id');
        $book_id = $request->input('cartBookID');
        $book_qty = $request->input('bookQty');


        if(Auth::check()){
            if(Cart::where('book_id',$book_id)->where('user_id',Auth::id())->exists()){
                $cart = Cart::where('id',$id)->where('book_id',$book_id)->where('user_id',Auth::id())->first();
                $cart->book_qty = $book_qty;
                $cart->update();
                return response()->json(['success'   => true, 'message'   =>'Cart Updated Successfully!', 'response' => [] ]);
            }
        }
    }
}
