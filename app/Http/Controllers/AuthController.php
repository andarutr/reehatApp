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

    public function login()
    {
        return view('pages.auth.login');
    }

    public function register()
    {
        return view('pages.auth.register');
    }

    // LOGIN
    public function proses_login(Request $req)
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
            return redirect()->back();
        }
    }

    // REGISTER
    public function proses_register(Request $req)
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

        return redirect('/login');
    }

    public function destroy()
    {
        if(Auth::user()->role_id == 1){
            Auth::logout();
            return redirect('/login');
        }elseif(Auth::user()->role_id == 2){
            Auth::logout();
            return redirect('/login');
        }
    }
}
