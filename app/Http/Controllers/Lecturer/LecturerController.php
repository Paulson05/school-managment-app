<?php

namespace App\Http\Controllers\Lecturer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LecturerController extends Controller
{
    public function index()
    {


    }
    public function dashboard()
    {

        return view('backend.lecturer.pages.dashboard');
    }
    public function LectureGetLogin(){

        return view('backend.lecturer.auth.login');
    }



    public function LecturePostLogin(Request $request){

        $cred = $request->only('email', 'password');

        if(Auth::guard('lecturer')->attempt($cred)){
            return redirect()->route('lecture.dashboard');
        }else{
            return  redirect()->route('lecture.get.login');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('home.page');
    }

    public function userList(){
        $users = User::all();
        return view('backend.lecturer.pages.users.index', ['users'=> $users]);
    }

    public function administrator(){
        $users = Admin::all();
        return view('backend.lecturer.pages.administrator.index', ['users'=> $users]);
    }



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
        //
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
