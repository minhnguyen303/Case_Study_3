<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthController extends Controller
{

    public function get()
    {
        return view('account');
    }

    public function post(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();

            if (Gate::allows('admin')){
                return redirect()->intended('admin');
            }
            return redirect()->intended('cart/checkout');
        }

        return back()->withErrors([
            'email' => 'Tài khoản hoặc mật khẩu không chính xác.',
        ]);
    }
}
