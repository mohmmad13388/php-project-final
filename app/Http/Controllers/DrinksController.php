<?php

namespace App\Http\Controllers;

use App\Models\drinks;
use Illuminate\Http\Request;
use App\HTTP\Requests\storedrinkrequest;

class DrinksController extends Controller
{
    public function GetIndex(){
        return view('drinks.index');
    }

    public function storedrink(storedrinkrequest $request)
    {
        return $request;
    }
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
    public function show(drinks $drinks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(drinks $drinks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, drinks $drinks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(drinks $drinks)
    {
        //
    }
}
