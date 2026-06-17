<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\StreamedResponse;

class StudentsExport
{
    public function __construct(private Collection $students) {}

    public function download(string $filename): StreamedResponse
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->fromArray([
            'No Pendaftaran',
            'Nama Lengkap',
            'NIK',
            'NISN',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Jenis Kelamin',
            'Agama',
            'No HP',
            'Alamat',
            'Asal Sekolah',
            'Nama Ayah',
            'Nama Ibu',
            'No HP Orang Tua',
            // 'Status Verifikasi',
            // 'Status Penerimaan',
            'Tanggal Daftar',
        ], null, 'A1');

        $row = 2;

        foreach ($this->students as $student) {
            $sheet->fromArray([
                $student->registration_number,
                $student->fullname,
                $student->nik,
                $student->nisn,
                $student->birth_place,
                $student->birth_date,
                $student->gender === 'L' ? 'Laki-laki' : 'Perempuan',
                $student->religion,
                $student->phone,
                $student->address,
                $student->school_origin,
                $student->father_name,
                $student->mother_name,
                $student->parent_phone,
                // $student->verification_status,
                // $student->accepted_status,
                $student->created_at->format('d/m/Y H:i'),
            ], null, 'A' . $row);

            $row++;
        }

        return response()->streamDownload(function () use ($spreadsheet) {
            $writer = new Xlsx($spreadsheet);
            $writer->save('php://output');
        }, $filename, [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ]);
    }
}
