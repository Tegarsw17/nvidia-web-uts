<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Contact Us",
            'nav' => "contact",
        ];

        return view('contact', $data);
    }
}
