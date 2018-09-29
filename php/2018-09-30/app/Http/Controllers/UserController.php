<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    function layTatCaNguoiDung(){
        $tatCaNguoiDung= User::all();
        return $tatCaNguoiDung;
    }
    function layMotNguoiDung($id){
        $motNguoiDung=User::find($id);
        return view('user',['user'=>$motNguoiDung]);
    }
    function xoaNguoiDung($id){
        return 'abc';
    }
}
