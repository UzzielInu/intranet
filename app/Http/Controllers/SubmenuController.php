<?php

namespace App\Http\Controllers;

use App\Models\Submenu;
use App\Http\Requests\StoreSubmenuRequest;
use App\Http\Requests\UpdateSubmenuRequest;

class SubmenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd("hola");
        return view('submenu.index', [
            'submenus' => Submenu::all(),
        ]);
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
    public function store(StoreSubmenuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Submenu $submenu)
    {
        return view('submenu.show', ['submenu' => $submenu]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Submenu $submenu)
    {
        // dd($submenu);
        return view('submenu.edit', ['submenu' => $submenu]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubmenuRequest $request, Submenu $submenu)
    {
        $submenu->update($request->all());
        $submenu->save();
        return back()->with('success', 'Sub menú edited successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Submenu $submenu)
    {
        //
    }
}
