<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class DeleteRowData extends Controller
{
   function DeleteData(){
  $result = DB::table('students')->truncate();

     if($result == true){
        return 'success';
     }else{
        return 'Faild';
     }

  
   }
}
