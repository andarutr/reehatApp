<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Helpers\ServiceHelper as srv;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $full_name = Auth::user()->full_name;

        $data = [
            'menu' => 'Dashboard',
            'article_count' => srv::count_data('articles'),
            'user_count' => srv::count_data('users'),
            'webinar_count' => srv::count_data('webinars'),
            'payment_count' => srv::count_where_data('payments', 'name_user', $full_name),
            'new_user' => srv::get_limit('users', 'desc', 5),
            'webinars' => srv::get_limit('webinars','desc', 5),
        ];

        return view('pages.user.dashboard', $data);
    }
}
