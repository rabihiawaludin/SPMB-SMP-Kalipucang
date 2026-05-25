<x-app-layout>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800">
                Dashboard PPDB
            </h1>

            <p class="text-gray-500 mt-1">
                Selamat datang administrator.
            </p>
        </div>
        <div class="grid md:grid-cols-4 gap-6">

            <div class="bg-white rounded-2xl shadow p-6">
                <p class="text-gray-500 text-sm">
                    Total Pendaftar
                </p>

                <h2 class="text-4xl font-bold mt-2">
                    {{ \App\Models\Student::count() }}
                </h2>
            </div>

            <div class="bg-green-100 rounded-2xl shadow p-6">
                <p class="text-green-700 text-sm">
                    Diterima
                </p>

                <h2 class="text-4xl font-bold mt-2">
                    {{
                        \App\Models\Student::where(
                            'accepted_status',
                            'accepted'
                        )->count()
                    }}
                </h2>
            </div>

            <div class="bg-red-100 rounded-2xl shadow p-6">
                <p class="text-red-700 text-sm">
                    Ditolak
                </p>

                <h2 class="text-4xl font-bold mt-2">
                    {{
                        \App\Models\Student::where(
                            'accepted_status',
                            'rejected'
                        )->count()
                    }}
                </h2>
            </div>

            <div class="bg-yellow-100 rounded-2xl shadow p-6">
                <p class="text-yellow-700 text-sm">
                    Pending
                </p>

                <h2 class="text-4xl font-bold mt-2">
                    {{
                        \App\Models\Student::where(
                            'verification_status',
                            'pending'
                        )->count()
                    }}
                </h2>
            </div>

        </div>
    <div>
</div>

</x-app-layout>