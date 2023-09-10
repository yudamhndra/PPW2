<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UjiCobaController extends Controller
{
    public function boomesport()
    {
        return view('Boom');
    }

    public function prxesport()
    {
        return view('prx');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function fnaticeesport()
    {
        return view('fnatic');
    }

    /**
     * Display the specified resource.
     */
    public function fpxesport()
    {
        return view('fpx');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function beranda()
    {
        return view('layouts/home');
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
