<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoinController extends Controller
{
    function LeftJoinData(){
         $reuslt = DB::table('laravelcrud')
        ->leftJoin('student','laravelcrud.name','=','student.name')
        ->get();	

        return $reuslt;
    }
    function RightJoinData(){
          $reuslt = DB::table('laravelcrud')
        ->rightJoin('student','laravelcrud.name','=','student.name')
        ->get();	

        return $reuslt;
    }
}
