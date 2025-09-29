<?php

namespace App\Livewire;

use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use Livewire\Component;

class ContactForm extends Component
{
    use WithRateLimiting;

    public $fullName;
    public $document;
    public $email;
    public $phone;
    public $department;
    public $content;

    public function send()
    {
        //  $this->validate([]);
        try {
            $this->rateLimit(0);
        } catch (\DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException $e) {
            $this->addError('rateLimit', 'Demasiados intentos. Por favor, inténtelo de nuevo más tarde.');
            dd($this->getErrorBag());
            return;
        }
        Mail::to('ale.aroutin@gmail.com')->send(new ContactUsMail()); // atencionciudadano.lecheria@gmail.com
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
