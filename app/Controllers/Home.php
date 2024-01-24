<?php

namespace App\Controllers;

class Home extends BaseController
{
<<<<<<< HEAD
    public function index()
    {
        return view('welcome_message');
    }
    public function json()
    {
        return view('json');
    }
    public function db()
    {
        $request = \Config\Services::request();
        $json = $request->getVar('json');
        return view('db_json');
    }
    public function demo()
    {
        helper('text');
        return view('demo');
    }
    public function docs()
    {
        return view('docs');
    }
    public function info()
    {
        phpinfo(77);
    }
}
=======
    public function index(): string
    {
        return view('welcome_message');
    }

}
>>>>>>> parent of 3f442aa (UIUX)
