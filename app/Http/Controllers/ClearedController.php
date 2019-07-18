<?php

namespace App\Http\Controllers;
use App\Responses;
use Illuminate\Http\Request;
use DB;
class ClearedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->select('responses.status','responses.id as response_id', 'name', 'responses.msisdn', 'product_name', 'product.amount as product_amount', 'responses.amount as response_amount')
                ->join('responses', 'responses.msisdn', '=', 'users.msisdn')
                ->join('product', 'product.product_id', '=', 'responses.product_id')
                ->where('responses.status', '=', 1)
                ->get();

       
            return view('users.cleared', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $response = Responses::findOrFail($id);

        if ($request->action == 'clear') {
            $response->update([
                'status' => 3
            ]);
            toast()->success('Client cleared');
        } 
        return redirect()->route('cleared.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
