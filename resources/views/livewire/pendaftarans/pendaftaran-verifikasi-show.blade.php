<div class=" gap-8 mb-6">
    <div class="relative overflow-x-auto w-full">
        <div class="text-xs text-gray-700 font-bold mb-2">Daftar Pendaftaran Online tanpa
            diketahui
            Cabang <span class="text-red-600 font-bold text-sm">({{ $jumlahPendaftaranNonCabang }})</span>
        </div>
        <div class="text-xs text-blue-700">*Harap dilakukan pengecekan dan perubahan data
            pendaftaran yang cabang pelayannya masih kosong.</div>
        <table class="w-full text-xs text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal daftar
                    </th>
                    <th scope="col" class="px-6 py-3">
                        No Register
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Alamat
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Detail
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pendaftaranNonCabang as $key => $item)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $pendaftaranNonCabang->firstItem() + $key }}
                        </td>
                        <td class="px-6 py-4">
                            {{ date('Y-m-d', strtotime($item->tgl_daftar)) }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->kd_daftar }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->pemohon }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->almt_pemohon }}
                        </td>
                        <td class="px-6 py-4">
                            <button wire:click="detail({{ $item->id }})"  class="w-max bg-blue-800 rounded-lg text-white py-1 px-4 hover:bg-blue-950"><i
                                    class="fa-solid fa-eye"></i> view</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="py-4 text-xs">{{ $pendaftaranNonCabang->links() }}</div>
    </div>
    <div class="relative overflow-x-auto w-full">
        <div class="text-xs text-gray-700 font-bold mb-2">Daftar Pendaftaran Online di
            {{ auth()->user()->mkantor->kantor }} <span
                class="text-red-600 font-bold text-sm">({{ $jumlahPendaftaranCabang }})</span>
        </div>
        <div class="text-xs text-blue-700">*Harap segera dilakukan proses pencetakan SPKO untuk
            dilakukan survey.</div>
        <table class="w-full text-xs text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal daftar
                    </th>
                    <th scope="col" class="px-6 py-3">
                        No Register
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Alamat
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Detail
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pendaftaranCabang as $key => $item)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $pendaftaranCabang->firstItem() + $key }}
                        </td>
                        <td class="px-6 py-4">
                            {{ date('Y-m-d', strtotime($item->tgl_daftar)) }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->kd_daftar }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->pemohon }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->almt_pemohon }}
                        </td>
                        <td class="px-6 py-4">
                            <button wire:click="detail({{ $item->id }})" class="w-max bg-blue-800 rounded-lg text-white py-1 px-4 hover:bg-blue-950"><i
                                    class="fa-solid fa-eye"></i> view</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="py-4 text-xs">{{ $pendaftaranCabang->links() }}</div>
    </div>
</div>
