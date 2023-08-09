<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function payment()
    {
        if (Auth::user()->role == 'administrator') {
            return abort(403);
        }
        return view('participant.payment', [
            'title' => 'Payment'
        ]);
    }

    public function validation()
    {
        // $this->authorize('administrator');
        return view('administrator.payment-validation', [
            'title' => 'Payment Validation'
        ]);
    }
}
