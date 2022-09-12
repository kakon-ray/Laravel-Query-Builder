<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MargeController extends Controller
{
    function MargeData(){
       $laravelCrud = DB::table('laravelcrud')->get();
       $studentData = DB::table('student')->get();

       $margeData = $laravelCrud->merge($studentData);
      
       return $margeData;

    }
}
