<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    // Display a listing of the subjects
    public function index()
    {
        // Get all subjects and return to the view
        $subjects = Subject::all();
        return view('backend.subjects.index', compact('subjects'));
    }

    // Show the form for creating a new subject
    public function create()
    {
        // Return the create form view
        return view('backend.subjects.create');
    }

    // Store a newly created subject in storage
    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required|string|max:255|unique:subjects,name',
        ]);

        try {
            // Create a new subject
            Subject::create([
                'name' => $request->name,
            ]);

            // Redirect with success message
            return redirect()->route('subjects.index')->with('success', 'Subject created successfully.');

        } catch (\Exception $e) {
            // Redirect with error message if exception occurs
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    // Show the form for editing the specified subject
    public function edit(Subject $subject)
    {
        // Return the edit form view with the subject data
        return view('backend.subjects.edit', compact('subject'));
    }

    // Update the specified subject in storage
    public function update(Request $request, Subject $subject)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required|string|max:255|unique:subjects,name,' . $subject->id,
        ]);

        try {
            // Update the subject with new data
            $subject->update([
                'name' => $request->name,
            ]);

            // Redirect with success message
            return redirect()->route('subjects.index')->with('success', 'Subject updated successfully.');

        } catch (\Exception $e) {
            // Redirect with error message if exception occurs
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    // Remove the specified subject from storage
    public function destroy(Subject $subject)
    {
        try {
            // Delete the subject
            $subject->delete();

            // Redirect with success message
            return redirect()->route('subjects.index')->with('success', 'Subject deleted successfully.');

        } catch (\Exception $e) {
            // Redirect with error message if exception occurs
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
