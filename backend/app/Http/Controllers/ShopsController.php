<?php

namespace App\Http\Controllers;

use App\Models\Shops;
use Illuminate\Http\Request;

class ShopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Shops::get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
            'name' => 'required',
            'url' => 'required'
        ]);

        $shops = Shops::create($validated);
        
        return $shops; 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shops  $shops
     * @return \Illuminate\Http\Response
     */
    public function show(Shops $shops)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shops  $shops
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $shops = Shops::find($id);

        $shops->update($request->all());

        return  $shops;  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shops  $shops
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shops = Shops::find($id);

        $shops->delete();
        return   $shops; 
    }
}
