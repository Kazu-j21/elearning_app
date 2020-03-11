<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function members(){
        $members=User::where('id', '!=', auth()->user()->id)->get();

        return view('users.members', compact('members'));
    }

    public function show($id){
        $user=User::find($id);

        return view('users.show', compact('user'));
    }

    public function profile(){
    
        return view('users.profile');
    }

    public function category(){

        return view('users.category');
    }
}
