<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class LoginController extends Controller
{
    public function create(){
        return view('login.create');
    }

    // storing user data
    public function store(Request $request)
    {
        $login = new Login;
        $login->username = $request->input('username');
        $login->password = $request->input('password');
        $login->save();
        return redirect()->back()->with('status', 'User added Successfully');
    }

    public function showLogin()
    {
        return view('login.login');
    }


    public function login(Request $request)
    {

        $usernameGiven = $request->username;
        $passwordGiven = $request->password;
        
        // should be prestored
        $adminCreds = \App\Models\Login::all();

        if ($adminCreds) {
            $superAdminUser = $adminCreds[0]->username;
            $superAdminPass = $adminCreds[0]->password;
            $adminUser1     = $adminCreds[1]->username;
            $adminPass      = $adminCreds[1]->password;
        }

        if ( $usernameGiven == $superAdminUser && $passwordGiven == $superAdminPass ) {
            return view('articles.actions.create');
        }

         elseif ($usernameGiven == $adminUser1 && $passwordGiven == $adminPass){
            return view('articles.actions.create');
        } else {
            return view('admin');
        }
    }

}

