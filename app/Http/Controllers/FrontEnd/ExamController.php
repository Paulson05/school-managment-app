<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\quizes;
use Illuminate\Http\Request;

class ExamController extends Controller
{
public function QuizList(){
    $quizes =quizes::orderBy('id','desc')->paginate(30);
    return view('frontend.quiz_list')->with([
        'quizes' => $quizes
    ]);

}
    public function exam($id)
    {
        $quiz=Quizes::where('id',$id)->where('status',1)->first();

        $questions=Question::inRandomOrder()->limit($quiz->number_of_question)->where('quizes_id',$quiz->id)->get();
        return view('frontend.exam.exam',compact('questions','quiz'));

    }


}
