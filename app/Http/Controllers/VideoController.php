<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Inertia\Inertia;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return Inertia::render('ReviewVideos', [
            'videos' => $videos
        ]);
    }
}
