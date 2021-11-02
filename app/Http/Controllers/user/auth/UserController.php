<?php

namespace App\Http\Controllers\user\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\SignUpRequest;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  view('backend.user.pages.dashboard');
    }

    public function register(){
        return view('frontend.pages.register');
    }
    public function getLogin(){
        return view('frontend.pages.login');
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
    public function store(SignUpRequest $request)
    {

        $rand = rand(10000000,99999999);
        $array = collect($request->validated())->forget(['confirmed_password'])
            ->put('password', bcrypt($request->password))
            ->put('identification_number',$rand)->all();
        Users::create($array);
      return  redirect()->route('home.login');
    }

    public function postLogin(Request $request){

//        Alert::success('Success Title', 'Success Message');
        $cred = $request->only('email', 'password');

        if(Auth::guard('web')->attempt($cred)){
            return redirect()->route('user.home');
        }else{
            return  redirect()->route('user.getlogin');
        }



    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home.page');
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
