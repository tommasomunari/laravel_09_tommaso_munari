<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;

Route::get('/', [FirstController::class, 'homepage'])->name('homepage');

Route::get('/message', [FirstController::class, 'contact'])->name('contactUs');

Route::post('/message/sent', [FirstController::class, 'sent'])->name('messageSent');

Route::get('/person/create', [FirstController::class, 'create'])->name('createPerson');

Route::post('/person/submit', [FirstController::class, 'store'])->name('submitPerson');