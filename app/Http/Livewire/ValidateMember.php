<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Participant;
use Livewire\WithPagination;

class ValidateMember extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $full_name1, $hki_id, $memberValidate;

    public function showValidate($id)
    {
        $this->memberValidate = $id;
        $participant = Participant::find('id');
        $this->full_name1 = $participant->full_name1;
        $this->hki_id = $participant->hki_id;
    }
    public function render()
    {
        return view('livewire.validate-member', [
            'participants' => Participant::where('hki_id', '!=', null)->orderBy('full_name1')->paginate(10)
        ]);
    }
}
