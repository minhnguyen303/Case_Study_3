<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.index');
    }

    public function categories()
    {

    }

    public function products()
    {

    }

    public function roles()
    {

    }

    public function listUsers()
    {
        return view('admin.users.index');
    }

    public function createUsers()
    {
        return view('admin.users.create');
    }

    public function storeUsers()
    {

    }
}
