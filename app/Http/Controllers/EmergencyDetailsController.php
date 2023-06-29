<?php

namespace App\Http\Controllers;

use App\Models\student\emergency_details;
use App\Http\Requests\Storeemergency_detailsRequest;
use App\Http\Requests\Updateemergency_detailsRequest;

class EmergencyDetailsController extends Controller
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
    public function store(Storeemergency_detailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(emergency_details $emergency_details)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(emergency_details $emergency_details)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateemergency_detailsRequest $request, emergency_details $emergency_details)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(emergency_details $emergency_details)
    {
        //
    }
}
