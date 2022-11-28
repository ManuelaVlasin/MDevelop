<?php

use App\Http\Livewire\Pages\ContactPage\ContactForm;
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

Route::get('/', function () {
    return view('app');
});

Route::get('/home_new', function (){
    return view('home_new');
});

Route::get('/test', function (){
    return view('test');
});

Route::get('lesson/{lessonId}/details', [LessonDetailsPage::class, '__invoke'])->name('lesson.details');
Route::get('lessons', [Lessons::class, '__invoke'])->name('lessons');
Route::get('contact', [ContactForm::class, '__invoke'])->name('contact');
