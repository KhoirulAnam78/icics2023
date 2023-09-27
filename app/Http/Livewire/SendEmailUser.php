<?php

namespace App\Http\Livewire;

use App\Mail\FreeMail;
use Livewire\Component;
use App\Models\Participant;
use Livewire\WithFileUploads;
use App\Models\UploadAbstract;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class SendEmailUser extends Component
{
    public $sendTo,$email,$file,$receiver=[], $subject;
    use WithFileUploads;

    public function sendEmail(){
        if($this->sendTo=='all-registered'){
            $data = DB::table('participants as a')
            ->leftjoin('users as b','b.id','a.user_id')
            ->where('b.email_verified_at','!=',null)
            ->select('b.email')->get();
            foreach ($data as $value) {
                array_push($this->receiver,$value->email);
            }
        }elseif($this->sendTo == 'not-yet-paid'){
            $data = UploadAbstract::doesnthave('payments')
                    ->join('participants','participants.id','upload_abstracts.participant_id')
                    ->join('users','users.id','participants.user_id')
                    ->select('users.email')
                    ->get();
            foreach ($data as $value) {
                array_push($this->receiver,$value->email);
            }
        }elseif($this->sendTo == 'have-paid'){
            $data = UploadAbstract::has('payments')
                    ->join('participants','participants.id','upload_abstracts.participant_id')
                    ->join('users','users.id','participants.user_id')
                    ->select('users.email')
                    ->get();
            foreach ($data as $value) {
                array_push($this->receiver,$value->email);
            }
        }else{
            array_push($this->receiver,$this->sendTo);
        }

        $attach = [];
        if($this->file){
            $path = Storage::put('email/'.$this->file->getClientOriginalName(),$this->file);
            // $path = $this->file->store('/home/icics2023/public_html/uploads/email');
            // dd($path);
            $attach = ['/home/icics2023/public_html/uploads/'.$path];
        }

        foreach ($this->receiver as $r) {
            Mail::to($r)->send(new FreeMail($this->subject,$this->email,$attach));
        }

        
        session()->flash('message', 'Email sent!');
    }
    public function render()
    {
        return view('livewire.send-email-user',[
            'participant' => DB::table('participants as a')
                            ->leftjoin('users as b','b.id','a.user_id')
                            ->where('b.email_verified_at','!=',null)
                            ->select('b.email')->get()
        ]);
    }
}
