<?php

namespace App\Http\Controllers;

use App\Models\ExpenseType;
use App\Http\Requests\StoreExpenseTypeRequest;
use App\Http\Requests\UpdateExpenseTypeRequest;

class ExpenseTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('expenseType.index', [
            'expensesType' => ExpenseType::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('expenseType.create', [
            'expensesType' => ExpenseType::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExpenseTypeRequest $request)
    {
        $validated = $request->validated();
        $expenseType = ExpenseType::create($validated);

        return back()->with('success', 'Administrative Unit created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ExpenseType $expenseType)
    {
        return view('expenseType.show', ['expenseType' => $expenseType]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExpenseType $expenseType)
    {
        return view('expenseType.edit', ['expenseType' => $expenseType]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExpenseTypeRequest $request, ExpenseType $expenseType)
    {
        $expenseType->update($request->all());
        $expenseType->save();
        return back()->with('success', 'Administrative Unit edited successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExpenseType $expenseType)
    {
        //
    }
}
