<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function store(Request $request)
    {
    	$request->validate([
    		'user' => 'require',
    		'department' => 'require',
    	]);
    }
}
