<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public function login()
    {
        $data = [
            'title' => 'Login',
        ];
        return view('admin.login', $data);
    }
    public function login_check(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required'

            ],
            [
                'username.required' => 'Username tidak boleh kosong',
                'password.required' => 'password tidak boleh kosong'
            ]
        );

        $username = $request->username;
        $password = $request->password;
        $cek = User::where('username', $username)
            ->orWhere('email', $username)
            ->first();
        if ($cek) {
            if (Hash::check($password, $cek->password)) {
                $request->session()->put('admin-account', $cek);
                return redirect()->route('dashboard')->with('success', 'Anda berhasil login');
            } else {
                return redirect()->route('login')->with('failed', 'Password salah!!');
            }
        } else {
            return redirect()->route('login')->with('failed', 'Username tidak terdaftar!!');
        }
    }
    public function index()
    {
        //
    }
    public function logout(Request $request)
    {
        $request->session()->forget('admin-account');
        return redirect()->route('home');
    }
}
