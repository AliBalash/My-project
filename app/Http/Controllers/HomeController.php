<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        //All Roles
        $writer = Role::findById(1);
        $publisher = Role::findById(2);
        $editor = Role::findById(3);
        $admin = Role::findById(4);
        //All Permission
        $wpost = Permission::findById(1);
        $ppost = Permission::findById(3);
        $epost = Permission::findById(2);

        //Role linked to Permission
        $writer->givePermissionTo($wpost);
        $publisher->givePermissionTo($ppost);
        $editor->givePermissionTo($epost);

        //multiple Permission in Admin
        $admin->syncPermissions($wpost, $epost, $ppost);

//        dd($admin->permissions->pluck('name'));

        //User give Role
        $writer_user = User::find(1);
        $editor_user = User::find(2);
        $publish_user = User::find(3);
        $admin_user = User::find(4);


        $writer_user->assignRole($writer);
        $editor_user->assignRole($editor);
        $publish_user->assignRole($publisher);
        $admin_user->assignRole($admin);


        return view('home');
    }
}
