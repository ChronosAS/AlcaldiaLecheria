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
    public $formDisabled = false;
    public $disableSeconds = 60; // seconds

    public function send()
    {
        $this->validate([
            'fullName' => 'required|string|max:255',
            'document' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:15',
            'department' => 'required|string|max:100',
            'content' => 'required|string|max:5000',
        ], [
            'fullName.required' => 'El nombre completo es obligatorio.',
            'fullName.string' => 'El nombre completo debe ser una cadena de texto.',
            'fullName.max' => 'El nombre completo no puede exceder 255 caracteres.',
            'document.required' => 'El documento es obligatorio.',
            'document.string' => 'El documento debe ser una cadena de texto.',
            'document.max' => 'El documento no puede exceder 20 caracteres.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'El correo electrónico debe ser válido.',
            'email.max' => 'El correo electrónico no puede exceder 255 caracteres.',
            'phone.string' => 'El teléfono debe ser una cadena de texto.',
            'phone.max' => 'El teléfono no puede exceder 15 caracteres.',
            'department.required' => 'El departamento es obligatorio.',
            'department.string' => 'El departamento debe ser una cadena de texto.',
            'department.max' => 'El departamento no puede exceder 100 caracteres.',
            'content.required' => 'El contenido es obligatorio.',
            'content.string' => 'El contenido debe ser una cadena de texto.',
            'content.max' => 'El contenido no puede exceder 5000 caracteres.',
        ]);

        try {
            $this->rateLimit(2);
        } catch (\DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException $e) {
            $this->addError('rateLimit', 'Demasiados intentos. Por favor, inténtelo de nuevo más tarde.');

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

        Mail::to('leddinlozada@gmail.com')->send(new ContactUsMail($data));

        $this->formDisabled = true;
        $this->dispatch('start-timer');
    }

    public function enableForm()
    {
        $this->formDisabled = false;
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
