<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\admin;


class AdminLoginController extends Controller
{
    use AuthenticatesUsers;
    protected $guard = 'adminMiddle';
    protected $redirectTo = 'admin/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function guard()
    {
        return auth()->guard('adminMiddle');
    }

    public function loginForm()
    {
        if (auth()->guard('adminMiddle')->user()) {
            return back();
        }
        return view('back.auth.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->guard('adminMiddle')->attempt(['email' => $request->email, 'password' => $request->password])) {
            session()->flash('message', 'Anda berhasil Login');
            return redirect()->route('admin.dashboard');
        } else {
            return back()->with('error', 'email atau password salah');
        }
    }

    public function logout(Request $request)
    {
        auth()->guard('adminMiddle')->logout();
        session('message', 'Anda Telah Keluar dari Halaman Admin');
        return redirect(url('admin/login'));
    }
}
