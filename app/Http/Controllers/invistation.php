<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Auth\Guard;

use App\Model\User;
use App\Model\Project_waiting;


class invistation extends Controller
{
    // public function login($nama_undangan)
    // {
    // 	$msg="";
    //     $nama = $nama_undangan;
    // 	return view('otherpage\login',['msg'=>$msg, 'nama'=>$nama]);
    // }


    public function login()
    {
        $msg="";
        return view('otherpage\login',['msg'=>$msg]);
    }



     public function dashboard()
    {
    	return view('dashboard-horizontal');
    }


    public function signin(Request $req)
    {

    	$username = $req->username;
    	$password = $req->password;



    	$user_account = User::where([
    								['username',$username],
    						  		['password',$password]
    						  	   ])->get()->first();
    	

    	if($user_account!= null){

            Session::put('nama',$user_account->nama);
            Session::put('level',$user_account->level);
            Session::put('username',$user_account->username);
            Session::put('email',$user_account->email);
            Session::put('phone',$user_account->phone);

    		return view('dashboard-horizontal');

    	}
    	else{

    		$msg = "Username Password Salah !!!";
    		return view('otherpage\login', ['msg' => $msg]);
    	}


    	return view('dashboard-horizontal');
    }


    public function logout(Request $request)
    {
        
 
        $request->session()->flush();
 
        $request->session()->regenerate();
 
        return view('otherpage\logout');
    }


     public function lockscreen(Request $request)
    {
        
        $msg = "";
        return view('otherpage\lockscreen', ['msg' => $msg]);
    }


        public function signinfromlockscreen(Request $req)
    {

        $username = Session::get('username');
        $password = $req->password;

        $user_account = User::where([
                                    ['username',$username],
                                    ['password',$password]
                                   ])->get()->first();
        

        if($user_account!= null){

            Session::put('nama',$user_account->nama);
            Session::put('level',$user_account->level);
            Session::put('username',$user_account->username);
            Session::put('email',$user_account->email);
            Session::put('phone',$user_account->phone);

            return view('dashboard-horizontal');

        }
        else{

            $msg = "Password Salah !!!";
            return view('otherpage\lockscreen', ['msg' => $msg]);
        }


        return view('dashboard-horizontal');
    }


    public function profile()
    {
        $pic = Session::get('nama');
        $tablewaiting = Project_waiting::where('pic',$pic)->get();
 
        return view('otherpage\profile',['tablewaiting'=>$tablewaiting]);
    }

    
}
