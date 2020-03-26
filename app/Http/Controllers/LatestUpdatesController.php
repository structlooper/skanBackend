<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lastestUpdate;
class LatestUpdatesController extends Controller
{
 	public function view()
 	{
 		$datas = lastestUpdate::all();
 		return view('admin.Updates.latestUpdatePage')->with('datas',$datas);
 	}

 	public function insertionUpdates(request $request)
 	{
 		$newData = new lastestUpdate();
 		$newData->title = $request->input('title');
 		$newData->link = $request->input('link');
 		$newData->desc = $request->input('desc');
 		$newData->save();
 		return redirect()->back()->with('status' ,'Data saved successfully!!');
 	}

 	public function editUpdates($id)
 	{
 		$updateData = lastestUpdate::find($id);
 		return view('admin.Updates.editUpdatesPage')->with('data',$updateData);
 	}

 	public function updationUpdates(request $request ,$id)
 	{
 		$datas = lastestUpdate::all();
 		$updateData = lastestUpdate::find($id);
 		$updateData->title = $request->input('title');
 		$updateData->link = $request->input('link');
 		$updateData->desc = $request->input('desc');
 		$updateData->update();
 		return redirect('latestUpdatesManagement')->with('status',"Data Updated successfully!!")->with('datas',$datas);
 	}

 	public function deleteUpdates($id)
 	{
 		$delData = lastestUpdate::find($id);
 		$delData->delete();
 		return redirect()->back()->with('error',"Data Deleted successfully!!");
 	}

 	public function viewApiUpdates()
 	{
 		$datas = lastestUpdate::all();
 		return response()->json($datas);
 	}
}
