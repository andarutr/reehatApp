<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Helpers\ServiceHelper as srv;

class SettingController extends Controller
{
    public function index()
    {
        $email = Auth::user()->email;
        
        $data = [
            'menu' => 'My Profile',
            'user' => srv::get_where('users', 'email', $email)
        ];

        return view('pages.setting.profile', $data);
    }

    public function update_profile(Request $req)
    {
        $this->validate($req, [
            'full_name' => 'required',
        ]);

        $email = Auth::user()->email;
        if($req->hasFile('picture'))
        {
            $path = 'assets/img/account/';
            $file = $req->file('picture');
            $upload_foto = srv::upload_img($req, 'picture', $path);

            $data = [
                'full_name' => $req->full_name,
                'picture' => $file->getClientOriginalName(),
                'updated_at' => date('d F Y'),
            ];

            $update = srv::update_where_data('users', 'email', $email, $data);
            
            return redirect()->back();
        }else{
            $data = [
                'full_name' => $req->full_name,
                'updated_at' => date('d F Y'),
            ];
            
            $update = srv::update_data('users', 'email', $email, $data);

            return redirect()->back();
        }
    }

    // CHANGE PASSWORD
    public function update_password(Request $req)
    {
        $this->validate($req, [
            'password_old' => 'required',
            'password_new' => 'required|min:8',
            'password_confirm' => 'required|same:password_new',
        ]);

        $email = Auth::user()->email;
        
        if(auth()->attempt(['email' => Auth::user()->email, 'password' => $req->password_old ]))
        {
            $data = [
                'password' => \Hash::make($req->password_new),
                'updated_at' => date('d F Y')
            ];

            $update = srv::update_data('users', 'email', $email, $data);

            return redirect()->back();
        }else{
            return redirect()->back();
        }
    } 
}
