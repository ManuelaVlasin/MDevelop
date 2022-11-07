<?php

namespace App\Http\Livewire\Pages;

use App\Models\Lesson;
use Livewire\Component;

class LessonDetailsPage extends Component
{
    public Lesson $lesson;
    public $selectedTab = 'overview';

    public function render()
    {
        return view('livewire.pages.lesson-details-page')
            ->extends('app')
            ->section('content');
    }

    public function mount($lessonId){
        $this->lesson = Lesson::find($lessonId);
    }

    public function selectTab($tabName){
        $this->selectedTab = $tabName;
    }
}
