<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Contracts\Auth\Guard;
use auth;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests;
use Redirect;





class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    /*use AuthenticatesAndRegistersUsers, ThrottlesLogins;*/

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/Home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Guard $auth, User $user)
    {


        /*
        ini bawaan dari laravel

        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);*/

        $this->user = $user;
        $this->auth = $auth;
        $this->middleware('guest', ['except'=>'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    /* Bagian autentifikasi Login */
    protected function getLogin(){
        return View('Login');
    }

    protected function postLogin(LoginRequest $request){

        if ($this->auth->attempt($request->only('email', 'password'))){
            return redirect()->route('Home');
        }

        /*return redirect('Admin')-withErrors([
            'email' => 'The email or password is invalid. Please try again.',
            ]);*/

            return Redirect::to('/Admin')->with('message','Berhasil menambahkan data !!');
    }


    /* Log out user dari aplikasi */
    protected function getLogout(){

        $this->auth->logout();
        return redirect('Admin');
        
    }
}
