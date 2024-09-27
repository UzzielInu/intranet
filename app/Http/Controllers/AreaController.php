<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Http\Requests\StoreAreaRequest;
use App\Http\Requests\UpdateAreaRequest;
use App\Models\Company;

class AreaController extends Controller
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
        return view('area.create');
    }

    public function createFromCompany($company)
    {
        $company= Company::find($company);
        return view('area.createFromCompany', ['company' => $company]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAreaRequest $request)
    {
        $validated = $request->validated();
        if(isset($validated['company'])){
            $company = Company::find($validated['company']);
            $area = $company->areas()->create($validated);
        }else{
            dd($validated);
        }
        return redirect()->route('company.show', ['company' => $company->id])->with('success', 'El área '.$area->name.' se ha guardado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Area $area)
    {
        return view('area.show', ['area' => $area]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Area $area)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAreaRequest $request, Area $area)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Area $area)
    {
        //
    }

    public function options()
    {
        $areas = Area::get(['id', 'name']);
        // dd($areas);
        return response()->json($areas);
    }
}
