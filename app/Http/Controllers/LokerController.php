<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use App\Http\Requests\StoreLokerRequest;
use App\Http\Requests\UpdateLokerRequest;
use App\Models\Company;
use Illuminate\Http\Request;

class LokerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('loker.dashboard',[
          'lokers' => Loker::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      $company = Company::get();
        return view('loker.post-loker',[
          'company' => $company
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
          'posisi' => 'required',
          'company_id' => 'required',
          'location' => 'required',
          'link' => 'required',
          'apply_via' => 'required',
          'expire' => 'required',
          'description' => 'required',
        ]);

        Loker::create($validateData);
        // return response()->json($validateData);
        return redirect('/')->with('success','New loker has been added!');
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
