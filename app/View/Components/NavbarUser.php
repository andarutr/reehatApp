<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;
use App\Helpers\ServiceHelper as srv;

class NavbarUser extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $full_name = Auth::user()->full_name;

        $data = [
            'payment_count' => srv::count_where_data('payments', 'name_user', $full_name),
            'payment_nav' => srv::get_data('payments', 'desc')
        ];

        return view('components.navbar-user', $data);
    }
}
