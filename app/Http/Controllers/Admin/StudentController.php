<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Exports\StudentsExport;
use App\Models\Student;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class StudentController extends Controller
{
    private function filteredQuery(Request $request)
    {
        $query = Student::query();

        if ($request->search) {
            $query->where(function ($q) use ($request) {
                $q->where('fullname', 'like', '%' . $request->search . '%')
                    ->orWhere('registration_number', 'like', '%' . $request->search . '%')
                    ->orWhere('nisn', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->status) {
            $query->where('verification_status', $request->status);
        }

        return $query;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $students = $this->filteredQuery($request)
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view(
            'admin.students.index',
            compact('students')
        );
    }

    public function export(Request $request): StreamedResponse
    {
        $students = $this->filteredQuery($request)->latest()->get();

        $filename = 'data-pendaftar-' . now()->format('Y-m-d-His') . '.xlsx';

        return (new StudentsExport($students))->download($filename);
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
        return view('admin.students.show', compact('student'));
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

    public function verify(Student $student)
    {
        $student->update([
            'verification_status' => 'verified'
        ]);

        return back()->with(
            'success',
            'Pendaftar berhasil diverifikasi'
        );
    }

    public function reject(Student $student)
    {
        $student->update([
            'verification_status' => 'rejected'
        ]);

        return back()->with(
            'success',
            'Pendaftar ditolak'
        );
    }

}
