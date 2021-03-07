<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Admin\Entities\Category;
use Modules\Admin\Entities\Product;

class CategoryController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $view['categories'] = Category::whereStatus('Enabled')->orderBy('name')->get();
        return view('categories')->with($view);
    }

    public function show($slug)
    {
        $view['category'] = Category::whereStatus('Enabled')->with(['products' => function($q){
            $q->whereStatus('Enabled')->latest();
        }])->where(['slug'=>$slug])->first();
        return view('category')->with($view);
    }
}
