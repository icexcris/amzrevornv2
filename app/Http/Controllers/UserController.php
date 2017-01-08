<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Auth;
use App\User;
class UserController extends Controller
{
public function edit(){

    	return view('/page/editprofile');
	}

public function editsave(){
		

    	return redirect()->route('user.editprofile');
	}

public function profile(){

    	return view('/page/profile');
	}



}
