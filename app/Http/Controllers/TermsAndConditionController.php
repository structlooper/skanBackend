<?php

namespace App\Http\Controllers;

use App\TermsAndCondition;
use Illuminate\Http\Request;

class TermsAndconditionController extends Controller
{
    public function view()
    {
        $datas = TermsAndCondition::all();
        return view('admin.TermsAndCondition.showTerms')->with('datas', $datas);
    }
    public function updationTermsData(request $request, $id)
    {
        $data = TermsAndCondition::find($id);
        $data->content = $request->input('content');
        $data->update();
        return redirect('termsAndCondition')->with('status', 'Data Updated successfuly');
    }

    /**
     * api response for Terms and condition
     */
    function showTerms()
    {
        $data = TermsAndCondition::all();
        $status = TRUE;
        return response()->json(compact('data', 'status'), 200);
    }
}
