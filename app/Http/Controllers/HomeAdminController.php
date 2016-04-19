<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeAdminController extends Controller
{
    //
    public function LoginAdmin()
    {
    	return view('Admin.LoginAdmin');
    }
}
