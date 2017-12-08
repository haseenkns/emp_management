<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class AuthController extends Controller
{
    public function login(Request $request){

        $rules=array(
            'email'=>'required',
            'password'=>'required'
        );

        $validator=Validator::make($request->all(),$rules);
        $userdata = array(
            'email'=>$request->email,
            'password'=>$request->password
        );

        if($validator->fails()){
            return redirect('/')
                ->withErrors($validator);
        }else if(\Auth::attempt($userdata)){
            return redirect('admin/dashboard');

        }else{
            return redirect('/');
        }
    }

    public function logout(){
        \Auth::logout();
        return redirect('/');
    }
}
