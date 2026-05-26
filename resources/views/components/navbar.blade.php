<!-- Navigation Bar -->
<nav class="bg-gradient-to-r from-blue-600 to-blue-800 shadow-lg sticky top-0 z-50">
    <div class="w-full px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            
            <!-- Logo / Brand -->
            <div class="flex items-center">
                <a href="/" class="flex items-center gap-2 hover:opacity-80 transition">
                    <img src="https://smpn1kalipucang.sch.id/logosmp1kalipucang.png" alt="Logo SMP Negeri 1 Kalipucang" class="h-12 w-auto">
                    <span class="text-white font-bold hidden sm:inline">SPMB SMP Negeri 1 Kalipucang 2026/2027</span>
                </a>
            </div>

            <!-- Menu Links -->
            <div class="hidden md:flex space-x-8">
                <a href="/" class="text-white hover:text-blue-100 font-medium transition {{ request()->is('/') ? 'border-b-2 border-blue-300' : '' }}">
                    🏠 Beranda
                </a>
                <a href="/daftar" class="text-white hover:text-blue-100 font-medium transition {{ request()->is('daftar') ? 'border-b-2 border-blue-300' : '' }}">
                    ✍️ Pendaftaran
                </a>
                <!-- <a href="/pengumuman" class="text-white hover:text-blue-100 font-medium transition {{ request()->is('pengumuman') ? 'border-b-2 border-blue-300' : '' }}">
                    📢 Pengumuman
                </a> -->
                <a href="/hasil" class="text-white hover:text-blue-100 font-medium transition {{ request()->is('hasil') ? 'border-b-2 border-blue-300' : '' }}">
                    📋 Hasil
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button class="text-white hover:text-blue-100 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

        </div>
    </div>
</nav>
