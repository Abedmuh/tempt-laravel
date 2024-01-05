<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use App\Http\Requests\StoreLokerRequest;
use App\Http\Requests\UpdateLokerRequest;
use Illuminate\Http\Request;

class LokerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('loker.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('loker.post-loker');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
          'posisi' => 'required',
          'location' => 'required',
          'company' => 'required',
          'description' => 'required',
          'apply_via' => 'required',
          'link' => 'required'
        ]);

        // Loker::create($validateData);
        return $validateData;
        // return redirect('/')->with('success','New loker has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Loker $loker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Loker $loker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLokerRequest $request, Loker $loker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Loker $loker)
    {
        //
    }
}
