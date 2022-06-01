<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();

        //dd('UserController@index');

        return view ('users.index', compact('users'));
    }

    public function show($id)
    {
        //dd('UserController@show');
        
        // return view ('users.show', $id);

        if (!$user = User::find($id))
            return  redirect()->route('users.index');

        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
