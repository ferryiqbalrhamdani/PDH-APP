<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        $data['title'] = 'PDH';
        return view('login', $data);
    }

    public function register()
    {
        $data['title'] = 'PHD';
        return view('register', $data);
    }

    public function authenticating(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'password' => 'required',
        ]);

        // cek login valid
        if (Auth::attempt(['nip' => $request->nip, 'password' => $request->password])) {
            // cek status
            if (Auth::user()->status != 'active') {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                Session::flash('status', 'failed');
                Session::flash('message', 'Akun kamu belum aktif. Mohon contact admin!');
                return redirect('/login');
            }
            if (Auth::user()->role_id == 1) {
                
                return redirect('dashboard');
            }

            $request->session()->regenerate();

            if (Auth::user()->role_id == 2) {
                return redirect('user');
            }
        }

        Session::flash('status', 'failed');
        Session::flash('message', 'Akun tidak teregistrasi');
        return redirect('/login');
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['nip' => $request->nip, 'password' => $request->password])) {
            $request->session()->regenerate();

            if (Auth::user()->role_id == 1) {
                
                return redirect('dashboard');
            }

            $request->session()->regenerate();

            if (Auth::user()->role_id == 2) {
                return redirect('user');
            }
        }

        return back()->withErrors([
            'password' => 'Nip atau password salah',
        ]);
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }

    public function registerProcess(Request $request)
    {
        $validate = $request->validate([
            'nip' => 'required|unique:users|max:255|numeric',
            'nama' => 'required',
            'password' => 'required|max:255',
            'satker' => 'required',
            'jabatan' => 'required',
            'jk' => 'required',
        ]);

        $request['password'] = Hash::make($request->password);
        $user = User::create($request->all());

        Session::flash('status', 'success');
        Session::flash('message', 'Register berhasil!');
        return redirect('login');
    }
}
