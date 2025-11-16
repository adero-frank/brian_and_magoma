<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'public.home')->name('home');

Route::view('about', 'public.about')
    ->name('about');

Route::view('practice-areas', 'public.practice-areas')
    ->name('practice-areas');

Route::view('practice-areas/corporate-law', 'public.practice-areas.corporate-law')
    ->name('practice-areas.corporate-law');

Route::view('practice-areas/real-estate-law', 'public.practice-areas.real-estate-law')
    ->name('practice-areas.real-estate-law');

Route::view('practice-areas/family-law', 'public.practice-areas.family-law')
    ->name('practice-areas.family-law');

Route::view('practice-areas/estate-planning', 'public.practice-areas.estate-planning')
    ->name('practice-areas.estate-planning');

Route::view('practice-areas/litigation', 'public.practice-areas.litigation')
    ->name('practice-areas.litigation');

Route::view('practice-areas/employment-law', 'public.practice-areas.employment-law')
    ->name('practice-areas.employment-law');

Route::view('blogs', 'public.blogs')
    ->name('blogs');

Route::view('blogs/understanding-contract-law-kenya', 'public.blogs.understanding-contract-law-kenya')
    ->name('blogs.understanding-contract-law-kenya');

Route::view('blogs/navigating-divorce-process-kenya', 'public.blogs.navigating-divorce-process-kenya')
    ->name('blogs.navigating-divorce-process-kenya');

Route::view('blogs/estate-planning-essentials-kenya', 'public.blogs.estate-planning-essentials-kenya')
    ->name('blogs.estate-planning-essentials-kenya');

Route::view('blogs/employment-rights-kenya-2025', 'public.blogs.employment-rights-kenya-2025')
    ->name('blogs.employment-rights-kenya-2025');

Route::view('blogs/property-registration-process-kenya', 'public.blogs.property-registration-process-kenya')
    ->name('blogs.property-registration-process-kenya');

Route::view('contact', 'public.contact')
    ->name('contact');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
