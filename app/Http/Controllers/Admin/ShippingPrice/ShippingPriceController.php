<?php

namespace App\Http\Controllers\Admin\ShippingPrice;

use App\Http\Controllers\Controller;
use App\Models\ShippingPrice;
use Illuminate\Http\Request;

class ShippingPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()){
            /**Getting Activities Plan Data */
            $booking = ShippingPrice::orderBy('id', 'DESC')->get();
            /**Getting Response Ready For Databales */
            $data = [];
            foreach($booking as $key => $item){
                $data[] = [
                    'Row_Index_ID' => ++$key,
                    'id' => $item->id,
                    'name' => $item->shipping_price,
                    'status_html' => $item->status == '1' ? '<span class="btn btn-success text-dark btn-xs book-status" data-id="'.$item->id.'" >Active</span>' : '<span class="btn btn-danger btn-xs book-status" data-id="'.$item->id.'">Deactive</span>',
                    'status' => $item->status,
                ];
            }
            return response()->json(['data' => $data]);
        }
        return view('admin.ShippingPrices.index',get_defined_vars());
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shippingPrice = $request->all();
        ShippingPrice::create($shippingPrice);
        return response()->json(['success'   => true, 'message'   => 'Shipping Price has been Added Successfully!', 'response' => [] ]);

    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = ShippingPrice::where('id', $id)->first();
        $category->update($request->all());
        return response()->json(['success'   => true, 'message'   => 'Shipping Price Updated Successfully!', 'response' => [] ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ShippingPrice::destroy($id);
        return response()->json(['success'   => true, 'message'   => 'Shipping Price Deleted Successfully!', 'response' => [] ]);
    }
}
