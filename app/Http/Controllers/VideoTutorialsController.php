<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\videoTutorial;
use App\categoryData;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;



class VideoTutorialsController extends Controller
{
    public function view()
    {
		$datas = DB::table('video_tutorials')
        ->select('video_tutorials.id','video_tutorials.source','video_tutorials.name','video_tutorials.video','video_tutorials.link','video_tutorials.desc','category_datas.category')
        ->join('category_datas','category_datas.id','=','video_tutorials.category')
        ->get();

    	// $datas = videoTutorial::all();
    	return view('admin.videoTutorials.show')->with('users',$datas);
    }
    public function insertVideo()
    {
    	$datas = categoryData::all();
    	return view('admin.videoTutorials.insertVideoPage')->with('datas',$datas);
    }
    public function insertionVideo(request $request)
    {
    	// return 	$request;
    	$datas = DB::table('video_tutorials')
        ->select('video_tutorials.id','video_tutorials.source','video_tutorials.name','video_tutorials.video','video_tutorials.link','video_tutorials.desc','category_datas.category')
        ->join('category_datas','category_datas.id','=','video_tutorials.category')
        ->get();
    	$newData = new videoTutorial();
    	$newData->source = $request->input('source');
    	$newData->category = $request->input('category');
    	$newData->name = $request->input('name');
    	$newData->desc = $request->input('desc');
    	if($request->hasFile('video')){

            $video =  $request->file('video');
            $filename = $video->getClientOriginalName();
            $path = 'uploads/videoTutorial/';
            $video->move($path, $filename);
            $newData->video = URL::asset($path). "/" . $filename;
    	}
    	else{
    		$newData->link = $request->input('link');
    	}

    	$newData->save();
    	return redirect('videoTutorials')->with('users',$datas)->with('status',"Video Uploaded succfully");

	}

	public function editVideoTutorial($id)
	{
    	$data = videoTutorial::find($id);
        return view('admin.videoTutorials.updateVideoTut')->with('datas',$data);
	}

	public function updationVideTutorials(request $request ,$id)
	{
		$data = videoTutorial::find($id);
		$data->name = $request->input('name') ?? $data->name;
		$data->desc = $request->input('desc') ?? $data->desc;
		if($request->hasFile('video')){

            $video =  $request->file('video');
            $filename = $video->getClientOriginalName();
            $path = 'uploades/videoTutorial/';
            $video->move($path, $filename);
            $data->video = URL::asset($path). "/" . $filename;
            $data->link = null;
    	}
    	else{
    		$data->link = $request->input('link');
    		$data->video = null;
    	}
    	$data->update();
    	$datas = DB::table('video_tutorials')
        ->select('video_tutorials.id','video_tutorials.source','video_tutorials.name','video_tutorials.video','video_tutorials.link','video_tutorials.desc','category_datas.category')
        ->join('category_datas','category_datas.id','=','video_tutorials.category')
        ->get();
    	return redirect('videoTutorials')->with('users',$datas)->with('status','Video Tutorials updated sucessfully');
	}
	public function deleteVideTutorials($id)
	{
		$delData = videoTutorial::find($id);
		$delData->delete();
		return redirect()->back()->with('error','Video Details Deleted successfully!!');
	}

    // function for the api view by structlooper

    public function viewVideoTutorials(request $request)
    {
        $inputCategory = $request->input('category');
        $categorys = DB::table('category_datas')->select('category_datas.category')->where('category_datas.category',$inputCategory)->get();
        if (is_null($inputCategory)) {
            return response()->json(['msg' => 'Please enter category']);
        }
        else{
            
        $data = DB::table('video_tutorials')
        ->select('video_tutorials.id','video_tutorials.source','video_tutorials.name','video_tutorials.video','video_tutorials.link','video_tutorials.desc','category_datas.category')
        ->join('category_datas','category_datas.id','=','video_tutorials.category')->where('category_datas.category',$inputCategory)
        ->paginate(10);

        return response()->json($data);
        }

    }
}