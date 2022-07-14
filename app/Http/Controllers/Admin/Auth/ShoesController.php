<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShoesRequest;
use App\Models\Shoes;
use Illuminate\Http\Request;

class ShoesController extends Controller
{
    public function ShoesShow()
    {
        return view('Auth.AdminPanel.Shoes.layout');
    }

    public function AddShoes(ShoesRequest $request)
    {
        $data=$request->all();
        // dd($data);
        $user = new Shoes();
        if(Shoes::create($data)){

            return view('Auth.AdminPanel.Shoes.layout');
        }
    }
    public function ShoesDetail()
    {
        $users = Shoes::get();
        return view('Auth.AdminPanel.Shoes.Show',compact('users'));
    }
    public function DeleteShoes($id)
    {
        $user = Shoes::find($id);
        $user->delete();

        return redirect()->route('Shoes-Detail-Display');
    }
    public function ShowIndex(){
        $user = Shoes::first();
        return view('Admin.shoes.Sheader', compact('Shoes'));
    }

    public function getdata($id){
        $user = Shoes::find($id);
        return view('Admin.shoes.Sheader', compact('Shoes'));

    }

    public function getProductDetail($id){
        $shoe = Shoes::find($id);
        return response()->json($shoe);
    }

}
