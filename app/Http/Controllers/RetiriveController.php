<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RetiriveController extends Controller
{
   function selectAllRows(){
       $result = DB::table('laravelcrud')->get();
       return json_encode($result);
   }

   function selectOneRows(){
       $result = DB::table('laravelcrud')->where('name', 'kakon')->first();
       return json_encode($result);
   }

   function findRows(){
       $result = DB::table('laravelcrud')->find(4);
       return json_encode($result);
   }

     function selectOneColumn(){
       $result = DB::table('laravelcrud')->pluck('name');
       return json_encode($result);
   }
     function selectMultiColumn(){
       $result = DB::table('laravelcrud')->pluck('name','id');
       return json_encode($result);
   }
     function specificConditionData(){
       $result = DB::table('laravelcrud')->where('name', 'kakon')->value('name');

       return json_encode($result);
   }
}
