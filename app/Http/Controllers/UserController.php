<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index()
    {
        $users = DB::table('users')->where('name', 'NOT', 'Admin')->get();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->address = $request->address;
        $user->save();
        $user->roles()->attach(2);
    }

    public function update(Request $request)
    {

    }

    public function delete($id)
    {

    }
}
