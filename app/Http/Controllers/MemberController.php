<?php

namespace App\Http\Controllers;

use App\Member;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    public function index()
    {
    	$members = Member::all();
    	return view('members.index');
    }

    public function create()
    {	
    	return view('members.create');
    }

    public function store(Request $request)
    {	
    	$request->validate([
    	    'password' => 'required|min:8',
    	    'name' => 'required',
    	    'dob' => 'required',
    	    'nid' => 'required',
    	    'gender' => 'required',
    	    'phone' => 'required|unique:members',
    	    'email' => 'required|unique:users',
    	]);

    	$user = new User;
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = Hash::make($request->password);
    	$user->user_role = 2;
    	$user->status = 1;
    	$user->save();

    	$user_id = User::where('email', $request->email)->first();

    	$member = new Member;
    	$member->name = $request->name;
    	$member->user_id = $user_id->id;
    	$member->gender = $request->gender;
    	$member->dob = $request->dob;
    	$member->father = $request->father;
    	$member->mother = $request->mother;
    	$member->nid = $request->nid;
    	$member->phone = $request->phone;
    	$member->present_addr = $request->present_addr;
    	$member->permanent_addr = $request->permanent_addr;
    	$member->spouse = $request->spouse;

    	if($request->hasFile('photo'))
    	{
    	    $image = $request->photo;
    	    $ext = $image->getClientOriginalExtension();
    	    $filename = uniqid().'.'.$ext;
    	    $image->storeAs('public',$filename);
    	    $member->photo = $filename;
    	}

    	$member->save();

    	return redirect()->back()->with('msg', 'Member Added!');
    }
}
