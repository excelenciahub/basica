<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Admin\Entities\Category;
use Modules\Admin\Entities\Product;
use Storage;

class ProductController extends BaseController
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $view['records'] = Product::get();
        $view['categories'] = Category::pluck('name', 'id')->toArray();
        return view('admin::product.index')->with($view);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|unique:products,category_id,'.$request->category_id,
            'image' => 'required|image',
            'detail' => 'required',
            'title' => 'required',
            'status' => 'required|in:'.implode(',', status()),
        ]);
        $data = $request->all();
        if($request->file('image')){
            $image = $request->file('image');
            $name = time().'-'.$image->getClientOriginalName();
            $image->storeAs(PRODUCT_STORAGE_PATH, $name);
            $data['image'] = $name;
        }
        Product::create($data);
        $response = ['message'=>'store'];
        return admin_success_response($response);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $data['record'] = Product::find($id);
        $data['categories'] = Category::pluck('name', 'id')->toArray();
        return view('admin::product.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|unique:products,name,'.$id.',id,category_id,'.$request->category_id,
            'image' => 'nullable|image',
            'detail' => 'required',
            'title' => 'required',
            'status' => 'required|in:'.implode(',', status()),
        ]);
        $data = $request->all();
        $product = Product::find($id);
        if($request->file('image')){
            $image = $request->file('image');
            $name = time().'-'.$image->getClientOriginalName();
            $image->storeAs(PRODUCT_STORAGE_PATH, $name);
            $data['image'] = $name;
            if($product->image!='' && Storage::exists(PRODUCT_STORAGE_PATH.$product->image)){
                Storage::delete(PRODUCT_STORAGE_PATH.$product->image);
            }
        }
        $product->update($data);
        $response = ['message'=>'update'];
        return admin_success_response($response);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if($product->image!='' && Storage::exists(PRODUCT_STORAGE_PATH.$product->image)){
            Storage::delete(PRODUCT_STORAGE_PATH.$product->image);
        }
        $product->delete();
        $response = ['message'=>'destroy'];
        return admin_success_response($response);
    }
}
