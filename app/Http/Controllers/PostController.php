<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\Widget;


class PostController  extends Controller
{

    public function store(Request $request)
    {
        $users = DB::table('widget')->insert(

            ['firstname' => $request['first_name'], 'lastname' => $request['last_name']]

        );

        return Redirect::route('users');
    }

    public function deleteuser(Request $request)
    {
        $users = Widget::where('id', $request['id'])->delete();

        return Redirect::route('users');
    }


    public function edituser(Request $request)
    {
        $user = Widget::where('id', $request['id'])->get();

        return Inertia::render('EditUser', ['currentPage' => 'Edit users', 'user' => $user]);
    }

}