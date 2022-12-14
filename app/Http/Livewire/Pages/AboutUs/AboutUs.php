<?php

namespace App\Http\Livewire\Pages\AboutUs;

use Livewire\Component;

class AboutUs extends Component
{
    public function render()
    {
        return view('livewire.pages.about-us.about-us')
            ->extends('app')
            ->section('content');
    }
}
