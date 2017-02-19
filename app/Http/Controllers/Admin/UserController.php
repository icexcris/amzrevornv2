<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;

class UserController extends Controller
{
    public function index(User $u)
    {
    	$users = $u->paginate(15);
    	$page = 'users';
    	return view('admin.users.index', compact('users', 'page'));
    }

    public function update(User $u, $id)
    {
    	$user = $u->where('id', '=', $id)->first();
    	$page = 'users';   	
    	return view('admin.users.update', compact('user', 'page'));
    }

    public function destroy(User $u, $id)
    {
    	$u->where('id', '=', $id)->delete();
    	return redirect()->back();
    }
}
