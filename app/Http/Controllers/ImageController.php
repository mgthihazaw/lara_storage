<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $images = Image::orderBy('created_at', 'desc')->get();
        return view('home')->withImages($images);
    }
    public function store(Request $request)
    {

        // $request->validate([
        //     'imagefile' => 'image|mimes:jpeg,bmp,png',
        //     'title' => 'required | string'
        // ]);

        if ($request->hasFile('imagefile')) {
            $image = new Image();
            $image->title = $request->title;
            $image->filename = $this->uploadFile($request);
            $image->save();
            return response()->json(['data' => "Successfully Upload"], 200);
            // return redirect()->back()->with('success', 'Your Image is successfully uploaded');
        }
        return "Your image is Invalid";
    }

    public function uploadFile($request)
    {
        $image = $request->file('imagefile');
        $originalName = $image->getClientOriginalName();
        $extension = $image->getClientOriginalExtension();
        $filename = time() . $extension;
        // $destination = storage_path('app\public');

        // if ($image->move($destination, $filename)) {
        //     return $filename;
        // }

        return $image->storeAs('public', $filename);
        return null;
    }
}