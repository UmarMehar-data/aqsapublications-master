<?php

namespace App\Http\Controllers\Admin\Books;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Book\StoreRequest;
use App\Models\Book;
use App\Models\BookPrice;
use App\Models\Category;
use App\Models\Meta;
use Illuminate\Http\Request;

class BooksController extends Controller
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
            $booking = Book::orderBy('id', 'DESC')->get();
            /**Getting Response Ready For Databales */
            $data = [];
            foreach($booking as $key => $item){
                $data[] = [
                    'Row_Index_ID' => ++$key,
                    'id' => $item->id,
                    'name' => $item->name,
                    'qty' => $item->qty,
                    'status_html' => $item->status == 'Rejected' ? '<button class="btn btn-danger btn-xs book-status" data-id="'.$item->id.'" >Pending</button>' : '<button class="btn btn-success btn-xs book-status" data-id="'.$item->id.'">Approved</button>',
                    'status' => $item->status,
                    'publish_html' => $item->publish == 'No' ? '<button class="btn btn-danger btn-xs book-publish-status" data-id="'.$item->id.'" >No</button>' : '<button class="btn btn-success btn-xs book-publish-status" data-id="'.$item->id.'">Yes</button>',
                    'publish' => $item->publish,
                    'recommended_html' => $item->is_recomend == 0 ? '<button class="btn btn-danger btn-xs book-recommended-status" data-id="'.$item->id.'" >No</button>' : '<button class="btn btn-success btn-xs book-recommended-status" data-id="'.$item->id.'">Yes</button>',
                    'recommended' => $item->is_recomend,
                ];
            }
            return response()->json(['data' => $data]);
        }
        return view('admin.books.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::with('categories')->get();
        return view('admin.books.create', get_defined_vars());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {

        // return $request->all();
        $data = $request->all();
        $data['thumbnail'] = $request->hasFile('thumbnail') ? $request->file('thumbnail')->store('BookImages', 'public') : '';
        $book = Book::create($data);

        // return $book;
        /*Storing Categories against Book*/
        $book->categories()->attach(explode(',', $data['category_id']));

        $meta_names = isset($data['meta_name']) ? explode(',', $data['meta_name']) : [];
        $meta_contents = isset($data['meta_content']) ? explode(',', $data['meta_content']) : [];
        /** Storing Meta details **/
        foreach ($meta_names as $key => $item) {
           $book->metas()->create([
                'name' => $item,
                'content' =>$meta_contents[$key],
           ]);

        }

        $price = new BookPrice();
        $price->book_id = $book->id;
        $price->purchase_price = 0;
        $price->sale_price = 0;
        $price->discount = 0;
        $price->net_price = 0;
        $price->save();


        return response()->json(['success'   => true, 'message'   => 'Book Has been Created Successfully!', 'response' => [] ]);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::with('categories')->get();
        $book = Book::with('metas')->where('id', $id)->first();
        return view('admin.books.edit', get_defined_vars());
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
        $book = Book::where('id', $id)->first();
        $data = $request->all();
        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('BookImages', 'public');
        }else{
            unset($data['thumbnail']);
        }
        $book->update($data);

        /*Updating Categories against Book*/
        $book->categories()->sync(explode(',', $data['category_id']));

        $meta_names = isset($data['meta_name']) ? explode(',', $data['meta_name']) : [];
        $meta_contents = isset($data['meta_content']) ? explode(',', $data['meta_content']) : [];

        foreach ($meta_names as $key => $item) {
            $book->metas()->create([
                 'name' => $item,
                 'content' =>$meta_contents[$key],
            ]);
        }

        return response()->json(['success'   => true, 'message'   => 'Book Has been Updated Successfully!', 'response' => [] ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            Book::destroy($id);
            return response()->json(['success'   => true, 'message'   => 'Book Deleted Successfully!', 'response' => [] ]);
    }




     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function statusUpdate(Request $request)
    {

        $bookStatus = Book::where("id",$request->id)->first();
        if($bookStatus->status == 'Rejected'){
            $bookStatus->status = 'Approved';
        }
        else{
            $bookStatus->status = 'Rejected';
        }
        // return $bookStatus;
        $bookStatus->update();
        return response()->json(['success'   => true, 'message'   => 'Book Status Changed Successfully!', 'response' => [] ]);

    }




     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function statusPublish(Request $request)
    {

        $bookPublish = Book::where("id",$request->id)->first();
        if($bookPublish->publish == 'No'){
            $bookPublish->publish = 'Yes';
        }
        else{
            $bookPublish->publish = 'No';
        }
        // return $bookPublish;
        $bookPublish->update();
        return response()->json(['success'   => true, 'message'   => 'Book Publish Status Changed Successfully!', 'response' => [] ]);

    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function statusRecommend(Request $request)
    {

        $bookrecommend = Book::where("id",$request->id)->first();
        if($bookrecommend->is_recomend == 0){
            $bookrecommend->is_recomend = 1;
        }
        else{
            $bookrecommend->is_recomend = 0;
        }
        // return $bookPublish;
        $bookrecommend->update();
        return response()->json(['success'   => true, 'message'   => 'Book has Been Recommended Successfully!', 'response' => [] ]);

    }
}
