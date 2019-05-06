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
    //All your records are taken and the related page is displayed.

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

    //To add a record to the corresponding pages according to the route is being routed.

    public function getCreatePost(Request $request)
    {
        return view('admin.create.post',[
            'departments' => Department::all()
        ]);
    }

    public function getCreateDepartment(Request $request)
    {
        return view('admin.create.department');
    }

    public function getCreateRole(Request $request)
    {
        return view('admin.create.role');
    }

    public function getCreateManager(Request $request)
    {
        return view('admin.create.manager',[
            'users' => User::all(),
            'departments' => Department::all()
        ]);
    }

    public function getCreateWorker(Request $request)
    {
        return view('admin.create.worker',[
            'roles' => Role::all(),
            'departments' => Department::all()
        ]);
    }

}
