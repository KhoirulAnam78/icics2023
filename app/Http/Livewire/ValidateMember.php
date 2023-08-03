<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Participant;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class ValidateMember extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $full_name1, $member_card, $memberValidate;
    public $search = '';

    public function empty()
    {
        $this->full_name1 = null;
        $this->member_card = null;
        $this->memberValidate = null;
    }
    public function showValidate($id)
    {
        $this->memberValidate = $id;
        $participant = Participant::find($id);
        $this->full_name1 = $participant->full_name1;
        $this->member_card = $participant->member_card;
        $this->dispatchBrowserEvent('show-modal');
    }

    public function valid()
    {
        Participant::where('id', $this->memberValidate)->update([
            'hki_status' => 'valid',
            'hki_validated_by' => Auth::user()->email
        ]);
        $this->empty();
        session()->flash('message', 'Validation succesfully !');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function invalid()
    {

        Participant::where('id', $this->memberValidate)->update([
            'hki_status' => 'invalid',
            'hki_validated_by' => Auth::user()->email
        ]);
        $this->empty();

        session()->flash('message', 'Validation succesfully !');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        return view('livewire.validate-member', [
            'participants' => Participant::where('hki_status', 'like', '%' . $this->search)->where('member_card', '!=', null)->orderBy('full_name1')->paginate(10)
        ]);
    }
}
