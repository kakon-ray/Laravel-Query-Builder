<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RetiriveController;
use App\Http\Controllers\Aggregatets;
use App\Http\Controllers\SelectController;
use App\Http\Controllers\MargeController;

// "Retrieving Result

Route::get('/',[RetiriveController::class, 'selectAllRows']);
Route::get('/select-one-row',[RetiriveController::class, 'selectOneRows']);
Route::get('/find-rows',[RetiriveController::class, 'findRows']);
Route::get('/select-one-column',[RetiriveController::class, 'selectOneColumn']);
Route::get('/select-multi-column',[RetiriveController::class, 'selectMultiColumn']);
Route::get('/specific-condition-data',[RetiriveController::class, 'specificConditionData']);


// "Aggregates
Route::get('/count-rows',[Aggregatets::class, 'CountRow']);
Route::get('/max',[Aggregatets::class, 'MaxRow']);
Route::get('/min',[Aggregatets::class, 'MinRow']);
Route::get('/avg',[Aggregatets::class, 'Avarage']);


// select routes

Route::get('/select-table',[SelectController::class, 'SelectTable']);
Route::get('/unic-colmn-select',[SelectController::class, 'UnicColumsSelect']);
Route::get('/single-colmn-select',[SelectController::class, 'SingleColumsSelect']);
Route::get('/multiple-colmn-select',[SelectController::class, 'MultipleColmnSelect']);


// Marge Data

Route::get('/table-marge',[MargeController::class, 'MargeData']);
