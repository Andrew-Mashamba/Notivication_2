<div>
    <div>

        <hr class="mt-6 border-b-1 border-blueGray-300">

        <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
            Warehouses List
        </h3>
        <div class="flex flex-wrap">
            <div class="w-full lg:w-12/12 px-4">


                <div class=" mx-auto p-6 bg-white shadow-md rounded-3xl">
                    <table id="warehouses-table" class="min-w-full divide-y divide-gray-200">
                        <thead>
                        <tr>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Address</th>
                        </tr>
                        </thead>
                        <tbody id="warehouses-tbody" class="bg-white divide-y divide-gray-200">
                        <!-- Data will be inserted here by JavaScript -->
                        </tbody>
                    </table>
                </div>


            </div>
        </div>


        <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
            Add warehouse
        </h3>
        <div class="flex flex-wrap">
            <div class="w-full w-12/12 px-4">
                <form id="warehouse-form">

                    <!-- Warehouse Name -->
                    <div class="relative w-full mb-3" hidden>


                        <input type="text" id="unique_id" name="unique_id" wire:model="unique_id">

                    </div>

                    <!-- Warehouse Name -->
                    <div class="relative w-full mb-3">
                        <label for="warehouse-name" class="block text-blueGray-600 text-xs font-bold mb-2 font-medium tracking-tight text-gray-900 leading-tight">Warehouse Name</label>
                        <input type="text" id="warehouse-name" name="warehouseName" wire:model.defer="warehouseName" class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                        @error('warehouseName') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <!-- Warehouse Description -->
                    <div class="relative w-full mb-3">
                        <label for="warehouse-description" class="block text-blueGray-600 text-xs font-bold mb-2 font-medium tracking-tight text-gray-900 leading-tight">Warehouse Description</label>
                        <textarea id="warehouse-description" name="warehouseDescription" wire:model.defer.defer="warehouseDescription" class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"></textarea>
                        @error('warehouseDescription') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <!-- Location Address -->
                    <div class="relative w-full mb-3">
                        <label for="location-address" class="block text-blueGray-600 text-xs font-bold mb-2 font-medium tracking-tight text-gray-900 leading-tight">Location Address</label>
                        <input type="text" id="location-address" name="locationAddress" wire:model.defer="locationAddress" class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" readonly>
                        @error('locationAddress') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <!-- Location Coordinates -->
                    <div class="relative w-full mb-3">
                        <label for="location-coordinates" class="block text-blueGray-600 text-xs font-bold mb-2 font-medium tracking-tight text-gray-900 leading-tight">Location Coordinates</label>
                        <input type="text" id="location-coordinates" name="locationCoordinates" wire:model.defer="locationCoordinates" class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" readonly>
                        @error('locationCoordinates') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <!-- Additional Fields -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- ISO3166 -->
                        <div class="relative w-full mb-3">
                            <label for="iso3166" class="block text-blueGray-600 text-xs font-bold mb-2 font-medium tracking-tight text-gray-900 leading-tight">ISO3166-2-lvl4</label>
                            <input type="text" id="iso3166" name="iso3166" wire:model.defer="iso3166" class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            @error('iso3166') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                        <!-- Amenity -->
                        <div class="relative w-full mb-3">
                            <label for="amenity" class="block text-blueGray-600 text-xs font-bold mb-2 font-medium tracking-tight text-gray-900 leading-tight">Amenity</label>
                            <input type="text" id="amenity" name="amenity" wire:model.defer="amenity" class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            @error('amenity') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                        <!-- City -->
                        <div class="relative w-full mb-3">
                            <label for="city" class="block text-blueGray-600 text-xs font-bold mb-2 font-medium tracking-tight text-gray-900 leading-tight">City</label>
                            <input type="text" id="city" name="city" wire:model.defer="city" class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            @error('city') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                        <!-- Country -->
                        <div class="relative w-full mb-3">
                            <label for="country" class="block text-blueGray-600 text-xs font-bold mb-2 font-medium tracking-tight text-gray-900 leading-tight">Country</label>
                            <input type="text" id="country" name="country" wire:model.defer="country" class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            @error('country') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                        <!-- Country Code -->
                        <div class="relative w-full mb-3">
                            <label for="country_code" class="block text-blueGray-600 text-xs font-bold mb-2 font-medium tracking-tight text-gray-900 leading-tight">Country Code</label>
                            <input type="text" id="country_code" name="country_code" wire:model.defer="country_code" class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            @error('country_code') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                        <!-- Postcode -->
                        <div class="relative w-full mb-3">
                            <label for="postcode" class="block text-blueGray-600 text-xs font-bold mb-2 font-medium tracking-tight text-gray-900 leading-tight">Postcode</label>
                            <input type="text" id="postcode" name="postcode" wire:model.defer="postcode" class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            @error('postcode') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                        <!-- Region -->
                        <div class="relative w-full mb-3">
                            <label for="region" class="block text-blueGray-600 text-xs font-bold mb-2 font-medium tracking-tight text-gray-900 leading-tight">Region</label>
                            <input type="text" id="region" name="region" wire:model.defer="region" class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            @error('region') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                        <!-- Road -->
                        <div class="relative w-full mb-3">
                            <label for="road" class="block text-blueGray-600 text-xs font-bold mb-2 font-medium tracking-tight text-gray-900 leading-tight">Road</label>
                            <input type="text" id="road" name="road" wire:model.defer="road" class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            @error('road') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                        <!-- Suburb -->
                        <div class="relative w-full mb-3">
                            <label for="suburb" class="block text-blueGray-600 text-xs font-bold mb-2 font-medium tracking-tight text-gray-900 leading-tight">Suburb</label>
                            <input type="text" id="suburb" name="suburb" wire:model.defer="suburb" class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            @error('suburb') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                        <!-- Ward -->
                        <div class="relative w-full mb-3">
                            <label for="ward" class="block text-blueGray-600 text-xs font-bold mb-2 font-medium tracking-tight text-gray-900 leading-tight">Ward</label>
                            <input type="text" id="ward" name="ward" wire:model.defer="ward" class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            @error('ward') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                        <!-- Name -->
                        <div class="relative w-full mb-3">
                            <label for="name" class="block text-blueGray-600 text-xs font-bold mb-2 font-medium tracking-tight text-gray-900 leading-tight">Name</label>
                            <input type="text" id="name" name="name" wire:model.defer="name" class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                        <!-- Type -->
                        <div class="relative w-full mb-3">
                            <label for="type" class="block text-blueGray-600 text-xs font-bold mb-2 font-medium tracking-tight text-gray-900 leading-tight">Type</label>
                            <input type="text" id="type" name="type" wire:model.defer="type" class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            @error('type') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div id="map" class="w-full h-64 mb-4"></div>
                    <div class="flex items-center justify-between">
                        <button type="button" id="submit-btn" class="bg-blue-600 hover:bg-blue-700 text-white text-sm py-2 px-2 rounded focus:outline-none focus:shadow-outline">
                            Set Warehouse
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        document.addEventListener('livewire:load', () => {
            initMap();
        });

        function initMap() {
            let mapElement = document.getElementById('map');
            if (mapElement._leaflet_id) {
                mapElement._leaflet_id = null;
            }

            let map = L.map('map').setView([51.505, -0.09], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: ''
            }).addTo(map);

            let marker = L.marker([51.505, -0.09], {
                draggable: true
            }).addTo(map);

            function updateLocation(latlng) {
                let coordinatesInput = document.getElementById('location-coordinates');
                if (coordinatesInput) {
                    coordinatesInput.value = `${latlng.lat}, ${latlng.lng}`;
                }
                // Emit an event to Livewire component to update locationCoordinates
                //Livewire.emit('locationUpdated', latlng);
                //@this.set('locationUpdated', latlng);
            }

            function fetchAddress(latlng) {
                let url = `https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${latlng.lat}&lon=${latlng.lng}`;

                fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        let address = data.display_name;

                        let addressInput = document.getElementById('location-address');
                        if (addressInput) {
                            // Consider using Livewire's $refresh() to update address reactively
                            addressInput.value = address;
                        }

                        let addressComponents = data.address;

                        // Extract components
                        let iso3166 = addressComponents['ISO3166-2-lvl4'] || "";
                        let amenity = addressComponents.amenity || "";
                        let city = addressComponents.city || "";
                        let country = addressComponents.country || "";
                        let countryCode = addressComponents.country_code || "";
                        let postcode = addressComponents.postcode || "";
                        let region = addressComponents.region || "";
                        let road = addressComponents.road || "";
                        let suburb = addressComponents.suburb || "";
                        let ward = addressComponents.ward || "";

                        // Display components
                        console.log('ISO3166-2-lvl4:', iso3166);
                        console.log('Amenity:', amenity);
                        console.log('City:', city);
                        console.log('Country:', country);
                        console.log('Country Code:', countryCode);
                        console.log('Postcode:', postcode);
                        console.log('Region:', region);
                        console.log('Road:', road);
                        console.log('Suburb:', suburb);
                        console.log('Ward:', ward);

                        // Example of additional data
                        let name = data.name || "";
                        let type = data.type || "";

                        console.log('Name:', name);
                        console.log('Type:', type);

                        // Update input fields with these components
                        document.getElementById('iso3166').value = iso3166;
                        document.getElementById('amenity').value = amenity;
                        document.getElementById('city').value = city;
                        document.getElementById('country').value = country;
                        document.getElementById('country_code').value = countryCode;
                        document.getElementById('postcode').value = postcode;
                        document.getElementById('region').value = region;
                        document.getElementById('road').value = road;
                        document.getElementById('suburb').value = suburb;
                        document.getElementById('ward').value = ward;

                        // Handle additional data if needed
                        let nameInput = document.getElementById('name');
                        let typeInput = document.getElementById('type');

                        if (nameInput) nameInput.value = name;
                        if (typeInput) typeInput.value = type;
                    })
                    .catch(error => console.error('Error fetching address:', error));
            }

            marker.on('dragend', function(e) {
                let latlng = marker.getLatLng();
                updateLocation(latlng);
                fetchAddress(latlng);
            });

            map.on('click', function(e) {
                marker.setLatLng(e.latlng);
                updateLocation(e.latlng);
                fetchAddress(e.latlng);
            });

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    let lat = position.coords.latitude;
                    let lng = position.coords.longitude;
                    let latlng = L.latLng(lat, lng);
                    map.setView(latlng, 13);
                    marker.setLatLng(latlng);
                    updateLocation(latlng);
                    fetchAddress(latlng);
                }, function(error) {
                    console.error('Error getting current position:', error);
                });
            } else {
                console.error('Geolocation is not supported by this browser.');
            }
        }

        initMap();

        // Livewire event listener to update locationAddress reactively
        window.livewire.on('locationUpdated', (location) => {
            document.getElementById('location-address').value = location.display_name;
        });
    </script>



    <script>
        document.getElementById('submit-btn').addEventListener('click', function() {
            var formData = new FormData(document.getElementById('warehouse-form'));

            axios.post('{{ route('warehouse.register') }}', formData)
                .then(function (response) {

                    //Livewire.emit('refreshComponent');
                //@this.call('boot');
                window.livewire.emit('refreshComponent');
                @this.emit('refreshComponent');




                    fetch('/nmb/warehouses')
                        .then(response => response.json())
                        .then(data => {
                            const tbody = document.getElementById('warehouses-tbody');
                            tbody.innerHTML = ''; // Clear existing rows

                            data.forEach(warehouse => {
                                const row = document.createElement('tr');

                                row.innerHTML = `

                        <td class="px-6 py-4 whitespace-nowrap text-sm yellow">${warehouse.warehouse_name}</td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm yellow">${warehouse.location_address}</td>

                    `;

                                tbody.appendChild(row);
                            });
                        })
                        .catch(error => console.error('Error fetching data:', error));



                    //alert(response.data.message);
                })
                .catch(function (error) {
                    console.log('Error: ' + error.response.data.message);
                });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {

        });
    </script>



</div>
