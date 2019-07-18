<?php

namespace App\Http\Controllers;
use App\User;
use App\Responses;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $loanee = DB::table('users')->get();
        $products= DB::table('product')->count();
        $pending=Responses::where('status', '0')->count();
        $taken=Responses::where('status', '1')->count();
        
        $result = DB::table('users')
        ->join('responses', 'responses.msisdn', '=', 'users.msisdn')
        ->join('product', 'product.product_id', '=', 'responses.product_id')
        ->where('responses.status', '=', 1)->sum('product.amount');
        
        $untracked =DB::table('users')
        ->join('responses', 'responses.msisdn', '=', 'users.msisdn')
        ->join('product', 'product.product_id', '=', 'responses.product_id')
        ->where('responses.status', '=', 0)->sum('product.amount');
        
        
        return view('dashboard')->with([
            'loanee' => $loanee,
            'customers' => $loanee->count(),
            'products' => $products,
            'pending' => $pending,
            'taken' => $taken,
            'result' =>  $result,
            'untracked' => $untracked
        ]);
        
    }
    
}
