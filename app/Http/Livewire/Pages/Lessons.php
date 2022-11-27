<?php

namespace App\Http\Livewire\Pages;

use App\Models\Lesson;
use Livewire\Component;
use Livewire\WithPagination;

class Lessons extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $selectedCategory;

    public function render()
    {
        return view('livewire.pages.lessons',
            [
                'lessons' => $this->getLessons(4),
                'lessonCategories' => $this->getCategories(),
            ])
            ->extends('app')
            ->section('content');
    }

    public function filterByCategory($category)
    {
        $this->selectedCategory = $category;
        $this->resetPage();
    }

    public function getLessons($nrOfItems)
    {
        $lessons = Lesson::all();
        if ($this->selectedCategory) {
            $lessons = $lessons->filter(function ($lesson) {
                $categories = json_decode($lesson->category);
                if(in_array($this->selectedCategory, $categories)){
                    return $lesson;
                }
            });
        }
        return $lessons->toQuery()->paginate($nrOfItems);
    }

    public function getCategories()
    {
        $lessons = Lesson::all();
        $categories = [];
        foreach ($lessons as $lesson) {
            foreach (json_decode($lesson->category) as $category) {
                if (!in_array($category, $categories)) {
                    $categories[] = $category;
                }
            }
        }
        return $categories;
    }
}
