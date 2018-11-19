<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Admin\Settings\Permission;
use App\Models\Admin\Settings\Role;
use App\User;

use Gate;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalUsers = User::count();
        $totalPermissions = Permission::count();
        $totalRoles = Role::count();

        return view('admin.home.index', compact('totalUsers', 'totalPermissions', 'totalRoles') );
    }
}
