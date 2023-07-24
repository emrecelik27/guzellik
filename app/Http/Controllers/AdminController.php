<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function loginScreen()
    {
        return view("Admin.login");
    }

    public function indexScreen()
    {
        return view("Admin.index");
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()->active == 1 || Auth::user()->deleted == 0) {
                return redirect()->route("adminScreen");
            }
            return redirect()->back()->with("error", "Buna erişim yetkiniz yoktur.");
        } else {
            return redirect()->back()->with("error", "Kullanıcı adı ya da şifre hatalı");
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route("loginScreen");
    }
}
