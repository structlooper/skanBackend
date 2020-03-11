<?php

namespace App\Http\Controllers;

use App\TermsAndcondition;
use Illuminate\Http\Request;

class TermsAndconditionController extends Controller
{
    public function view()
    {
        $datas = TermsAndcondition::all();
        return view('admin.TermsAndCondition.showTerms')->with('datas', $datas);
    }
    public function updationTermsData(request $request, $id)
    {
        $data = TermsAndcondition::find($id);
        $data->content = $request->input('content');
        $data->update();
        return redirect('termsAndCondition')->with('status', 'Data Updated successfuly');
    }

    /**
     * api response for Terms and condition
     */
    function showTerms()
    {
        $data = TermsAndcondition::all();
        $status = TRUE;
        return response()->json(compact('data', 'status'), 200);
    }
}
