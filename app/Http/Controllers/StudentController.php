<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function dashboard()
    {
            $teacher = auth()->user();
            $totalStudents = $teacher->students()->count();
            $activeStudents = $teacher->students()->where('status', 'active')->count();
            $inactiveStudents = $teacher->students()->where('status', 'inactive')->count();
           return view('layouts.dashboard', compact('totalStudents', 'activeStudents' , 'inactiveStudents'));
    }

    public function index(Request $request)
    {
        $search = $request->input('search');
        $students = auth()->user()->students()->latest()->paginate(10);
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $teacherId = auth()->id();
        Student::create($request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'phone_number' => 'required|numeric',
            'status' => 'required|in:active,inactive',
        ]) + ['teacher_id' => $teacherId]);

        return redirect()->route('students.index')->with('success', 'Student added successfully.');
    }

    public function edit(Student $student)
    {
        $this->authorizeStudent($student);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $this->authorizeStudent($student);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:students,email,' . $student->id,
            'phone_number' => 'nullable|string|max:20',
            'status' => 'required|in:active,inactive',
        ]);

        $student->update($validated);

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student)
    {
        $this->authorizeStudent($student);
        $student->delete();

        return back()->with('success', 'Student deleted successfully.');
    }

    private function authorizeStudent(Student $student)
    {
        if ($student->teacher_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }
    }
}
