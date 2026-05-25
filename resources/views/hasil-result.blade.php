<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Hasil Akhir - PPDB</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <x-navbar />

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-blue-50 py-12 px-4 sm:px-6 lg:px-8">

    <div class="w-full max-w-4xl mx-auto">
        
        <!-- Accepted Result -->
        <div class="bg-gradient-to-br from-green-50 to-emerald-50 border-2 border-green-300 rounded-3xl p-8 md:p-12 shadow-2xl">
            
            <div class="flex items-start justify-between mb-8">
                <div>
                    <div class="text-6xl font-bold text-green-600 mb-2">✓</div>
                    <h2 class="text-4xl font-bold text-green-700 mb-2">DITERIMA</h2>
                    <p class="text-green-600 text-lg">Selamat! Anda diterima di sekolah kami</p>
                </div>
                <div class="text-7xl opacity-20">🎓</div>
            </div>

            <div class="bg-white rounded-2xl p-8 mb-8">
                
                <h3 class="text-xl font-bold text-gray-800 mb-6 pb-4 border-b-2 border-gray-200">
                    Detail Hasil Penerimaan
                </h3>

                <div class="space-y-4">
                    <div class="flex justify-between items-center py-3 border-b border-gray-100">
                        <span class="text-gray-600 font-medium">Nomor Registrasi</span>
                        <span class="font-semibold text-gray-800">{{ $student->registration_number }}</span>
                    </div>
                    <div class="flex justify-between items-center py-3 border-b border-gray-100">
                        <span class="text-gray-600 font-medium">Nama Pendaftar</span>
                        <span class="font-semibold text-gray-800">{{ $student->fullname }}</span>
                    </div>
                    <div class="flex justify-between items-center py-3 border-b border-gray-100">
                        <span class="text-gray-600 font-medium">Tanggal Lahir</span>
                        <span class="font-semibold text-gray-800">{{ \Carbon\Carbon::parse($student->birth_date)->translatedFormat('d F Y') }}</span>
                    </div>
                    <div class="flex justify-between items-center py-3 border-b border-gray-100">
                        <span class="text-gray-600 font-medium">Asal Sekolah</span>
                        <span class="font-semibold text-gray-800">{{ $student->school_origin }}</span>
                    </div>
                    <div class="flex justify-between items-center py-3 border-b border-gray-100">
                        <span class="text-gray-600 font-medium">Jenis Kelamin</span>
                        <span class="font-semibold text-gray-800">{{ $student->gender == 'L' ? 'Laki-laki' : 'Perempuan' }}</span>
                    </div>
                    <div class="flex justify-between items-center py-3">
                        <span class="text-gray-600 font-medium">Status Pendaftaran</span>
                        <span class="font-semibold text-green-600">✓ Lolos Seleksi</span>
                    </div>
                </div>

            </div>

            <div class="bg-green-100 border-2 border-green-400 rounded-2xl p-6 mb-8">
                <p class="text-green-800 font-semibold mb-2">⚠️ Informasi Penting:</p>
                <ul class="text-green-700 space-y-2 text-sm">
                    <li>✓ Silakan datang ke sekolah untuk melakukan daftar ulang <strong>5 - 10 Juli 2026</strong></li>
                    <li>✓ Bawa dokumen asli dan fotokopi sesuai pengumuman</li>
                    <li>✓ Biaya pendaftaran ulang: Gratis untuk peserta yang diterima</li>
                    <li>✓ Hubungi panitia jika ada pertanyaan: (0511) 1234567</li>
                </ul>
            </div>

            <div class="flex gap-4">
                <a href="/" class="flex-1 bg-green-600 hover:bg-green-700 text-white font-bold py-4 rounded-xl transition text-center">
                    🏠 Kembali ke Beranda
                </a>
                <a href="#" onclick="window.print()" class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-4 rounded-xl transition text-center">
                    🖨️ Cetak Hasil
                </a>
            </div>

        </div>

    </div>

</div>

    </body>
</html>
