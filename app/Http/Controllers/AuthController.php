<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function first_page()
    {
        return view('pages.auth.first_page');
    }

    public function login_pengurus()
    {
        return view('pages.auth.login_pengurus');
    }

    public function login_pengguna()
    {
        return view('pages.auth.login_pengguna');
    }

    public function register_pengguna()
    {
        return view('pages.auth.register_pengguna');
    }

    // LOGIN
    public function login_backend(Request $req)
    {
        $this->validate($req, [
            'email' => 'required',
            'password' => 'required',
        ]);

        if(auth()->attempt(['email' => $req->email, 'password' => $req->password])){
            if(Auth::user()->role_id == 1){
                return redirect('/admin/dashboard');
            }elseif(Auth::user()->role_id == 2){
                return redirect('/user/dashboard');
            }
        }else{
            Alert::error('Gagal', 'Email dan password salah!');
            return redirect()->back();
        }
    }

    // REGISTER
    public function register_backend(Request $req)
    {
        $this->validate($req, [
            'full_name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
        ]);

        User::create([
            'full_name' => $req->full_name,
            'email' => $req->email,
            'password' => \Hash::make($req->password),
            'picture' => 'default.png',
            'role_id' => 2,
            'updated_at' => date('d F Y'),
            'created_at' => date('d F Y'),
        ]);
        Alert::success('Berhasil', 'Anda telah berhasil registrasi!');
        return redirect('/auth/login/pengguna');
    }

    public function logout()
    {
        if(Auth::user()->role_id == 1){
            Auth::logout();
            Alert::success('Berhasil', 'Anda telah logout!');
            return redirect('/auth/login/pengurus');
        }elseif(Auth::user()->role_id == 2){
            Auth::logout();
            Alert::success('Berhasil', 'Anda telah logout!');
            return redirect('/auth/login/pengguna');
        }
    }
}
