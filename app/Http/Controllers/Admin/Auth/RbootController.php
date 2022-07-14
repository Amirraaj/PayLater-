<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RacingbootRequest;
use Illuminate\Http\Request;
use App\Models\racingboot;


class RbootController extends Controller
{
    public function Showboot()
    {
        return view('Auth\AdminPanel\racingshoes\layout');
    }

    public function Dataadd(RacingbootRequest $request)
    {
        $data = $request->all();
        $racingboot = racingboot::first();

        if(!empty($racingboot))
        {
            $racingboot->update($request->all());
            return view('Auth\AdminPanel\racingshoes\layout',compact('racingboot'));
        }
        else{
            racingboot::create($request->all());
            return view('Auth\AdminPanel\racingshoes\layout',compact('racingboot'));

        }
    }


}
