<?php

namespace App\Http\Controllers\Admin\BookPrice;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BookPrices\StoreRequest;
use App\Models\Book;
use App\Models\BookPrice;
use Illuminate\Http\Request;

class BookPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $books = Book::all();
        if(request()->ajax()){
            /**Getting Activities Plan Data */
            $prices = BookPrice::where('status',1)->get();
            /**Getting Response Ready For Databales */
            $data = [];
            foreach($prices as $key => $item){
                $data[] = [
                    'Row_Index_ID' => ++$key,
                    'id' => $item->id,
                    'name' => $item->book->name,
                    'book_id' => $item->book_id,
                    'purchase_price' => $item->purchase_price,
                    'sale_price' => $item->sale_price,
                    'discount' => $item->discount,
                    'net_price' => $item->net_price,
                    'status_html' => $item->status == '0' ? '<button class="btn btn-danger text-dark btn-xs book-status" data-id="'.$item->id.'" >Deactive</button>' : '<button class="btn btn-success btn-xs book-status text-dark" data-id="'.$item->id.'">Active</button>',
                    'status' => $item->status,
                ];
            }
            return response()->json(['data' => $data]);
        }
        return view('admin.bookPrices.index',get_defined_vars());
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
        // return $request->all();
        $price = BookPrice::where('id', $id)->first();
        // return $price;
        if($price->discount == $request->discount && $price->sale_price == $request->sale_price){
            $price->update($request->all());
            return response()->json(['error'   => true, 'message'   => 'Book Price Updated Successfully!', 'response' => [] ]);

        }else{
            if($price->status == 1 ){
                $price->status = 0;
                $price->update();
                BookPrice::create($request->all());
                return response()->json(['success'   => true, 'message'   => 'Book Price Added Successfully!', 'response' => [] ]);
            }
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
