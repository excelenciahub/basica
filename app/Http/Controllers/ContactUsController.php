<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Admin\Entities\ContactUs;
use App\Notifications\ContactUsNotification;
use App\User;

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
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        $data = $request->all();
        $contact_us = ContactUs::create($data);
        $user = User::find(1);
        $user->email = ADMIN_EMAIL;
        $user->notify(new ContactUsNotification($contact_us));
        return redirect()->back()->with('success', 'Thank you for contact us. We will get back to you shortly.');
    }
}
