<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [];
        return view('header', $data) . view('home') . view('footer', $data);
    }
}
