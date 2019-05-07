<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function store(Request $request)
    {
    	$request->validate([
    		'role' => 'required',
    		'department' => 'required',
    		'name' => 'required',
    		'surname' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|min:8',
    		'completePassword' => 'required',
    	]);
    }
}
