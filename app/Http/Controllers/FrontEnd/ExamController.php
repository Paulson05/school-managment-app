<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Exams;
use App\Models\Question;
use App\Models\quizes;
use App\Models\Result;
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

        $quiz=quizes::where('id',$id)->where('status',1)->first();

        $questions=Question::inRandomOrder()->limit($quiz->number_of_question)->where('quiz_id',$quiz->id)->get();
        return view('frontend.exam.exam',compact('questions','quiz'));

    }


    public function examPost(Request $request)
    {

        $date=date('Y-m-d');
        $yes=0;
        $no=0;
        $data=$request->all();

        for($i=1; $i<=$request->index;$i++){
            if(isset($data['questions_id'.$i])){

                $exam=new Exams;

                $question=Question::where('id',$data['questions_id'.$i])->get()->first();
                if($question->answer==$data['ans'.$i])
                {
                    $result[$data['questions_id'.$i]]='Yes';
                    $exam->is_ans="yes";
                    $yes++;
                }else{
                    $result[$data['questions_id'.$i]]='No';
                    $exam->is_ans="No";
                    $no++;
                }
//                $exam->user_id= $userId;
                $exam->quiz_id= $question->quiz_id;
                $exam->questions_id=$data['questions_id'.$i];
                $exam->ans=$data['ans'.$i];

                $exam->save();

            }

        }

        if($res=Result::where('user_id')->where('quiz_id',$request->quiz_id)->first()){

        }else{
            $res=new Result;
        }
//        $res->user_id= $userId;
        $res->quiz_id= $request->quiz_id;
        $res->date= $date;
        $res->yes_ans=$yes;
        $res->no_ans=$no;

        $res->save();

        return redirect()->route('frontend.exam.result')->with('success','Thaks For Join This Exam');

    }

    public function examResult()
    {

        $results=   Result::orderBy('id','desc')->where('user_id')->paginate(10);
        return view('frontend.exam.result',compact('results'));
    }
    public function ResultDetails($id)
    {

        $exams=Exams::where('user_id', )->where('quiz_id',$id)->get();
        $quiz=quizes::find($id);
        $questions=Question::where('quiz_id',$id)->get();
        return view('frontend.exam.resultDetail',compact('exams','quiz','questions'));
    }



}
