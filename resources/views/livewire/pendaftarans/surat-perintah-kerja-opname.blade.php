<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

    @if (session()->has('message'))
        @include('components.alert-message-confirm-my')
    @endif

    <div class="grid lg:grid-cols-8 gap-8">
        <div class="col-span-2 sticky top-16" style="height: 1000px;">
            @include('livewire.pendaftarans.pendaftaran-menu')
        </div>
        <div class="col-span-6">
            <div class="p-2 lg:p-4 bg-white border-b border-gray-200 rounded-xl">
                <div>
                    <h1 class="text-lg font-medium text-green-600">
                        <i class="fa-solid fa-bookmark mr-2"></i>Surat Perintah Kerja Opname (SPKO)
                    </h1>
                    <hr class="mb-6">
                    <div>
                        <div class="border p-4 rounded-lg mb-6">
                            <div class="mb-6">
                                <label for="kd_cabang"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                                    Kantor Cabang <span class="text-red-600">*</span></label>
                                <select wire:model.defer="kd_cabang" id="kd_cabang"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                                    <option selected hidden>Kantor Cabang</option>
                                    {{-- @foreach ($cabang as $item)
                                        <option value="{{ $item->kd_kantor }}">{{ $item->kantor }}</option>
                                    @endforeach --}}
                                </select>
                            </div>
                            <div class="mb-6">
                                <label for="sambungan-baru"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                                    Nama Petugas <span class="text-red-600">*</span></label>
                                <select id="sambungan-baru"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected hidden>Jenis Sambungan</option>
                                    <option value="AB">Air Bersih</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-6">
                            <div class="relative overflow-x-auto sm:rounded-lg">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="p-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-all-search" type="checkbox"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                                </div>
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                No Register
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Nama Pemilik
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Alamat Pemasangan
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Jenis Sambungan
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <td class="w-4 p-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-table-search-1" type="checkbox"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="checkbox-table-search-1"
                                                        class="sr-only">checkbox</label>
                                                </div>
                                            </td>
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                21031700014
                                            </th>
                                            <td class="px-6 py-4">
                                                TONY INDRA SIAMNJUNTAK
                                            </td>
                                            <td class="px-6 py-4">
                                                JL. BILAL DALAM GG LANDASAN NO. 86
                                            </td>
                                            <td class="px-6 py-4">
                                                Air Bersih
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="mb-6">
                            <div class="flex justify-end gap-8">
                                <button wire:click="store()"
                                    class="w-32 bg-blue-800 rounded-lg text-white py-1 px-4 hover:bg-blue-950">
                                    <i class="fa-solid fa-print mr-2"></i>Cetak
                                </button>
                                <button type="button"
                                    class="w-32 bg-white rounded-lg text-blue-800 border-2 border-blue-800 py-1 px-4 hover:bg-blue-950 hover:text-white">
                                    <a href=""><i class="fa-regular fa-circle-xmark mr-2"></i>Close</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
