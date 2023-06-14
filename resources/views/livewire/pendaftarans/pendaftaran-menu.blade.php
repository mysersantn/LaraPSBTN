<div class="p-2 lg:p-4 bg-white border-b border-gray-200 rounded-xl">
    <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white text-gray-900"
        data-inactive-classes="text-gray-500">
        <h2 id="accordion-flush-heading-1">
            <button type="button"
                class="flex items-center justify-between w-full py-2 font-medium text-left text-gray-500 border-b border-gray-200"
                data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                aria-controls="accordion-flush-body-1">
                <span class="text-sm">#Pendaftaran</span>
                <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </h2>
        <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
            <div class="flex-none text-left items-start">
                <x-nav-link-my href="{{ route('pendaftaran-pelanggan') }}" :active="request()->routeIs('pendaftaran-pelanggan')">
                    {{ __('Pendaftaran pelanggan') }}
                </x-nav-link-my>
                <x-nav-link-my href="{{ route('pendaftaran-verifikasi') }}" :active="request()->routeIs('pendaftaran-verifikasi')">
                    {{ __('Verifikasi Pendaftaran Online') }}
                </x-nav-link-my>
                <x-nav-link-my href="{{ route('surat-perintah-kerja-opname') }}" :active="request()->routeIs('surat-perintah-kerja-opname')">
                    {{ __('Surat Perintah Kerja Opname') }}
                </x-nav-link-my>
                <x-nav-link-my href="{{ route('input-hasil-survey') }}" :active="request()->routeIs('input-hasil-survey')">
                    {{ __('Input Hasil Survey') }}
                </x-nav-link-my>
                <x-nav-link-my href="{{ route('verifikasi-hasil-survey') }}" :active="request()->routeIs('verifikasi-hasil-survey')">
                    {{ __('Verifikasi Hasil Survey') }}
                </x-nav-link-my>
                <x-nav-link-my href="{{ route('anggaran-biaya-pemasangan') }}" :active="request()->routeIs('anggaran-biaya-pemasangan')">
                    {{ __('Anggaran Biaya Pemasangan') }}
                </x-nav-link-my>
                <x-nav-link-my href="{{ route('pemberitahuan-biaya-pasang') }}" :active="request()->routeIs('pemberitahuan-biaya-pasang')">
                    {{ __('Pemberitahuan Biaya Pemasangan') }}
                </x-nav-link-my>
                <x-nav-link-my href="{{ route('permintaan-meter-air') }}" :active="request()->routeIs('permintaan-meter-air')">
                    {{ __('Permintaan Meter Air') }}
                </x-nav-link-my>
                <x-nav-link-my href="{{ route('surat-perintah-kerja-pemasangan') }}" :active="request()->routeIs('surat-perintah-kerja-pemasangan')">
                    {{ __('Surat Perintah Kerja Pemasangan') }}
                </x-nav-link-my>
                <x-nav-link-my href="{{ route('bukti-permintaan-pengeluaran-barang') }}" :active="request()->routeIs('bukti-permintaan-pengeluaran-barang')">
                    {{ __('Bukti Permintaan & Pengeluaran Barang') }}
                </x-nav-link-my>
                <x-nav-link-my href="{{ route('berita-acara-pemasangan') }}" :active="request()->routeIs('berita-acara-pemasangan')">
                    {{ __('Berita acara Pemasangan') }}
                </x-nav-link-my>
                <x-nav-link-my href="{{ route('aktivasi-pelanggan') }}" :active="request()->routeIs('aktivasi-pelanggan')">
                    {{ __('Aktivasi Pelanggan') }}
                </x-nav-link-my>
                <x-nav-link-my href="{{ route('migrasi-bacameteran') }}" :active="request()->routeIs('migrasi-bacameteran')">
                    {{ __('Migrasi Bacameter') }}
                </x-nav-link-my>
            </div>
        </div>
        <h2 id="accordion-flush-heading-2">
            <button type="button"
                class="flex items-center justify-between w-full py-2 font-medium text-left text-gray-500 border-b border-gray-200"
                data-accordion-target="#accordion-flush-body-2" aria-expanded="true"
                aria-controls="accordion-flush-body-2">
                <span class="text-sm">#Cetak Ulang</span>
                <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </h2>
        <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
            <div class="flex-none text-left items-start">
                <x-nav-link-my href="{{ route('pendaftaran-pelanggan') }}" :active="request()->routeIs('pendaftaran-pelanggan')">
                    {{ __('Pendaftaran pelanggan') }}
                </x-nav-link-my>
                <x-nav-link-my href="{{ route('pendaftaran-verifikasi') }}" :active="request()->routeIs('pendaftaran-verifikasi')">
                    {{ __('Verifikasi Pendaftaran Online') }}
                </x-nav-link-my>
            </div>
        </div>
        <h2 id="accordion-flush-heading-3">
            <button type="button"
                class="flex items-center justify-between w-full py-2 font-medium text-left text-gray-500 border-b border-gray-200"
                data-accordion-target="#accordion-flush-body-3" aria-expanded="true"
                aria-controls="accordion-flush-body-3">
                <span class="text-sm">#Perubahan</span>
                <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </h2>
        <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
            <div class="flex-none text-left items-start">
                <x-nav-link-my href="{{ route('pendaftaran-pelanggan') }}" :active="request()->routeIs('pendaftaran-pelanggan')">
                    {{ __('Pendaftaran pelanggan') }}
                </x-nav-link-my>
                <x-nav-link-my href="{{ route('pendaftaran-verifikasi') }}" :active="request()->routeIs('pendaftaran-verifikasi')">
                    {{ __('Verifikasi Pendaftaran Online') }}
                </x-nav-link-my>
            </div>
        </div>
        <h2 id="accordion-flush-heading-4">
            <button type="button"
                class="flex items-center justify-between w-full py-2 font-medium text-left text-gray-500 border-b border-gray-200"
                data-accordion-target="#accordion-flush-body-4" aria-expanded="true"
                aria-controls="accordion-flush-body-4">
                <span class="text-sm">#Laporan</span>
                <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </h2>
        <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
            <div class="flex-none text-left items-start">
                <x-nav-link-my href="{{ route('pendaftaran-pelanggan') }}" :active="request()->routeIs('pendaftaran-pelanggan')">
                    {{ __('Pendaftaran pelanggan') }}
                </x-nav-link-my>
                <x-nav-link-my href="{{ route('pendaftaran-verifikasi') }}" :active="request()->routeIs('pendaftaran-verifikasi')">
                    {{ __('Verifikasi Pendaftaran Online') }}
                </x-nav-link-my>
            </div>
        </div>
        <h2 id="accordion-flush-heading-5">
            <button type="button"
                class="flex items-center justify-between w-full py-2 font-medium text-left text-gray-500 border-b border-gray-200"
                data-accordion-target="#accordion-flush-body-5" aria-expanded="true"
                aria-controls="accordion-flush-body-5">
                <span class="text-sm">#Rekapitulasi</span>
                <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-5 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </h2>
        <div id="accordion-flush-body-5" class="hidden" aria-labelledby="accordion-flush-heading-5">
            <div class="flex-none text-left items-start">
                <x-nav-link-my href="{{ route('pendaftaran-pelanggan') }}" :active="request()->routeIs('pendaftaran-pelanggan')">
                    {{ __('Pendaftaran pelanggan') }}
                </x-nav-link-my>
                <x-nav-link-my href="{{ route('pendaftaran-verifikasi') }}" :active="request()->routeIs('pendaftaran-verifikasi')">
                    {{ __('Verifikasi Pendaftaran Online') }}
                </x-nav-link-my>
            </div>
        </div>
    </div>
</div>
