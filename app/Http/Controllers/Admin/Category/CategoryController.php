<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Categories\StoreRequest;
use App\Http\Requests\Admin\Categories\UpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        /**Getting Data For Ajax Request */
        if(request()->ajax()){
            /**Getting Activities Plan Data */
            $categories = Category::with('categories', 'parent')->orderBy('id', 'DESC')->get();
            /**Getting Response Ready For Databales */
            $data = [];
            foreach($categories as $key => $item){

                $parent = '';

                if(isset($item->parent)){
                    $parent = $item->parent->name;

                    if(isset($item->parent->parent)){
                        $parent = $item->parent->parent->name .'/' . $item->parent->name;
                    }

                }else{
                    $parent = '---';
                }


                $data[] = [
                    'Row_Index_ID' => ++$key,
                    'id' => $item->id,
                    'name' => $item->name,
                    'slug' => $item->slug,
                    'parent' => $parent,
                    'parent_id' => $item->parent_id,
                ];
            }
            return response()->json(['data' => $data]);
        }

        // return $categories;
        return view('admin.categories.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Category::where('parent_id',0)->get();
        return view('admin.categories.create',get_defined_vars());
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getParentCategories(){
       $categories = Category::with('categories')->where('parent_id', 0)->get();
       $options = '<option value="0">---select parent--</option>';

       foreach($categories as $item){
           $options .= '<option value="'.$item->id.'">'.$item->name.'</option>';
           foreach($item->categories as $cat){
           $options .= '<option value="'.$cat->id.'">--'.$cat->name.'</option>';
           }
       }
       return $options;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        Category::create($request->all());
        return response()->json(['success'   => true, 'message'   => 'Category Created Successfully!', 'response' => [] ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $category = Category::where('id', $id)->first();
        $category->update($request->all());
        return response()->json(['success'   => true, 'message'   => 'Category Updated Successfully!', 'response' => [] ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return response()->json(['success'   => true, 'message'   => 'Category Deleted Successfully!', 'response' => [] ]);
    }
}
