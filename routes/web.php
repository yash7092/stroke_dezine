<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('index');
});

Route::get('/services', function () {
    return view('index');
});

Route::get('/projects', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('index');
});

Route::post('/sendmail', [MailController::class, 'send']);

Route::get('/branding', [ProjectController::class, 'show'])->defaults('project', 'project-1');
Route::get('/embrodary', [ProjectController::class, 'show'])->defaults('project', 'project-2');
Route::get('/packagedesign', [ProjectController::class, 'show'])->defaults('project', 'project-3');
Route::get('/rastertovector', [ProjectController::class, 'show'])->defaults('project', 'project-4');
