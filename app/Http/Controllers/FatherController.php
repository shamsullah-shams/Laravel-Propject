<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Father;

class FatherController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fathers = Father::all();
        return view('fathers.index', ['fathers' => $fathers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fathers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ]);

        $father = new Father;
        $father->first_name = $request->first_name;
        $father->last_name = $request->last_name;
        $father->province = $request->province;
        $father->phone = $request->phone;

        $father->save();
        return redirect()->route('fathers.show', $father->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $father = Father::find($id);
        return view('fathers.show', ['father' => $father]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $father = Father::find($id);
        return view('fathers.edit', ['father' => $father]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'string|max:255',
            'email' => 'email|unique:students,email,' . $id,
            'phone' => 'string|max:20',
        ]);

        $father = Father::find($id);
        $father->update($validatedData);

        return redirect()->route('fathers.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $father = Father::find($id);
        $father->delete();

        return redirect()->route('fathers.index');
    }
}
