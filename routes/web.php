<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RetiriveController;

Route::get('/',[RetiriveController::class, 'selectAllRows']);
Route::get('/select-one-row',[RetiriveController::class, 'selectOneRows']);
Route::get('/find-rows',[RetiriveController::class, 'findRows']);
Route::get('/select-one-column',[RetiriveController::class, 'selectOneColumn']);
Route::get('/select-multi-column',[RetiriveController::class, 'selectMultiColumn']);
Route::get('/specific-condition-data',[RetiriveController::class, 'specificConditionData']);

