<?php

namespace App\Http\Controllers;

use App\categoryData;
use App\studyMaterialData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

        $newoptions =  DB::table('category_datas')->where('source', '=', $id)->get();
        return response()->json($newoptions);
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
        }
        if ($request->file('attachment')) {

            $otherDocument = $request->file('attachment');
            $extension = $otherDocument->getClientOriginalExtension(); //geting extension from image Extension
            $filename =  $data->title . '.' . $extension;
            $otherDocument->move('uploades\StudyMaterial\attachments\\', $filename);
            $data->otherDocument = $filename;
            
        }
        $data->save();
        return \redirect()->back()->with('status', 'Study Material Data saved successfully');
    }
}
