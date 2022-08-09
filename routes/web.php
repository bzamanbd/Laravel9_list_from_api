<?php

use App\Http\Controllers\ListController;
use Illuminate\Support\Facades\Route;

Route::view('list','list');
Route::get('list',[ListController::class,'getData']);