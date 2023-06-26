<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

    @push('google-maps-script')
        <script
            src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries=places&language=id&callback=initMap"
            async defer></script>
    @endpush
    @if (session()->has('message'))
        @include('components.alert-message-confirm-my')
    @endif
    @if ($detailMode)
        @include('livewire.pendaftarans.pendaftaran-verifikasi-detail')
    @endif


    <div class="grid lg:grid-cols-8 gap-8">
        <div class="col-span-2 sticky top-16" style="height: 1000px;">
            @include('livewire.pendaftarans.pendaftaran-menu')
        </div>
        <div class="col-span-6">
            <div class="p-2 lg:p-4 bg-white border-b border-gray-200 rounded-xl">
                <div class="">
                    <h1 class="text-lg font-medium text-green-600">
                        <i class="fa-solid fa-bookmark mr-2"></i>Verifikasi Pendaftaran Online
                    </h1>
                    <hr class="mb-6">
                    <div>
                        <div class="flex gap-8">
                            <div class="mb-6 w-fit">
                                <label for="filterCabang"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Kantor
                                    Cabang</label>
                                <select wire:model.defer="filterCabang" name="filterCabang" id="filterCabang"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    {{ auth()->user()->kocab !== '00' ? 'disabled' : '' }}>
                                    <option selected hidden>Kantor Cabang</option>
                                    @foreach ($cabang as $item)
                                        <option value="{{ $item->kd_kantor }}">{{ $item->kantor }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-6 w-fit">
                                <label for="filterTanggal"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                                    Register</label>
                                <input wire:model.defer="filterTanggal" type="date" id="filterTanggal"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Select date" />
                            </div>
                            <div class="mb-6 w-fit">
                                <label for="filterNoregister"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                                    register</label>
                                <input wire:model.defer="filterNoregister" type="text" id="filterNoregister"
                                    maxlength="11"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="input no register"
                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                            </div>
                        </div>
                        <div class="flex gap-8">
                            <div class="mb-6 w-full">
                                <label for="filterNama"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                                <input wire:model.defer="filterNama" type="text" id="filterNama" maxlength="35"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="cari berdasarkan nama pelanggan">
                            </div>
                            <div class="mb-6 w-full">
                                <label for="filterAlamat"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                                <input wire:model.defer="filterAlamat" type="text" id="filterAlamat" maxlength="35"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="cara berdasarkan alamat pelanggan">
                            </div>
                        </div>
                        <div class="flex justify-end gap-8 mb-6">
                            <button wire:click.prevent="cari()"
                                class="w-32 bg-blue-800 rounded-lg text-white py-1 px-4 hover:bg-blue-950">
                                <i class="fa-solid fa-magnifying-glass mr-2"></i>cari
                            </button>
                            <button wire:click.prevent="resetAll"
                                class="w-32 bg-white rounded-lg text-blue-800 border-2 border-blue-800 py-1 px-4 hover:bg-blue-950 hover:text-white">
                                <i class="fa-solid fa-rotate-right mr-2"></i>reset
                            </button>
                        </div>
                        <hr class="mb-6">
                        @if ($showFilter)
                            @include('livewire.pendaftarans.pendaftaran-verifikasi-filter')
                        @else
                            @include('livewire.pendaftarans.pendaftaran-verifikasi-show')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
