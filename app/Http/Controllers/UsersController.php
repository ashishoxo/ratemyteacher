<?php

namespace App\Http\Controllers;

use App\DataTables\UsersDataTable;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\User;

class UsersController extends Controller
{
    public function list_users()
    {	
    	$model = User::all();

        return view('admin.users.list',['users'=>$model]);
    }
    public function add_user()
    {
    	return view('admin.users.add');
    }
}
