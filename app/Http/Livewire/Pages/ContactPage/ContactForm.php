<?php

namespace App\Http\Livewire\Pages\ContactPage;

use Livewire\Component;

class ContactForm extends Component
{
    public function render()
    {
        return view('livewire.pages.contact-page.contact-form')
            ->extends('app')
            ->section('content');
    }
}
