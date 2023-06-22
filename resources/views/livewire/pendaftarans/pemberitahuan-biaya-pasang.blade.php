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
                        <i class="fa-solid fa-bookmark mr-2"></i>Pemberitahuan Biaya Pasang
                    </h1>
                    <hr class="mb-6">
                    <div class="mb-6">
                        <div id="alert-1"
                            class="flex p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                            role="alert">
                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Info</span>
                            <div class="ml-3 text-sm font-medium">
                                <span class="font-bold">Perhatian!</span> Pastikan anggaran biaya pasang telah tercetak dengan benar!
                            </div>
                            <button type="button"
                                class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700"
                                data-dismiss-target="#alert-1" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div>
                        <div class="mb-6">
                            <div class="mb-6">
                                <div class="mb-6">
                                    <label for="nama-pemohon"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                                        Register <span class="text-red-600">*</span></label>
                                    <input type="text" id="nama-pemohon"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" required>
                                </div>
                                <div class="mb-6">
                                    <label for="nama-pemohon"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                        Pemilik</label>
                                    <input type="text" id="nama-pemohon"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" disabled readonly>
                                </div>
                                <div class="mb-6">
                                    <label for="alamat-pemohon"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat
                                        Pemasangan</label>
                                    <textarea id="alamat-pemohon" rows="4"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" disabled readonly></textarea>
                                </div>
                                <div class="mb-6">
                                    <label for="nama-pemohon"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                                        Sambungan </label>
                                    <input type="text" id="nama-pemohon"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" disabled readonly>
                                </div>
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
