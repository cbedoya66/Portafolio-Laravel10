<?php

use App\Http\Controllers\ControllerContact;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts/landing');
});
Route::resource('contactos', ControllerContact::class);