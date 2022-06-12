<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Article;
use App\Models\Webinar;
use App\Models\Payment;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function dashboard()
    {
        $menu = 'Dashboard';
        $article_count = Article::count();
        $user_count = User::count();
        $webinar_count = Webinar::count();
        $payment_count = Payment::count();
        $new_user = User::orderByDesc('id')->limit(5)->get();

        return view('pages.admin.dashboard', compact('menu','article_count','user_count','webinar_count','payment_count','new_user'));
    }

    public function my_profile()
    {
        $menu = 'My Profile';
        $user = User::where('email', Auth::user()->email)->first();

        return view('pages.admin.my_profile', compact('menu','user'));
    }

    public function webinar_list()
    {
        $menu = 'Webinar';
        return view('pages.admin.webinar.list', compact('menu'));
    }

    public function webinar_create()
    {
        $menu = 'Webinar';
        return view('pages.admin.webinar.create', compact('menu'));
    }

    public function artikel_list()
    {
        $menu = 'Artikel';
        return view('pages.admin.artikel.list', compact('menu'));
    }

    public function artikel_create()
    {
        $menu = 'Artikel';
        return view('pages.admin.artikel.create', compact('menu'));
    }

    public function payment_list()
    {
        $menu = 'Check Pembayaran';
        return view('pages.admin.payment.list', compact('menu'));
    }

    // My Profile
    public function my_profile_backend(Request $req)
    {
        $this->validate($req, [
            'full_name' => 'required',
            'password' => 'required',
        ]);

        if(auth()->attempt(['email' => Auth::user()->email, 'password' => $req->password]))
        {
            if($req->hasFile('picture'))
            {
                $file = $req->file('picture');
                $img = \Image::make($file);
                $img->fit(300);
                $img->save('assets/img/account/'. $file->getClientOriginalName());

                User::where('email', Auth::user()->email)
                    ->update([
                        'full_name' => $req->full_name,
                        'picture' => $file->getClientOriginalName(),
                        'updated_at' => date('d F Y'),
                    ]);
                Alert::success('Berhasil', 'Berhasil update profile!');
                return redirect()->back();
            }else{
                User::where('email', Auth::user()->email)
                    ->update([
                        'full_name' => $req->full_name,
                        'updated_at' => date('d F Y'),
                    ]);
                Alert::success('Berhasil', 'Berhasil update profile!');
                return redirect()->back();
            }
        }else{
            Alert::error('Gagal', 'Password anda salah!');
            return redirect()->back();
        }
        
    }

    // Change Password
    protected function change_password_backend(Request $req)
    {
        $this->validate($req, [
            'password_old' => 'required',
            'password_new' => 'required|min:8',
            'password_confirm' => 'required|same:password_new',
        ]);

        if(auth()->attempt(['email' => Auth::user()->email, 'password' => $req->password_old ]))
        {
            User::where('email', Auth::user()->email)
                    ->update([
                        'password' => \Hash::make($req->password_new),
                        'updated_at' => date('d F Y')
                    ]);
            Alert::success('Berhasil', 'Berhasil memperbarui password!');
            return redirect()->back();
        }else{
            Alert::error('Gagal', 'Password anda salah!');
            return redirect()->back();
        }
    } 
}
