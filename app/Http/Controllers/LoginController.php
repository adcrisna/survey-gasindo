<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function prosesLogin(Request $request){

    	if (Auth::attempt(['username'=>$request->username,'password'=>$request->password]))
        {
            if ((Auth::user()->level == "Admin")) 
            {
                return \Redirect()->to('/admin/home');
            }
            else if ((Auth::user()->level == "Manager"))
            {
                 return \Redirect()->to('/manager/home');
            }else{
                \Session::flash('msg_login','Username Atau Password Salah');
            return \Redirect::back();
            }
        }else{
            \Session::flash('msg_login','Username Atau Password Salah!!');
            return \Redirect::back();
        }
    }

}
