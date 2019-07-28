<?php

namespace App\Http\Controllers;

use App\BankBalance;
use App\CashOut;
use App\Member;
use Illuminate\Http\Request;

class CashOutController extends Controller
{
    public function index()
    {	
    	// $cash_out = CashOut::all();
        
    	return view('cash_out.index');
    }

    public function create()
    {	
    	$members = Member::select('members.name', 'members.id')
                           ->where('members.id','!=' ,1)
    					   ->join('users', 'members.user_id', 'users.id')
    					   ->where('users.status', 1)
    					   ->get();
    	return view('cash_out.create', compact('members'));
    }

    public function store(Request $request)
    {	
    	$request->validate([
    	    
    	    'date' => 'required',
    	   
    	]);

    	$total_debit = $request->admistration + $request->entertainment + $request->investment_withdraw;

    	$cash_out = new CashOut;
    	$cash_out->member_id = $request->member;
    	$cash_out->date = $request->date;
    	$cash_out->admistration = $request->admistration;
    	$cash_out->entertainment = $request->entertainment;
        $cash_out->investment_withdraw = $request->investment_withdraw;
    	$cash_out->total_debit = $total_debit;
    	$cash_out->save();

        //decrement bank balance when some cash is out
        BankBalance::find(1)->decrement('total_amount', $total_debit);

    	return redirect()->back()->with('msg', 'Cash Out Added!');
    }

    public function generate(Request $request){

        $from=$request->from_date;
        $to=$request->to_date;
        $cash_out = CashOut::whereBetween('date', [$from, $to])->get();
        
        return view('cash_out.generate', compact('cash_out'));
    }
}
