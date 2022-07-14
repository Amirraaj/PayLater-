<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\HomeRequest;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function First (HomeRequest $request)
    {

        $data=$request->all();
        $home= Home::first();

        if(!empty($home))
        {
            $home->update($request->all());
            return view('Auth.AdminPanel.Layout.layout',compact('home'));
        }
        else{
            Home::create($request->all());
            return view('Auth.AdminPanel.Layout.layout',compact('home'));

        }

    }

    public function Firstshow()
    {
        $users = Home::get();
        return view('Auth.AdminPanel.layout.layout',compact('users'));

    }
}
