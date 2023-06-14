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
                <div class="bg-white p-4">
                    <div class="text-sm font-medium text-gray-900">Lokasi
                        Denah Pemasangan</div>
                    <div class="rounded-lg" id="map"></div>
                </div>
            </div>
        </div>
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
    }
</script>
{{-- API Google Map dengan bahasa Indonesia --}}
<script
    src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries=places&language=id&callback=initMap"
    async defer></script>
