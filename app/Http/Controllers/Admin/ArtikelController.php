<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\ServiceHelper as srv;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'menu' => 'Artikel',
            'articles' => srv::get_paginate('articles', 'desc', 5)
        ];

        return view('pages.admin.artikel.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['menu'] = 'Artikel';
        return view('pages.admin.artikel.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $this->validate($req, [
            'title' => 'required',
            'description' => 'required',
            'picture' => 'required',
        ]);

        $path = 'assets/img/artikel/';
        $file = $req->file('picture');
        $upload = srv::upload_img($req, 'picture', $path);

        $data = [
            'title' => $req->title, 
            'description' => $req->description, 
            'picture' => $file->getClientOriginalName(),
            'url' => \Str::slug($req->title),
            'updated_at' => date('d F Y'),
            'created_at' => date('d F Y'),
        ];

        $store = srv::store_data('articles', $data);

        return redirect('/admin/artikel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'menu' => 'Artikel',
            'artikel' => srv::get_detail('articles', $id)
        ];

        return view('pages.admin.artikel.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $this->validate($req, [
            'title' => 'required',
            'description' => 'required',
        ]);

        if($req->hasFile('picture'))
        {
            $path = 'assets/img/artikel/';
            $file = $req->file('picture');
            $upload = srv::upload_img($req, 'picture', $path);

            $data = [
                'title' => $req->title, 
                'description' => $req->description, 
                'picture' => $file->getClientOriginalName(),
                'url' => \Str::slug($req->title),
                'updated_at' => date('d F Y'),
            ];

            $update = srv::update_data('articles', 'id', $id, $data);
        }else{
            $data = [
                'title' => $req->title, 
                'description' => $req->description, 
                'url' => \Str::slug($req->title),
                'updated_at' => date('d F Y'),
            ];

            $update = srv::update_data('articles', 'id', $id, $data);
        }

        return redirect('/admin/artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = srv::destroy_data('articles', $id);
        return redirect('/admin/artikel');
    }
}
