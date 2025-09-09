<?php

namespace App\Http\Controllers\Website\CheckOut;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\ShippingPrice;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class CheckOutController extends Controller
{

    /**  Checkout Page  **/
    public function checkOut()
    {
        $old_carts = Cart::with('book')->where('user_id', Auth::id())->get();
        foreach ($old_carts as  $item) {
            if(!Book::where('id',$item->book_id)->where('qty','>=',$item->book_qty)->exists()){
                $removeItem = Cart::where('user_id',Auth::id())->where('book_id',$item->book_id)->first();
                $removeItem->delete();
            }
        }
        $shippingPrice = ShippingPrice::where('status',1)->first();
        // return $shippingPrice;
        $carts = Cart::with('book')->where('user_id', Auth::id())->get();
        return view('website.shoping.checkout', get_defined_vars());
    }

    /**  Place Order Function  **/
    public function placeOrder(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::id();
        $data['tacking_no'] = 'AqsaPublications'.rand(1111,9999);
        $order = Order::create($data);


        $cartItems = Cart::where('user_id',Auth::id())->get();
        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'book_id' => $item->book_id,
                'qty' => $item->book_qty,
                'price' => $request->input('total_price'),
            ]);
        }



        $cart = Cart::where('user_id',Auth::id())->get();
        Cart::destroy($cart);
        return response()->json(['success'   => true, 'message'   =>'Order Placed Successfully!', 'response' => [] ]);

    }

    /**  Order Slip  **/
    public function orderSlip()
    {
        $carts = Cart::with('book')->where('user_id', Auth::id())->get();
        return view('website.shoping.slip', get_defined_vars());
    }
}
