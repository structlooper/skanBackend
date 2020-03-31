<?php

namespace App\Http\Controllers;

use App\categoryData;
use App\quizQuestion;
use Illuminate\Http\Request;
use App\McqsCategoryQuestionData;
use Illuminate\Support\Facades\DB;

class McqQuestionsController extends Controller
{
    // public $categoryDataID;
    private $version;
    public function view()
    {
        $categoryData = categoryData::all();
        $datas = DB::table('mcqs_category_question_data')->select('mcqs_category_question_data.id','mcqs_category_question_data.questionName' ,'mcqs_category_question_data.timeDuration','category_datas.category'    )->join('category_datas','mcqs_category_question_data.category', '=','category_datas.id')->get();
        return view('admin.McqQuestions.ShowAllMcqs')->with('datas',$datas)->with('categoryData',$categoryData);
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
        return redirect('mcqsQuestion')->with('newData',$newData)->with('status' ,'Mcq Category Saved successfully!!');
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
        $updateData->category = $request->input('Qcategory') ?? $updateData->category;
        $updateData->questionName = $request->input('Qname');
        $updateData->timeDuration = $request->input('Qtime');
        $updateData->update();
        $newData = McqsCategoryQuestionData::all();
        return redirect('mcqsQuestion')->with('newData',$newData)->with('status','Details Updated successfully!!');
    }
    public function deleteMcqsCategory($id)
    {
        $delData = McqsCategoryQuestionData::find($id);
        $delData->delete();
        return redirect('mcqsQuestion')->with('error','Details Deleted successfully!!');

    }

    public function createQuiz($id)
    {
        $datas = DB::table('quiz_questions')->select('quiz_questions.id','quiz_questions.question' ,'quiz_questions.option1','quiz_questions.option2' , 'quiz_questions.option3', 'quiz_questions.category' , 'quiz_questions.option4','quiz_questions.answer','quiz_questions.desc', 'mcqs_category_question_data.questionName' , 'mcqs_category_question_data.timeDuration')->join('mcqs_category_question_data','quiz_questions.category', '=','mcqs_category_question_data.id')->get();
        $categoryDataID = McqsCategoryQuestionData::find($id);
        session(['categoryDataID' => $categoryDataID]);

        return view('admin.McqQuestions.createQuizPage')->with('datas',$datas)->with('categoryData',$categoryDataID);
    }
    public function addMcqsQuizQuestion(request $request)
    {
        $rules = [
            'category' => 'required|max:100',
            'question' => 'required|max:250',
            'option_1' => 'required|max:250',
            'option_2' => 'required|max:250',
            'answer' => 'required|max:250',
        ];
        $msg = [

            'required' => 'The field is required must have to fill',
        ];
        $this->validate($request, $rules, $msg);
        // $category = $request->route('id');
        // return $category;

        $newQuiz = new quizQuestion();
        $newQuiz->category = $request->input('category');
        $newQuiz->question = $request->input('question');
        $newQuiz->option1 = $request->input('option_1');
        $newQuiz->option2 = $request->input('option_2');
        $newQuiz->option3 = $request->input('option_3');
        $newQuiz->option4 = $request->input('option_4');
        $newQuiz->answer = $request->input('answer');
        $newQuiz->desc = $request->input('desc');
        $newQuiz->save();
        return redirect()->back()->with('status','Question saved successfully!!');
    }

    public function updateMcqsQuizQuestion($id)
    {
        $products = session('categoryDataID');
        $it =  $products->id;
        $updateQuiz = quizQuestion::find($id);
        return view('admin.McqQuestions.updateQuizPage')->with('updateQuiz',$updateQuiz)->with('id',$it);
    }
    public function updatationQuizQuestion(request $request ,$id)
    {
        // return $id;
        $updationData = quizQuestion::find($id);
        $updationData->question = $request->input('question');
        $updationData->option1 = $request->input('option_1');
        $updationData->option2 = $request->input('option_2');
        $updationData->option3 = $request->input('option_3');
        $updationData->option4 = $request->input('option_4');
        $updationData->answer = $request->input('answer');
        $updationData->desc = $request->input('desc');
        $updationData->update();
        return redirect()->back()->with('status','Question Updated successfully!!');

    }
    public function deleteMcqsQuizQuestion($id)
    {
        $delData = quizQuestion::find($id);
        $delData->delete();
        return redirect()->back()->with('error','Question Deleted successfully!!');

    }


    public function getMCQCategory(request $request){
        $inputCategory = $request->input('category');
        if (is_null($inputCategory)) {
            return response()->json(['msg' => 'Please enter category']);
        }
        else {
            $datas = DB::table('mcqs_category_question_data')->select('mcqs_category_question_data.id' , 'mcqs_category_question_data.created_at', 'mcqs_category_question_data.questionName', 'mcqs_category_question_data.timeDuration', 'category_datas.category')->join('category_datas', 'mcqs_category_question_data.category', '=', 'category_datas.id')->where('mcqs_category_question_data.category', $inputCategory)->get();
            return response()->json($datas);
        }
    }

    public function viewMcqsQuestion(request $request)
    {
        $inputCategory = $request->input('category');
        if (is_null($inputCategory)) {
            return response()->json(['msg' => 'Please enter category']);
        }
        else{

        $data = DB::table('quiz_questions')
        ->select('quiz_questions.id','quiz_questions.question','quiz_questions.option1','quiz_questions.option2','quiz_questions.option3','quiz_questions.option4','quiz_questions.answer','quiz_questions.desc','quiz_questions.category','mcqs_category_question_data.category','category_datas.category')->join('mcqs_category_question_data','mcqs_category_question_data.id','=','quiz_questions.category')
        ->join('category_datas','category_datas.id','=','mcqs_category_question_data.category')->where('category_datas.category',$inputCategory)
        ->paginate(10);

        return response()->json($data);
        }


    }

}
