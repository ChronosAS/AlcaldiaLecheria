<?php

namespace App\Livewire;

use App\Mail\CitizenService;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $fullName;
    public $document;
    public $email;
    public $phone;
    public $department;
    public $request;

    public function send()
    {
        $this->validate([]);
        dd($this->department);

        // Mail::to('ale.aroutin@gmail.com')->send(new CitizenService());
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
