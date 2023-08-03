<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Participant;
use Livewire\WithPagination;

class RegisteredParticipant extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.registered-participant', [
            'participants' => Participant::orderBy('full_name1')->paginate(10)
        ]);
    }
}
