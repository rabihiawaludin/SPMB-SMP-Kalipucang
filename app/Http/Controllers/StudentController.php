<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    /**
     * Show the form for searching results
     */
    public function searchResults()
    {
        $setting = Setting::first();

        if (!$setting->announcement_open) {

            return view('announcement-closed');
        }
    
        return view('hasil');
    }

    /**
     * Search student results
     */
    public function findResults(Request $request)
    {

        $setting = Setting::first();

        if (!$setting->announcement_open) {
            abort(403);
        }

        $validated = $request->validate([
            'registration_number' => 'required|string',
            'birth_date' => 'required|date',
        ]);

        $student = Student::where('registration_number', $validated['registration_number'])
            ->where('birth_date', $validated['birth_date'])
            ->first();

        if (!$student) {
            return redirect('/hasil')->with('error', 'Data tidak ditemukan. Periksa kembali nomor registrasi dan tanggal lahir Anda.');
        }

        return view('hasil-result', compact('student'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fullname' => 'required|max:255',
            'nik' => 'required|digits:16',
            'nisn' => 'required|max:20',
            'birth_date' => 'required|date',
            'birth_place' => 'required|max:100',
            'gender' => 'required|in:L,P',
            'religion' => 'required|max:50',
            'phone' => 'required|max:20',
            'address' => 'required',
            'school_origin' => 'required|max:255',
            'father_name' => 'required|max:255',
            'mother_name' => 'required|max:255',
            'parent_phone' => 'required|max:20',
        ]);

        $registrationNumber =
            'PPDB-' .
            date('Y') .
            '-' .
            strtoupper(Str::random(6));

        $student = Student::create([
            'registration_number' => $registrationNumber,
            'fullname' => $validated['fullname'],
            'nik' => $validated['nik'],
            'nisn' => $validated['nisn'],
            'birth_date' => $validated['birth_date'],
            'birth_place' => $validated['birth_place'],
            'gender' => $validated['gender'],
            'religion' => $validated['religion'],
            'phone' => $validated['phone'],
            'address' => $validated['address'],
            'school_origin' => $validated['school_origin'],
            'father_name' => $validated['father_name'],
            'mother_name' => $validated['mother_name'],
            'parent_phone' => $validated['parent_phone'],
        ]);

        return redirect("/daftar/success/{$student->id}");
    }

    /**
     * Show success page after registration
     */
    public function success(Student $student)
    {
        return view('students.success', compact('student'));
    }

    /**
     * Show admin dashboard with student data
     */
    public function dashboard()
    {
        $students = Student::paginate(10);
        $total_students = Student::count();
        $verified_students = Student::where('verification_status', 'verified')->count();
        $unverified_students = $total_students - $verified_students;

        return view('dashboard', compact('students', 'total_students', 'verified_students', 'unverified_students'));
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
