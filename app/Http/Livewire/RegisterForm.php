<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RegisterForm extends Component
{
    public $full_name1, $full_name2, $gender, $participant_type, $institution, $address, $phone, $hki_id, $fax, $email, $password, $confirmPassword;

    public function rules()
    {
        return
            [
                'full_name1' => 'required',
                'full_name2' => 'required',
                'gender' => 'required|in:male,female',
                'participant_type' => 'required|in:professional presenter,student presenter,student participant',
                'institution' => 'required',
                'address' => 'required',
                'phone' => 'required|regex:/^([0-9\s\+]*)$/',
                'email' => 'required|unique:users|email:rfc',
                'password' => 'required|min:8',
                'confirmPassword' => 'required|same:password'
            ];
    }

    //Custom Errror messages for validation
    protected $messages = [
        'full_name1.required' => 'Full name without academic title is required !',
        'full_name2.required' => 'Full name with academic title is required !',
        'gender.required' => 'Gender is required !',
        'gender.in' => 'Gender can only contain male or female !',
        'phone.required' => 'Phone number is required !',
        'phone.regex' => 'The phone number must be a number and the + character is allowed !',
        'participant_type.required' => 'Participant type is required !',
        'participant_type.in' => 'Participan can only contain (Professional Presenter, Student Presenter and Student Participant) !',
        'institution.required' => 'Institution is required !',
        'address.required' => 'Address is required !',
        'email.required' => 'Email is required !',
        'email.unique' => 'Email has been registered',
        'email.email' => 'The field must have email format ',
        'password.required' => 'Password is required !',
        'password.min' => 'Password must consist of at least 8 characters',
        'confirmPassword.required' => 'Confirmation password is required!',
        'confirmPassword.same' => 'Incorrect password confirmation !',
    ];

    //Reatime Validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();
    }
    public function render()
    {
        return view('livewire.register-form');
    }
}
