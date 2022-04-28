<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Dashboard",
            'nav' => "dashboard",
        ];

        return view('dashboard', $data);
    }
}
