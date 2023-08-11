<?php

namespace App\Http\Controllers;

use PDF;

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

    public function test()
    {
        $pdf = PDF::loadView('administrator.pdf.loa')->setPaper('a4', 'potrait');
        return $pdf->download('letter-of-acceptance.pdf');
    }

    public function testInvoice()
    {
        $pdf = PDF::loadView('administrator.pdf.invoice')->setPaper('a4', 'potrait');
        return $pdf->download('invoice.pdf');
    }
}
