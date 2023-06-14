<div>
    <div>
        <div class="fixed z-10 inset-0 overflow-y-auto top-8" aria-labelledby="modal-title" role="dialog"
            aria-modal="true">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 bg-gray-500 opacity-75 transition-opacity" aria-hidden="true"></div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <div
                    class="inline-block align-bottom text-left overflow-hidden transform transition-all sm:my-8 sm:align-middle sm:max-w-lg md:max-w-xl lg:max-w-2xl xl:max-w-3xl sm:w-full rounded-lg">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4 rounded-lg">
                        <input type="hidden">
                        <div class="flex justify-between pb-4">
                            <h1 class="font-semibold text-2xl text-blue-800">Verifikasi Detail</h1>
                            <button wire:click.prevent="close()" type="button"
                                class="text-[#282E3F] font-medium text-2xl">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                        <hr class="pb-4">
                        <div>
                            <div class="grid md:grid-cols-2 md:gap-6">
                                <div class="bg-blue-50 p-4">
                                    <div class="mb-2 flex gap-4">
                                        <label for="kd_daftar"
                                            class="w-full block mb-2 text-sm font-medium text-gray-900 dark:text-white">No
                                            Register</label>
                                        <input wire:model.defer='kd_daftar' type="text" id="kd_daftar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="" readonly>
                                    </div>
                                    <div class="mb-2 flex gap-4">
                                        <label for="pemilik"
                                            class="block w-full mb-2 text-sm font-medium text-gray-900 dark:text-white">Pemilik</label>
                                        <input wire:model.defer='pemilik' type="text" id="pemilik"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="" readonly>
                                    </div>
                                    <div class="mb-2 flex gap-4">
                                        <label for="no_hp"
                                            class="block w-full mb-2 text-sm font-medium text-gray-900 dark:text-white">No
                                            Handphone</label>
                                        <input wire:model.defer='no_hp' type="text" id="no_hp"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="" readonly>
                                    </div>
                                    <div class="mb-2 flex gap-4">

                                        <label for="almt_pemilik"
                                            class="block w-full mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat
                                            Pemasangan</label>
                                        <textarea wire:model.defer='almt_pasang' id="almt_pemilik" rows="4"
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="" readonly></textarea>
                                    </div>
                                    <div class="mb-2 flex gap-4">
                                        <label for="provinsi"
                                            class="block w-full mb-2 text-sm font-medium text-gray-900 dark:text-white">Provinsi</label>
                                        <input wire:model.defer='kd_prop' type="text" id="provinsi"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="" readonly>
                                    </div>
                                    <div class="mb-2 flex gap-4">
                                        <label for="kabupaten"
                                            class="block w-full mb-2 text-sm font-medium text-gray-900 dark:text-white">Kota
                                            /
                                            Kabupaten</label>
                                        <input wire:model.defer='kd_kab' type="text" id="kabupaten"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="" readonly>
                                    </div>
                                    <div class="mb-2 flex gap-4">
                                        <label for="kecamatan"
                                            class="block w-full mb-2 text-sm font-medium text-gray-900 dark:text-white">Kecamatan</label>
                                        <input wire:model.defer='kd_kec' type="text" id="kecamatan"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="" readonly>
                                    </div>
                                    <div class="mb-2 flex gap-4">
                                        <label for="kelurahan"
                                            class="block w-full mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelurahan</label>
                                        <input wire:model.defer='kd_kel' type="text" id="kelurahan"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="" readonly>
                                    </div>
                                    <div class="mb-2 flex gap-4">
                                        <label for="kd_pos"
                                            class="block w-full mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode
                                            Pos</label>
                                        <input wire:model.defer='kd_pos' type="text" id="kd_pos"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="" readonly>
                                    </div>
                                    <div class="mb-2 flex gap-4">
                                        <label for="kocab"
                                            class="block w-full mb-2 text-sm font-medium text-gray-900 dark:text-white">Cabang</label>
                                        <select wire:model.defer="kd_cabang" name="kocab" id="kocab"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-fit p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option selected hidden>Kantor Cabang</option>
                                            @foreach ($cabang as $item)
                                                <option value="{{ $item->kd_kantor }}">{{ $item->kantor }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="bg-gray-900 p-4">
                                    <div class="text-sm font-medium text-gray-900">Lokasi
                                        Denah Pemasangan</div>
                                    <div class="rounded-lg bg-gray-50" id="map"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4 my-4 rounded-lg flex flex-row-reverse gap-4">
                        <button wire:click.prevent="close()" type="button"
                            class="w-48 bg-gray-500 rounded-lg text-white py-1 px-4 hover:bg-gray-700">
                            <i class="fa-solid fa-circle-xmark mr-2"></i>Batal
                        </button>
                        <button wire:click="store()" type="button"
                            class="w-48 bg-blue-800 rounded-lg text-white py-1 px-4 hover:bg-blue-950">
                            <i class="fa-solid fa-pen-to-square mr-2"></i>Simpan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function initMap() {
            console.log("Menginisialisasi peta...");
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 10,
                center: {
                    lat: 2.1154,
                    lng: 99.5451
                },
            });
            console.log("Peta berhasil diinisialisasi.");
        }
    </script>
    {{-- API Google Map dengan bahasa Indonesia --}}
    <script
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries=places&language=id&callback=initMap"
        async defer></script>


</div>
