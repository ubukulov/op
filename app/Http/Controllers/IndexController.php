<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function welcome()
    {
        return view('welcome');
    }

    public function users()
    {
        return view('users');
    }

    public function resume()
    {
        return view('resume');
    }
}
