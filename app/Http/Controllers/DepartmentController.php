<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function store(Request $request)
    {
    	$request->validate([
    		'name' => 'required|unique:departments',
    		'description' => 'required|max:255',
    	]);
    }
}
