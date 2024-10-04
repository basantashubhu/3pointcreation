<?php

use App\Http\Controllers\Admin;
use App\Models\MenuItem;
use App\Testimonial\Team;
use App\Testimonial\Testimonial;
use Illuminate\Support\Facades\Route;

$menus = [
    ['slug' => 'about-us', 'name' => 'About Us'],
    ['slug' => 'services', 'name' => 'Services'],
    ['slug' => 'work', 'name' => 'Work'],
    ['slug' => 'contact-us', 'name' => 'Contact Us']
];

$testimonials = Testimonial::all();
$teamMembers = Team::all();

Route::view('/', 'welcome', compact('menus', 'testimonials'));
Route::view('about-us', 'about-us', compact('menus', 'teamMembers'));
Route::view('services', 'services', compact('menus'));
Route::view('work', 'work', compact('menus'));
Route::view('team', 'team', compact('menus'));
Route::view('contact-us', 'contact-us', compact('menus'));
