<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\RegistrationModel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class BasicController extends Controller
{
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }

    public function service(){
        return view('service');
    }
    public function home(){
        return view('index');
    }
    public function price(){
        return view('price');
    }


    public function register(){
        return view('registration');
    }
    
    public function store(Request $request){
        $ValidateData =$request->validate([
            'name'=>'required',
            'email'=>'required | unique:registration_models',
            'number'=>'required | max:10',
            'course'=>'required',
            'class'=>'required',
            'gender'=>'required'
        ]);
        RegistrationModel::create($ValidateData);
        Alert::success('Registration','Registration Successfull');
        return redirect()->back();
    }

    public function contactstore(Request $request){
        Contact::create($request->all());
        Alert::success('Submited','Successfull');
        return redirect()->back();

    }

    public function login(Request $request){
            return view('login');
    }

    public function login1(Request $request){
        $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
       return view('user');
    } else {
        return response()->json(['message' => 'Invalid credentials'], 401);
    }
    }

    public function registredform(Request $request){
        $data=RegistrationModel::all();
            return view('Registrationform')->with(['data' => $data]);

    }

    public function contfrom(Request $request){
        $data=Contact::all();
        return view('contactfrom')->with(['data'=>$data]);
    }


}
