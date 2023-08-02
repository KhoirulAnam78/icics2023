<?php

namespace App\Http\Livewire;

use App\Models\UploadAbstract;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AbstractForm extends Component
{
    public $topic, $type, $title, $authors, $institutions, $abstract, $keywords, $presenter;
    public $add = false;

    public function mount()
    {
        $this->presenter = Auth::user()->participant->full_name1;
    }
    public function rules()
    {
        return
            [
                'topic' => 'required|in:organic and bio chemistry,analytical and enviromental chemistry,inorganic and material chemistry,physical and computation chemistry,chemical education',
                'type' => 'required',
                'title' => 'required',
                'authors' => 'required',
                'institutions' => 'required',
                'abstract' => 'required',
                'keywords' => 'required',
                'presenter' => 'required',
            ];
    }

    //Custom Errror messages for validation
    protected $messages = [
        'topic.required' => 'topic is required !',
        'topic.in' => 'topic can only contain (Organic and Bio Chemistry, Analytical and Enviromental Chemistry, Inorganic and Material Chemistry, Physical and Computation Chemistry, Chemical Education) !',
        'type.required' => 'Type is required !',
        'title.required' => 'Title is required !',
        'keywords.required' => 'Keywords is required !',
        'authors.required' => 'Authors type is required !',
        'institutions.required' => 'Institutions is required !',
        'abstract.required' => 'Abstract is required !',
        'presenter.required' => 'Presenter is required !',
    ];

    //Reatime Validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function add()
    {
        $this->add = true;
        $this->dispatchBrowserEvent('to-top');
        $this->resetErrorBag();
        $this->resetValidation();
    }

    public function cancel()
    {
        $this->add = false;
        $this->resetErrorBag();
        $this->resetValidation();
        $this->dispatchBrowserEvent('to-top');
    }

    public function save()
    {
        $this->validate();
        UploadAbstract::create([
            'topic' => $this->topic,
            'type' => $this->type,
            'title' => $this->title,
            'authors' => $this->authors,
            'institutions' => $this->institutions,
            'abstract' => $this->abstract,
            'keywords' => $this->keywords,
            'presenter' => $this->presenter,
            'participant_id' => Auth::user()->participant->id,
            'status' => 'not yet reviewed'
        ]);

        $this->cancel();
    }

    public function render()
    {
        return view('livewire.abstract-form', [
            'abstracts' => UploadAbstract::where('participant_id', Auth::user()->participant->id)->latest()->get()
        ]);
    }
}
