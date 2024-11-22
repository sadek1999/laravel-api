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
        //
        $data = [
            'Name' => 'Sadek', // Fixed assignment operator
            'email' => 'ali@gmail.com', // Fixed email format
            'age' => 24,
            'city' => 'Dhaka'
        ];

        // Insert data into the database
        $student = Student::create($data);

        // Return a response with the created student data
        return response()->json([
            'message' => 'Student created successfully!',
            'data' => $student
        ], 201); 
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

        $data = [
            'Name' => $request->input('Name'),
            'email' => $request->input('email'),
            'age' => $request->input('age'),
            'city' => $request->input('city'),
        ];

        $student=Student::create($data);
        return response()->json([
            'message' => 'Student created successfully!',
            'data' => $student
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
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
