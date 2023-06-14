<div wire:ignore>
    <div class="mb-5">
        <div class="mb-6">
            <div class="flex">
                <img class="" src="https://fonts.gstatic.com/s/i/googlematerialicons/location_pin/v5/24px.svg"
                    alt="">
                <label for="pencarian_peta"
                    class="block pt-2 mb-2 text-sm font-medium text-gray-900 dark:text-white">Pencarian Peta</label>
            </div>
            <div>
                <input type="text" id="location-input"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search Using Google Maps">
                <div class="mt-6 flex gap-8">
                    <label for="lat"
                        class="block pt-2 mb-2 text-sm font-medium text-gray-900 dark:text-white">Latitude</label>
                    <input wire:model="maps_lat" type="text" id="lat"
                        class="bg-gray-100 border border-gray-300 text-gray-400 text-sm rounded-lg block w-full p-2.5"
                        placeholder="">
                    <label for="long"
                        class="block pt-2 mb-2 text-sm font-medium text-gray-900 dark:text-white">Longitude</label>
                    <input wire:model="maps_long" type="text" id="long"
                        class="bg-gray-100 border border-gray-300 text-gray-400 text-sm rounded-lg block w-full p-2.5"
                        placeholder="">
                </div>
            </div>
        </div>
        <div class="rounded-lg" id="map"></div>
    </div>
</div>

<script>
    function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 10,
            center: {
                lat: 2.1154,
                lng: 99.5451
            }, // Pusatkan peta pada Indonesia (koordinat Indonesia sumatera utara)
        });

        // Tambahkan event listener saat nilai select box berubah
        document.getElementById("kd_pos").addEventListener("change", function() {
            var selectedKdPos = this.value;

            // Panggil fungsi untuk mengambil koordinat berdasarkan kode pos
            getCoordinatesByKodePos(selectedKdPos);
        });

        // Fungsi untuk mengambil koordinat berdasarkan kode pos
        function getCoordinatesByKodePos(kodePos) {
            var geocoder = new google.maps.Geocoder();

            geocoder.geocode({
                address: kodePos + ", Indonesia"
            }, function(results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    var location = results[0].geometry.location;
                    var lat = location.lat();
                    var lng = location.lng();

                    // Set nilai koordinat di input field atau variabel yang Anda inginkan
                    document.getElementById("lat").value = lat;
                    document.getElementById("long").value = lng;

                    // Tambahkan baris berikut untuk mengupdate variabel di sisi Livewire
                    Livewire.emit('updateMapsCoordinates', lat, lng);
                    map.setZoom(20);

                    // Tambahkan marker baru pada lokasi
                    if (window.marker) {
                        window.marker.setMap(null);
                    }

                    window.marker = new google.maps.Marker({
                        map: map,
                        position: location
                    });

                    map.panTo(location);
                }
            });
        }

        // Fungsi untuk mengambil koordinat berdasarkan pencarian dari textbox
        const input = document.getElementById("location-input");
        const searchBox = new google.maps.places.SearchBox(input);

        searchBox.addListener("places_changed", () => {
            const places = searchBox.getPlaces();

            if (places.length === 0) {
                return;
            }

            const place = places[0];
            const lat = place.geometry.location.lat();
            const lng = place.geometry.location.lng();

            document.getElementById("lat").value = lat;
            document.getElementById("long").value = lng;

            // Tambahkan baris berikut untuk mengupdate variabel di sisi Livewire
            Livewire.emit('updateMapsCoordinates', lat, lng);

            map.setCenter(place.geometry.location);
            map.setZoom(20);

            // Hapus marker sebelumnya jika ada
            if (window.marker) {
                window.marker.setMap(null);
            }

            // Tambahkan marker baru
            window.marker = new google.maps.Marker({
                map,
                position: place.geometry.location,
            });

            // Panahkan peta ke lokasi
            map.panTo(place.geometry.location);
        });

        // Event listener saat peta diklik
        map.addListener("click", (event) => {
            // Hapus marker sebelumnya jika ada
            if (window.marker) {
                window.marker.setMap(null);
            }

            const lat = event.latLng.lat();
            const lng = event.latLng.lng();

            document.getElementById("lat").value = lat;
            document.getElementById("long").value = lng;

            // Tambahkan baris berikut untuk mengupdate variabel di sisi Livewire
            Livewire.emit('updateMapsCoordinates', lat, lng);

            // Tambahkan marker baru pada lokasi yang diklik
            window.marker = new google.maps.Marker({
                map,
                position: event.latLng,
            });

            // Panahkan peta ke lokasi yang diklik
            map.panTo(event.latLng);
        });

    }
</script>
{{-- API Google Map dengan bahasa Indonesia --}}
<script
    src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries=places&language=id&callback=initMap"
    async defer></script>
