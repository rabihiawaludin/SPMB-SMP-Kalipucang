<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>SPMB - Seleksi Penerimaan Murid Baru</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <x-navbar />

<!-- Hero Section -->
<div class="relative bg-gradient-to-r from-blue-600 via-blue-700 to-blue-800 text-white overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 right-0 w-96 h-96 bg-white rounded-full -mr-48 -mt-48"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-white rounded-full -ml-48 -mb-48"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-32">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            
            <div class="z-10">
                <h1 class="text-5xl md:text-4xl font-bold leading-tight mb-6">
                    SMP Negeri 1 Kalipucang<br><span class="text-blue-200">Generasi Cerdas Gemilang</span>
                </h1>
                <p class="text-xl text-blue-100 mb-8 leading-relaxed">
                    Seleksi Penerimaan Murid Baru Tahun Ajaran 2026/2027 <br/>SMP Negeri 1 Kalipucang telah dibuka. Daftarkan diri Anda sekarang dan raih kesempatan terbaik bersama kami!
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="/daftar" class="bg-white text-blue-600 font-bold py-4 px-8 rounded-xl hover:bg-blue-50 transition transform hover:scale-105 shadow-lg inline-block text-center">
                        ✍️ Daftar Sekarang
                    </a>
                </div>

                
            </div>

            <div class="z-10 hidden md:block">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-blue-600 rounded-3xl blur-2xl opacity-50"></div>
                    <div class="relative bg-gradient-to-br from-blue-50 to-blue-100 rounded-3xl p-8 shadow-2xl">
                        <!-- School Photo -->
                        <div class="rounded-2xl overflow-hidden shadow-md">
                            <img src="https://smpn1kalipucang.sch.id/photoguru.jpeg" alt="Foto Sekolah" class="w-full h-[300px] object-cover">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Info Section -->
<!-- <div class="bg-gray-50 py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Kenapa Memilih Kami?</h2>
            <p class="text-xl text-gray-600">Dapatkan pengalaman pendidikan yang tak terlupakan</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition transform hover:-translate-y-2">
                <div class="text-5xl mb-4">👨‍🏫</div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Guru Berpengalaman</h3>
                <p class="text-gray-600">
                    Tenaga pengajar profesional dengan sertifikasi internasional dan pengalaman bertahun-tahun di bidangnya.
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition transform hover:-translate-y-2">
                <div class="text-5xl mb-4">🏫</div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Fasilitas Modern</h3>
                <p class="text-gray-600">
                    Laboratorium lengkap, perpustakaan digital, dan ruang belajar dengan teknologi terkini untuk mendukung pembelajaran optimal.
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition transform hover:-translate-y-2">
                <div class="text-5xl mb-4">🌍</div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Jangkauan Global</h3>
                <p class="text-gray-600">
                    Program pertukaran pelajar, kerjasama internasional, dan akses ke jaringan alumni di seluruh dunia.
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition transform hover:-translate-y-2">
                <div class="text-5xl mb-4">🏆</div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Prestasi Terbukti</h3>
                <p class="text-gray-600">
                    Ratusan alumni yang telah meraih prestasi di universitas top dunia dan dunia industri profesional.
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition transform hover:-translate-y-2">
                <div class="text-5xl mb-4">🎨</div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Pengembangan Hobi</h3>
                <p class="text-gray-600">
                    Berbagai klub dan organisasi untuk mengembangkan bakat seni, olahraga, dan kegiatan ekstrakurikuler lainnya.
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition transform hover:-translate-y-2">
                <div class="text-5xl mb-4">💼</div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Karir Support</h3>
                <p class="text-gray-600">
                    Bimbingan karir, pelatihan soft skills, dan koneksi langsung dengan dunia industri untuk persiapan masa depan.
                </p>
            </div>

        </div>

    </div>
</div> -->

<!-- Timeline Section -->
<div class="bg-white py-16 md:py-24">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">📅 Jadwal SPMB 2026/2027</h2>
            <p class="text-xl text-gray-600">Ikuti setiap tahapan dengan seksama</p>
        </div>

        <div class="space-y-8">
            
            <div class="flex gap-6 md:gap-8">
                <div class="flex flex-col items-center">
                    <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-600 text-white font-bold text-xl shadow-lg">
                        1
                    </div>
                    <div class="w-1 h-20 bg-gradient-to-b from-blue-600 to-gray-300 mt-2"></div>
                </div>
                <div class="pt-2 pb-8">
                    <h3 class="text-2xl font-bold text-gray-800">Pendaftaran Online</h3>
                    <p class="text-gray-600 mt-2">15 Juni - 30 Juni 2026</p>
                    <p class="text-gray-500 text-sm mt-3">Buka portal pendaftaran dan isi formulir dengan data diri yang lengkap dan benar. Pastikan semua persyaratan administrasi terpenuhi.</p>
                </div>
            </div>

            <div class="flex gap-6 md:gap-8">
                <div class="flex flex-col items-center">
                    <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-600 text-white font-bold text-xl shadow-lg">
                        2
                    </div>
                    <div class="w-1 h-20 bg-gradient-to-b from-blue-600 to-gray-300 mt-2"></div>
                </div>
                <div class="pt-2 pb-8">
                    <h3 class="text-2xl font-bold text-gray-800">Verifikasi & Seleksi</h3>
                    <p class="text-gray-600 mt-2">1 Juli - 6 Juli 2026</p>
                    <p class="text-gray-500 text-sm mt-3">Tim kami akan memverifikasi data yang Anda kirimkan. Hasil verifikasi akan dikirimkan melalui email dan portal pendaftaran.</p>
                </div>
            </div>

            <div class="flex gap-6 md:gap-8">
                <div class="flex flex-col items-center">
                    <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-600 text-white font-bold text-xl shadow-lg">
                        3
                    </div>
                    <div class="w-1 h-20 bg-gradient-to-b from-blue-600 to-gray-300 mt-2"></div>
                </div>
                <div class="pt-2 pb-8">
                    <h3 class="text-2xl font-bold text-gray-800">Bursa SPMB</h3>
                    <p class="text-gray-600 mt-2">7 Juli 2026</p>
                    <p class="text-gray-500 text-sm mt-3">Bursa SPMB Oleh Sekolah.</p>
                </div>
            </div>

            <div class="flex gap-6 md:gap-8">
                <div class="flex flex-col items-center">
                    <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-600 text-white font-bold text-xl shadow-lg">
                        4
                    </div>
                    <div class="w-1 h-20 bg-gradient-to-b from-blue-600 to-gray-300 mt-2"></div>
                </div>
                <div class="pt-2 pb-8">
                    <h3 class="text-2xl font-bold text-gray-800">Pengumuman Hasil</h3>
                    <p class="text-gray-600 mt-2">8 Juli 2026</p>
                    <p class="text-gray-500 text-sm mt-3">Pengumuman resmi hasil SPMB akan dipublikasikan secara bersamaan. Cek hasil Anda melalui portal dengan nomor registrasi dan tanggal lahir.</p>
                </div>
            </div>

            <div class="flex gap-6 md:gap-8">
                <div class="flex flex-col items-center">
                    <div class="flex items-center justify-center h-16 w-16 rounded-full bg-green-600 text-white font-bold text-xl shadow-lg">
                        5
                    </div>
                </div>
                <div class="pt-2">
                    <h3 class="text-2xl font-bold text-gray-800">Daftar Ulang</h3>
                    <p class="text-gray-600 mt-2">9 Juli - 10 Juli 2026</p>
                    <p class="text-gray-500 text-sm mt-3">Peserta yang diterima harus melakukan daftar ulang dengan membawa dokumen asli dan fotokopi sesuai syarat yang ditentukan.</p>
                </div>
            </div>

        </div>

    </div>
</div>

<!-- Pengumuman Section -->
<div class="bg-gray-50 py-16 md:py-24">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">📅 📢 Pengumuman SPMB</h2>
            <p class="text-xl text-gray-600">Informasi terbaru mengenai Penerimaan Peserta Didik Baru</p>
        </div>

        <!-- Pengumuman Cards -->
        <div class="space-y-8">
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
                            <li>Fotocopy Ijazah / Surat Keterangan Lulus</li>
                            <li>Fotocopy Ijazah Madrasah Diniyah (jika ada)</li>
                            <li>Surat Keterangan Berkelakuan Baik;</li>
                            <li>Fotocopy akte kelahiran atau kenal lahir</li>
                            <li>Fotocopy Kartu Keluarga (KK) beserta KTP orang tua</li>
                            <li>Fotocopy  Piagam / Setifikat Prestasi (Jika ada)</li>
                            <li>Fotocopy Kartu Indonesia Pintar (KIP) /PKH  (jika ada)</li>
                            <li>h.	Mengisi Format M1 dengan map biru untuk calon siswa laki-laki dan map merah untuk calon siswi perempuan</li>
                        </ul>
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
                            <li>📧 Email: smpn1.klpc@gmail.com</li>
                            <li>📱 Phone / Whatsapp: +62 812-2928-4171 (Pamuji), +62 852-2201-0562 (Puryati)</li>
                            <li>⏰ Jam Operasional: Senin - Jumat, 08:00 - 14:00 WIB</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- CTA Section -->
<!-- <div class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16 md:py-24">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-bold mb-6">Jangan Lewatkan Kesempatan Emas Ini!</h2>
        <p class="text-xl text-blue-100 mb-8">
            Daftarkan diri Anda sekarang dan jadilah bagian dari komunitas pelajar kami yang dinamis dan berprestasi.
        </p>
        <a href="/daftar" class="inline-block bg-white text-blue-600 font-bold py-4 px-10 rounded-xl hover:bg-blue-50 transition transform hover:scale-105 shadow-lg hover:shadow-xl">
            ✍️ Mulai Pendaftaran Sekarang
        </a>
    </div>
</div> -->

<!-- Footer -->
<footer class="bg-gray-900 text-white py-12 md:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-3 gap-8 mb-8">
            <div>
                <h3 class="text-xl font-bold mb-3">SMP Negeri 1 Kalipucang</h3>
                <p class="text-gray-400">
                    Jl. Raya Kalipucang - Pangandaran no 247 Desa Cibuluh, Kecamatan Cibuluh Kabupaten Pangandaran
                </p>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-3">Menu</h4>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="/" class="hover:text-white transition">Home</a></li>
                    <li><a href="/daftar" class="hover:text-white transition">Pendaftaran</a></li>
                    <li><a href="/pengumuman" class="hover:text-white transition">Pengumuman</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-3">Kontak</h4>
                <p class="text-gray-400">Email: smpn1.klpc@gmail.com</p>
                <p class="text-gray-400">Phone / Whatsapp: <br/>+62 812-2928-4171 (Pamuji)<br/>+62 852-2201-0562 (Puryati)</p>
            </div>
        </div>
        <div class="border-t border-gray-800 pt-6 text-center text-gray-400">
            <p>&copy; 2026 SMP Negeri 1 Kalipucang. All rights reserved.</p>
        </div>
    </div>
</footer>

    </body>
</html>
