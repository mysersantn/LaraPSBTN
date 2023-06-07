<div wire:ignore>
    <div class="mb-5">
        <div class="mb-6">
            <label for="pencarian_peta" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pencarian
                Peta</label>
            {{-- <input wire:model="pencarian_peta" type="text" id="pencarian_peta"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Search Using Google Maps " autocomplete="off"> --}}

            <div>
                <input type="text" id="pencarian_peta"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search Using Google Maps">
                <div class="mt-6 flex gap-8">
                    <input type="text" id="lat"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="">
                    <input type="text" id="long"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="">
                </div>

            </div>


            {{-- <div>
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input wire:model="pencarian_peta" type="search" id="default-search"
                        class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search Using Google Maps..." required>
                    <button
                        class="text-white absolute right-2.5 bottom-2.5 bg-blue-800 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </div> --}}

        </div>
        <div class="rounded-lg" id="map"></div>
    </div>

    <script type="text/javascript">
        function initMap() {
            const myLatLng = {
                lat: 3.7002993622000004,
                lng: 98.65909606218338
            };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 10,
                center: myLatLng,
            });

            // Buat marker di peta
            new google.maps.Marker({
                position: myLatLng,
                map,
                title: "Hello Map!",
            });
        }

        window.initMap = initMap;
    </script>


    <script type="text/javascript">
        $(document).ready(function() {

            var autocomplete;
            var id = 'pencarian_peta';

            autocomplete = new google.maps.places.Autocomplete((document.getElementById(id)), {
                types: ['geocode'],
            })

            google.maps.event.addListener(autocomplete, 'place_changed', function() {

                var place = autocomplete getPlace();
                jQuery("#lat").val(place.geometry.location.lat());
                jQuery("#lat").val(place.geometry.location.long());
            })
        });
    </script>

    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap"></script>

</div>
