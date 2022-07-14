<?php

namespace App\Http\Controllers\Admin\Index;

use App\Http\Controllers\Controller;
use App\Http\Requests\OderdetailRequest;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Shoes;
use App\Models\collection;
use App\Models\racingboot;
use App\Models\oderdetail;


class indexController extends Controller
{
    //

    public function Index()
    {
        $home = Home::first();
        $collection = collection::first();
        $shoes = Shoes::take(50)->get();
        $racingboot = racingboot::first();
        // return view('Admin.layout.layout', compact('home'), compact('shoes'), compact('collection'));
        //multiple compact cannnot be taken so we write in following manner
        return view('Admin.layout.layout') ->with(compact('home','shoes','collection','racingboot'));


    }

    public function Collection()
    {

        $collection = collection::first();
       return view("Admin.Collection.Collection", compact('collection'));
    }

    public function contact(){
        return view('Admin\Contact\contact');
    }

    public function racingboot()
    {
        $racingboot = racingboot::first();
        return view('Admin\Racingboot\Racingboot',compact('racingboot'));
    }
    public function shoes()
    {
        $shoes = Shoes::take(50)->get();
       return view('Admin.shoes.shoes',compact('shoes'));
    }
    public function getdata($id){

        $data = Shoes::find($id);
        $shoes = Shoes::take(50)->get();
        return view('Admin.shoes.shoes', compact('shoes','data'));

    }
    public function AddOder(OderdetailRequest $request)
    {
        $data=$request->all();
         $oderdetail = new oderdetail();
         if(oderdetail::create($data)){
            $shoes = Shoes::take(50)->get();
            return view('Admin.shoes.shoes',compact('shoes'));

         }
        }
}


