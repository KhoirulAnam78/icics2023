<?php

namespace App\Http\Livewire;

use App\Mail\SendMail;
use Livewire\Component;
use App\Models\Participant;
use App\Models\Payment;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PaymentValidation extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $full_name1, $email, $participant_type, $payment_for, $fee, $discount, $fee_after_discount, $total_bill, $invoice, $paymentValidate;
    public $search = '', $search2 = '';

    public function empty()
    {
        $this->full_name1 = null;
        $this->invoice = null;
        $this->paymentValidate = null;
        $this->email = null;
        $this->participant_type = null;
        $this->payment_for = null;
        $this->fee = null;
        $this->discount = null;
        $this->fee_after_discount = null;
        $this->total_bill = null;
        $this->invoice = null;
    }
    public function showValidate($id)
    {
        $this->paymentValidate = $id;
        $payment = Payment::find($id);
        $this->full_name1 = $payment->participant->full_name1;
        $this->email = $payment->participant->user->email;
        $this->participant_type = $payment->participant->participant_type;
        $this->payment_for = 'participant';
        if ($payment->upload_abstract_id !== null) {
            $this->payment_for = $payment->uploadAbstract->title;
        }
        $this->fee = $payment->fee;
        $this->discount = $payment->discount;
        $this->fee_after_discount = $payment->fee_after_discount;
        $this->total_bill = $payment->total_bill;
        $this->invoice = $payment->invoice;
        $this->dispatchBrowserEvent('show-modal');
    }

    public function valid()
    {
        $participant_id = Payment::find($this->paymentValidate)->participant_id;
        $email = Participant::find($participant_id)->user->email;
        Payment::where('id', $this->paymentValidate)->update([
            'validation' => 'valid',
            'validated_by' => Auth::user()->email
        ]);
        Mail::to($email)->send(new SendMail('Payment Validation', 'Yout payment is validated!'));
        $this->empty();
        session()->flash('message', 'Validation succesfully !');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function invalid()
    {
        $participant_id = Payment::find($this->paymentValidate)->participant_id;
        $email = Participant::find($participant_id)->user->email;
        Payment::where('id', $this->paymentValidate)->update([
            'validation' => 'invalid',
            'validated_by' => Auth::user()->email
        ]);
        Mail::to($email)->send(new SendMail('Payment Validation', 'Yout payment is invalid!'));
        $this->empty();
        session()->flash('message', 'Validation succesfully !');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        return view('livewire.payment-validation', [
            'payments' => Payment::where('validation', 'like', '%' . $this->search)->orderBy('created_at')->whereHas('participant', function ($query) {
                $query->where('full_name1', 'like', '%' . $this->search2 . '%');
            })->paginate(10)
        ]);
    }
}
