<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mark;

class ResultController extends Controller
{

    public function result(Request $request){
        $rollno = $request->rollno;

        $marks =  Mark::where(['rollno'=>$rollno])->first();

        return view('result',[
            'mark' => $marks
        ]);
    }
}
