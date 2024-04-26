<?php

use App\Http\Controllers\TextGeneratorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TextGeneratorController::class, 'index']);
