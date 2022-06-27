<?php

namespace App\Http\Controllers;

use App\Http\Requests\HousingProjectRequest;
use App\Models\HousingProject;
use Illuminate\Http\Request;

class HousingUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $this->authorize('housingprojct_access');

        return view('housing-unit.index');
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
    public function store(HousingProjectRequest $request)
    {
        // $this->authorize('housingprojct_create');


        HousingProject::create($request->validated());

        toast('Housing Project Created Succesfully', 'success');

        activity()
            ->causedBy(auth()->user()->id)
            ->event('Housing Project Created')
            ->log('Created a housing project');

        return redirect()->route('housingprojects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HousingProjectRequest $request, $housingProject)
    {

        // $this->authorize('housingprojct_update');
        $housingProjects =  HousingProject::find($housingProject)->first();
        $housingProjects->update($request->validated());
        toast('Housing Project Updated Succesfully', 'success');

        activity()
            ->causedBy(auth()->user()->id)
            ->event('Housing project Updated')
            ->log('Updated a housing project');


        return redirect()->route('housingprojects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
