<?php

namespace App\Http\Controllers;

use App\Models\food;
use Illuminate\Http\Request;
use App\HTTP\Requests\storefoodrequest;

class FoodController extends Controller
{

    public function GetIndex(){
        return view('food.index');
    }

    public function storefood(storefoodrequest $request)
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
    public function show(food $food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(food $food)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, food $food)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(food $food)
    {
        //
    }
}
