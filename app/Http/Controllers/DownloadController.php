<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function downloadTemplate()
    {
        return response()->download(public_path('uploads/downloads/template ICCS 2023.docx'));
    }
}
