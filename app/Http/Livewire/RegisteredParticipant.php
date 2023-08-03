<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Participant;

class RegisteredParticipant extends Component
{
    public function render()
    {
        return view('livewire.registered-participant', [
            'participants' => Participant::orderBy('full_name1')->paginate(10)
        ]);
    }
}
