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
                <div class="">
                    <h1 class="text-lg font-medium text-green-600">
                        <i class="fa-solid fa-bookmark mr-2"></i>Pendaftaran Pelanggan Sambungan Baru
                    </h1>
                    <hr class="mb-6">
                    <div>
                        <div class="mb-6">
                            <label for="tgl_today"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                                Sistem</label>
                            <div date-rangepicker class="sm:flex items-center">
                                <div class="relative">
                                    <input wire:model="tgl_today" type="date" name="tgl_today" id="tgl_today"
                                        class="bg-gray-100 border border-gray-300 text-gray-400 text-sm rounded-lg block w-full p-2.5"
                                        wire:ignore readonly />
                                </div>
                                <span class="mx-4 text-gray-500">Tanggal SPL</span>
                                <div class="relative">
                                    <input wire:model="tgl_daftar" type="date" name="tgl_daftar" id="tgl_daftar"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Select date" required />
                                    @error('tgl_daftar')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="sambungan-baru"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                                Sambungan Baru <span class="text-red-600">*</span></label>
                            <select id="sambungan-baru"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected hidden>Jenis Sambungan</option>
                                <option value="AB">Air Bersih</option>
                                <option value="AL">Air Limbah</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="kd_cabang"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                                Kantor Cabang <span class="text-red-600">*</span></label>
                            <select wire:model.defer="kd_cabang" id="kd_cabang"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                                <option selected hidden>Kantor Cabang</option>
                                @foreach ($cabang as $item)
                                    <option value="{{ $item->kd_kantor }}">{{ $item->kantor }}</option>
                                @endforeach
                            </select>
                            @error('kd_cabang')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="inline-flex items-center justify-center w-full">
                            <hr class="w-full h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
                            <span
                                class="italic absolute px-3 font-medium text-gray-400 -translate-x-1/2 bg-white left-1/2 dark:text-white dark:bg-gray-900">Data
                                Pemohon</span>
                        </div>
                        <div class="sm:flex gap-8">
                            <div class="mb-6 w-full">
                                <label for="pemohon"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                    Pemohon
                                    <span class="text-red-600">*</span></label>
                                <input wire:model="pemohon" type="text" id="pemohon" maxlength="60"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="" required>
                                @error('pemohon')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-6 w-full">
                                <label for="no_telp_pemohon"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No
                                    HP
                                    Pemohon
                                    <span class="text-red-600">*</span></label>
                                <input wire:model="no_telp_pemohon" type="text" id="no_telp_pemohon" maxlength="14"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="" required
                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                                @error('no_telp_pemohon')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="almt_pemohon"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat
                                Pemohon <span class="text-red-600">*</span></label>
                            <textarea wire:model="almt_pemohon" id="almt_pemohon" rows="4" maxlength="200"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Tulis alamat lengkap pemohon..."></textarea>
                            @error('almt_pemohon')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="inline-flex items-center justify-center w-full">
                            <hr class="w-full h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
                            <span
                                class="italic absolute px-3 font-medium text-gray-400 -translate-x-1/2 bg-white left-1/2 dark:text-white dark:bg-gray-900">Data
                                Pemilik</span>
                        </div>
                        <div class="sm:flex gap-8">
                            <div class="mb-6 w-full">
                                <label for="pemilik"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                    Pemilik
                                    <span class="text-red-600">*</span></label>
                                <input wire:model="pemilik" type="text" id="pemilik" maxlength="60"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="" required>
                                @error('pemilik')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-6 w-full">
                                <label for="no_ktp"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No
                                    KTP
                                    <span class="text-red-600">*</span></label>
                                <input wire:model="no_ktp" type="text" id="no_ktp" maxlength="16"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="" required
                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                                @error('no_ktp')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="sm:flex gap-8">
                            <div class="mb-6 w-full">
                                <label for="no_npwp"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NPWP
                                </label>
                                <input wire:model="no_npwp" type="text" id="no_npwp" maxlength="16"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                            </div>
                            <div class="mb-6 w-full">
                                <label for="no_telp"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                                    Telp Pemilik
                                </label>
                                <input wire:model="no_telp" type="text" id="no_telp" maxlength="14"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                            </div>
                            <div class="mb-6 w-full">
                                <label for="no_hp"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                                    HP Pemilik
                                    <span class="text-red-600">*</span></label>
                                <input wire:model="no_hp" type="text" id="no_hp" maxlength="14"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="" required
                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                                @error('no_hp')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="inline-flex items-center justify-center w-full">
                            <hr class="w-full h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
                            <span
                                class="italic absolute px-3 font-medium text-gray-400 -translate-x-1/2 bg-white left-1/2 dark:text-white dark:bg-gray-900">Lokasi
                                Pemasangan</span>
                        </div>
                        <div class="sm:flex gap-8">
                            <div class="mb-6 w-full">
                                <label for="kd_prop"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                                    Provinsi <span class="text-red-600">*</span></label>
                                <select wire:model.defer="kd_prop" id="kd_prop" wire:change="getKotaKabupaten"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected hidden>Provinsi</option>
                                    @if (!is_null($provinsi))
                                        @foreach ($provinsi as $item)
                                            <option value="{{ $item->kd_prop }}">{{ $item->provinsi }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('kd_prop')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-6 w-full">
                                <label for="kd_kab"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                                    Kabupaten/Kota <span class="text-red-600">*</span></label>
                                <select wire:model.defer="kd_kab" id="kd_kab" wire:change="getKecamatan"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected hidden>Kabupaten/Kota</option>
                                    @if (!is_null($kotaKabupaten))
                                        @foreach ($kotaKabupaten as $item)
                                            <option value="{{ $item->kd_kab }}">{{ $item->kabupaten }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('kd_kab')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-6 w-full">
                                <label for="kd_kec"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                                    Kecamatan <span class="text-red-600">*</span></label>
                                <select wire:model.defer="kd_kec" id="kd_kec" wire:change="getKelurahan"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected hidden>Kecamatan</option>
                                    @if (!is_null($kecamatan))
                                        @foreach ($kecamatan as $item)
                                            <option value="{{ $item->kd_kec }}">{{ $item->kecamatan }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('kd_kec')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-6 w-full">
                                <label for="kd_kel"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                                    Kelurahan <span class="text-red-600">*</span></label>
                                <select wire:model.defer="kd_kel" id="kd_kel" wire:change="getKodePos"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected hidden>Kelurahan</option>
                                    @if (!is_null($kelurahan))
                                        @foreach ($kelurahan as $item)
                                            <option value="{{ $item->kd_kel }}">{{ $item->kelurahan }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('kd_kel')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-6 w-full">
                                <label for="kd_pos"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                                    Kode POS <span class="text-red-600">*</span></label>
                                <select wire:model.defer="kd_pos" id="kd_pos"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected hidden>Kode Pos</option>
                                    @if (!is_null($kodepos))
                                        @foreach ($kodepos as $item)
                                            <option value="{{ $item->kd_pos }}">{{ $item->kd_pos }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('kd_pos')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        @include('livewire.pendaftarans.pendaftaran-pelanggan-googlemap')
                        <div class="mb-6">
                            <label for="almt_pasang"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat
                                Pemasangan <span class="text-red-600">*</span></label>
                            <textarea wire:model="almt_pasang" id="almt_pasang" rows="4" maxlength="200"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Tulis alamat lengkap pemasangan... " required></textarea>
                            <label for="almt_pasang"
                                class="block mb-2 text-xs font-medium text-blue-600 dark:text-white">
                                * Awalan JL. untuk Jalan, GG. untuk Gang, dan KOMP. untuk Komplek</label>
                            @error('almt_pasang')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="sm:flex gap-8">
                            <div class="mb-6">
                                <label for="no_rumah"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No
                                    Rumah
                                    <span class="text-red-600">*</span></label>
                                <input wire:model="no_rumah" type="text" id="no_rumah" maxlength="6"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="" required>
                                @error('no_rumah')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-6">
                                <label for="rt"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">RT
                                </label>
                                <input wire:model="rt" type="text" id="rt" maxlength="5"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                            </div>
                            <div class="mb-6">
                                <label for="rw"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">RW
                                </label>
                                <input wire:model="rw" type="text" id="rw" maxlength="5"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                            </div>
                            <div class="mb-6 w-full">
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                                </label>
                                <input wire:model="email" type="email" id="email" maxlength="35"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="">
                            </div>
                        </div>
                        <div class="sm:flex gap-8">
                            <div class="mb-6 w-full">
                                <label for="peruntukan-penggunaan-air"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peruntukan
                                    Penggunaan
                                    Air <span class="text-red-600">*</span></label>
                                <select wire:model.defer="peruntukan-penggunaan-air" id="peruntukan-penggunaan-air"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected hidden>Pilih Peruntukan</option>
                                    <option value="">Rumah Ibadah</option>
                                    <option value="">Rumah Tangga</option>
                                    <option value="">Sosial</option>
                                    <option value="">Niaga & Industri</option>
                                    <option value="">Kedutaan & Instansi Pemerintah</option>
                                </select>
                                @error('peruntukan-penggunaan-air')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-6 w-full">
                                <label for="kondisi-persil"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kondisi
                                    Bangunan
                                    Persil <span class="text-red-600">*</span></label>
                                <select wire:model.defer="kondisi-persil" id="kondisi-persil"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected hidden>Pilih Kondisi</option>
                                    <option value="">Sedang Di Bangun</option>
                                    <option value="">Siap Huni</option>
                                    <option value="">Lahan Kosong</option>
                                    <option value="">Ex Pelanggan</option>
                                </select>
                                @error('kondisi-persil')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-6 w-full">
                                <label for="luas_persil"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Luas
                                    Bangunan / m2</label>
                                <input wire:model="luas_persil" type="text" id="luas_persil" maxlength="5"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="m2" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                            </div>
                            <div class="mb-6 w-full">
                                <label for="jml_penghuni"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah
                                    Hunian</label>
                                <input wire:model="jml_penghuni" type="text" id="jml_penghuni" maxlength="3"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                            </div>
                        </div>
                        <hr class="mb-6">
                        <div class="flex justify-end gap-8">
                            <button wire:click="store()"
                                class="w-32 bg-blue-800 rounded-lg text-white py-1 px-4 hover:bg-blue-950">
                                <i class="fa-solid fa-paper-plane mr-2"></i>daftar
                            </button>
                            <button type="button"
                                class="w-32 bg-white rounded-lg text-blue-800 border-2 border-blue-800 py-1 px-4 hover:bg-blue-950 hover:text-white">
                                <a href="{{ $closeUrl }}"><i
                                        class="fa-regular fa-circle-xmark mr-2"></i>Close</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

