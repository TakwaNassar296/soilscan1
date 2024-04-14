<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\npkdeficiency;
use Illuminate\Support\Facades\Validator;

use function PHPUnit\Framework\isNull;

class APInpkdeficiencyController extends Controller
{
    public function index()
    {
        $npkdeficiency = npkdeficiency::all();
        return response()->json([
            'success'=>true,
            'message'=>'All Data',
            'npkdeficiency'=>$npkdeficiency
          ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Crop_Name'=>'required',
            'N_image'=>'required|image',
            'P_image'=>'required|image',
            'K_image'=>'required|image',
        ]);
        $input=$request->all();
        if($image=$request->file('N_image')){
            $destinationpath='images/';
            $profileimage=$image->getClientOriginalName().$image->getClientOriginalExtension();
            $image->move($destinationpath,$profileimage);
            $input['N_image']=$profileimage;
        } 
        if($image=$request->file('P_image')){
            $destinationpath='images/';
            $profileimage=$image->getClientOriginalName().$image->getClientOriginalExtension();
            $image->move($destinationpath,$profileimage);
            $input['P_image']=$profileimage;
        }
        if($image=$request->file('K_image')){
            $destinationpath='images/';
            $profileimage=$image->getClientOriginalName().$image->getClientOriginalExtension();
            $image->move($destinationpath,$profileimage);
            $input['K_image']=$profileimage;
        }
        $npkdeficiency = npkdeficiency::create($input);
        $result = $npkdeficiency->save();
        return response()->json([
            'success'=>true,
            'message'=>'Data stored successfully',
            'npkdeficiency'=>$npkdeficiency
          ]);
        
    }
    
    public function show($id){
        $npkdeficiency=npkdeficiency::find($id);
        if(is_null($npkdeficiency)){
            return response()->json([
                'fail'=>false,
                'message'=>'Sorry not found',
              ]);
        }else{
            return response()->json([
                'success'=>true,
                'message'=>'Data fetched successfully',
                'npkdeficiency'=>$npkdeficiency
              ]);
        }
       
    }
    
}
