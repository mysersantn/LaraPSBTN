<div>
    <div class="p-6 lg:p-8 bg-white border-b border-gray-200 rounded-xl mt-8">
        <h1 class="text-2xl font-medium text-gray-900">
            Daftar Permohonan Sambungan Baru
        </h1>
        <hr class="mb-6">
        <form>
            <div class="mb-6">
                <label for="sambungan-baru" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cabang *</label>
                <select id="sambungan-baru"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected hidden>Pusat</option>
                    <option value="AB">Pusat</option>
                    <option value="AL">Cabang Medan Kota</option>
                    <option value="AL">Cabang Sei Agul</option>
                    <option value="AL">Cabang Medan Denai</option>
                    <option value="AL">Cabang Medan Labuhan</option>
                    <option value="AL">Cabang Sibolangit</option>
                    <option value="AL">Cabang Berastagi</option>
                    <option value="AL">Cabang Sunggal</option>
                    <option value="AL">Cabang Padang Bulan</option>
                    <option value="AL">Cabang Deli Tua</option>
                    <option value="AL">Cabang Tuasan</option>
                    <option value="AL">Cabang Deli Serdang</option>
                    <option value="AL">Cabang Tapanuli Selatan</option>
                    <option value="AL">Cabang Tapanuli Tengah</option>
                    <option value="AL">Cabang Toba</option>
                    <option value="AL">Cabang HM Yamin</option>
                    <option value="AL">Cabang Diski</option>
                    <option value="AL">Cabang Samosir</option>
                    <option value="AL">Cabang Nias Selatan</option>
                    <option value="AL">Cabang Medan Amplas</option>
                    <option value="AL">Cabang Belawan Kota</option>
                    <option value="AL">Cabang Cemara</option>
                    <option value="AL">Cabang Pemasaran Air Limbah</option>
                </select>
            </div>
            <div>
            <label for="sambungan-baru" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Type</label>
            <select id="sambungan-baru"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="AB">Pdf</option>
                <option value="AB">Html</option>
                <option value="AL">Excel</option>
            </select>
            </div>
            <div class="mb-6">
                <label for="tanggal-sistem" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Periode</label>
                <div date-rangepicker class="flex items-center">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input name="start" type="text"
                            class="block mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Select date">
                    </div>
            </div>
            <button type="submit" 
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Print</button>
</div>
