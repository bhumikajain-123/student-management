<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = student::all();
          
        return view('student.index')->with('students',$student);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
    

        $req->validate([
            'name' => 'required',
            'address' => 'required',
            'mobile' => 'required'
            
        ]);

        student::create([
            'name'  =>  $req->name,
            'address' => $req->address,
            'mobile' => $req->mobile
        ]);
        return redirect('/students');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = student::find($id);

        return view('student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit($id)
{
    $student = Student::find($id);

    return view('student.edit', compact('student'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id)
    {
        $req->validate([
            'name' => 'required',
            'address' =>  'required',
            'mobile' => 'required'
        ]);

        $student = student::find($id);
        $student->update([
            'name' => $req->name,
            'address' => $req->address,
            'mobile' => $req->mobile
        ]);
        return redirect('/students');
        
    }

    /**
     * Remove the specified resource from storage.
     */


    public function destroy(string $id)
    {           
        student::destroy($id);
        return redirect('/students');
    }


}
