<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RetiriveController extends Controller
{
   function selectAllRows(){
       $result = DB::table('laravelcrud')->get();
       return $result;
   }
}
