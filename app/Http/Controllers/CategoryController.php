<?php

namespace App\Http\Controllers;

use App\categoryData;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
        $dataDb = categoryData::all();
        return view('admin.category.categoryPage')->with('dataDb',$dataDb);
    }
    public function addingValues(request $request)
    {
        $rules = [
            'source' => 'required|max:30|',
            'category' => 'required|max:30|',
        ];
        $msg = [
            'required' => 'The field is required must have to fill',
            'max' => 'Maximum charactor extended',
        ];
        $this->validate($request, $rules, $msg);
        $data = new categoryData();
        $data->source = $request->input('source');
        $data->category = $request->input('category');
        $data->save();
        $dataDb = categoryData::all();
        return redirect('category')->with('status','Data Saved succesfully')->with('dataDb',$dataDb);
    }
    public function deleting($id)
    {
        $dataDb = categoryData::all();
        $data = categoryData::find($id);
                if (is_null($data)) {
                    return redirect('category')->with('error',"Please enter a valid id");
                }
        $data->delete();
        return redirect('category')->with('status','Data Deleted succesfully')->with('dataDb',$dataDb);
    }
    public function showData($id)
    {
        $data = categoryData::find($id);
        return $data;
    }
    public function updateValues(request $request,$id)
    {
        $data = categoryData::find($id);
        $data->source = $request->input('source') ?? $data->source;
        $data->category = $request->input('category') ?? $data->category;
        $data->update();
        return redirect()->back()->with('status','data updated successfully');
        
    }
}
