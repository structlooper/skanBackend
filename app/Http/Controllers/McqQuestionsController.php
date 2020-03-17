<?php

namespace App\Http\Controllers;

use App\categoryData;
use Illuminate\Http\Request;
use App\McqsCategoryQuestionData;
use Illuminate\Support\Facades\DB;

class McqQuestionsController extends Controller
{
    public function view()
    {
        $categoryData = categoryData::all();
        $datas = DB::table('mcqs_category_question_data')->select('mcqs_category_question_data.id','mcqs_category_question_data.questionName' ,'mcqs_category_question_data.timeDuration','category_datas.category'    )->join('category_datas','mcqs_category_question_data.category', '=','category_datas.id')->get();
        return view('admin.McqQuestions.showAllMcqs')->with('datas',$datas)->with('categoryData',$categoryData);
    }
    public function addMcqsCategory(request $request)
    {
        
        $rules = [
            'Qcategory' => 'required|max:100',
            'Qname' => 'required|max:250',
        ];
        $msg = [

            'required' => 'The field is required must have to fill',
        ];
        $this->validate($request, $rules, $msg);
        $newData = new McqsCategoryQuestionData();
        $newData->category = $request->input('Qcategory');
        $newData->questionName = $request->input('Qname');
        $newData->timeDuration = $request->input('Qtime') ?? '';
        $newData->save();
        return redirect('mcqsQuesion')->with('newData',$newData)->with('status' ,'Mcq Category Saved successfully!!');
    }
    
    public function updateMcqsCategory(request $request,$id)
    {
        $categoryData = categoryData::all();
        $updateData = McqsCategoryQuestionData::find($id);
        return view('admin.McqQuestions.updateMcqsCategory')->with('updateData',$updateData)->with('categoryData',$categoryData);
        
    }
    public function updateMcqsCategoryupdation(request $request,$id)
    {
        $updateData = McqsCategoryQuestionData::find($id);
        $updateData->category = $request->input('Qcategory');
        $updateData->questionName = $request->input('Qname');
        $updateData->timeDuration = $request->input('Qtime');
        $updateData->update();
        $newData = McqsCategoryQuestionData::all();
        return redirect('mcqsQuestion')->with('newData',$newData)->with('status','Details Updated successfully!!');
    }
    function deleteMcqsCategory($id)
    {
        $delData = McqsCategoryQuestionData::find($id);
        $delData->delete();
        return redirect('mcqsQuestion')->with('error','Details Deleted successfully!!');

    }
}
