<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Login;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\UpdateLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function index()
    {
       // dd(Hash::make(123456));
        return view('login');
    }
    public function loginAdmin(Request $request)
    {
        $remember = $request->has('remember_me') ? true : false;
        $credentials=[
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials,$remember)) {
           // dd(123);
            return redirect()->route('admin.index');
        }else{

        }
    }
}
