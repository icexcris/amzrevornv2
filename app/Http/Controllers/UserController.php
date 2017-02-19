<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\AccountRequest;
use App\Http\Requests\UserPassword;
use App\Http\Requests\UserAccount;
use Auth;
use App\User;
class UserController extends Controller
{
	public function edit()
	{
		return view('/page/editprofile');
	}

	public function storeAccount(UserAccount $ua, User $u)
	{
		$u->whereId(Auth::user()->id)->update([
			'name' => $ua->get('name'),
			'email' => $ua->get('email'),
		]);
		return redirect()->route('user.editprofile');
	}

	public function storePassword(UserPassword $up, User $u){
		if(!in_array(Auth::user()->provider, ['facebook', 'twitter', 'googleplus'])){
			$old = bcrypt($up->get('oldpassword'));
			if($old == Auth::user()->password){
				if($up->get('new_password') == $up->get('new_password_confirm')){
					$u->whereId(Auth::user()->id)->update(['password' => bcrypt($up->get('new_password'))]);
				}else{
					//return with error
					return redirect()->route('')->with('status', 'The new password don\'t match!');
				}
			}else{
				// old password don't match
				return redirect()->route('')->with('status', 'The old password don\'t match!');
			}		
		}else{
			// check pasword and confirmatin and store new password
			if($up->get('new_password') == $up->get('new_password_confirm')){
				$u->whereId(Auth::user()->id)->update(['password' => bcrypt($up->get('new_password'))]);
				return redirect()->route('user.editprofile');
			}else{
				//return with error
				return redirect()->route('')->with('status', 'The new password don\'t match!');
			}
		}
		//check if old password match
		//if it matches then store the new password and redirect with success
	}

	public function storeProfile(){

	}

	public function profile()
	{
		return view('/page/profile');
	}

}