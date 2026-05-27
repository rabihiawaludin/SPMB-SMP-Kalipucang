@php
    $date = \Carbon\Carbon::now();
    $pendaftaranBuka = \Carbon\Carbon::create(2026, 7, 6);
    $dateFormatted = $date->locale('id')->isoFormat('D MMMM Y');
    $pendaftaranBukaFormatted = $pendaftaranBuka->locale('id')->isoFormat('D MMMM Y');
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Cek Hasil - SPMB</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <x-navbar />

        <div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-blue-50 py-12 px-4 sm:px-6 lg:px-8">
            <div class="w-full max-w-4xl mx-auto">
                
                 @if ($date < $pendaftaranBuka)
                    <div class="mb-8 text-center">
                        <h1 class="text-3xl font-bold text-gray-900">
                            Hasil SPMB SMPN 1 Kalipucang 2026/2027
                        </h1>
                        <p class="text-gray-600 mt-2 text-lg">
                            Hasil seleksi diumumkan pada tanggal {{ $pendaftaranBukaFormatted }}
                        </p>
                    </div>
                @else
                    <!-- Header -->
                    <div class="text-center mb-12">
                        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                            📋 Cek Hasil Akhir SPMB
                        </h1>
                        <p class="text-lg text-gray-600">
                            Masukkan nomor registrasi dan tanggal lahir untuk melihat hasil akhir pendaftaran Anda
                        </p>
                    </div>

                    <!-- Form Container -->
                    <div class="bg-white rounded-3xl shadow-2xl p-8 md:p-12 mb-12">
                        <form method="POST" action="/hasil" class="space-y-6">
                            @csrf
                            
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-3">
                                        Nomor Registrasi <span class="text-red-500">*</span>
                                    </label>
                                    <input
                                        type="text"
                                        name="registration_number"
                                        placeholder="Cth: SPMB-2026-ABC123"
                                        required
                                        class="w-full px-4 py-4 border-2 border-gray-300 rounded-xl focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition text-base"
                                    >
                                    <p class="text-gray-500 text-xs mt-2">Nomor yang diberikan saat pendaftaran</p>
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-3">
                                        Tanggal Lahir <span class="text-red-500">*</span>
                                    </label>
                                    <input
                                        type="date"
                                        name="birth_date"
                                        required
                                        class="w-full px-4 py-4 border-2 border-gray-300 rounded-xl focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition text-base"
                                    >
                                    <p class="text-gray-500 text-xs mt-2">Sesuai dengan tanggal lahir saat pendaftaran</p>
                                </div>
                            </div>

                            <div class="pt-4">
                                <button
                                    type="submit"
                                    class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-bold py-4 px-6 rounded-xl transition transform hover:scale-105 shadow-lg hover:shadow-xl text-lg"
                                >
                                    🔍 Cari Hasil Anda
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Results Section -->
                    @if(session('error'))
                        <!-- Error Message -->
                        <div class="bg-red-50 border-2 border-red-300 rounded-3xl p-8 text-center">
                            <div class="text-6xl mb-4">❌</div>
                            <h3 class="text-2xl font-bold text-red-700 mb-3">Data Tidak Ditemukan</h3>
                            <p class="text-red-600 text-lg mb-6">
                                {{ session('error') }}
                            </p>
                            <a href="/hasil" class="bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-8 rounded-xl transition inline-block">
                                🔄 Coba Lagi
                            </a>
                        </div>
                    @else
                        <!-- Empty State -->
                        <div class="bg-blue-50 border-2 border-blue-300 rounded-3xl p-8 md:p-12 text-center">
                            <div class="text-6xl mb-6">🔍</div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-4">Belum Ada Hasil yang Ditampilkan</h3>
                            <p class="text-gray-600 text-lg">
                                Isi form di atas dengan nomor registrasi dan tanggal lahir Anda untuk melihat hasil akhir pendaftaran.
                            </p>
                            <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
                                <a href="/pengumuman" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-xl transition">
                                    📢 Lihat Pengumuman
                                </a>
                                <a href="/daftar" class="bg-white border-2 border-blue-600 text-blue-600 hover:bg-blue-50 font-bold py-3 px-8 rounded-xl transition">
                                    ✍️ Belum Daftar?
                                </a>
                            </div>
                        </div>
                    @endif
                @endif
            </div>
        </div>

    </body>
</html>

