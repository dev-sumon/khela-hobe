<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function user(){
        $s['users'] = User::all();
        return view('admin.users.index',$s);
    }
}