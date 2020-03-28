<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\centerManagement;

class CenterController extends Controller
{
    public function view()
    {
    	$datas = centerManagement::all();
    	return view('admin.center.showCenterPage')->with('datas',$datas);
    }


    public function insertCenter(request $request)
    {
    	$newData = new centerManagement();
    	$newData->centerName = $request->input('centerName');
    	$newData->desc = $request->input('desc');
    	$newData->save();
    	return redirect()->back()->with('status','Data Saved successfully!!');
    }

    public function spiCenter($id)
    {
    	$spiData = centerManagement::find($id);
    	return $spiData;

    }
   	public function centerDelete($id)
   	{
   		$delData = centerManagement::find($id);
   		$delData->delete();
    	return redirect()->back()->with('error','Data Deleted successfully!!');

   	}


}