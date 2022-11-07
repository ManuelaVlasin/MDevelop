<?php

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

Route::get('/lessons', function (){
    return view('pages.services.lessons');
});

Route::get('/lesson_details/{id}', function (){
    return view('pages.services.lesson_details');
});

Route::get('lesson/{lessonId}/details', [\App\Http\Livewire\Pages\LessonDetailsPage::class, '__invoke'])->name('lesson.details');
