<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('index');
});

Route::post('/sendmail', [MailController::class, 'send']);

Route::get('/project/{project}', [ProjectController::class, 'show']);
