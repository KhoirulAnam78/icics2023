<?php

namespace App\Http\Livewire;

use App\Mail\SendMail;
use Livewire\Component;
use App\Models\Participant;
use App\Models\UploadAbstract;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ReviewAbstract extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $topic, $type, $title, $authors, $institutions, $abstract, $keywords, $presenter;
    public $search = '', $search2, $abstract_review;

    public function empty()
    {
        $this->topic = null;
        $this->type = null;
        $this->title = null;
        $this->keywords = null;
        $this->authors = null;
        $this->abstract = null;
        $this->institutions = null;
        $this->presenter = null;
        $this->abstract_review = null;
    }
    public function showValidate($id)
    {
        $this->abstract_review = $id;
        $abstract = UploadAbstract::find($id);
        $this->topic = $abstract->topic;
        $this->type = $abstract->type;
        $this->title = $abstract->title;
        $this->keywords = $abstract->keywords;
        $this->authors = $abstract->authors;
        $this->abstract = $abstract->abstract;
        $this->institutions = $abstract->institutions;
        $this->presenter = $abstract->presenter;
        $this->dispatchBrowserEvent('show-modal');
    }

    public function accept()
    {
        $email = UploadAbstract::find($this->abstract_review)->participant->user->email;
        $abstract = UploadAbstract::find($this->abstract_review)->title;
        UploadAbstract::where('id', $this->abstract_review)->update([
            'status' => 'accepted',
            'reviewed_by' => Auth::user()->email
        ]);
        dd($abstract->title);
        Mail::to($email)->send(new SendMail('Reviewed Abstract', 'Dear Author,
        Congratulations, your abstract ' . $abstract . ' has been accepted to be presented at the 11st ICICS 2023 Conference.
        See you at the conference.'));
        $this->empty();
        session()->flash('message', 'Review succesfully !');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function reject()
    {
        $email = UploadAbstract::find($this->abstract_review)->participant->user->email;
        $abstract = UploadAbstract::find($this->abstract_review)->title;
        UploadAbstract::where('id', $this->abstract_review)->update([
            'status' => 'rejected',
            'reviewed_by' => Auth::user()->email
        ]);
        $this->empty();
        Mail::to($email)->send(new SendMail('Reviewed Abstract', "Dear Author,
        Sorry, your article " . $abstract . " has been rejected to be presented at the 11st ICICS 2023 Conference."));
        session()->flash('message', 'Review succesfully !');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        return view('livewire.review-abstract', [
            'abstracts' => UploadAbstract::where('status', 'like', '%' . $this->search)->whereHas('participant', function ($query) {
                $query->where('full_name1', 'like', '%' . $this->search2 . '%');
            })->orderBy('topic')->paginate(10)
        ]);
    }
}
