<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index(){
        $setting = Setting::pluck('value','key')->toArray();
        return view('admin.setting.index',[
            'setting' => $setting
        ]);
    }
    public function update(){
        $attributes =  request()->validate([
            'pass_message'=>'required',
            'waiting_message' => 'required',
            'fail_message' => 'required',
            'withheld_message' => 'required',
            'pagination_limit' =>['required','int','min:1','max:100']
        ]);

        foreach( $attributes as $key=>$value){
            Setting::where('key',$key)->update(['value'=>$value]);
        }
        return redirect('admin/settings')->with('success','Setting Updated');
    }
}
