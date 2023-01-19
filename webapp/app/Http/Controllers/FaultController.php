<?php

namespace App\Http\Controllers;

use App\Models\Fault;
use Illuminate\Http\Request;

class FaultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('faults.index', [
            'faults' => Fault::with('user')->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:64',
            'description' => 'required|string|max:255',
        ]);

        $request->user()->faults()->create($validated);

        return redirect(route('faults.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fault  $fault
     * @return \Illuminate\Http\Response
     */
    public function show(Fault $fault)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fault  $fault
     * @return \Illuminate\Http\Response
     */
    public function edit(Fault $fault)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fault  $fault
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fault $fault)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fault  $fault
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fault $fault)
    {
        //
    }
}
