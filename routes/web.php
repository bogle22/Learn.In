<?php

use App\Http\Controllers\ContactController;
use App\Models\Gallery;
use App\Models\Program;
use App\Models\TeamMember;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'programs' => Program::latest()->take(3)->get(),
    ]);
})->name('home');

Route::get('/tentang-kami', function () {
    return view('about');
})->name('about');

Route::get('/program', function () {
    return view('programs', [
        'programs' => Program::latest()->get(),
    ]);
})->name('programs');

Route::get('/galeri', function () {
    return view('gallery', [
        'galleries' => Gallery::latest()->get(),
    ]);
})->name('gallery');

Route::get('/tim-kami', function () {
    return view('team', [
        'team' => TeamMember::latest()->get(),
    ]);
})->name('team');

Route::get('/hubungi-kami', function () {
    return view('contact');
})->name('contact');

Route::post('/hubungi-kami', [ContactController::class, 'store'])
    ->name('contact.store');