<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Article;
use App\Models\Webinar;
use App\Models\Payment;
use App\Models\TimeManagement;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function dashboard()
    {
        $menu = 'Dashboard';
        $article_count = Article::count();
        $user_count = User::count();
        $webinar_count = Webinar::count();
        $payment_count = Payment::where('name_user', Auth::user()->full_name)->count();
        $new_user = User::orderByDesc('id')->limit(5)->get();
        $webinars = Webinar::orderByDesc('id')->limit(5)->get();
        $payment_nav = Payment::orderByDesc('id')->get();

        return view('pages.user.dashboard', compact('menu','article_count','user_count','webinar_count','payment_count','new_user','webinars','payment_nav'));
    }

    public function my_profile()
    {
        $menu = 'My Profile';
        $user = User::where('email', Auth::user()->email)->first();
        $payment_count = Payment::where('name_user', Auth::user()->full_name)->count();
        $payment_nav = Payment::orderByDesc('id')->get();

        return view('pages.user.my_profile', compact('menu','user','payment_count','payment_nav'));
    }

    public function time_management()
    {
        $menu = 'Time Management';
        $payment_count = Payment::where('name_user', Auth::user()->full_name)->count();
        $payment_nav = Payment::orderByDesc('id')->get();

        return view('pages.user.time_management.list', compact('menu','payment_count','payment_nav'));
    }

    public function time_management_app($aplikasi)
    {
        $menu = 'Time Management';
        $payment_count = Payment::where('name_user', Auth::user()->full_name)->count();
        $payment_nav = Payment::orderByDesc('id')->get();
        $time_management = TimeManagement::where(['aplikasi' => $aplikasi, 'user_id' => Auth::user()->id])->orderByDesc('id')->paginate(10);
        $aplikasi = TimeManagement::where('aplikasi',$aplikasi)->first(); 

        return view('pages.user.time_management.aplikasi.list', compact('menu','payment_count','payment_nav','aplikasi','time_management'));
    }

    public function time_management_create()
    {
        $menu = 'Time Management';
        $payment_count = Payment::where('name_user', Auth::user()->full_name)->count();
        $payment_nav = Payment::orderByDesc('id')->get();

        return view('pages.user.time_management.create', compact('menu','payment_count','payment_nav'));
    }
    
    public function time_management_create_backend(Request $req)
    {
        $this->validate($req, [
            'batas_penggunaan' => 'required',
            'periode' => 'required'
        ]);

        TimeManagement::create([
            'user_id' => Auth::user()->id,
            'aplikasi' => $req->aplikasi,
            'batas_penggunaan' => $req->batas_penggunaan,
            'periode' => $req->periode,
            'updated_at' => date('d F Y'),
            'created_at' => date('d F Y'),
        ]);

        Alert::success('Berhasil', 'Berhasil tambah data!');
        return redirect('/user/time-management/'.$req->aplikasi);
    }

    protected function time_management_delete($id)
    {
        TimeManagement::where('id',$id)->delete();
        Alert::success('Berhasil', 'Berhasil hapus data!');
        return redirect()->back();
    }

    public function webinar_list()
    {
        $menu = 'Webinar';
        $webinars = Webinar::orderByDesc('id')->paginate(6);
        $payment_count = Payment::where('name_user', Auth::user()->full_name)->count();
        $payment_nav = Payment::orderByDesc('id')->get();

        return view('pages.user.webinar.list', compact('menu','webinars','payment_count','payment_nav'));
    }

    public function webinar_detail($url)
    {
        $menu = 'Webinar';
        $payment_count = Payment::where('name_user', Auth::user()->full_name)->count();
        $payment_nav = Payment::orderByDesc('id')->get();
        $webinar = Webinar::where('url',$url)->first();

        return view('pages.user.webinar.detail', compact('menu','payment_count','payment_nav','webinar'));
    }

    public function artikel_list()
    {
        $menu = 'Artikel';
        $articles = Article::orderByDesc('id')->paginate(6);
        $payment_count = Payment::where('name_user', Auth::user()->full_name)->count();
        $payment_nav = Payment::orderByDesc('id')->get();

        return view('pages.user.artikel.list', compact('menu','articles','payment_count','payment_nav'));
    }

    public function artikel_detail($url)
    {
        $menu = 'Artikel';
        $artikel = Article::where('url',$url)->first();
        $payment_count = Payment::where('name_user', Auth::user()->full_name)->count();
        $payment_nav = Payment::orderByDesc('id')->get();

        return view('pages.user.artikel.detail', compact('menu','artikel','payment_count','payment_nav'));
    }

    public function payment()
    {
        $menu = 'Webinar';
        $payment_count = Payment::where('name_user', Auth::user()->full_name)->count();
        $payment_nav = Payment::orderByDesc('id')->get();

        return view('pages.user.payment', compact('menu','payment_count','payment_nav'));
    }

    public function payment_backend($url)
    {
        $webinar = Webinar::where('url',$url)->first();

        Payment::create([
            'user_id' => Auth::user()->id,
            'webinar' => $webinar->title,
            'cost' => $webinar->cost,
            'name_user' => Auth::user()->full_name,
            'picture_user' => Auth::user()->picture,
            'status' => 'Belum Bayar',
            'url' => \Str::slug($webinar->title),
            'updated_at' => date('d F Y'),
            'created_at' => date('d F Y'),
        ]);

        Alert::info('Info', 'Silahkan lakukan pembayaran terlebih dahulu!');
        return redirect('/user/pembayaran');
    }

    // MY PROFILE
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

    // CHANGE PASSWORD
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

    // PURCHASE
    public function purchase_list()
    {
        $menu = 'Purchase';
        $payment_count = Payment::where('name_user', Auth::user()->full_name)->count();
        $payment_nav = Payment::orderByDesc('id')->get();
        $webinars = Payment::where('user_id', Auth::user()->id)->orderByDesc('id')->paginate(6);

        return view('pages.user.purchase', compact('menu','payment_count','payment_nav','webinars'));
    }
}
