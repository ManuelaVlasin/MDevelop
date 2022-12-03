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
        $user = User::first();

        $contactFormData = [
            'body' => 'You recived something',
            'message' => 'Test message',
            'url' => url('/'),
            'thankyou' => 'Thank you message'
        ];

//        $user->notify(new ContactFormNotification($contactFormData));
        Notification::route('mail', 'manuela.vlasin@gmail.com')->notify(new ContactFormNotification($contactFormData));
    }

    public function render()
    {
        return view('livewire.pages.contact-page.contact-form')
            ->extends('app')
            ->section('content');
    }

}
