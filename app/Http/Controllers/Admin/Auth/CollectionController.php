<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\CollectionRequest;
use Illuminate\Http\Request;
use App\Models\collection;

class CollectionController extends Controller
{

    public function ShowCollection()
    {
        return view('Auth\AdminPanel\Collection\layout');
    }


    public function Data(CollectionRequest $request)
    {
        $data = $request->all();
        $collection = collection::first();

        if(!empty($collection))
        {
            $collection->update($request->all());
            return view('Auth\AdminPanel\Collection\layout',compact('collection'));
        }
        else{
            collection::create($request->all());
            return view('Auth\AdminPanel\Collection\layout',compact('collection'));

        }
    }
}
