<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InsertController extends Controller
{
    function InsertRow(){
       $result =  DB::table('student')->insert([
                ['name' => 'Joy', 'roll' => 1,'class'=>11],
            ]);

            if($result == true){
                return 'Insert Success';
            }else{
                return 'insert faild';
            }

    }

     function InsertMultipleRow(){
       $result =  DB::table('student')->insertOrIgnore([
                ['id'=>1,'name' => 'Kakon', 'roll' => 1,'class'=>11],
                ['id'=>2,'name' => 'Joy', 'roll' => 1,'class'=>11],
            ]);

            if($result == true){
                return 'Insert Success';
            }else{
                return 'insert faild';
            }

    }
}
