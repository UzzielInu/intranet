<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use App\Http\Requests\StoreMachineRequest;
use App\Http\Requests\UpdateMachineRequest;
use App\Models\Area;

class MachineController extends Controller
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
        return view('machine.create');
    }

    public function createFromArea($area)
    {
        $area= Area::find($area);
        return view('machine.createFromCompany', ['area' => $area]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMachineRequest $request)
    {
        $validated = $request->validated();
        if(isset($validated['area'])){
            $area = Area::find($validated['area']);
            $machine = $area->machines()->create($validated);
        }else{
            dd($validated);
        }
        return redirect()->route('area.show', ['area' => $area->id])->with('success', 'La máquina '.$machine->name.' se ha guardado correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(Machine $machine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Machine $machine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMachineRequest $request, Machine $machine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Machine $machine)
    {
        //
    }
}
