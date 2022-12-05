<?php

namespace App\Http\Livewire\Pages\ContactPage;
use App\Models\User;
use App\Notifications\ContactFormNotification;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;
use Illuminate\Notifications\Notifiable;

class ContactForm extends Component
{

    public $contact;

    protected $listeners = [
        'sendEmailNotification'
    ];

    public function sendEmailNotification(){

        $contactFormData = [
            'first_name' => $this->contact['first_name'] ?? '',
            'last_name' => $this->contact['last_name'] ?? '',
            'email' => $this->contact['email'] ?? '',
            'phone' => $this->contact['phone'] ?? '',
            'message' => $this->contact['message'] ?? '',
            'actionButton' => 'Go To MDevelop Website',
            'url' => url('/'),
        ];

        Notification::route('mail', 'manuela.vlasin@gmail.com')->notify(new ContactFormNotification($contactFormData));

        return redirect()->back()->with('message', 'Mesajul tău a fost trimis cu succes!');
    }

    public function render()
    {
        return view('livewire.pages.contact-page.contact-form')
            ->extends('app')
            ->section('content');
    }

}
