<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Department;
use App\Worker;
use App\Manager;
use App\Role;
use App\User;

class AdminController extends Controller
{
    public function allPosts(Request $request)
    {
    	return view('admin.posts',[
    		'posts' => Post::orderBy('id','desc')->paginate(10)
    	]);
    }

    public function allDepartments(Request $request)
    {
    	return view('admin.departments',[
    		'departments' => Department::orderBy('id')->paginate(10)
    	]);
    }

    public function allManagers(Request $request)
    {
    	return view('admin.managers',[
    		'managers' => Manager::orderBy('id')->paginate(10)
    	]);
    }

    public function allRoles(Request $request)
    {
    	return view('admin.roles',[
    		'roles' => Role::orderBy('id')->paginate(10)
    	]);
    }

    public function allWorkers(Request $request)
    {
        return view('admin.workers',[
            'workers' => User::orderBy('id')->paginate(10)
        ]);
    }
}
