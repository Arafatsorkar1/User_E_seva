<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Controllers\Controller;
use App\Models\Transasction\trensactionHead;
use Illuminate\Http\Request;

class TransctionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Front.Transaction.create',[
            'lInformation' => trensactionHead::with(['user'])->where('user_id',auth()->id())->latest()->first(),
            'informations' => trensactionHead::where('user_id',auth()->id())->latest()->get(),
            'trans_id'=>'shaba-t-'.rand(11111,99999),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        trensactionHead::updateOrcreateID($request);
        return back()->with('success','Your payment successfully......(:');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
