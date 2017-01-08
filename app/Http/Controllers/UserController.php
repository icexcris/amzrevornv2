<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
public function edit(){

    	return view('/page/editprofile');
	}

public function profile(){

    	return view('/page/profile');
	}



}
