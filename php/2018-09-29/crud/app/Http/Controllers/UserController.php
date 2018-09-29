<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    function getUser(){
        
        $users = user::all();
        return view('user',['users' => $users]);
    }

    

}
