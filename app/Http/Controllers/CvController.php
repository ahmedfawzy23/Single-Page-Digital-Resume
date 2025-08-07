<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CvController extends Controller
{
    public function show()
    {
        if(!Storage::disk('public')->exists('cv.json')) {
            abort(404, 'CV Not Found');
        }
        $json = Storage::disk('public')->get('cv.json');
        $data = json_decode($json, true);
        return view('cv', compact('data'));
    }
}
