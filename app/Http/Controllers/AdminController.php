<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $menu = 'Dashboard';
        return view('pages.admin.dashboard', compact('menu'));
    }

    public function my_profile()
    {
        $menu = 'My Profile';
        return view('pages.admin.my_profile', compact('menu'));
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
}
