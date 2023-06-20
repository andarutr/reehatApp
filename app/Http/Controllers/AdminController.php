<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Article;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Helpers\ServiceHelper as srv;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function artikel_list()
    {
        $menu = 'Artikel';
        $articles = Article::orderByDesc('id')->paginate(5);

        return view('pages.admin.artikel.list', compact('menu','articles'));
    }

    public function artikel_create()
    {
        $menu = 'Artikel';
        return view('pages.admin.artikel.create', compact('menu'));
    }

    public function artikel_edit($id)
    {
        $menu = 'Artikel';
        $artikel = Article::where('id',$id)->first();

        return view('pages.admin.artikel.edit', compact('menu','artikel'));
    }

    public function payment_list()
    {
        $menu = 'Check Pembayaran';
        $payments = Payment::orderByDesc('id')->paginate('5');

        return view('pages.admin.payment.list', compact('menu','payments'));
    }

    // ARTIKEL
    public function artikel_create_backend(Request $req)
    {
        $this->validate($req, [
            'title' => 'required',
            'description' => 'required',
            'picture' => 'required',
        ]);

        $file = $req->file('picture');
        $img = \Image::make($file);
        $img->fit(300, 169);
        $img->save('assets/img/artikel/'. $file->getClientOriginalName());

        Article::create([
            'title' => $req->title, 
            'description' => $req->description, 
            'picture' => $file->getClientOriginalName(),
            'url' => \Str::slug($req->title),
            'updated_at' => date('d F Y'),
            'created_at' => date('d F Y'),
        ]);

        Alert::success('Berhasil', 'Berhasil menambahkan artikel!');
        return redirect('/admin/artikel');
    }

    public function artikel_edit_backend(Request $req, $id)
    {
        $this->validate($req, [
            'title' => 'required',
            'description' => 'required',
        ]);

        if($req->hasFile('picture'))
        {
            $file = $req->file('picture');
            $img = \Image::make($file);
            $img->fit(300, 169);
            $img->save('assets/img/artikel/'. $file->getClientOriginalName());

            Article::where('id',$id)
                    ->update([
                        'title' => $req->title, 
                        'description' => $req->description, 
                        'picture' => $file->getClientOriginalName(),
                        'url' => \Str::slug($req->title),
                        'updated_at' => date('d F Y'),
                    ]);

            Alert::success('Berhasil', 'Berhasil memperbarui artikel!');
            return redirect('/admin/artikel');
        }else{
            Article::where('id',$id)
                    ->update([
                        'title' => $req->title, 
                        'description' => $req->description, 
                        'url' => \Str::slug($req->title),
                        'updated_at' => date('d F Y'),
                    ]);

            Alert::success('Berhasil', 'Berhasil memperbarui artikel!');
            return redirect('/admin/artikel');
        }
    }

    protected function artikel_delete_backend(Request $req, $id)
    {
        Article::where('id',$id)->delete();
        Alert::success('Berhasil', 'Berhasil menghapus artikel!');
        return redirect('/admin/artikel');
    }

    // PAYMENT
    protected function payment_delete_backend($id)
    {
        Payment::where('id',$id)->delete();
        Alert::success('Berhasil', 'Berhasil menghapus payment!');
        return redirect('/admin/pembayaran');
    }
}
