<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function Connection()
    {
        $db = \Config\Database::connect();
        echo 'sukses';
    }

    public function index()
    {
        return view('template/header') . view('home') . view('template/footer');
    }

    public function about()
    {
        return view('template/header') . view('about') . view('template/footer');
    }

    public function visiMisi()
    {
        return view('template/header') . view('visimisi') . view('template/footer');
    }

    public function profile()
    {
        return view('template/header') . view('profile') . view('template/footer');
    }

  

    public function contact()
    {
        return view('template/header') . view('contact') . view('template/footer');
    }

    public function gallery()
    {
        return view('template/header') . view('gallery') . view('template/footer');
    }

    public function articles()
    {
        return view('template/header') . view('articles') . view('template/footer');
    }
    public function events()
    {
        return view('template/header') . view('events') . view('template/footer');
    }
    public function clients()
    {
        return view('template/header') . view('clients') . view('template/footer');
    }

}
