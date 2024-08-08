<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Login;
use App\Livewire\CreatePost;
use App\Livewire\Todo;
use App\Livewire\Home;
 

Route::get('/', Home::class);

Route::get('/login/{name?}' , Login::class);
Route::get('/create-post' , CreatePost::class);
Route::get('/todo' , Todo::class);
