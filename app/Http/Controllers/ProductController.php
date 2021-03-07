<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Admin\Entities\Product;

class ProductController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $view['products'] = Product::whereStatus('Enabled')->whereHas('category', function($q){
            $q->whereStatus('Enabled');
        })->latest()->get();
        return view('products')->with($view);
    }

    public function show($slug)
    {
        $view['product'] = Product::whereStatus('Enabled')->whereHas('category', function($q){
            $q->whereStatus('Enabled');
        })->whereSlug($slug)->first();
        $view['related_products'] = Product::where(['category_id'=>$view['product']->category_id])->where('id', '!=', $view['product']->id)->inRandomOrder()->limit(4)->get();
        return view('product')->with($view);
    }
}
