<?php

namespace App\Http\Controllers;

use App\Contacts;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        return view('contact');
    }


    public function store(Request $request)
    {
        Contacts::create($request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'comment' => 'required|max:255'
        ]));

        return back();
    }
}
