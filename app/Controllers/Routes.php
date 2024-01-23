<?php

namespace App\Controllers;

class Routes extends BaseController
{
    public function index(): string
    {
        return view('beranda');
    }
    public function test(): string
    {
        return view('test');
    }
    public function gallery(): string
    {
        return view('gallery');
    }
    
    
}
