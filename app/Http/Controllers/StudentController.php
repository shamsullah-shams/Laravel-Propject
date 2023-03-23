<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Section;
use App\Models\Father;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fathers = Father::all();
        $sections = Section::all();
        return view('students.create', [
            'sections' => $sections,
            'fathers' => $fathers,
        ]);
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
            'father_id' => 'required|numeric|max:255',
            'section_id' => 'required|numeric|max:255',
            'image' => 'required|file|image'
        ]);
        if($request->hasFile('image')) {
           $fileNameWithExt = $request->file('image')->getClientOriginalName();
           $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
           $extension = $request->file('image')->getClientOriginalExtension();
           $name = time().'.'.$extension;
           $image = $request->file('image')->storeAs('public/students' , $name);
           $imageUrl = '/storage/students/'.$name;
            
        } else {
            $imageUrl =  '';
        }

        $student = new Student;
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->father_id = $request->father_id;
        $student->section_id = $request->section_id;
        $student->imageUrl = $imageUrl;

        $student->save();

        return redirect()->route('students.show', $student->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        $sections = Section::all();
        $fathers = Father::all();
        return view('students.edit', [
                'student' => $student,
                'sections' => $sections,
                'fathers' => $fathers
            ]);
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'father_id' => 'required|numeric|max:255',
            'section_id' => 'required|numeric|max:255',
        ]);

        $student = Student::find($id);
        $student->update($validatedData);

        return redirect()->route('students.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect()->route('students.index');
    }
}
