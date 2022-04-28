<?php

namespace App\Controllers;

class Driver extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Driver",
            'nav' => "driver",
        ];

        return view('driver', $data);
    }
}
