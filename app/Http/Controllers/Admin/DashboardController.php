<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\ServiceHelper as srv;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'menu' => 'Dashboard',
            'article_count' => srv::count_data('articles'),
            'user_count' => srv::count_data('users'),
            'webinar_count' => srv::count_data('webinars'),
            'payment_count' => srv::count_data('payments'),
            'new_user' => srv::get_limit('users', 'desc', 5),
            'webinars' => srv::get_limit('webinars', 'desc', 4)
        ];

        return view('pages.admin.dashboard', $data);
    }
}
