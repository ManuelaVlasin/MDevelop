<?php

namespace App\Http\Livewire\Pages;

use App\Models\Lesson;
use Livewire\Component;
use Livewire\WithPagination;

class Lessons extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $selectedCategories = [];
    public $lowerPrice = 1;
    public $higherPrice = 6000;
    public $textSearch = '';

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

    protected $listeners = [
      'filterLessonByCategory' => 'filterByCategory'
    ];

    public function filterByCategory($categories)
    {
        $this->selectedCategories = $categories;
        $this->resetPage();
    }

    public function getLessons($nrOfItems)
    {
        $lessons = Lesson::all();
        if (count($this->selectedCategories) > 0) {
            $lessons = $lessons->filter(function ($lesson) {
                $categories = json_decode($lesson->category);
                if(count(array_intersect($this->selectedCategories, $categories)) > 0){
                    return $lesson;
                }
            });
        }
        if($this->textSearch !== '')
        {
            $tempLessons = $lessons;
            $lessons = $lessons->toQuery()->where('title', 'LIKE', '%' . $this->textSearch . '%')->get();
            if(count($lessons) === 0)
            {
                $lessons = $tempLessons;
            }
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
