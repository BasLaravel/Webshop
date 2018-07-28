<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Cart;
use App\user;


//voor restore van de shoppingcart tijdens login
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;




class LoginController extends Controller
{




    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except'=> ['logout', 'userLogout']]);
      



    }




      /**
     * The user has been authenticated.Doe dit na login user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
       
         $id=$user->id;
        Cart::restore($id);
    }




    //logout functie zoals in root map Auth
    //
    public function userlogout()
    {

        $id = Auth::id();
       
        Cart::store($id);
        Cart::destroy();


        Auth::guard('web')->logout();
        


        return redirect('/');
    }




    
}
