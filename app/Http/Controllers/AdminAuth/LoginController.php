<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Hash;

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
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function doLogin(Request $request)
    {   
        $password = $request->password;
        $email = $request->email;

        $result = Auth::guard('admin')->attempt(['email'=>$email,'password'=>$password]);
        
        if($result){
            return redirect($this->redirectTo);
        }else{
            dd('error');
        }
        //dd(Auth::guard('admin')->user());
       //dd(Auth::guard('admin')->attempt(['email' => $email, 'password' => $password]));
        // if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => bcrypt($request->password)])) {
        //     dd('hello');    
        // }else{
        //     dd('hi');
        // }

    }
    public function showLoginForm(){

        return view('admin.auth.login');
    }
}
