<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        $menu = 'Dashboard';
        return view('pages.user.dashboard', compact('menu'));
    }

    public function my_profile()
    {
        $menu = 'My Profile';
        return view('pages.user.my_profile', compact('menu'));
    }

    public function time_management()
    {
        $menu = 'Time Management';
        return view('pages.user.time_management.list', compact('menu'));
    }

    public function time_management_ig()
    {
        $menu = 'Time Management';
        return view('pages.user.time_management.instagram.list', compact('menu'));
    }

    public function time_management_create()
    {
        $menu = 'Time Management';
        return view('pages.user.time_management.create', compact('menu'));
    }

    public function webinar_list()
    {
        $menu = 'Webinar';
        return view('pages.user.webinar.list', compact('menu'));
    }

    public function payment()
    {
        $menu = 'Webinar';
        return view('pages.user.payment', compact('menu'));
    }

    public function webinar_detail()
    {
        $menu = 'Webinar';
        return view('pages.user.webinar.detail', compact('menu'));
    }

    public function artikel_list()
    {
        $menu = 'Artikel';
        return view('pages.user.artikel.list', compact('menu'));
    }

    public function artikel_detail()
    {
        $menu = 'Artikel';
        return view('pages.user.artikel.detail', compact('menu'));
    }
}
