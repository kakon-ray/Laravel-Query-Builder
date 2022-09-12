<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Aggregatets extends Controller
{
    function CountRow(){
        $result = DB::table('laravelcrud')->count();
        return $result;

    }
    function MaxRow(){
        $result = DB::table('laravelcrud')->max('roll');
        return $result;
    }
    function MinRow(){
        $result = DB::table('laravelcrud')->min('roll');
        return $result;
    }
    function Avarage(){
        $result = DB::table('laravelcrud')->avg('id');
        return $result;
    }
}
