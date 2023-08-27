<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function home()
    {

        $users = DB::table('widget')->get();

        return Inertia::render('Home', ['currentPage' => 'Home','users' => $users]);
    
    }
    

    public function test()
    {
        return Inertia::render('Test', ['currentPage' => 'Test']);
    }
}