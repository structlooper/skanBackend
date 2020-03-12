<?php

namespace App\Http\Controllers;

use App\categoryData;
use App\studyMaterialData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudyMaterialController extends Controller
{
    public function showStudyMaterial()
    {
        return view('admin.StudyMaterial.ShowStudyMaterial');
    }
    public function insertStudyMaterial()
    {
        $datas = categoryData::all();
        return view('admin.StudyMaterial.InsertStudyMaterial')->with('datas', $datas);
    }
    function subOptions($id)
    {
         $source = $id;
         $newoptions = categoryData::select('category')->where('source', $source);
         $ret_val = '';
        foreach ($newoptions as $option) {
            $ret_val .= "<option>$option</option>";
        }
        echo $ret_val;
    }
    public function insertionStudyMaterial(request $request)
    {

        $data = new studyMaterialData();
        $data->created_by_user = Auth::user()->id;
        $data->source = $request->input('source');
        $data->category = $request->input('category');
        $data->title = $request->input('title');
        $data->desc = $request->input('desc');
        if ($request->file('image')) {

            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension(); //geting extension from image Extension
            $filename =  $data->title . '.' . $extension;
            $image->move('uploades\StudyMaterial\\', $filename);
            $data->Image = $filename;
            $data->save();

            return \redirect()->back()->with('status', 'Study Material Data saved successfully');
        }
    }
}
