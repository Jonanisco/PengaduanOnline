<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Http\Requests;
use App\User;

class UserController extends Controller
{
  
	public function postSignUp(Request $request)
	{
		
		/* validasi data yang dimasukkan terlebih dahulu */
		$this->validate($request, [
 			'username' => 'required|unique:users',
 			'password' => 'required|min:4',
 			'email'	   => 'required|email',
 			'nomor_hp' => 'required'

			]);

		$username = $request['username'];
		$password = bcrypt($request['password']);
		$email = $request['email'];
		$nomor_hp = $request['nomor_hp'];


		$user = new User();
		$user->username = $username;
		$user->password = $password;
		$user->email = $email;
		$user->nomor_hp = $nomor_hp;
		$user->status = "Admin";

		$user->save();
		//Auth::login($user);
		return redirect()->back();
		//return redirect()->rout('Home');


	}

	public function postSignIn(Request $request)
	{
		$this->validate($request, [
			'username' => 'required:users',
			'password' => 'required:users'
			]);

		$pesan = "username atau password yang anda masukkan salah";
		$status = $request['username'];

		$user = User::find($request['username']);
		$statusUser = DB::table('users')->where('username', $status)->first();
		

		
		


		if (Auth::attempt(['username' => $request['username'], 'password' => $request['password']])){
			
			if ($statusUser->status == "Admin"){

				return redirect()->route('dasboard');

			}
			elseif ($statusUser->status == "User") {
				$pesan = "Maaf Anda Tidak Bisa Login Kehalaman Ini";
			}

			
		}

		return redirect()->back()->with('message', $pesan); 
	}

	

	public function getLogout()
	{
		Auth::logout();
		return redirect()->route('Admin');
	}


}
