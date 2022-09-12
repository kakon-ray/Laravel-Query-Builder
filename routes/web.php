<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RetiriveController;

Route::get('/',[RetiriveController::class, 'selectAllRows']);
