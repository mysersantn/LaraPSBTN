<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <div class="p-6 lg:p-8 bg-white border-b border-gray-200 rounded-xl mt-8">

        <!-- Breadcrumb -->
        <nav class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700"
            aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="/dashboard"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                            </path>
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <a href="/pendaftaran-main"
                            class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Pendaftaran</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Pendaftaran Pelanggan Sambungan Baru
                            </span>
                    </div>
                </li>
            </ol>
        </nav>

        <div class="mt-8">
            <h1 class="text-2xl font-medium text-gray-900">
                Pendaftaran Pelanggan Sambungan Baru
            </h1>
            <hr class="mb-6">
            <form>
                <div class="mb-6">
                    <label for="tanggal-sistem"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                        Sistem</label>
                    <div date-rangepicker class="flex items-center">
                        <div class="relative">
                            <input wire:model="tgl_today" type="date" name="tgl_today" id="tgl_today"
                            class="bg-gray-100 border border-gray-300 text-gray-400 text-sm rounded-lg block w-full p-2.5" wire:ignore disabled />
                        </div>
                        <span class="mx-4 text-gray-500">Tanggal SPL</span>
                        <div class="relative">
                            <input wire:model="tgl_daftar" type="date" name="tgl_daftar" id="tgl_daftar"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" required />
                            @error('tgl_daftar')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <label for="sambungan-baru"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                        Sambungan Baru *</label>
                    <select id="sambungan-baru"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected hidden>Jenis Sambungan</option>
                        <option value="AB">Air Bersih</option>
                        <option value="AL">Air Limbah</option>
                    </select>
                </div>
                <div class="mb-6">
                    <label for="sambungan-baru"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                        Kantor Cabang *</label>
                    <select id="sambungan-baru"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected hidden>Kantor Cabang</option>
                        @foreach ($cabang as $item)
                        <option value="{{$item->kd_kantor}}">{{$item->kantor}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-6">
                    <label for="nama-pemohon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Pemohon
                        *</label>
                    <input type="text" id="nama-pemohon"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required>
                </div>
                <div class="mb-6">
                    <label for="no-hp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No HP
                        Pemohon
                        *</label>
                    <input type="text" id="no-hp"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required>
                </div>
                <div class="mb-6">
                    <label for="alamat-pemohon"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat
                        Pemohon *</label>
                    <textarea id="alamat-pemohon" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Tulis alamat lengkap pemohon..."></textarea>
                </div>
                <div class="mb-6">
                    <label for="nama-pemilik"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Pemilik
                        *</label>
                    <input type="text" id="nama-pemilik"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required>
                </div>
                <div class="mb-6">
                    <label for="no-ktp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No KTP
                        *</label>
                    <input type="text" id="no-ktp"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required>
                </div>
                <div class="mb-6">
                    <label for="npwp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NPWP
                    </label>
                    <input type="text" id="npwp"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="">
                </div>
                <div class="mb-6">
                    <label for="nomor-telp-pemilik"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telp Pemilik
                    </label>
                    <input type="text" id="nomor-telp-pemilik"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="">
                </div>
                <div class="mb-6">
                    <label for="nomor-hp-pemilik"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                        HP Pemilik
                        *</label>
                    <input type="text" id="nomor-hp-pemilik"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required>
                </div>

                <hr class="mb-6">
                <div class="mb-6">
                    <label for="provinsi"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                        Provinsi *</label>
                    <select wire:model="kd_prop" id="provinsi" wire:change="getKotaKabupaten"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected hidden>Provinsi</option>
                        @if (!is_null($provinsi))
                        @foreach ($provinsi as $item)
                        <option value="{{$item->kd_prop}}">{{$item->provinsi}}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="mb-6">
                    <label for="provinsi"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                        Kabupaten/Kota *</label>
                    <select wire:model="kd_kab" id="kabupatenKota" wire:change="getKecamatan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected hidden>Kabupaten/Kota</option>
                        @if (!is_null($kotaKabupaten))
                        @foreach ($kotaKabupaten as $item)
                        <option value="{{$item->kd_kab}}">{{$item->kabupaten}}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="mb-6">
                    <label for="kecamatan"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                        Kecamatan *</label>
                    <select wire:model="kd_kec" id="kecamatan" wire:change="getKelurahan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected hidden>Kecamatan</option>
                        @if (!is_null($kecamatan))
                        @foreach ($kecamatan as $item)
                        <option value="{{$item->kd_kec}}">{{$item->kecamatan}}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="mb-6">
                    <label for="kelurahan"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                        Kelurahan *</label>
                    <select wire:model="kd_kel" id="kelurahan" wire:change="getKodePos"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected hidden>Kelurahan</option>
                        @if (!is_null($kelurahan))
                        @foreach ($kelurahan as $item)
                        <option value="{{$item->kd_kel}}">{{$item->kelurahan}}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="mb-6">
                    <label for="kodepos"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                        Kode POS *</label>
                    <select wire:model="kd_pos" id="kodepos"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected hidden>Kode Pos</option>
                        @if (!is_null($kodepos))
                        @foreach ($kodepos as $item)
                        <option value="{{$item->kd_pos}}">{{$item->kd_pos}}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="mb-6">
                    <label for="alamat-pemasangan"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Pemasangan
                        *</label>
                    <input type="text" id="alamat-pemasangan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required>
                </div>
                <div class="mb-6">
                    <label for="no-rumah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No
                        Rumah
                        *</label>
                    <input type="text" id="no-rumah"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required>
                </div>
                <div class="mb-6">
                    <label for="rt-rw" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">RT / RW
                    </label>
                    <input type="text" id="rt-rw"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="">
                </div>

                <hr class="mb-6">

                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                    </label>
                    <input type="text" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="">
                </div>
                <div class="mb-6">
                    <label for="peruntukan-penggunaan-air"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peruntukan Penggunaan Air
                        *</label>
                    <input type="text" id="peruntukan-penggunaan-air"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required>
                </div>
                <div class="mb-6">
                    <label for="kondisi-persil"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kondisi Persil
                        *</label>
                    <input type="text" id="kondisi-persil"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required>
                </div>
                <div class="mb-6">
                    <label for="luas-bangunan"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Luas
                        Bangunan</label>
                    <input type="text" id="luas-bangunan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="">
                </div>
                <div class="mb-6">
                    <label for="jumlah-hunian"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah
                        Hunian</label>
                    <input type="text" id="jumlah-hunian"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="">
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
            </form>
        </div>
    </div>
</div>
