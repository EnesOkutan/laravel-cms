<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function store(Request $request)
    {
    	$request->validate([
    		'role' => 'require',
    		'department' => 'require',
    		'name' => 'require',
    		'surname' => 'require',
    		'email' => 'require|email',
    		'password' => 'require|min:8',
    		'completePassword' => 'require',
    	]);
    }
}
