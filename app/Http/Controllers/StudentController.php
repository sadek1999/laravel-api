<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $student = Student:: select('age')->orderBy('age')->get()
        // $student = Student:: select('name','age','id')
        // ->where('email','samiya1@gmail.com')->get()

        // $student = Student::select('age')->where('age','<=',20)->get()
        // $student = Student::select('name', 'email', 'age', 'city')
        //     ->whereIn('city', ['dhaka', 'Chittagong'])
        //     ->first()
        //        ->get()
        // $student = Student::select('name', 'email', 'age', 'city')
        //             ->where('email','like','s%')->get()
        // $student = Student::avg('age')
        // $youngestAge=Student::min('age');
        // $youngestStudent=Student::where('age',$youngestAge)->get();
        // $oldestAge=Student::max('age');
        // $oldestStudent=Student::where('age',$oldestAge)->get()
        //     ;
        // $students = Student::where('name', 'Ali')
        // ->update(['email' => 'aliUpdate@gmail.com', 'age' => 30]);

        $students=Student::where('id',5)->delete();

        return $students;
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return $student;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
