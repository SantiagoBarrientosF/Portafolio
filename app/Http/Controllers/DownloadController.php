<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function download_cv()
    {
        $filePath = public_path('statics/Santiago Barrientos.pdf');
        return response()->download($filePath);
    }
}
