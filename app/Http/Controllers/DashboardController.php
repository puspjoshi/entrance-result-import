<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mark;

class DashboardController extends Controller
{
    public function index(){

        return view('admin.dashboard',[
            'totalStudents' => Mark::all()->count(),
            'compassed' => Mark::where('category_id',1)->count(),
            'bcapassed' => Mark::where('category_id',4)->count(),
            'bbapassed' => Mark::where('category_id',3)->count(),
            'civilpassed' => Mark::where('category_id',2)->count(),
            'withheld' => Mark::where('category_id',9)->count(),
        ]);
    }

}
