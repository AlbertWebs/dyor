<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{

    /**
     * Upload images (with Dropzone)
     */
    public function upload(Request $request)
    {
        $images = $request->file('file');
        $meetupid = $request->meetupid;

        foreach ($images as $index => $image) {
            $path = $image->store('images', 'public');
            Image::create([
                'path' => $path,
                'order' => $index + 1,
            ]);
        }

        return response()->json(['success' => true]);
    }

    /**
     * Display uploaded images
     */
    public function preview()
    {
        $images = Image::orderBy('order', 'asc')->get();

        return response()->json($images);
    }
}
