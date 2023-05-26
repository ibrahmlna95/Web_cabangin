<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{    public function login()
    {
        return view('login');
    }
    public function proseslogin(Request $request)
    {
        $akun = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::guard('akun')->attempt($akun)) {
            return redirect ('home'); 
           } else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('login  ');}
        }
           
    public function actionlogout()
    {
        Auth::logout();
        return redirect('salah');
    }
}