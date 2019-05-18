<?php

namespace App\Http\Controllers;

use App\CashIn;
use App\Member;
use Illuminate\Http\Request;

class CashInController extends Controller
{
    public function index()
    {	
    	$cash_in = CashIn::all();
    	return view('cash_in.index', compact('cash_in'));
    }

    public function create()
    {	
    	$members = Member::select('members.name', 'members.id')
    					   ->join('users', 'members.user_id', 'users.id')
    					   ->where('users.status', 1)
    					   ->get();
    	return view('cash_in.create', compact('members'));
    }

    public function store(Request $request)
    {	
    	$request->validate([
    	    'member' => 'required',
    	    'date' => 'required',
    	    'premium' => 'required',
    	    'admistration' => 'required',
    	    'fine' => 'required',
    	    'profit' => 'required',
    	]);

    	$total_credit = $request->premium + $request->admistration + $request->fine + $request->profit;

    	$cash_in = new CashIn;
    	$cash_in->member_id = $request->member;
    	$cash_in->date = $request->date;
    	$cash_in->premium = $request->premium;
    	$cash_in->admistration = $request->admistration;
    	$cash_in->fine = $request->fine;
    	$cash_in->profit = $request->profit;
    	$cash_in->comments = $request->comments;
    	$cash_in->total_credit = $total_credit;
    	$cash_in->save();

    	return redirect()->back()->with('msg', 'Cash In Added!');
    }
}
