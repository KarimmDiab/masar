<?php

namespace App\Http\Controllers;

use App\Models\Emp;
use App\Http\Requests\StoreEmpRequest;
use App\Http\Requests\UpdateEmpRequest;

class EmpController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmpRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Emp $emp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Emp $emp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmpRequest $request, Emp $emp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Emp $emp)
    {
        //
    }
}
