<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;

class CommonController extends Controller
{
    public function upload(Request $request)
    {
        $storage = Storage::disk('cos');
        $file = $request->file('file');
        $path = $storage->putFile('/image', $file);

        return response()->json([
            'path' => $path,
            'url' => $storage->url($path),
        ]);
    }
}
