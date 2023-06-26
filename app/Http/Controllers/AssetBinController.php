<?php

namespace App\Http\Controllers;

use App\Models\AssetBin;
use Illuminate\Http\Request;

class AssetBinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.asset.bin.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(AssetBin $assetBin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AssetBin $assetBin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AssetBin $assetBin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AssetBin $assetBin)
    {
        //
    }
}
