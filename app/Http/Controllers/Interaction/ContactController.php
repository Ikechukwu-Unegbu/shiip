<?php

namespace App\Http\Controllers\Interaction;

use App\Http\Controllers\Controller;
use App\Models\Interaction\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function sendContactMessage(Request $request){
        
        $validator = Validator::make($request->all(), [
            'name'=>'required|string',
            // 'phone'=>'required|string|max:13',
            'email'=>'required|string|email',
            'message'=>'required|string'
        ]);
        if($validator->fails()){
            Session::flash('errors', $validator->errors());
            return redirect()->route('contact.index');
        }
        // var_dump($request->all());die();
        $contactModel = new Contact();
        $contactModel->name = $request->input('name');
        $contactModel->email = $request->input('email');
        $contactModel->message = $request->input('message');
        $contactModel->save();

        Session::flash('success', "I have recieved your message. I will be in touch shortly.");
        // return redirect()->route('dashbaord/blog/create');

        return redirect()->route('contact.index');
    }

    public function contactIndex(){
        
        return view('dashboard.contact.index');
    }
}
