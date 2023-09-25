<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function show(Request $request)
    {
        // $fileMimeType = mime_content_type($request->image->path());
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
            'name' => 'required',
            'color' => 'required', 
            'hobby' => 'required', 
            'double' => 'required|numeric|between:2.5,99.99', // Not required, numeric, and within the specified range
            'image' => 'required|max:2048|mimes:jpeg,png,jpg'
        ]);

        $request->image->storeAs('public/images', $request->image->getClientOriginalName());

        $results = [
            'email' => $request->email,
            'password' => $request->password,
            'name' => $request->name,
            'color' => $request->color,
            'hobby' => $request->hobby,
            'double' => $request->double,
            'image' => $request->image->getClientOriginalName(),
        ];

        return redirect("/result")->with(['results' => $results, 'status' => 'Form Submitted']);
    }

    public function result()
    {
        $results = session()->get('results');
        $status = session()->get('status');
    
        // Pass the data to the "result" view and return it
        return view('result', compact('results', 'status'));
    }
}
