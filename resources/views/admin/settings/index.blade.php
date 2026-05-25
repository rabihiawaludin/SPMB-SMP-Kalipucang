<x-app-layout>
<div class="max-w-4xl mx-auto py-8 px-6">

    <div class="mb-6">
        <h1 class="text-3xl font-bold text-gray-800">
            Pengaturan PPDB
        </h1>

        <p class="text-gray-500 mt-1">
            Pengaturan sistem pengumuman
        </p>
    </div>

    <div class="bg-white rounded-2xl shadow p-8">

        <div class="flex items-center justify-between">

            <div>

                <h2 class="text-xl font-bold text-gray-800">
                    Pengumuman Hasil
                </h2>

                <p class="text-gray-500 mt-2">
                    Buka atau tutup akses hasil PPDB
                </p>

            </div>

            <div>

                @if($setting->announcement_open)

                    <div class="bg-green-100 text-green-700 px-4 py-2 rounded-xl font-semibold">
                        DIBUKA
                    </div>

                @else

                    <div class="bg-red-100 text-red-700 px-4 py-2 rounded-xl font-semibold">
                        DITUTUP
                    </div>

                @endif

            </div>

        </div>

        <form
            method="POST"
            action="/admin/settings/toggle-announcement"
            class="mt-8"
        >
            @csrf

            <button
                class="px-6 py-3 rounded-xl text-white font-semibold
                {{ $setting->announcement_open
                    ? 'bg-red-600 hover:bg-red-700'
                    : 'bg-green-600 hover:bg-green-700'
                }}"
            >

                {{ $setting->announcement_open
                    ? 'Tutup Pengumuman'
                    : 'Buka Pengumuman'
                }}

            </button>

        </form>

    </div>

</div>
</x-app-layout>