<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    public function home() {
//        Role::create(['name'=>'writer']);
//        Role::create(['name'=>'store manager']);
//        Role::create(['name'=>'admin']);
//        Permission::create(['name'=>'write post']);
//        Permission::create(['name'=>'edit post']);
//        Permission::create(['name'=>'delete post']);
//        Permission::create(['name'=>'add product']);
//        Permission::create(['name'=>'edit product']);
//        Permission::create(['name'=>'delete product']);
//        Permission::create(['name'=>'add user']);
//        Permission::create(['name'=>'edit user']);
//        Permission::create(['name'=>'delete user']);
        $role1 = Role::findById(1);
        $permission1 = Permission::findById(1);
        $permission2 = Permission::findById(2);
        $permission3 = Permission::findById(3);
        $role1->givePermissionTo($permission1);
        $role1->givePermissionTo($permission2);
        $role1->givePermissionTo($permission3);

        $role2 = Role::findById(2);
        $permission3 = Permission::findById(3);
        $permission4 = Permission::findById(4);
        $permission5 = Permission::findById(5);
        $role2->givePermissionTo($permission3);
        $role2->givePermissionTo($permission4);
        $role2->givePermissionTo($permission5);

        $role3 = Role::findById(3);
        $permission7 = Permission::findById(7);
        $permission8 = Permission::findById(8);
        $permission9 = Permission::findById(9);
        $role3->givePermissionTo($permission7);
        $role3->givePermissionTo($permission8);
        $role3->givePermissionTo($permission9);
//        $user1=User::find(3);
//        $user1->assignRole(1);
        return view('home');
    }
}
