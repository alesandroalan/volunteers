<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\VolunteerRequest;
use App\Volunteer;

class VolunteersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $volunteers = Volunteer::paginate(15);
        return view('volunteers.index', compact('volunteers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('volunteers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VolunteerRequest $request)
    {
    	//Validando fomulario
 		//$this->validate($request,Volunteer::$rules);

        Volunteer::create($request->all());
        return redirect()->route('volunteer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Volunteer $volunteer)
    {
        //$volunteer = Volunteer::findOrFail($id);

        return view('volunteers.show', compact('volunteer'));    

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Volunteer $volunteer)
    {
    	//$volunteer = Volunteer::findOrFail($id);

        return view('volunteers.edit', compact('volunteer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VolunteerRequest $request, Volunteer $volunteer)
    {
    	//Validando fomulario
 		//$this->validate($request,Volunteer::$rules);
        //$volunteer = Volunteer::findOrFail($id);
        $volunteer->update($request->all());
        return redirect()->route('volunteer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Volunteer $volunteer)
    {
        //$volunteer = Volunteer::findOrFail($id);
        $volunteer->delete();
        return redirect()->route('volunteer.index');
    }
}
