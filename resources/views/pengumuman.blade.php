<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Pengumuman - PPDB</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <x-navbar />

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-blue-50 py-12 px-4 sm:px-6 lg:px-8">

    <div class="w-full">
        
        <div class="mb-10">
            <h1 class="text-4xl font-bold text-gray-900">
                📢 Pengumuman PPDB
            </h1>
            <p class="text-gray-600 mt-3 text-lg">
                Informasi terbaru mengenai Penerimaan Peserta Didik Baru
            </p>
        </div>

        <!-- Pengumuman Cards -->
        <div class="space-y-6">

            <!-- Pengumuman 1 -->
            <div class="bg-white rounded-2xl shadow-lg p-8 border-l-4 border-blue-600 hover:shadow-xl transition">
                <div class="flex justify-between items-start">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800 mb-2">
                            Jadwal Pendaftaran PPDB Tahun 2026
                        </h2>
                        <p class="text-gray-600 mb-4">
                            Pendaftaran PPDB untuk tahun ajaran 2026/2027 telah dimulai. Peserta didik baru diharap segera mendaftarkan diri melalui portal pendaftaran online kami.
                        </p>
                        <p class="text-gray-500 text-sm">📅 21 Mei 2026</p>
                    </div>
                    <span class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-semibold">Terbaru</span>
                </div>
            </div>

            <!-- Pengumuman 2 -->
            <div class="bg-white rounded-2xl shadow-lg p-8 border-l-4 border-green-600 hover:shadow-xl transition">
                <div class="flex justify-between items-start">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800 mb-2">
                            Persyaratan Administrasi Pendaftaran
                        </h2>
                        <p class="text-gray-600 mb-4">
                            Calon peserta didik harus memenuhi persyaratan administrasi sebagai berikut:
                        </p>
                        <ul class="list-disc ml-5 text-gray-600 space-y-1 mb-4">
                            <li>Fotokopi Akta Kelahiran</li>
                            <li>Fotokopi Kartu Keluarga</li>
                            <li>Fotokopi KTP Orang Tua</li>
                            <li>Pas Foto 4x6 (2 lembar)</li>
                            <li>Surat Pernyataan dari sekolah asal</li>
                        </ul>
                        <p class="text-gray-500 text-sm">📅 18 Mei 2026</p>
                    </div>
                </div>
            </div>

            <!-- Pengumuman 3 -->
            <div class="bg-white rounded-2xl shadow-lg p-8 border-l-4 border-yellow-600 hover:shadow-xl transition">
                <div class="flex justify-between items-start">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800 mb-2">
                            Panduan Pengisian Formulir Pendaftaran
                        </h2>
                        <p class="text-gray-600 mb-4">
                            Berikut adalah panduan lengkap untuk mengisi formulir pendaftaran PPDB:
                        </p>
                        <ol class="list-decimal ml-5 text-gray-600 space-y-1 mb-4">
                            <li>Pastikan data yang diisi sudah benar dan lengkap</li>
                            <li>Jangan ada data yang dikosongkan</li>
                            <li>Periksa kembali sebelum mengirimkan formulir</li>
                            <li>Simpan nomor registrasi Anda untuk verifikasi</li>
                        </ol>
                        <p class="text-gray-500 text-sm">📅 15 Mei 2026</p>
                    </div>
                </div>
            </div>

            <!-- Pengumuman 4 -->
            <div class="bg-white rounded-2xl shadow-lg p-8 border-l-4 border-purple-600 hover:shadow-xl transition">
                <div class="flex justify-between items-start">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800 mb-2">
                            Kontak dan Dukungan Teknis
                        </h2>
                        <p class="text-gray-600 mb-4">
                            Untuk pertanyaan teknis atau kendala dalam proses pendaftaran, silakan hubungi:
                        </p>
                        <ul class="text-gray-600 space-y-2 mb-4">
                            <li>📧 Email: ppdb@sekolah.ac.id</li>
                            <li>📱 WhatsApp: +62 812-3456-7890</li>
                            <li>⏰ Jam Operasional: Senin - Jumat, 08:00 - 16:00 WIB</li>
                        </ul>
                        <p class="text-gray-500 text-sm">📅 10 Mei 2026</p>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

    </body>
</html>
