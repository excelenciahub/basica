<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Admin\Entities\ContactUs;

class ContactUsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $view = [];
        return view('contact-us')->with($view);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'nullable|email',
            'phone' => 'required',
            'message' => 'required',
        ]);
        $data = $request->all();
        ContactUs::create($data);
        return redirect()->back()->with('success', 'Thank you for contact us. We will get back to you shortly.');
    }
}
