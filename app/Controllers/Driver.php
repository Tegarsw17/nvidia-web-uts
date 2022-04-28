<?php

namespace App\Controllers;

use App\Models\DriverModel;

class Driver extends BaseController
{
    public function __construct()
    {
        $this->drivermodel = new DriverModel();
    }

    public function index()
    {

        $data = [
            'title' => "Driver",
            'nav' => "driver",
            'list' => $this->drivermodel->findAll(),
        ];

        return view('driver', $data);
    }
}
