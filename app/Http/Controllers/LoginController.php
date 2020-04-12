<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){
    	
    	return view('login');
    }

    public function verify(Request $req){
    
    	
    	$user = DB::table('users')
    				->where('username', $req->uname)
    				->where('password', $req->password)
    				->first();
    	
    	if($user != null){
            //if()
            //$req->session()->put('username', $req->uname);
            //$req->session()->put('type', $user->type);
    		return redirect('\adminhome');//->route('about');
    	}else{
            //$req->session()->flash('msg', 'invalid username/password');
            //return view('login.index');
            return redirect('/login');
    	}
   	}
}
