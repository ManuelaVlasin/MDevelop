<?php

namespace App\Http\Livewire\Components\Cards;

use App\Models\Lesson;
use Livewire\Component;

class SimpleCardWithImage extends Component
{
    public Lesson $lesson;

    public function render()
    {
        return view('livewire.components.cards.simple-card-with-image');
    }

    public function mount($lessonId){
        $this->lesson = Lesson::find($lessonId);
    }
}
