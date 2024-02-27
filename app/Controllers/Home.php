<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function dashboard()
    {
        echo view('header');
        echo view('dashboard');
        echo view('footer');
    }

    public function login()
    {
        echo view('login');
    }
}
