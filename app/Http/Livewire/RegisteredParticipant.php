<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Participant;
use Livewire\WithPagination;

class RegisteredParticipant extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search2 = '';

    public function render()
    {
        return view('livewire.registered-participant', [
            'participants' => Participant::where('full_name1', 'like', '%' . $this->search2 . '%')->orderBy('full_name1')->paginate(10)
        ]);
    }
}
