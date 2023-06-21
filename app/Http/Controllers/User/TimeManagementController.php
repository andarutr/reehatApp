<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\TimeManagement;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Helpers\ServiceHelper as srv;

class TimeManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['menu'] = 'Time Management';

        return view('pages.user.time_management.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['menu'] = 'Time Management';
        return view('pages.user.time_management.create', $data);
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
            'batas_penggunaan' => 'required',
            'periode' => 'required'
        ]);

        $data = [
            'user_id' => Auth::user()->id,
            'aplikasi' => $req->aplikasi,
            'batas_penggunaan' => $req->batas_penggunaan,
            'periode' => $req->periode,
            'updated_at' => date('d F Y'),
            'created_at' => date('d F Y'),
        ];

        $store = srv::store_data('time_management', $data);

        return redirect('/user/time-management/'.$req->aplikasi);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($aplikasi)
    {
        $data = [
            'menu' => 'Time Management',
            'time_management' => TimeManagement::where(['aplikasi' => $aplikasi, 'user_id' => Auth::user()->id])->orderByDesc('id')->paginate(10),
            'aplikasi' => TimeManagement::where('aplikasi',$aplikasi)->first()
        ];

        return view('pages.user.time_management.aplikasi.list', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destrpy = srv::destroy_data('time_management', $id);
        return redirect()->back();
    }
}
