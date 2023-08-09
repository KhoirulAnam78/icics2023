<?php

namespace App\Http\Controllers;

use App\Models\UploadAbstract;
use App\Http\Requests\StoreUploadAbstractRequest;
use App\Http\Requests\UpdateUploadAbstractRequest;
use Illuminate\Support\Facades\Mail;

class UploadAbstractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function review()
    {
        $this->authorize('administrator');
        return view('administrator.review-abstract', [
            'title' => 'Review Abstract'
        ]);
    }
}
