<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Helpers\ServiceHelper as srv;

class PurchaseController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $user_id = Auth::user()->id;
        $data = [
            'menu' => 'Purchase',
            'webinars' => srv::get_paginate_where('payments', 'desc', 'user_id', $user_id, 6)
        ];

        return view('pages.user.purchase', $data);
    }
}
