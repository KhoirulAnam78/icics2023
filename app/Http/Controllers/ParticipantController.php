<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Http\Requests\StoreParticipantRequest;
use App\Http\Requests\UpdateParticipantRequest;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('administrator.registered-participant', [
            'title' => 'Registered Participant',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function validateMember()
    {
        return view('administrator.validate-member', [
            'title' => 'Validation HKI Member'
        ]);
    }
}
