<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;


use Illuminate\Validation\ValidationException;

class AdminLoginController extends Controller
{


   

    public function __construct(){
       
        $this->middleware('guest:admin', ['except'=> ['adminLogout']]);
        //$this->middleware('guest');
        
        


    }



    public function showLoginForm(){
        return view('auth.admin-login');


    }

    public function login(Request $request){

        //validate the form data
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:5'        
        ]);
        // Attempt to log the user in
            if(Auth::guard('admin')->attempt(['email'=> $request->email, 'password' => $request->password], $request->remember)){
                //if successful, then redirect to their intented location
                //return redirect('cryptos');
                return redirect()->intended(route('admin.dashboard'));
            }
        // if unsuccessful
                return redirect()->back()->withInput($request->only('email', 'remember'));



    }

//logout


public function adminLogout(Request $request)
{
    Auth::guard('admin')->logout();

     //als deze regel werkt worden zowel de user als de admin uitgelogd. Mochten beiden zijn ingelogd.
    //$request->session()->invalidate();

    return redirect('/');
}





}
