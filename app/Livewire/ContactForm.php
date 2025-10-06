<?php

namespace App\Livewire;

use App\Enums\Departments;
use App\Mail\ContactUsMail;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
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

    protected $submissionInterval = 10800; // 3 hours in seconds

    protected $rules = [
        'fullName' => 'required|string|max:255',
        'document' => 'required|string|max:20',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:15',
        'department' => 'required|string|max:100',
        'content' => 'required|string|max:5000',
    ];

    protected $messages = [
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
    ];

    protected $cacheKey;

    public function mount()
    {
        $ip = request()->ip();
        $this->cacheKey = 'submit_limit_' . $ip;
        $this->formDisabled = Cache::has($this->cacheKey);
    }

    public function send()
    {
        $this->validate();

        try {
            $this->rateLimit(5);
        } catch (\DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException $e) {
            $this->addError('rateLimit', 'Demasiados intentos. Por favor, inténtelo de nuevo más tarde.');
            return;
        }

        $data = [
            'fullName' => $this->fullName,
            'document' => $this->document,
            'email' => $this->email,
            'phone' => $this->phone,
            'department' => Departments::tryFrom($this->department)?->label(),
            'content' => $this->content,
        ];

        try {
            Mail::to('leddinlozada@gmail.com')->send(new ContactUsMail($data)); // atencionciudadano.lecheria@gmail.com
        } catch (\Exception $e) {
            $this->addError('conectionError', 'Error al enviar el correo. Por favor, inténtelo de nuevo más tarde.');
            return;
        }

        Cache::put($this->cacheKey, true, $this->submissionInterval);
        $this->formDisabled = true;
    }

    public function render()
    {
        return view('livewire.contact-form', [
            'departmentsOptions' => Departments::cases(),
        ]);
    }
}
