<?php

namespace App\Http\Controllers\Admin\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\register;

class registerController extends Controller
{
    public function register()
    {
        return view('Auth.AdminPanel.Registration.layout');
    }
    public function password()
    {
        return view('Auth.AdminPanel.Registration.password');
    }
    public function Adddata(Request $request)
    {
        $data=$request->all();
        $register = new register();
        if(register::create($data)){
            return view('Auth.AdminPanel.Registration.layout');
        }
    }
    public function changepass(Request $request)
    {
        $detail=register::get();
        $password=$request->get('Password');
        $newpass=$request->get('Newpassword');
        foreach ($detail as  $data) {
            if($data->Password==$password)
            {
                $data->password = $newpass;
                $data->save();
                return redirect()->back();
            }
            else{
                return redirect()->back();

            }
        }
    }
}


