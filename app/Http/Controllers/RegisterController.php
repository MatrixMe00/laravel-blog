<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view("register.create");
    }

    public function store()
    {
        $attributes = request()->validate([
            'name'=>'required|max:255',
            'username'=>'required|min:3|max:255|unique:users,username',
            'email'=>'required|email|max:255|unique:users,email',
            'password'=>'required|min:4|max:255',
        ]);

        $attributes["password"] = bcrypt($attributes["password"]);  // hash the password

        User::create($attributes);

        session()->flash("success", "Your account has been created");

        return redirect("/");
    }
}
