<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(){
        $attribute = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'status' => ['required', 'string', 'max:255'],
            'deptid' => ['required', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);

    $attribute['password'] = Hash::make($attribute['password']); 

    User::create($attribute);

    Session::flash('success','Thankyou for the service!');

    return redirect()->route('register');

  
    }
}
