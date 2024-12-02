<?php

use App\Http\Controllers\Projects_Controller;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('/', [Projects_Controller::class,'index'])-> name('projects.index');

Route::get('/project/{project}',[Projects_Controller::class,'show'])->name('projects.show');
