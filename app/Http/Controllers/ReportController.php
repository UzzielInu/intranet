<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMaterialRequest;
use App\Models\Report;
use App\Http\Requests\StoreReportRequest;
use App\Http\Requests\UpdateReportRequest;
use App\Models\Company;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('report.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::all();
        return view('report.create', ['companies' => $companies]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReportRequest $request)
    {
        $validated = $request->validated();
        // dd($validated);
        $user = Auth::user();
        $report = $user->reports()->create($validated);
        for ($i = 0; $i < count($validated['item']); $i++) {
            $report->materials()->create([
                'item'=>$validated['item'][$i],
                'quantity'=>$validated['quantity'][$i],
                'description'=>$validated['description'][$i],
                'origin' => $validated['origin'][$i]]
            );
        }
        
        return redirect()->route('report.index')->with('success', 'El Reporte '.$report->id.' se ha guardado correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReportRequest $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        //
    }
}
