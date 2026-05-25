<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Pendaftaran Berhasil - PPDB</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            @keyframes bounce {
                0%, 100% { transform: scale(1); }
                50% { transform: scale(1.1); }
            }
            .animate-bounce-custom {
                animation: bounce 2s infinite;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <x-navbar />

<div class="min-h-screen bg-gradient-to-br from-green-50 via-white to-green-50 py-12 px-4 sm:px-6 lg:px-8">

    <div class="w-full max-w-4xl mx-auto">
        
        <!-- Success Box -->
        <div class="bg-gradient-to-br from-green-50 to-emerald-50 border-2 border-green-300 rounded-3xl p-8 md:p-12 shadow-2xl">
            
            <div class="text-center">
                <!-- Success Icon -->
                <div class="text-7xl mb-6 animate-bounce">✓</div>
                
                <h1 class="text-4xl md:text-5xl font-bold text-green-700 mb-4">
                    Pendaftaran Berhasil!
                </h1>
                
                <p class="text-lg text-green-600 mb-8">
                    Selamat! Data Anda telah berhasil didaftarkan. Simpan nomor registrasi Anda dengan baik.
                </p>
            </div>

            <!-- Registration Number Box -->
            <div class="bg-white rounded-2xl p-8 mb-8 border-2 border-green-200">
                
                <p class="text-center text-gray-600 font-medium mb-3">
                    📌 Nomor Registrasi Anda:
                </p>
                
                <div class="bg-gradient-to-r from-green-100 to-emerald-100 rounded-xl p-6 mb-6 text-center">
                    <p class="text-3xl md:text-4xl font-bold text-green-700 font-mono">
                        {{ $student->registration_number }}
                    </p>
                </div>

                <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 rounded">
                    <p class="text-yellow-800 font-semibold mb-2">⚠️ Penting:</p>
                    <ul class="text-yellow-700 space-y-1 text-sm">
                        <li>✓ Catat dan simpan nomor registrasi ini dengan baik</li>
                        <li>✓ Gunakan nomor ini untuk mengecek hasil pengumuman</li>
                        <li>✓ Jangan bagikan nomor ini kepada orang lain</li>
                    </ul>
                </div>

            </div>

            <!-- Detail Section -->
            <div class="bg-white rounded-2xl p-8 mb-8">
                
                <h3 class="text-xl font-bold text-gray-800 mb-6 pb-4 border-b-2 border-gray-200">
                    Data Pendaftaran Anda
                </h3>

                <div class="space-y-4">
                    <div class="flex justify-between items-center py-3 border-b border-gray-100">
                        <span class="text-gray-600 font-medium">Nama Lengkap</span>
                        <span class="font-semibold text-gray-800">{{ $student->fullname }}</span>
                    </div>
                    <div class="flex justify-between items-center py-3 border-b border-gray-100">
                        <span class="text-gray-600 font-medium">Tanggal Lahir</span>
                        <span class="font-semibold text-gray-800">{{ \Carbon\Carbon::parse($student->birth_date)->translatedFormat('d F Y') }}</span>
                    </div>
                    <div class="flex justify-between items-center py-3 border-b border-gray-100">
                        <span class="text-gray-600 font-medium">Jenis Kelamin</span>
                        <span class="font-semibold text-gray-800">{{ $student->gender == 'L' ? 'Laki-laki' : 'Perempuan' }}</span>
                    </div>
                    <div class="flex justify-between items-center py-3 border-b border-gray-100">
                        <span class="text-gray-600 font-medium">Asal Sekolah</span>
                        <span class="font-semibold text-gray-800">{{ $student->school_origin }}</span>
                    </div>
                    <div class="flex justify-between items-center py-3">
                        <span class="text-gray-600 font-medium">Status</span>
                        <span class="font-semibold text-green-600">✓ Terdaftar</span>
                    </div>
                </div>

            </div>

            <!-- Info & Timeline -->
            <div class="bg-green-100 border-2 border-green-400 rounded-2xl p-6 mb-8">
                <p class="text-green-800 font-semibold mb-3">📅 Langkah Selanjutnya:</p>
                <ol class="text-green-700 space-y-2 text-sm">
                    <li><strong>1.</strong> Tunggu pengumuman jadwal verifikasi data</li>
                    <li><strong>2.</strong> Hadir tepat waktu untuk proses verifikasi</li>
                    <li><strong>3.</strong> Pantau halaman pengumuman untuk hasil akhir</li>
                    <li><strong>4.</strong> Gunakan nomor registrasi & tanggal lahir untuk cek hasil</li>
                </ol>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="/" class="flex-1 bg-green-600 hover:bg-green-700 text-white font-bold py-4 px-6 rounded-xl transition text-center">
                    🏠 Kembali ke Beranda
                </a>
                <a href="/pengumuman" class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-6 rounded-xl transition text-center">
                    📢 Lihat Pengumuman
                </a>
                <a href="/hasil" class="flex-1 bg-gray-600 hover:bg-gray-700 text-white font-bold py-4 px-6 rounded-xl transition text-center">
                    📋 Cek Hasil
                </a>
            </div>

        </div>

    </div>

</div>

    </body>
</html>