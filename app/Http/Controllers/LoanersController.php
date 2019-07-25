<?php

namespace App\Http\Controllers;
use App\Responses;
use App\users; // <- here
use Illuminate\Http\Request;
use DB;
class LoanersController extends Controller
{
    public function index()
    {

        $users = DB::table('users')->select('responses.status','responses.created_at as created_at','responses.id as response_id', 'name', 'responses.msisdn', 'product_name', 'product.amount as product_amount', 'responses.amount as response_amount')
                ->join('responses', 'responses.msisdn', '=', 'users.msisdn')
                ->join('product', 'product.product_id', '=', 'responses.product_id')
                ->where('responses.status', '<', 1)
                ->get();
        $pendings=Responses::where('status', '0')->count();
       // $taken=
       // $untracked=
            return view('users.borrowers')->with([
                'users' => $users,
                'pendings' => $pendings
            ]);
    }

    public function update(Request $request, $id)
    {
        $response = Responses::findOrFail($id);

        if ($request->action == 'approve') {
            $response->update([
                'status' => 1
            ]);
            toast()->success('Loan approved');
        } elseif ($request->action == 'decline'){
            $response->update([
                'status' => 2
            ]);
            toast()->warning('Loan declined');
        }else {
            toast()->danger('No change done!');
        }

        return redirect()->route('users.index');
    }
}