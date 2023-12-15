<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function downloadFile($filename)
    {
        $pathToFile = storage_path('app/public/' . $filename);
        $headers = ['Content-Type: application/pdf'];

        if (!Storage::disk('public')->exists($filename)) {
            abort(404);
        }

        return response()->download($pathToFile, $filename, $headers);
    }
}
