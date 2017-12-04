<?php

namespace App\Http\Controllers;
use App\Models\Role;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function dashboard(){
         return view('admin.dashboard');
     }

     public function showRoles(){
        $roles=Role::get();
        return view('admin.roles',compact('roles'));
     }
}
