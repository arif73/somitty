<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $users = User::all();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'password' => 'required|min:8',
            'name' => 'required',
            'email' => 'required|unique:users',
            'user_role' => 'required',
        ]);
        
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->user_role = $request->user_role;
        $user->status = 1;
        $user->save();
        return redirect()->back()->with('msg', 'User Added!');
    }

    public function change_status($id)
    {
        $user = User::find($id);
        if ($user->status == 1) 
        {
            $user->update(['status' => 0]);
        }
        else
        {
            $user->update(['status' => 1]);
        }

        return redirect()->back()->with('msg', 'Status Changed!'); 
    }

    public function change_pass(Request $request)
    {
        $request->validate([
            'password' => 'required|min:8',
        ]);
        $user = User::find($request->id);
        $user->update(['password' => Hash::make($request->password)]);
        return redirect()->back()->with('msg', 'Password Changed!'); 
    }


}
