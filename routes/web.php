<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RetiriveController;
use App\Http\Controllers\Aggregatets;
use App\Http\Controllers\SelectController;
use App\Http\Controllers\MargeController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\InsertController;
use App\Http\Controllers\DeleteRowData;

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


// left and right join

Route::get('/left-join',[JoinController::class, 'LeftJoinData']);
Route::get('/right-join',[JoinController::class, 'RightJoinData']);

// insert new row

Route::get('/insert-new-row',[InsertController::class, 'InsertRow']);
Route::get('/insert-multiple-row',[InsertController::class, 'InsertMultipleRow']);

// Delete Data
 
Route::get('/delete-data',[DeleteRowData::class, 'DeleteData']);