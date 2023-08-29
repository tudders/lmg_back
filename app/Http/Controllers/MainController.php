<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Widget;

class MainController extends Controller
{
    public function users()
    {

        $users = Widget::paginate(5);

        return Inertia::render('Users', ['currentPage' => 'Users','users' => $users]);
    
    }
    

    public function home()
    {
        return Inertia::render('Home', ['currentPage' => 'Home']);
    }

    public function newuser()
    {
        return Inertia::render('NewUser', ['currentPage' => 'New User']);
    }




}