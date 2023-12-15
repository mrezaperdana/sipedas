<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FileUploadController extends Controller
{
    public function upload(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file_pengajuan' => 'required|file|mimes:xls,xlsx'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $file = $request->file('file_pengajuan');
        $path = $file->store('excel');
        $path = storage_path('app/' . $path);

        // Use a library like PhpOffice/PhpSpreadsheet to process the Excel file
        // $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($path);

        // Perform any other operations on the spreadsheet here

        return response()->json(['message' => 'File uploaded successfully']);
    }
}
