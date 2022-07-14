<?php

namespace App\Http\Controllers\Admin\login;

use App\Http\Controllers\Controller;
use App\Models\register;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //
    public function login()
    {
        return view('login.login');
    }

    public function authenticate(Request $request)
    {
        $detail=register::get();
        $email=$request->get('Email');
        $password=$request->get('Password');
        foreach ($detail as  $data) {
            if($data->Email==$email)
            {
                if($data->Password==$password)
                {
                    return view('Auth.Adminpanel.Layout.layout');
                }
                else{
                    return view('login.login');

                }
            }
            else{
                return view('login.login');

            }
        }


    }
}
// return redirect()->route('auth.register')->with(['msg'=>"User created successfully"]);
