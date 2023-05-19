<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <div class="p-6 lg:p-8 bg-white border-b border-gray-200 rounded-xl mt-8">
        <h1 class="text-2xl font-medium text-gray-900">
            Pendaftaran Menu
        </h1>
        <hr class="mb-6">

        <div id="accordion-flush" data-accordion="collapse"
            data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
            data-inactive-classes="text-gray-500 dark:text-gray-400">
            {{-- <h2 id="accordion-flush-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                    data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                    aria-controls="accordion-flush-body-1">
                    <span>Pendaftaran Pelanggan</span>
                    <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </h2> --}}
            <h2 id="accordion-flush-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                    data-accordion-target="#accordion-flush-body-1" aria-expanded="false"
                    aria-controls="accordion-flush-body-1">
                    <span>Pendaftaran</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </h2>
            <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                <div class="py-2 border-gray-200 dark:border-gray-700">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <tbody>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Pendaftaran Pelanggan (Loket)
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Verifikasi Pendaftaran Online
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Surat Perintah Kerja Opname
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Input Hasil Survey
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Verifikasi Hasil Survey
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Anggaran Biaya Pemasangan
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Pemberitahuan Biaya Pasang
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Permintaan Meter Air
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Surat Perintah Kerja Pemasangan
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Bukti Permintaan & Pengeluaran Barang
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Berita Acara Pemasangan
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Aktivasi Pelanggan
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Migrasi Bacameter
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <h2 id="accordion-flush-heading-2">
                <button type="button"
                    class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                    data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                    aria-controls="accordion-flush-body-2">
                    <span>Cetak Ulang</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </h2>
            <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                <div class="py-2 border-gray-200 dark:border-gray-700">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <tbody>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Cetak Ulang SPK dan SPMK
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Cetak Ulang BAP
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Cetak Ulang SPKO
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Cetak Ulang Pemberitahuan Biaya Pasang
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Cetak Ulang ABPD
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Cetak Ulang Survey
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Cetak Ulang BPPB
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Cetak Ulang Aktivasi
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Cetak Ulang Form Pendaftaran
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Cetak Perjanjian Pelanggan
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Cetak Ulang SPPD
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <h2 id="accordion-flush-heading-3">
                <button type="button"
                    class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                    data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
                    aria-controls="accordion-flush-body-3">
                    <span>Perubahan</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </h2>
            <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                <div class="py-2 border-gray-200 dark:border-gray-700">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <tbody>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Ubah Data ABPD
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Ubah Data Survey
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Ubah Data Pemasangan
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Ubah Data NPA
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Ubah Data Nama & Alamat
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="ubahdatanama"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <h2 id="accordion-flush-heading-4">
                <button type="button"
                    class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                    data-accordion-target="#accordion-flush-body-4" aria-expanded="false"
                    aria-controls="accordion-flush-body-4">
                    <span>Laporan Pendaftaran Calon Pelanggan</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </h2>
            <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
                <div class="py-2 border-gray-200 dark:border-gray-700">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <tbody>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Daftar Calon Pelanggan yang Bermohon Perbulan
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Daftar Calon Pelanggan yang Sudah Bayar
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Daftar Permohonan Sudah Survey
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Daftar Permohonan Sudah Bayar
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Daftar Permohonan Sudah Pasang
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Daftar Permohonan Sambungan Baru
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Daftar Calon Pelanggan Yang Sudah Pasang
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Daftar Pemasangan Sambungan Baru
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Daftar Calon Pelanggan Yang Sudah Aktif
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Daftar Calon Pelanggan Yang Sudah Pasang Belum Aktif
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Daftar Calon Pelanggan Yang Sudah Bayar Belum Pasang
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Daftar Calon Pelanggan Yang Belum Pasang
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Daftar Calon Pelanggan Survey Tidak Berhasil
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Daftar Calon Pelanggan Pemasangan Distribusi
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Daftar Calon Pelanggan MBR Yang Bermohon Perbulan
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Daftar Calon Pelanggan MBR Yang Sudah Terpasang
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <h2 id="accordion-flush-heading-5">
                <button type="button"
                    class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                    data-accordion-target="#accordion-flush-body-5" aria-expanded="false"
                    aria-controls="accordion-flush-body-5">
                    <span>Rekapitulasi Pendaftaran Calon Pelanggan</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </h2>
            <div id="accordion-flush-body-5" class="hidden" aria-labelledby="accordion-flush-heading-5">
                <div class="py-2 border-gray-200 dark:border-gray-700">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <tbody>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Rekap Calon Pelanggan Yang Sudah Bayar Belum Pasang
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Rekap Calon Pelanggan Yang Sudah Bayar Belum Pasang
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Rekap Calon Pelanggan Yang Sudah Pasang Belum Aktif
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Rekap Calon Pelanggan Yang Sudah Aktif
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Rekap Calon Pelanggan Yang Sudah Belum Pasang
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Rekap Calon Pelanggan Yang Sudah Sudah Pasang
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Rekap Calon Pelanggan Yang Sudah Bayar
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Rekap Calon Pelanggan Yang Bermohon Perbulan
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Status Pendaftaran
                                    </th>
                                    <td class="px-6 py-4 text-left">
                                        <a href="pendaftaran-pelanggan"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buka</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
