<?php

namespace App\Http\Controllers;

use App\Models\AdministrativeUnit;
use App\Http\Requests\StoreAdministrativeUnitRequest;
use App\Http\Requests\UpdateAdministrativeUnitRequest;

class AdministrativeUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('administrativeUnit.index', [
            'administrativeUnits' => AdministrativeUnit::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('administrativeUnit.create', [
            'administrativeUnits' => AdministrativeUnit::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdministrativeUnitRequest $request)
    {
        //
        // dd($request);
        $validated = $request->validated();
        $administrativeUnit = AdministrativeUnit::create($validated);

        return back()->with('success', 'Administrative Unit created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(AdministrativeUnit $administrativeUnit)
    {
        // dd($administrativeUnit);
        return view('administrativeUnit.show', ['administrativeUnit' => $administrativeUnit]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdministrativeUnit $administrativeUnit)
    {
        $administrativeUnit;
        dd($administrativeUnit->name);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdministrativeUnitRequest $request, AdministrativeUnit $administrativeUnit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdministrativeUnit $administrativeUnit)
    {
        //
    }
}
