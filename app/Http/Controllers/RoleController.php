<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class RoleController extends Controller
{
    public function create(Request $request)
    {
    	$request->validate([
    		'name' => 'required|unique:roles',
    		'description' => 'required|max:255',
    	]);
    }
}
