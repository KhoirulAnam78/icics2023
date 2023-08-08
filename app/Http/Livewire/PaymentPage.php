<?php

namespace App\Http\Livewire;

use App\Models\Payment;
use App\Models\UploadAbstract;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class PaymentPage extends Component
{
    public $fee, $discount, $total_bill, $amount, $invoice;
    public $add = false, $edit = false, $payment_edit_id, $abstract_delete_id;
    public $abstract, $upload_abstract_id;

    use WithFileUploads;
    public function rules()
    {
        return
            [
                'total_bill' => 'required',
                'amount' => 'required',
                'invoice' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ];
    }

    //Custom Errror messages for validation
    protected $messages = [
        'total_bill.required' => 'Total bill is required !',
        'amount.required' => 'Amount is required !',
        'invoice.required' => 'Invoice is required !',
    ];

    //Reatime Validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function add()
    {
        if (Auth::user()->participant->participant_type !== 'participant') {
            $this->abstract = UploadAbstract::where('participant_id', Auth::user()->participant->id)->get();
        }
        if (Auth::user()->participant->hki_status == 'valid') {
            if (Auth::user()->participant->participant_type == 'participant') {
                if (Auth::user()->participant->attendance == 'offline') {
                    $this->fee = 350000;
                    $this->discount = $this->fee * 0.25;
                    $this->amount = $this->fee - $this->discount;
                } else {
                    $this->fee = 100000;
                    $this->discount = $this->fee * 0.25;
                    $this->amount = $this->fee - $this->discount;
                }
            } elseif (Auth::user()->participant->participant_type == 'professional presenter') {
                if (Auth::user()->participant->attendance == 'offline') {
                    $this->fee = 750000;
                    $this->discount = $this->fee * 0.25;
                    $this->amount = $this->fee - $this->discount;
                } else {
                    $this->fee = 250000;
                    $this->discount = $this->fee * 0.25;
                    $this->amount = $this->fee - $this->discount;
                }
            } else {
                if (Auth::user()->participant->attendance == 'offline') {
                    $this->fee = 550000;
                    $this->discount = $this->fee * 0.25;
                    $this->amount = $this->fee - $this->discount;
                } else {
                    $this->fee = 150000;
                    $this->discount = $this->fee * 0.25;
                    $this->amount = $this->fee - $this->discount;
                }
            }
        } else {
            if (Auth::user()->participant->participant_type == 'participant') {
                if (Auth::user()->participant->attendance == 'offline') {
                    $this->fee = 'IDR 350K / $24 USD';
                    $this->discount = 0;
                    $this->amount =  $this->fee;
                } else {
                    $this->fee = 'IDR 100K / $7 USD';
                    $this->discount = 0;
                    $this->amount =  $this->fee;
                }
            } elseif (Auth::user()->participant->participant_type == 'professional presenter') {
                if (Auth::user()->participant->attendance == 'offline') {
                    $this->fee = 'IDR 750K / $50 USD';
                    $this->discount = 0;
                    $this->amount =  $this->fee;
                } else {
                    $this->fee = 'IDR 250K / $17 USD';
                    $this->discount = 0;
                    $this->amount =  $this->fee;
                }
            } else {
                if (Auth::user()->participant->attendance == 'offline') {
                    $this->fee = 'IDR 550K / $37 USD';
                    $this->discount = 0;
                    $this->amount =  $this->fee;
                } else {
                    $this->fee = 'IDR 150K / $10 USD';
                    $this->discount = 0;
                    $this->amount =  $this->fee;
                }
            }
        }

        $this->add = true;
        $this->dispatchBrowserEvent('to-top');
        $this->resetErrorBag();
        $this->resetValidation();
    }


    public function empty()
    {
        $this->payment_edit_id = null;
        $this->fee = null;
        $this->discount = null;
        $this->total_bill = null;
        $this->amount = null;
        $this->invoice = null;
        $this->edit = false;
    }

    // public function editAbstract($id)
    // {
    //     $abstract = UploadAbstract::find($id);
    //     $this->payment_edit_id = $id;
    //     $this->total_bill = $abstract->total_bill;
    //     $this->amount = $abstract->amount;
    //     $this->invoice = $abstract->invoice;
    //     $this->edit = true;
    // }

    // public function update()
    // {
    //     $this->validate();
    //     Payment::where('id', $this->payment_edit_id)->update([
    //         'total_bill' => $this->total_bill,
    //         'invoice' => $this->invoice,
    //     ]);

    //     session()->flash('message', 'Edit abstract was successful !');
    //     $this->empty();
    //     $this->cancel();
    // }

    public function cancel()
    {
        $this->add = false;
        $this->edit = false;
        $this->resetErrorBag();
        $this->resetValidation();
        $this->dispatchBrowserEvent('to-top');
    }

    public function save()
    {
        $this->validate();
        Payment::create([
            'total_bill' => $this->total_bill,
            'invoice' => $this->invoice,
            'validation' => 'not yet validated',
            'participant_id' => Auth::user()->participant->id
        ]);

        session()->flash('message', 'Add payment was successful !');
        $this->cancel();
        $this->empty();
    }



    public function render()
    {
        return view('livewire.payment-page', [
            'payments' => Payment::where('participant_id', Auth::user()->participant->id)->latest()->get()
        ]);
    }
}
