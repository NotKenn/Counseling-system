<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SessionsController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }
    public function create()
    {
        return view('session.login-session');
    }

    public function store()
    {
        $attributes = request()->validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        if(Auth::attempt($attributes))
        {
            session()->regenerate();
            return redirect('dashboard')->with(['success'=>'You are logged in.']);
        }
        else{

            return back()->withErrors(['email'=>'Email or password invalid.']);
        }
    }

    public function destroy()
    {

        Auth::logout();

        return redirect('/login')->with(['success'=>'You\'ve been logged out.']);
    }
}
