<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public  function dashboard(){
        $users = User::all();
        $roles = Role::all();
        return view('admin.dashboard',['users'=>$users, 'roles'=>$roles]);
    }
    public function giveRole(){
        $users = User::all();
        $roles = Role::all();
        return view('admin.role', ['users'=>$users, 'roles'=>$roles]);
    }
    public function setRole(Request $request){
        $user1=User::find($request->user_id);
        $role = Role::findById($request->role_id);
        if($user1 && $role){
            $user1->assignRole($request->role_id);
            return back()->with('success', 'role granted!');
        }else{
            return back()->with('fail', 'ensure you gave correct numbers!');
        }
    }
    public function deleteRole(Request $request){
        $user1=User::find($request->user_id);
        $role = Role::findById($request->role_id);
        if($user1 && $role){
            $user1->removeRole($request->role_id);
            return back()->with('success', 'role removed!');
        }else{
            return back()->with('fail', 'ensure you gave correct numbers!');
        }
    }
}
