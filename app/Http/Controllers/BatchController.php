<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\batchManagement;
use App\centerManagement;

class BatchController extends Controller
{
    public function view()
    {
    	$centerId = centerManagement::all();
		$datas = batchManagement::all();
		return view('admin.Batch.batchManagementPage')->with('datas',$datas)->with('centerId',$centerId);
    }
    public function insertbatch(request $request)
    {
    	$newData = new batchManagement();
    	$newData->batchId = $request->input('batchId');
    	$newData->batchName = $request->input('batchName');
    	$newData->save();
    	return redirect()->back()->with('status','Batch saved successfully!!');
    }

    public function updateBatch($id)
    {
    	$updateData = batchManagement::find($id);
    	return view('admin.Batch.updateBatchPage')->with('updateData',$updateData);
    }
    public function updationBatch(request $request,$id)
    {

    	$centerId = centerManagement::all();
		$datas = batchManagement::all();
    	$udationData = batchManagement::find($id);
    	$udationData->batchName = $request->input('batchName') ?? $udationData->batchName;
    	$udationData->update();
    	return redirect('batchManagement')->with('status','Batch Updated successfully!!')->with('datas',$datas)->with('centerId',$centerId);
     }

    public function spiBatch($id)
    {
    	$data = batchManagement::find($id);
    	return $data;
    }

    public function batchDelete($id)
    {
    	$delData = batchManagement::find($id);
    	$delData->delete();
    	return redirect()->back()->with('error','Batch Deleted Successfully!!');
    }
}
