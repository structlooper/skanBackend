<?php

namespace App\Http\Controllers;

use App\privacyPolicy;
use Illuminate\Http\Request;

class privacyPolicyController extends Controller
{
    public function view()
    {
        $datas = privacyPolicy::all();
        return view('admin.privacyPolicy.showPrivate')->with('datas',$datas);
    }
    public function updationPrivacyData(request $request,$id)
    {
        $data = privacyPolicy::find($id);
        $data->content = $request->input('content');
        $data->update();
        return redirect('privacyPolicy')->with('status', 'Data Updated successfuly');

    }

    /**
     * api response for Terms and condition
     */
    function showPrivate()
    {
        $data = privacyPolicy::all();
        $status = TRUE;
        return response()->json(compact('data','status'),200);
    }
}
