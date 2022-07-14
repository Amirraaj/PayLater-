<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\oderdetail;
use App\Models\deliver;


class OderdetailController extends Controller
{
    public function ShowDetail()
    {
        $users = oderdetail::get();
        return view('Auth.AdminPanel.OrderDetail.layout',compact('users'));
    }

    public function deliver($id)
    {
        $user = oderdetail::find($id);
        $id = $user->get('Shoeid');
        // $name = $user->get('Shoesname');
        // $price = $user->get('Price');
        // $size = $user->get('Size');
        // $number = $user->get('Number');
        // $address = $user->get('Address');
        // $email= $user->get('Email');

        // $deliver = new deliver();
        // // $user->first_name = $request->get('first_name');
        // $deliver->Shoeid = $id;
        // $deliver->ShoesName =$name;
        // $deliver->Price =$price;
        // $deliver->Size =$size;
        // $deliver->Number =$number;
        // $deliver->Address =$address;
        // $deliver->Email =$email;
        // $deliver->save();

        return redirect()->route('show-oders');

        // return view('Auth.AdminPanel.OrderDetail.layout');

    }


}

