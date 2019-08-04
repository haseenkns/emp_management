<?php

namespace App\Http\Controllers;
use App\Models\Role;
use App\Models\Branch;

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

     public function addRoles(Request $request){

     }

     Public function showBranch(){

     }


}
