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
    public function allPosts()
    {
    	return view('admin.posts',[
    		'posts' => Post::latest()->paginate(10)
    	]);
    }

    public function allDepartments()
    {
    	return view('admin.departments',[
    		'departments' => Department::latest()->paginate(10)
    	]);
    }

    public function allManagers()
    {
    	return view('admin.managers',[
    		'managers' => Manager::latest()->paginate(10)
    	]);
    }

    public function allRoles()
    {
    	return view('admin.roles',[
    		'roles' => Role::latest()->paginate(10)
    	]);
    }

    public function allWorkers()
    {
        return view('admin.workers',[
            'workers' => User::latest()->paginate(10)
        ]);
    }
}
