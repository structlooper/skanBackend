<?php

namespace App\Http\Controllers;

use App\about;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function showData()
    {
        $data = about::all();
        return view('admin.about.showAll')->with('data', $data);
    }

    public function updateAboutData(request $request, $id)
    {
        $data = about::find($id);
        return view('admin.about.editAboutData')->with('data', $data);
    }
    public function updationData(request $request, $id)
    {
        $data = about::find($id);
        $data->heading = $request->input('heading');
        $data->desc = $request->input('desc');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //geting extension from image Extension
            $filename =  uniqid() . '.' . $extension;
            $file->move('uploades/AboutSideImage/', $filename);
            $data->image = $filename;
        }
        $data->update();
        return redirect('aboutData')->with('status', 'Data Updated successfuly');
    }
    /**
     * About Data api Response
     * by structlooper
     */
    public function aboutData()
    {
        $data = about::all();
        $status = True;
        return response()->json(compact('data', 'status'), 200);
    }
}
