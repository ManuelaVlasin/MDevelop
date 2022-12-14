<?php

namespace App\Http\Livewire\Pages\HomePage;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.pages.home-page.home')
            ->extends('app')
            ->section('content');
    }
}
