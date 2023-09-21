<?php

namespace App\Http\Controllers;

use App\Models\SheetNumber;
use App\Models\AdministrativeUnit;
use App\Models\ExpenseType;
use App\Models\Submenu;
use App\Http\Requests\StoreSheetNumberRequest;
use App\Http\Requests\UpdateSheetNumberRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class SheetNumberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('sheetNumber.index', [
            'administrativeUnits' => AdministrativeUnit::all(),
            'expensesType' => ExpenseType::all(),
            'submenus' => Submenu::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sheetNumber.create  ', [
            'administrativeUnits' => AdministrativeUnit::all(),
            'expensesType' => ExpenseType::all(),
            'submenus' => Submenu::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSheetNumberRequest $request)
    {
        // dd($request); 
        $validated = $request->validated();
        $adminUnit = AdministrativeUnit::find($request -> administrativeUnitId);
        $submenu = Submenu::find($request -> submenuId);
        $expenseType = ExpenseType::find($request -> expenseTypeId);
        $year = Carbon::now()->format('Y');
        $number = (SheetNumber::where('administrative_unit_id', $adminUnit->id)->max('consecutive_number'))+1;
        // dd($number);
        // $user = Auth::user()->name;
        $sheetNumber = $adminUnit->local_id ."/". $expenseType->mnemonic ."/". $submenu->mnemonic ."/". $number ."/". $year;
        // dd($sheetNumber); 
        $sheetNumberEntity = new SheetNumber(
        [
            'sheet_number' => $sheetNumber,
            'subject' => $request->subject,
            'receiver' => $request->receiver,
            'administrative_unit_id' => $adminUnit -> id,
            'expense_type_id' => $expenseType->id,
            'user_id' => Auth::user()->id,
            'consecutive_number' => $number
        ]
        );
        // dd($sheetNumber);
        $sheetNumberEntity->save();
        return back()->with('success', 'SheetNumber successfully '.$sheetNumber.'.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SheetNumber $sheetNumber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SheetNumber $sheetNumber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSheetNumberRequest $request, SheetNumber $sheetNumber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SheetNumber $sheetNumber)
    {
        //
    }
}