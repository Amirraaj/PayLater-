<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\contact;
use Illuminate\Support\Facades\Auth;

class contact1Controller extends Controller
{
    //
    public function Contactstore(ContactRequest $request)
    {


                $data=$request->all();

                $user = new contact();
                //    $user->name = $request->get('name');
                //    $user->number = $request->get('number');
                //    $user->email = $request->get('email');
                //    $user->message = $request->get('message');

                if(contact::create($data)){

                    return redirect()->route('Contact.display');
                }
     }


    public function contactshow()
    {
        $users = contact::get();
        return view('Auth.AdminPanel.Contactauth.layout',compact('users'));
    }

    public function DeleteData($id){
        $user = contact::find($id);
        $user->delete();

        return redirect()->route('contact-list');
}
}

