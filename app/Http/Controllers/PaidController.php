<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PaidController extends Controller
{
    public function index()
    {

        $users = DB::table('users')->select('responses.status','responses.id', 'name', 'responses.msisdn', 'product_name', 'product.amount as product_amount', 'responses.amount as response_amount')
                ->join('responses', 'responses.msisdn', '=', 'users.msisdn')
                ->join('product', 'product.product_id', '=', 'responses.product_id')
                ->where('responses.status', '=', 3)
                ->get();

       
            return view('users.paid', compact('users'));
    
    }
}
