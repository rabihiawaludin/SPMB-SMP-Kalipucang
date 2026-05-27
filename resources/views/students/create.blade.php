@php
    $date = \Carbon\Carbon::now();
    $pendaftaranBuka = \Carbon\Carbon::create(2026, 6, 2);
    $dateFormatted = $date->locale('id')->isoFormat('D MMMM Y');
    $pendaftaranBukaFormatted = $pendaftaranBuka->locale('id')->isoFormat('D MMMM Y');
@endphp


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Form Pendaftaran - SPMB</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <x-navbar />

        <div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-blue-50 py-12 px-4 sm:px-6 lg:px-8">

            <div class="w-full">

                @if ($date < $pendaftaranBuka)
                    <div class="mb-8 text-center">
                        <h1 class="text-3xl font-bold text-gray-900">
                            Pendaftaran Hasil SPMB SMPN 1 Kalipucang 2026/2027
                        </h1>
                        <p class="text-gray-600 mt-2 text-lg">
                            Pendaftaran dibuka pada tanggal {{ $pendaftaranBukaFormatted }}
                        </p>
                    </div>
                @else
                <div class="bg-white shadow-2xl rounded-3xl p-8 md:p-12">

                    <div class="mb-10">
                        <h1 class="text-4xl font-bold text-gray-900">
                            Form Pendaftaran SPMB
                        </h1>
                        <p class="text-gray-600 mt-3 text-lg">
                            Silakan isi semua data dengan benar dan lengkap
                        </p>
                    </div>

                    @if ($errors->any())
                        <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-5 rounded-lg mb-8 animate-pulse">
                            <div class="font-semibold mb-2">Terdapat kesalahan:</div>
                            <ul class="list-disc ml-5 space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li class="text-sm">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="/daftar" class="space-y-8">
                        @csrf

                        <!-- Data Pribadi Section -->
                        <div>
                            <h2 class="text-lg font-semibold text-gray-800 mb-6 pb-3 border-b-2 border-blue-200">
                                📋 Data Pribadi
                            </h2>
                            
                            <div class="grid md:grid-cols-2 gap-6">

                                <div class="form-group">
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        Nama Lengkap <span class="text-red-500">*</span>
                                    </label>
                                    <input
                                        type="text"
                                        name="fullname"
                                        value="{{ old('fullname') }}"
                                        required
                                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition"
                                        placeholder="Masukkan nama lengkap"
                                    >
                                </div>

                                <div class="form-group">
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        NIK <span class="text-red-500">*</span>
                                    </label>
                                    <input
                                        type="text"
                                        name="nik"
                                        value="{{ old('nik') }}"
                                        required
                                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition"
                                        placeholder="Nomor Induk Kependudukan"
                                    >
                                </div>

                                <div class="form-group">
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        NISN <span class="text-red-500">*</span>
                                    </label>
                                    <input
                                        type="text"
                                        name="nisn"
                                        value="{{ old('nisn') }}"
                                        required
                                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition"
                                        placeholder="Nomor Induk Siswa Nasional"
                                    >
                                </div>

                                <div class="form-group">
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        Agama <span class="text-red-500">*</span>
                                    </label>
                                    <input
                                        type="text"
                                        name="religion"
                                        value="{{ old('religion') }}"
                                        required
                                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition"
                                        placeholder="Agama anda"
                                    >
                                </div>

                                <div class="form-group">
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        Tempat Lahir <span class="text-red-500">*</span>
                                    </label>
                                    <input
                                        type="text"
                                        name="birth_place"
                                        value="{{ old('birth_place') }}"
                                        required
                                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition"
                                        placeholder="Kota/Kabupaten tempat lahir"
                                    >
                                </div>

                                <div class="form-group">
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        Tanggal Lahir <span class="text-red-500">*</span>
                                    </label>
                                    <input
                                        type="date"
                                        name="birth_date"
                                        value="{{ old('birth_date') }}"
                                        required
                                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition"
                                    >
                                </div>

                                <div class="form-group">
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        Gender <span class="text-red-500">*</span>
                                    </label>
                                    <select
                                        name="gender"
                                        required
                                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition bg-white"
                                    >
                                        <option value="">-- Pilih Gender --</option>
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        No HP <span class="text-red-500">*</span>
                                    </label>
                                    <input
                                        type="tel"
                                        name="phone"
                                        value="{{ old('phone') }}"
                                        required
                                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition"
                                        placeholder="08xxxxxxxxxx"
                                    >
                                </div>

                            </div>
                        </div>

                        <!-- Data Sekolah Section -->
                        <div>
                            <h2 class="text-lg font-semibold text-gray-800 mb-6 pb-3 border-b-2 border-blue-200">
                                🏫 Data Sekolah
                            </h2>
                            
                            <div class="form-group">
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Asal Sekolah <span class="text-red-500">*</span>
                                </label>
                                <input
                                    type="text"
                                    name="school_origin"
                                    value="{{ old('school_origin') }}"
                                    required
                                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition"
                                    placeholder="Nama sekolah asal"
                                >
                            </div>
                        </div>

                        <!-- Data Orang Tua Section -->
                        <div>
                            <h2 class="text-lg font-semibold text-gray-800 mb-6 pb-3 border-b-2 border-blue-200">
                                👨‍👩‍👦 Data Orang Tua
                            </h2>
                            
                            <div class="grid md:grid-cols-2 gap-6">

                                <div class="form-group">
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        Nama Ayah <span class="text-red-500">*</span>
                                    </label>
                                    <input
                                        type="text"
                                        name="father_name"
                                        value="{{ old('father_name') }}"
                                        required
                                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition"
                                        placeholder="Nama lengkap ayah"
                                    >
                                </div>

                                <div class="form-group">
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        Nama Ibu <span class="text-red-500">*</span>
                                    </label>
                                    <input
                                        type="text"
                                        name="mother_name"
                                        value="{{ old('mother_name') }}"
                                        required
                                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition"
                                        placeholder="Nama lengkap ibu"
                                    >
                                </div>

                                <div class="form-group md:col-span-2">
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        No HP Orang Tua <span class="text-red-500">*</span>
                                    </label>
                                    <input
                                        type="tel"
                                        name="parent_phone"
                                        value="{{ old('parent_phone') }}"
                                        required
                                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition"
                                        placeholder="08xxxxxxxxxx"
                                    >
                                </div>

                            </div>
                        </div>

                        <!-- Alamat Section -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">
                                📍 Alamat Lengkap <span class="text-red-500">*</span>
                            </label>
                            <textarea
                                name="address"
                                rows="5"
                                required
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition resize-vertical"
                                placeholder="Masukkan alamat lengkap anda..."
                            >{{ old('address') }}</textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="flex gap-4 pt-8 border-t-2 border-gray-200">
                            <button
                                type="submit"
                                class="flex-1 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-bold py-4 px-6 rounded-xl transition transform hover:scale-105 shadow-lg hover:shadow-xl"
                            >
                                ✓ Daftar Sekarang
                            </button>
                            <button
                                type="reset"
                                class="px-8 bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-4 rounded-xl transition"
                            >
                                ↻ Bersihkan
                            </button>
                        </div>

                    </form>

                </div>
                @endif

            </div>

        </div>

    </body>
</html>