<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    // Display a listing of teachers
    public function index()
    {
        $teachers = Teacher::all(); // Get all teachers from the database
        return view('backend.teachers.index', compact('teachers'));
    }

    // Show the form for creating a new teacher
    public function create()
    {
        return view('backend.teachers.create');
    }

    // Store a newly created teacher in the database
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'specialization' => 'required|string|max:255',
            ]);

            $teacher = new Teacher();
            $teacher->name = $request->name;
            $teacher->specialization = $request->specialization;
            $teacher->save();

            return redirect()->route('teachers.index')->with('success', 'Teacher created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    // Show the form for editing a teacher
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id); // Find the teacher by ID
        return view('backend.teachers.edit', compact('teacher'));
    }

    // Update the specified teacher in the database
    public function update(Request $request, $id)
    {
        try {
            $teacher = Teacher::findOrFail($id); // Find the teacher by ID

            $request->validate([
                'name' => 'required|string|max:255',
                'specialization' => 'required|string|max:255',
            ]);

            $teacher->name = $request->name;
            $teacher->specialization = $request->specialization;
            $teacher->save();

            return redirect()->route('teachers.index')->with('success', 'Teacher updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    // Remove the specified teacher from the database
    public function destroy($id)
    {
        try {
            $teacher = Teacher::findOrFail($id); // Find the teacher by ID
            $teacher->delete();

            return redirect()->route('teachers.index')->with('success', 'Teacher deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
