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
        $datas = DB::table('study_material_data')->select('study_material_data.id','study_material_data.title','study_material_data.source','study_material_data.image', 'category_datas.category')->join('category_datas','study_material_data.category','=','category_datas.id')->get();
        return view('admin.StudyMaterial.ShowStudyMaterial')->with('datas',$datas);
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

    public function updateStudyMaterial($id)
    {
        $data = studyMaterialData::find($id);
        return view('admin.StudyMaterial.UpdateStudyMaterial')->with('data',$data);
    }
    public function updatationStudyMaterial(request $request ,$id)
    {
        $data = studyMaterialData::find($id);
        $data->created_by_user = Auth::user()->id;
        $data->source = $request->input('source') ?? $data->source;
        $data->category = $request->input('category') ?? $data->category;
        $data->title = $request->input('title') ?? $data->title;
        $data->desc = $request->input('desc') ?? $data->desc;
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
        $data->update();
        return redirect()->back()->with('status', 'Study Material Data Updated successfully');

    }
    function deleteStudyMaterial($id)
    {
        $delData = studyMaterialData::find($id);
        $delData->delete();
        return redirect()->back()->with('error','Data Deleted successfully');
    }
}
