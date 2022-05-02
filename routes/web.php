<?php

use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\Certifications\Certifications;
use App\Http\Livewire\Coaching\Coaching;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\Home\HomeComponent;
use App\Http\Livewire\Services\FreeCounselling;
use App\Http\Livewire\StudyAbroad\StudyInUsa;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeComponent::class)->name('home');
Route::get('/about', AboutComponent::class)->name('about');
Route::get('/coaching', Coaching::class)->name('coaching');
Route::get('/certifications', Certifications::class)->name('certifications');
Route::get('/contact', ContactComponent::class)->name('contact');

// services Routes
Route::get('/services/free-counselling', FreeCounselling::class)->name('services.free-counselling');

//Study Abroad Routes
Route::get('/study-abroad/study-in-usa', StudyInUsa::class)->name('study-abroad.usa');
