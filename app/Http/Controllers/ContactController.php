<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }
 
    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'bail|required|between:3,20|alpha',
            'email' => 'bail|required|email',
            'message' => 'bail|required|max:250'
        ]);
 
        return view('confirm');
    }
}