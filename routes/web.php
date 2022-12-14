<?php

use App\Http\Livewire\Pages\AboutUs\AboutUs;
use App\Http\Livewire\Pages\ContactPage\ContactForm;
use App\Http\Livewire\Pages\HomePage\Home;
use App\Http\Livewire\Pages\LessonDetailsPage;
use App\Http\Livewire\Pages\Lessons;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/home', function () {
//    return view('app');
//});

//------------------------------------------

Route::get('/home_new', function (){
    return view('home_new');
});

Route::get('/test', function (){
    return view('test');
});

Route::get('/test_slider', function (){
    return view('test_slider');
});

Route::get('/about', function (){
    return view('about');
});

//-----------------------------------------------

Route::get('lesson/{lessonId}/details', [LessonDetailsPage::class, '__invoke'])->name('lesson.details');
Route::get('lessons', [Lessons::class, '__invoke'])->name('lessons');
Route::get('contact', [ContactForm::class, '__invoke'])->name('contact');
Route::get('about-us', [AboutUs::class, '__invoke'])->name('about-us');
Route::get('home', [Home::class, '__invoke'])->name('home');

