<?php

namespace App\Http\Controllers;

use App\Models\Mark;
use Illuminate\Http\Request;
use App\Imports\MarksImport;
use Maatwebsite\Excel\Facades\Excel;

class MarkController extends Controller
{
    public function index(){
        return view('admin.mark.index',[
            'marks' => Mark::latest()->Paginate(setting('pagination_limit'))
        ]);
    }

    public function create(){
        return view('admin.mark.create');
    }

    public function store(){
        $attributes = request()->validate([
            'name'=>'required',
            'rollno' => 'required|numeric',
            'category_id' => ['required','int']
        ]);
        $attributes['rank'] = request('rank');
        $attributes['remark'] = request('remark');
        Mark::create($attributes);
        return redirect('admin/marks')->with('success','marks Added');
    }

    public function destroy(Mark $mark){
        $mark->delete();
        return back()->with('success','Mark successfully Deleted.');
    }

    public function edit(Mark $mark){
        return view('admin.mark.edit',['mark'=>$mark]);
    }
    public function update(Mark $mark){
        $attributes = request()->validate([
            'name'=>'required',
            'rollno' => 'required|numeric',
            'category_id' => 'required'
        ]);
        $attributes['rank'] = request('rank');
        $attributes['remark'] = request('remark');
        $mark->update($attributes);
        return redirect('admin/marks')->with('success','marks updated');
    }

    public function markImport(){
        return view('admin.mark.import');
    }

    public function uploadImport(Request $request){
        Excel::import(new MarksImport, $request->file('markImport'));

        return redirect('/admin/marks')->with('success', 'All good!');
    }

    public function search(Request $request){
        $search = $request->search;
        $marks =  Mark::where(function($query) use ($search){
            $query->where('name','like',"%$search%")
                ->orWhere('rank','like',"%$search%");
        })->paginate(10);
        return view('admin.mark.index',[
           'marks'=> $marks
        ]);

    }
}
