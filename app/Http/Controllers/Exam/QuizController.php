<?php

namespace App\Http\Controllers\Exam;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\quizes;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $quizes  = quizes::orderBy('id','desc')->paginate(10);
        return view('backend.pages.quiz.create')->with([
           'quizes'=> $quizes,
        ]);
    }

    public function store(Request $request)
    {

        $this->validate($request,[
            'quiz_name' => 'required',
            'description'=> 'required',
            'quiz_date'=> 'required',
            'quiz_time'=> 'required',
            'number_of_question'=> 'required'

        ]);
        $data = $request->all();
        quizes::create($data);
        return redirect()->back();
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = quizes::find($id);
        $questions = Question::where('quiz_id', $id)->get();
        return view('backend.pages.quiz.details')->with([
            'data' => $data,
            'questions' => $questions
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addQuestion($id){
        $quizId =quizes::find($id);
        return view('backend.pages.question.add_question')->with([
            'quizId' => $quizId
        ]);
    }
}
