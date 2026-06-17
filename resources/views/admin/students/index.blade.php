<x-app-layout>
<div class="py-8 px-6">

    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                Data Pendaftar
            </h1>
            <p class="text-gray-500 mt-1">
                Seluruh data peserta PPDB
            </p>
        </div>

        <a
            href="{{ route('admin.students.export', request()->query()) }}"
            class="bg-green-600 hover:bg-green-700 text-white px-5 py-3 rounded-xl font-semibold flex items-center gap-2"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            Export Excel
        </a>
    </div>

    <div class="bg-white rounded-2xl shadow p-5 mb-6">

        <form method="GET" class="grid md:grid-cols-3 gap-4">

            <div>
                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Cari nama / no pendaftaran / NISN"
                    class="w-full border-gray-300 rounded-xl shadow-sm"
                >
            </div>

            <div>
                <select
                    name="status"
                    class="w-full border-gray-300 rounded-xl shadow-sm"
                >
                    <option value="">
                        Semua Status
                    </option>

                    <option
                        value="pending"
                        @selected(request('status') == 'pending')
                    >
                        Pending
                    </option>

                    <option
                        value="verified"
                        @selected(request('status') == 'verified')
                    >
                        Verified
                    </option>

                    <option
                        value="rejected"
                        @selected(request('status') == 'rejected')
                    >
                        Rejected
                    </option>

                </select>
            </div>

            <div class="flex gap-3">

                <button class="bg-blue-600 hover:bg-blue-700 text-white px-5 rounded-xl font-semibold">
                    Filter
                </button>

                <a
                    href="/admin/students"
                    class="bg-gray-200 hover:bg-gray-300 px-5 rounded-xl flex items-center font-semibold"
                >
                    Reset
                </a>

            </div>

        </form>

    </div>

    <div class="bg-white rounded-2xl shadow overflow-hidden">

        <div class="overflow-x-auto">

            <table class="w-full">

                <thead class="bg-gray-100">

                    <tr>

                        <th class="text-left p-4 font-semibold text-gray-700">
                            No Pendaftaran
                        </th>

                        <th class="text-left p-4 font-semibold text-gray-700">
                            Nama
                        </th>

                        <th class="text-left p-4 font-semibold text-gray-700">
                            Asal Sekolah
                        </th>

                        <th class="text-left p-4 font-semibold text-gray-700">
                            Status
                        </th>

                        <th class="text-left p-4 font-semibold text-gray-700">
                            Tanggal
                        </th>

                        <th class="text-left p-4 font-semibold text-gray-700">
                            Aksi
                        </th>

                    </tr>

                </thead>

                <tbody>

                    @forelse ($students as $student)

                        <tr class="border-t hover:bg-gray-50">

                            <td class="p-4 font-medium text-gray-800">
                                {{ $student->registration_number }}
                            </td>

                            <td class="p-4">
                                <div class="font-semibold text-gray-800">
                                    {{ $student->fullname }}
                                </div>

                                <div class="text-sm text-gray-500">
                                    {{ $student->nisn }}
                                </div>
                            </td>

                            <td class="p-4 text-gray-700">
                                {{ $student->school_origin }}
                            </td>

                            <td class="p-4">

                                @if($student->verification_status == 'verified')

                                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-lg text-sm font-semibold">
                                        VERIFIED
                                    </span>

                                @elseif($student->verification_status == 'rejected')

                                    <span class="bg-red-100 text-red-700 px-3 py-1 rounded-lg text-sm font-semibold">
                                        REJECTED
                                    </span>

                                @else

                                    <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-lg text-sm font-semibold">
                                        PENDING
                                    </span>

                                @endif

                            </td>

                            <td class="p-4 text-gray-600">
                                {{ $student->created_at->format('d M Y') }}
                            </td>

                            <td class="p-4">

                                <a
                                    href="/admin/students/{{ $student->id }}"
                                    class="text-blue-600 hover:text-blue-800 font-semibold"
                                >
                                    Detail
                                </a>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="6" class="p-10 text-center text-gray-500">
                                Data tidak ditemukan
                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

    <div class="mt-6">
        {{ $students->links() }}
    </div>

</div>
</x-app-layout>