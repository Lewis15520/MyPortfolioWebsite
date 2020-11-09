<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

Route::get('/', [ViewController::class, 'getIndexView'])->name('home');
Route::get('resume', [ViewController::class, 'getCvView'])->name('cv');
