<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserControllerer extends Controller
{
    public function user(){
        return view('user.user');
    }
}
