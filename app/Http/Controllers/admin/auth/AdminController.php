<?php

namespace App\Http\Controllers\admin\auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use http\Env\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }
    public function dashboard()
    {

        return view('backend.admin.pages.dashboard');
    }
    public function getLogin(){

        return view('backend.admin.auth.login');
    }



    public function postLogin(Request $request){

        $cred = $request->only('email', 'password');

        if(Auth::guard('admin')->attempt($cred)){
            return redirect()->route('admin.dashboard');
        }else{
            return  redirect()->route('admin.get.login');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('home.page');
    }

    public function userList(){
        $users = User::all();
        return view('backend.admin.pages.users.index', ['users'=> $users]);
    }

    public function administrator(){
        $users = Admin::all();
        return view('backend.admin.pages.faculty.index', ['users'=> $users]);
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
