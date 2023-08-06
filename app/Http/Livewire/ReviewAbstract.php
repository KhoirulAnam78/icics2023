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
    public $search = '', $abstract_review;

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
        UploadAbstract::where('id', $this->abstract_review)->update([
            'status' => 'accepted',
            'reviewed_by' => Auth::user()->email
        ]);
        Mail::to($email)->send(new SendMail('Reviewed Abstract', 'Dear Author,
        Congratulations, your article has been accepted to be presented at the 2nd ITAPS Conference. Herewith we attach
        your Acceptance Letter. On this note, we would like to confirm whether you want to publish your article in Scopus-
        indexed Proceeding. Please reply to this email with your answer.
        On another note, we have a tour program after the conference which will be held on November 24, 2019. We would like
        you to confirm your attendance by filling this form:
        Bokori Island Tour Form
        See you at the conference.'));
        $this->empty();
        session()->flash('message', 'Review succesfully !');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function reject()
    {
        $email = UploadAbstract::find($this->abstract_review)->participant->user->email;
        UploadAbstract::where('id', $this->abstract_review)->update([
            'status' => 'rejected',
            'reviewed_by' => Auth::user()->email
        ]);
        $this->empty();
        Mail::to($email)->send(new SendMail('Reviewed Abstract', "Dear Author,
        Congratulations, your article has been accepted to be presented at the 2nd ITAPS Conference. Herewith we attach
        your Acceptance Letter. On this note, we would like to confirm whether you want to publish your article in Scopus-
        indexed Proceeding. Please reply to this email with your answer.
        On another note, we have a tour program after the conference which will be held on November 24, 2019. We would like
        you to confirm your attendance by filling this form:
        Bokori Island Tour Form
        See you at the conference."));
        session()->flash('message', 'Review succesfully !');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        return view('livewire.review-abstract', [
            'abstracts' => UploadAbstract::where('status', 'like', '%' . $this->search)->orderBy('topic')->paginate(10)
        ]);
    }
}
