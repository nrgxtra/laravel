<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Newsletter;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    public function home() {
        Role::firstOrCreate(['name'=>'writer']);
        Role::firstOrCreate(['name'=>'store manager']);
        Role::firstOrCreate(['name'=>'admin']);
        Role::firstOrCreate(['name'=>'Super Admin']);
        Permission::firstOrCreate(['name'=>'write post']);
        Permission::firstOrCreate(['name'=>'edit post']);
        Permission::firstOrCreate(['name'=>'delete post']);
        Permission::firstOrCreate(['name'=>'add product']);
        Permission::firstOrCreate(['name'=>'edit product']);
        Permission::firstOrCreate(['name'=>'delete product']);
        Permission::firstOrCreate(['name'=>'add user']);
        Permission::firstOrCreate(['name'=>'edit user']);
        Permission::firstOrCreate(['name'=>'delete user']);
        Permission::firstOrCreate(['name'=>'edit comment']);
        Permission::firstOrCreate(['name'=>'delete comment']);
        $role1 = Role::findById(1);
        $permission1 = Permission::findById(1);
        $permission2 = Permission::findById(2);
        $permission3 = Permission::findById(3);
        $role1->givePermissionTo($permission1);
        $role1->givePermissionTo($permission2);
        $role1->givePermissionTo($permission3);

        $role2 = Role::findById(2);
        $permission4 = Permission::findById(4);
        $permission5 = Permission::findById(5);
        $permission6 = Permission::findById(6);
        $role2->givePermissionTo($permission4);
        $role2->givePermissionTo($permission5);
        $role2->givePermissionTo($permission6);

        $role3 = Role::findById(3);
        $permission10 = Permission::findById(10);
        $permission11 = Permission::findById(11);
        $role3->givePermissionTo($permission1);
        $role3->givePermissionTo($permission2);
        $role3->givePermissionTo($permission3);
        $role3->givePermissionTo($permission4);
        $role3->givePermissionTo($permission5);
        $role3->givePermissionTo($permission6);
        $role3->givePermissionTo($permission10);
        $role3->givePermissionTo($permission11);

        $role4 = Role::findById(4);
        $permission7 = Permission::findById(7);
        $permission8 = Permission::findById(8);
        $permission9 = Permission::findById(9);
        $role4->givePermissionTo($permission1);
        $role4->givePermissionTo($permission2);
        $role4->givePermissionTo($permission3);
        $role4->givePermissionTo($permission4);
        $role4->givePermissionTo($permission5);
        $role4->givePermissionTo($permission6);
        $role4->givePermissionTo($permission7);
        $role4->givePermissionTo($permission8);
        $role4->givePermissionTo($permission9);
        $role4->givePermissionTo($permission10);
        $role4->givePermissionTo($permission11);
        $user1=User::find(1);
        $user1->assignRole(4);
        return view('home');
    }

    public function subscribe(Request $request){
        $request->validate([
           'sub_email' => 'required|email',
        ]);

        $mail = $request->sub_email;
        $already_subscribed = Newsletter::hasMember($mail);
        if($already_subscribed){
            return back()->with('fail', 'You are already subscribed');
        }else{
            Newsletter::subscribe($request->sub_email);
            return back()->with('success', 'Thank You for subscribing');
        }
    }
}
