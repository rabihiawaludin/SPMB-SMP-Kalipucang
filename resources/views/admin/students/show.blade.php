<x-app-layout>
<div class="max-w-6xl mx-auto py-8 px-6">

    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                Detail Pendaftar
            </h1>
            <p class="text-gray-500 mt-1">
                {{ $student->registration_number }}
            </p>
        </div>

        <div>
            @if($student->verification_status == 'verified')
                <div class="bg-green-100 text-green-700 px-4 py-2 rounded-xl font-semibold">
                    VERIFIED
                </div>
            @elseif($student->verification_status == 'rejected')
                <div class="bg-red-100 text-red-700 px-4 py-2 rounded-xl font-semibold">
                    REJECTED
                </div>
            @else
                <div class="bg-yellow-100 text-yellow-700 px-4 py-2 rounded-xl font-semibold">
                    PENDING
                </div>
            @endif
        </div>
    </div>

    <div class="grid lg:grid-cols-3 gap-6">

        <div class="lg:col-span-2">
            <div class="bg-white rounded-2xl shadow p-8">

                <div class="border-b pb-5 mb-6">
                    <h2 class="text-2xl font-bold text-gray-800">
                        {{ $student->fullname }}
                    </h2>
                    <p class="text-gray-500 mt-1">
                        {{ $student->school_origin }}
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-6">

                    <div>
                        <label class="text-sm text-gray-500">
                            NIK
                        </label>
                        <p class="font-semibold text-gray-800">
                            {{ $student->nik }}
                        </p>
                    </div>

                    <div>
                        <label class="text-sm text-gray-500">
                            NISN
                        </label>
                        <p class="font-semibold text-gray-800">
                            {{ $student->nisn }}
                        </p>
                    </div>

                    <div>
                        <label class="text-sm text-gray-500">
                            Tempat Lahir
                        </label>
                        <p class="font-semibold text-gray-800">
                            {{ $student->birth_place }}
                        </p>
                    </div>

                    <div>
                        <label class="text-sm text-gray-500">
                            Tanggal Lahir
                        </label>
                        <p class="font-semibold text-gray-800">
                            {{ \Carbon\Carbon::parse($student->birth_date)->format('d F Y') }}
                        </p>
                    </div>

                    <div>
                        <label class="text-sm text-gray-500">
                            Jenis Kelamin
                        </label>
                        <p class="font-semibold text-gray-800">
                            {{ $student->gender == 'L' ? 'Laki-laki' : 'Perempuan' }}
                        </p>
                    </div>

                    <div>
                        <label class="text-sm text-gray-500">
                            Agama
                        </label>
                        <p class="font-semibold text-gray-800">
                            {{ $student->religion }}
                        </p>
                    </div>

                    <div>
                        <label class="text-sm text-gray-500">
                            No HP
                        </label>
                        <p class="font-semibold text-gray-800">
                            {{ $student->phone }}
                        </p>
                    </div>

                    <div>
                        <label class="text-sm text-gray-500">
                            Asal Sekolah
                        </label>
                        <p class="font-semibold text-gray-800">
                            {{ $student->school_origin }}
                        </p>
                    </div>

                    <div>
                        <label class="text-sm text-gray-500">
                            Nama Ayah
                        </label>
                        <p class="font-semibold text-gray-800">
                            {{ $student->father_name }}
                        </p>
                    </div>

                    <div>
                        <label class="text-sm text-gray-500">
                            Nama Ibu
                        </label>
                        <p class="font-semibold text-gray-800">
                            {{ $student->mother_name }}
                        </p>
                    </div>

                    <div>
                        <label class="text-sm text-gray-500">
                            No HP Orang Tua
                        </label>
                        <p class="font-semibold text-gray-800">
                            {{ $student->parent_phone }}
                        </p>
                    </div>

                </div>

                <div class="mt-8">
                    <label class="text-sm text-gray-500">
                        Alamat
                    </label>

                    <div class="mt-2 bg-gray-50 rounded-xl p-4 text-gray-700 leading-relaxed">
                        {{ $student->address }}
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6 mt-8">

                    <div>
                        <label class="text-sm text-gray-500">
                            Status Verifikasi
                        </label>
                        <p class="font-semibold text-gray-800 uppercase mt-2">
                            @if($student->verification_status == 'verified')
                                <span class="text-green-600">✓ Terverifikasi</span>
                            @elseif($student->verification_status == 'rejected')
                                <span class="text-red-600">✗ Ditolak</span>
                            @else
                                <span class="text-yellow-600">⏳ Menunggu</span>
                            @endif
                        </p>
                    </div>

                    <div>
                        <label class="text-sm text-gray-500">
                            Status Penerimaan
                        </label>
                        <p class="font-semibold text-gray-800 uppercase mt-2">
                            @if($student->accepted_status == 'accepted')
                                <span class="text-green-600">✓ Diterima</span>
                            @elseif($student->accepted_status == 'rejected')
                                <span class="text-red-600">✗ Ditolak</span>
                            @else
                                <span class="text-gray-600">- Belum Ditentukan</span>
                            @endif
                        </p>
                    </div>

                </div>

            </div>
        </div>

        <div>
            <div class="bg-white rounded-2xl shadow p-6">

                <h3 class="text-xl font-bold text-gray-800 mb-6">
                    Aksi Verifikasi
                </h3>

                <div class="space-y-4">

                    <form method="POST" action="/admin/students/{{ $student->id }}/verify">
                        @csrf

                        <button class="w-full bg-green-600 hover:bg-green-700 text-white py-3 rounded-xl font-semibold transition">
                            Verifikasi Pendaftar
                        </button>
                    </form>

                    <form method="POST" action="/admin/students/{{ $student->id }}/reject">
                        @csrf

                        <button class="w-full bg-red-600 hover:bg-red-700 text-white py-3 rounded-xl font-semibold transition">
                            Tolak Pendaftar
                        </button>
                    </form>

                </div>

                <div class="border-t mt-8 pt-6">

                    <h4 class="font-bold text-gray-800 mb-4">
                        Informasi Sistem
                    </h4>

                    <div class="space-y-4 text-sm">

                        <div>
                            <label class="text-gray-500">
                                Nomor Pendaftaran
                            </label>

                            <p class="font-semibold text-gray-800 mt-1 break-all">
                                {{ $student->registration_number }}
                            </p>
                        </div>

                        <div>
                            <label class="text-gray-500">
                                Tanggal Daftar
                            </label>

                            <p class="font-semibold text-gray-800 mt-1">
                                {{ $student->created_at->format('d F Y H:i') }}
                            </p>
                        </div>

                        <div>
                            <label class="text-gray-500">
                                Status Verifikasi
                            </label>

                            <p class="font-semibold text-gray-800 mt-1 uppercase">
                                {{ $student->verification_status }}
                            </p>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>

</div>
</x-app-layout>