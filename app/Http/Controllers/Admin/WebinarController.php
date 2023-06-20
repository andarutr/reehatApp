<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\ServiceHelper as srv;

class WebinarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'menu' => 'Webinar',
            'webinars' => srv::get_paginate('webinars', 'desc', 5)
        ];

        return view('pages.admin.webinar.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'menu' => 'Webinar'
        ];

        return view('pages.admin.webinar.create', $data);
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
            'mentor' => 'required',
            'cost' => 'required',
            'video_url' => 'required',
            'description' => 'required',
            'thumbnail' => 'required',
        ]);

        $file = $req->file('thumbnail');
        $upload = srv::upload_img($req, 'thumbnail', 'assets/img/webinar/');

        $data = [
            'title' => $req->title,
            'mentor' => $req->mentor,
            'cost' => $req->cost,
            'video_url' => $req->video_url,
            'description' => $req->description,
            'thumbnail' => $file->getClientOriginalName(),
            'url' => \Str::slug($req->title),
            'updated_at' => date('d F Y'),
            'created_at' => date('d F Y'),
        ];

        $store = srv::store_data('webinars', $data);

        return redirect('/admin/webinar');
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
            'menu' => 'Webinar',
            'webinar' => srv::get_detail('webinars', $id)
        ];

        return view('pages.admin.webinar.edit', $data);
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
            'mentor' => 'required',
            'cost' => 'required',
            'video_url' => 'required',
            'description' => 'required',
        ]);

        if($req->hasFile('picture'))
        {
            $data = [
                'title' => $req->title,
                'mentor' => $req->mentor,
                'cost' => $req->cost,
                'video_url' => $req->video_url,
                'description' => $req->description,
                'thumbnail' => $file->getClientOriginalName(),
                'url' => \Str::slug($req->title),
                'updated_at' => date('d F Y'),
            ];

            $file = $req->file('thumbnail');
            $upload = srv::upload_img($req, 'thumbnail', 'assets/img/webinar/');
            $update = srv::update_data('webinars', 'id', $id, $data);
        }else{
            $data = [
                'title' => $req->title,
                'mentor' => $req->mentor,
                'cost' => $req->cost,
                'video_url' => $req->video_url,
                'description' => $req->description,
                'url' => \Str::slug($req->title),
                'updated_at' => date('d F Y'),
            ];
            
            $update = srv::update_data('webinars', 'id', $id, $data);
        }

        return redirect('/admin/webinar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = srv::destroy_data('webinars', $id);
        return redirect()->back();
    }
}
