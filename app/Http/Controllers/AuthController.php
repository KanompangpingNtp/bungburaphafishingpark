<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    // แสดงหน้า Login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // ประมวลผลการ Login
    public function Login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();

            // เปลี่ยนเส้นทางหลังจากเข้าสู่ระบบสำเร็จ
            return redirect()->route('AdminIndex');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }

    // ประมวลผลการ Logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('Booking');
    }
}
