<?php

namespace App\Controllers;

class HomePage extends BaseController
{
    public function index()
    {
        return view('home/homepage');
    }
}
