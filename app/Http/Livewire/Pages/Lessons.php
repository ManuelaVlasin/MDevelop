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
    public $selectedPrices = [];
    public $selectedMonths = [];
    public $lowerPrice = 1;
    public $higherPrice = 6000;
    public $textSearch = '';

    public function render()
    {
        return view('livewire.pages.lessons',
            [
                'lessons' => $this->getLessons(4),
                'lessonCategories' => $this->getCategories(),
                'prices' => $this->getPrices(1500),
                'months' => $this->getMonths()
            ])
            ->extends('app')
            ->section('content');
    }

    protected $listeners = [
        'filterLessonByCategory' => 'filterByCategory',
        'filterByPrice',
        'filterByMonth',
    ];

    public function filterByCategory($categories)
    {
        $this->skipRender();
//        $this->selectedCategories = $categories;
//        $this->resetPage();
    }

    public function filterByPrice($prices)
    {
        $this->selectedPrices = $prices;
        $this->resetPage();
    }

    public function filterByMonth($months)
    {
        $this->selectedMonths = $months;
        $this->resetPage();
    }

    public function getLessons($nrOfItems)
    {
        $lessons = Lesson::all();
        if (count($this->selectedCategories) > 0) {
            $lessons = $lessons->filter(function ($lesson) {
                $categories = json_decode($lesson->category);
                if (count(array_intersect($this->selectedCategories, $categories)) > 0) {
                    return $lesson;
                }
            });
        }
        if (count($this->selectedPrices) > 0) {
            $lessons = $lessons->filter(function ($lesson){
                foreach($this->selectedPrices as $priceRange)
                {
                    $range  = explode(' - ', $priceRange);
                    if($lesson->price > floatval($range[0]) && $lesson->price <= floatval($range[1]))
                    {
                        return $lesson;
                    }
                }
            });
        }
        if (count($this->selectedMonths) > 0) {
            $lessons = $lessons->filter(function ($lesson){
                $time = strtotime($lesson->period_start);
                if(in_array(date('F', $time), $this->selectedMonths)){
                    return $lesson;
                }
            });
        }
        if ($this->textSearch !== '') {
            $tempLessons = $lessons;
            $lessons = $lessons->toQuery()->where('title', 'LIKE', '%' . $this->textSearch . '%')->get();
            if (count($lessons) === 0) {
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

    public function getPrices($priceInterval = 1000)
    {
        $lessonsPrices = Lesson::all()->pluck('price');
        $prices = [];
        foreach ($lessonsPrices as $price) {
            if ($price < $priceInterval) {
                $prices[$priceInterval] = '0 - ' . $priceInterval;

            } else {
                $result = ceil($price / $priceInterval) * $priceInterval;
                $prices[ceil($price / $priceInterval) * $priceInterval] = ($result - $priceInterval) . ' - ' . $result;
            }
        }
        return $prices;
    }

    public function getMonths(){
        $lessonsMonths = Lesson::all()->pluck('period_start');
        $months = [];
        foreach ($lessonsMonths as $month)
        {
            $time = strtotime($month);
            $months[intval(date('m', $time))] = date('F', $time);
        }
        return array_unique($months);
    }
}
