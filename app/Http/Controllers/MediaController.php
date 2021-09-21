<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;

class MediaController extends Controller
{
    public function show()
    {
        return view('media.mediaForm');
    }

    public function upload(Request $request)
    {
        $request->validate(
            [
                 'name' => 'required',
                 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]
        );

        $media  = new Media;

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $media->name = $request->name;
        $media->file_path = $request->image;
        $media->save();


        // dd(Media::all());
        //  Store $imageName name in Database from Here

        // TODO: build this feature up

        return back()
        ->with('success','You have successfully uploaded the image.'.' '.$imageName);
    }
}
