<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
        $users = User::where('role', 1)->latest()->paginate(10);

        return view('user', compact('users'));
    }

    public function create()
    {
        return view('user/tambahUser');
    }

}
