<?php

namespace App\Livewire;

use App\Mail\CitizenService;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{

    public function send()
    {
        Mail::to('ale.aroutin@gmail.com')->send(new CitizenService());
        dd('correo enviado');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
