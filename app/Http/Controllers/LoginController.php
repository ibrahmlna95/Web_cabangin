<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use app\model\User;


class LoginController extends Controller
{
    public function login()
    {
             return view('login');
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('home');
        }else{
            Session::flash('error', 'username atau Password Salah');
            return redirect('login');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('login');
    }
}