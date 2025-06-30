<?php

use App\Livewire\HomePage;
use App\Livewire\UsersPage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});