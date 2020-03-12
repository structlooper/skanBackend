<?php

namespace App\Http\Controllers;

use App\bannerData;
use App\BannerDatas;
use Illuminate\Http\Request;

class BannerDataController extends Controller
{
    public function view()
    {
        return view('admin.Banner.bannerPage');
    }
    public function store(request $request)
    {
        $rules = [
            'image' => 'dimensions:min_width=250,min_height=500|mimes:jpeg,jpg,png,gif|required|max:10000',
            'heading' => 'required|max:100',
            'desc' => 'required|max:250',
        ];
        $msg = [

            'required' => 'The field is required must have to fill',
            'max' => 'Maximum charactor extended',
        ];
        $this->validate($request, $rules, $msg);

        $bannerData = new bannerData();
        $bannerData->heading = $request->input('heading');
        $bannerData->desc = $request->input('desc');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //geting extension from image Extension
            $filename =  uniqid() . '.' . $extension;
            $file->move('uploades/bannerImages/', $filename);
            $bannerData->image = $filename;
            
        }
       
        else{
            return $request;
        }
        
        $bannerData->save();

        return redirect('showAll')->with('status', 'data Uploaded successfuly');
    }
    public function show()
    {
        $data = bannerData::all();
        $status = 'success';
        return response()->json(compact('data','status'),200);
    }
    public function showAll()
    {
        $data = bannerData::all();
        return view('admin.banner.showAll',compact('data',$data));
    }

    public function updateView(request $request, $id)
    {
        $data = bannerData::findOrFail($id);
        return view('admin.banner.updateSpecfic')->with('data',$data);
    }
    public function updationData(request $request,$id)
    {
        $rules = [
            'image' => 'dimensions:min_width=250,min_height=500|mimes:jpeg,jpg,png,gif|max:10000',
            'heading' => 'max:100',
            'desc' => 'max:250',
        ];
        $msg = [

            'required' => 'The field is required must have to fill',
            'max' => 'Maximum charactor extended',
        ];
        $this->validate($request, $rules, $msg);
        $data = bannerData::find($id);
        $data->heading = $request->input('heading');
        $data->desc = $request->input('desc');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //geting extension from image Extension
            $filename =  uniqid() . '.' . $extension;
            $file->move('uploades/bannerImages/', $filename);
            $data->image = $filename;

        
        }
        $data->update();
        return redirect('showAll')->with('status', 'Data Updated successfuly');
    }
    public function delete($id)
    {
        $data = bannerData::find($id);
        $data->delete();
        return redirect()->back()->with('status','Data deleted Successfully');
    }
}
