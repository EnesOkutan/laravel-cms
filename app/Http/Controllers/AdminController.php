<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Department;
use App\Worker;
use App\Manager;
use App\Role;

class AdminController extends Controller
{
    public function allPost()
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

    public function allWorkers()
    {
    	return view('admin.managers',[
    		'workers' => Worker::latest()->paginate(10)
    	]);
    }

    public function allManagers()
    {
    	return view('admin.posts',[
    		'managers' => Manager::latest()->paginate(10)
    	]);
    }

    public function allRoles()
    {
    	return view('admin.roles',[
    		'posts' => Role::latest()->paginate(10)
    	]);
    }
}
