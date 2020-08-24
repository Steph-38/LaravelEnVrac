<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// use App\Http\Requests\ImagesRequest;

class PhotoController extends Controller
{
    public function create()
    {
        return view('photo');
    }
 
    public function store(Request $request)
    {
        $url = ($request);
        Storage::url($url);
        // Storage::disk('local')->put('file.php', $url);
        // $request->image->store(config('images.path'), 'public');
         
        return view('photo_ok');
    }
}
