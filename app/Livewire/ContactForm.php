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

        $data = [
            'fullName' => $this->fullName,
            'document' => $this->document,
            'email' => $this->email,
            'phone' => $this->phone,
            'department' => $this->department,
            'content' => $this->content,
        ];

        Mail::to('leddinlozada@gmail.com')->send(new ContactUsMail($data)); // atencionciudadano.lecheria@gmail.com
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
