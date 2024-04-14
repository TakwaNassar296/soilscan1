<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\npk;

class APINPKController extends Controller
{
    public function index(){
        $npk =npk::all();
        return response()->json([
            'success'=>true,
            'message'=>'All Data',
           ' npk'=>$npk
        ]); 
       }
      
}
