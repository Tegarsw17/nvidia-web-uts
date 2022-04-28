<?php

namespace App\Controllers;

class Techno extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Technologies",
            'nav' => "techno",
        ];

        return view('techno', $data);
    }
}
