<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
{
    function  UpdateData(){
         $result =  DB::table('student')
              ->where('id', 1)
              ->update(['name' => 'Kakon','roll'=>100]);

    }
}
