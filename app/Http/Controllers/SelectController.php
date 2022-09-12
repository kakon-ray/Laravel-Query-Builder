<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SelectController extends Controller
{
    function SelectTable(){
        $result = DB::table('laravelcrud')->get();
        return $result;

    }
     function UnicColumsSelect(){
        $result = DB::table('laravelcrud')->distinct()->get();
        return $result;

    }
     function SingleColumsSelect(){
        $result = DB::table('laravelcrud')->select('name')->get();
        return $result;

    }
     function MultipleColmnSelect(){
          $result = DB::table('laravelcrud')->select('name','id')->get();
        return $result;
    }
}
