<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Profile",
            'nav' => "profile",
        ];

        return view('profile', $data);
    }
}
