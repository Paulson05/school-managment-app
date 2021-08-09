<?php

namespace App\Http\Controllers\Exam;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;
use function Illuminate\Events\queueable;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qst =  Question::all();
        return view ('backend.pages.question.view')->with([
            'qst' => $qst
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $this->validate($request,[
            'question'=>'required|unique:questions,question,NULL,id,quizes_id,'.$request->quizes_id,
            'quizes_id'=>'required',

        ]);

        $data=$request->all();
        $ques= Question::create($data);

        if(count($request->option) > 0) {
            foreach ($request->option as $item=>$v) {
                $datad=array(
                    'questions_id'=>$ques->id,
                    'option'=>$request->option[$item]
                );
                Options::insert($datad);
            }
        }

        return redirect()->back()->with('success','Data add successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
