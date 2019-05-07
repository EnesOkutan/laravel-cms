<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class RoleController extends Controller
{
    public function store(Request $request)
    {
    	$request->validate([
    		'name' => 'required|unique:roles',
    		'description' => 'required|max:255',
    	]);

    	$role = new Role();
    	$role->name = $request->name;
    	$role->description = $request->description;
    	$role->save();

    	return redirect('/admin/roles');
    }
}
