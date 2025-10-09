<?php

namespace Tests\Feature;

use App\Livewire\ContactForm;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Livewire;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    /** @test */
    public function it_queues_the_contact_us_mail()
    {
        Mail::fake();

        Livewire::test(ContactForm::class)
            ->set('fullName', 'Test User')
            ->set('document', '12345678')
            ->set('email', 'test@example.com')
            ->set('phone', '1234567890')
            ->set('department', 'SOME_DEPARTMENT')
            ->set('content', 'Test message')
            ->call('send');

        Mail::assertQueued(ContactUsMail::class);
    }
}