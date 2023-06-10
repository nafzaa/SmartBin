<?php

namespace App\Http\Controllers;

use App\Models\Bin;
use Illuminate\Http\Request;

class BinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.bin.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.bin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Bin $bin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bin $bin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bin $bin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bin $bin)
    {
        //
    }
}
