<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Admin\Entities\Category;

class CategoryController extends BaseController
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $view['records'] = Category::get();
        return view('admin::category.index')->with($view);
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
            'name' => 'required|unique:categories',
            'image' => 'required|image',
            'title' => 'required',
            'status' => 'required|in:'.implode(',', status()),
        ]);
        $data = $request->all();
        if($request->file('image')){
            $image = $request->file('image');
            $name = time().'-'.$image->getClientOriginalName();
            $image->storeAs(CATEGORY_STORAGE_PATH, $name);
            $data['image'] = $name;
        }
        Category::create($data);
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
        $data['record'] = Category::find($id);
        return view('admin::category.edit')->with($data);
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
            'name' => 'required|unique:categories,name,'.$id,
            'image' => 'nullable|image',
            'title' => 'required',
            'status' => 'required|in:'.implode(',', status()),
        ]);
        $data = $request->all();
        $category = Category::find($id);
        if($request->file('image')){
            $image = $request->file('image');
            $name = time().'-'.$image->getClientOriginalName();
            $image->storeAs(CATEGORY_STORAGE_PATH, $name);
            $data['image'] = $name;
            if($category->image!='' && Storage::exists(CATEGORY_STORAGE_PATH.$category->image)){
                Storage::delete(CATEGORY_STORAGE_PATH.$category->image);
            }
        }
        $category->update($data);
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
        $category = Category::find($id);
        if($category->image!='' && Storage::exists(CATEGORY_STORAGE_PATH.$category->image)){
            Storage::delete(CATEGORY_STORAGE_PATH.$category->image);
        }
        $category->delete();
        $response = ['message'=>'destroy'];
        return admin_success_response($response);
    }
}
