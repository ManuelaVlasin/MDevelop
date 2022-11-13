<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Lessons extends Component
{
    public function render()
    {
        return view('livewire.pages.lessons')
            ->extends('app')
            ->section('content');
    }
}
