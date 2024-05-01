<?php

use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\Counter;
use App\Livewire\Faq;
use App\Livewire\Gallery;
use App\Livewire\Home;
use App\Livewire\Product;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', Home::class)->name('home');
Route::get('/product', Product::class)->name('product');
Route::get('/gallery', Gallery::class)->name('gallery');
Route::get('/about', About::class)->name('about');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/faq', Faq::class)->name('faq');
Route::get('/counter', Counter::class);
