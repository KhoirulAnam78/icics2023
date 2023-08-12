<?php

namespace App\Http\Livewire;

use App\Mail\SendMail;
use Livewire\Component;
use PDF;
use Livewire\WithPagination;
use App\Models\UploadAbstract;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ReviewAbstract extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $review = false;
    public $topic, $type, $title, $authors, $institutions, $abstract, $keywords, $presenter;
    public $search = '', $search2, $abstract_review;

    //LOA
    public $full_name, $institution, $abstractTitle, $loa;
    //Invoice
    public $email, $fee, $participant_type;

    public function empty()
    {
        $this->dispatchBrowserEvent('close-modal');
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

    public function cancel()
    {
        $this->review = false;
    }

    public function showReview($id)
    {
        $this->review = true;
        $this->abstract_review = $id;
        $abstract = UploadAbstract::find($id);
        $this->topic = $abstract->topic;
        $this->type = $abstract->type;
        $this->title = $abstract->title;
        $this->keywords = $abstract->keywords;
        $this->authors = $abstract->authors;
        $this->abstract = $abstract->abstract;
        $this->loa = $abstract->loa;
        $this->institutions = $abstract->institutions;
        $this->presenter = $abstract->presenter;
    }

    public function showValidate()
    {
        $participant = UploadAbstract::find($this->abstract_review)->participant;
        if ($participant->hki_status == 'valid') {
            if ($participant->participant_type == 'participant') {
                if ($participant->attendance == 'offline') {
                    $harga = 350000;
                    $discount = $harga * 0.25;
                    $this->fee = 'IDR ' . $harga - $discount;
                } else {
                    $harga = 100000;
                    $discount = $harga * 0.25;
                    $this->fee = 'IDR ' . $harga - $discount;
                }
            } elseif ($participant->participant_type == 'professional presenter') {
                if ($participant->attendance == 'offline') {
                    $harga = 750000;
                    $discount = $harga * 0.25;
                    $this->fee = 'IDR ' . $harga - $discount;
                } else {
                    $harga = 250000;
                    $discount = $harga * 0.25;
                    $this->fee = 'IDR ' . $harga - $discount;
                }
            } else {
                if ($participant->attendance == 'offline') {
                    $harga = 550000;
                    $discount = $harga * 0.25;
                    $this->fee = 'IDR ' . $harga - $discount;
                } else {
                    $harga = 150000;
                    $discount = $harga * 0.25;
                    $this->fee = 'IDR ' . $harga - $discount;
                }
            }
        } else {
            if ($participant->participant_type == 'participant') {
                if ($participant->attendance == 'offline') {
                    $this->fee = 'IDR 350.000 / $24 USD';
                } else {
                    $this->fee = 'IDR 100.000 / $7 USD';
                }
            } elseif ($participant->participant_type == 'professional presenter') {
                if ($participant->attendance == 'offline') {
                    $this->fee = 'IDR 750.000 / $50 USD';
                } else {
                    $this->fee = 'IDR 250.000 / $17 USD';
                }
            } else {
                if ($participant->attendance == 'offline') {
                    $this->fee = 'IDR 550.000 / $37 USD';
                } else {
                    $this->fee = 'IDR 150.000 / $10 USD';
                }
            }
        }
        $this->full_name = $participant->full_name1;
        $this->institution = $participant->institution;
        $this->abstractTitle = UploadAbstract::find($this->abstract_review)->title;
        $this->email = $participant->user->email;
        $this->participant_type = $participant->participant_type;
        $this->dispatchBrowserEvent('show-modal');
    }

    public function accept()
    {


        $email = UploadAbstract::find($this->abstract_review)->participant->user->email;

        $loa = PDF::loadView('administrator.pdf.loa', [
            'full_name' => $this->full_name,
            'institution' => $this->institution,
            'abstractTitle' => $this->abstractTitle
        ])->setPaper('a4', 'potrait');
        Storage::put('letter-of-acceptance/' . 'LOA-' . $this->full_name . '.pdf', $loa->output());
        $loaPath = 'letter-of-acceptance/' . 'LOA-' . $this->full_name . '.pdf';

        $invoice = PDF::loadView('administrator.pdf.invoice', [
            'full_name' => $this->full_name,
            'fee' => $this->fee,
            'participant_type' => $this->participant_type,
            'email' => $this->email
        ])->setPaper('a4', 'landscape');
        Storage::put('invoice/' . 'Invoice-' . $this->full_name . '.pdf', $invoice->output());
        $invoicePath = 'invoice/' . 'Invoice-' . $this->full_name . '.pdf';

        UploadAbstract::where('id', $this->abstract_review)->update([
            'status' => 'accepted',
            'loa' => $loaPath,
            'invoice' => $invoicePath,
            'reviewed_by' => Auth::user()->email
        ]);

        return redirect('/review-abstract')->with('message', 'Review succefully !');
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
