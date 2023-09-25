<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class SchoolController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $schools = School::all();
        return view('schools.index')
            ->with('schools', $schools);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('schools.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'location'=>'required'
        ]);


        $school = new School();
        $school->name = $request->name;
        $school->location = $request->location;
        $school->save();

        return redirect()->route('schools.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param School $school
     * @return Response
     */
    public function edit(School $school)
    {
        return view('schools/edit')
            ->with('school', $school);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param School $school
     * @return Response
     */
    public function update(Request $request, School $school)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required'
        ]);

        $school->name = $request->name;
        $school->location = $request->location;
        $school->save();

        return redirect()->route('schools.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param School $school
     * @return Response
     */
    public function destroy(School $school)
    {
        $school->delete();

        return redirect()->route('schools.index');
    }
}
