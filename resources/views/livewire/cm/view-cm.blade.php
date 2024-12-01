<div>

    <div class="w-full  bg-blueGray-100 rounded-3xl p-2">

        <div class="w-full rounded-3xl bg-white">
            <div class="relative flex flex-col min-w-0 break-words w-full ">

                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <form>





                        <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 ml-2 sm:col-span-4 md:mr-3">
                            <!-- Photo File Input -->
                            <input type="file" class="hidden" x-ref="photo" x-on:change="
                        photoName = $refs.photo.files[0].name;
                        const reader = new FileReader();
                        reader.onload = (e) => {
                            photoPreview = e.target.result;
                        };
                        reader.readAsDataURL($refs.photo.files[0]);">

                            <div class="text-center">
                                <!-- Current Profile Photo -->
                                <div class="mt-2" x-show="! photoPreview">
                                    <img src="{{ asset('images/avatar.png') }}" class="w-40 h-40 m-auto rounded-full shadow">
                                </div>
                                <!-- New Profile Photo Preview -->
                                <div class="mt-2" x-show="photoPreview" style="display: none;">
                                    <span class="block w-40 h-40 rounded-full m-auto shadow" x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'" style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url('null');">
                                    </span>
                                </div>
                                <button type="button" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-3" x-on:click.prevent="$refs.photo.click()">
                                    Select Photo
                                </button>

                                <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                                    {{$this->manager->first_name}} {{$this->manager->last_name}}
                                </h3>

                                <div
                                        class="inline-flex rounded-md shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-blue-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-blue-600-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                        role="group">
                                    <button
                                            type="button"
                                            class="inline-block rounded-l bg-blue-600 px-4 pb-[5px] pt-[6px] text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-blue-600 focus:bg-blue-600 focus:outline-none focus:ring-0 active:bg-blue-600-700"
                                            data-te-ripple-init
                                            data-te-ripple-color="light">
                                        Block
                                    </button>
                                    <button
                                            type="button"
                                            class="inline-block bg-blue-600 px-4 pb-[5px] pt-[6px] text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-blue-600 focus:bg-blue-600 focus:outline-none focus:ring-0 active:bg-blue-600-700"
                                            data-te-ripple-init
                                            data-te-ripple-color="light">
                                        Suspend
                                    </button>
                                    <button
                                            type="button"
                                            class="inline-block rounded-r bg-blue-600 px-4 pb-[5px] pt-[6px] text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-blue-600 focus:bg-blue-600 focus:outline-none focus:ring-0 active:bg-blue-600-700"
                                            data-te-ripple-init
                                            data-te-ripple-color="light">
                                        Close
                                    </button>
                                </div>


                            </div>
                        </div>


                        <hr class="mt-6 border-b-1 border-blueGray-300">


                        <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                            Stock Overview
                        </h3>

                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                            <!-- Stock Summary -->
                            <div class="bg-gray-100 p-4 rounded-3xl">
                                <h3 class="text-lg font-semibold mb-2">Total Stock</h3>
                                <p class="text-gray-600 text-xl font-bold">
                                    {{number_format(\Illuminate\Support\Facades\DB::table('stocks')->where('collateral_manager_id',$this->manager->id)->sum('kilos'),2)}}
                                    Kgs
                                </p>
                            </div>

                            <!-- Total Value of Pledged Stock -->
                            <div class="bg-gray-100 p-4 rounded-3xl">
                                <h3 class="text-lg font-semibold mb-2">Total value</h3>
                                <p class="text-gray-600">
                                    {{ number_format(\Illuminate\Support\Facades\DB::table('stocks')->where('collateral_manager_id', $manager->id)->sum(\Illuminate\Support\Facades\DB::raw('kilos * price_per_kilo')), 2) }}
                                    TZS</p>
                            </div>

                            <!-- Visual Representation of Stock Distribution (Placeholder) -->
                            <div class="bg-gray-100 p-4 rounded-3xl">
                                <h3 class="text-lg font-semibold mb-2"> Farmers </h3>
                                <p class="text-gray-600">
                                    {{\Illuminate\Support\Facades\DB::table('farmers')->where('collateral_manager_id',$this->manager->id)->count()}}
                                    </p>
                                </p>
                            </div>
                        </div>





                        <hr class="mt-6 border-b-1 border-blueGray-300">




                        <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                            CM Information
                        </h3>

                        <div class="flex w-full gap-4">

                            <div class="bg-gray-100 p-4 rounded-3xl w-1/2 max-h-60">
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                            CM Number
                                        </label>
                                        <h3 x-on:dblclick="$wire.doubleClick('CMNumber')" class="cursor-pointer font-bold text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight ease-linear
                                    transition-all duration-150">
                                            {{$this->manager->CMNumber}}
                                        </h3>

                                    </div>
                                </div>


                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                            First Name
                                        </label>

                                        <h3 x-on:dblclick="$wire.doubleClick('FirstName')" class="cursor-pointer font-bold text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight ease-linear
                                    transition-all duration-150">
                                            {{$this->manager->FirstName}}
                                        </h3>

                                    </div>
                                </div>
                            </div>

                            <div class="bg-gray-100 p-4 rounded-3xl w-1/2 max-h-60">
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                            Email Address
                                        </label>

                                        <h3 x-on:dblclick="$wire.doubleClick('EmailAddress')" class="cursor-pointer font-bold text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight ease-linear
                                    transition-all duration-150">
                                            {{$this->manager->EmailAddress}}
                                        </h3>
                                    </div>
                                </div>

                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                            Last Name
                                        </label>

                                        <h3 x-on:dblclick="$wire.doubleClick('LastName')" class="cursor-pointer font-bold text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight ease-linear
                                    transition-all duration-150">
                                            {{$this->manager->LastName}}
                                        </h3>

                                    </div>
                                </div>
                            </div>


                        </div>

                        <hr class="mt-6 border-b-1 border-blueGray-300">


                        <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                            Contact Information
                        </h3>

                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 px-4 bg-gray-100 p-4 rounded-3xl">
                                <div class="relative w-full mb-3">
                                    <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                        Address
                                    </label>

                                    <h3 x-on:dblclick="$wire.doubleClick('Address')" class="cursor-pointer font-bold text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight ease-linear
                                    transition-all duration-150">
                                        {{$this->manager->Address}}
                                    </h3>

                                </div>
                            </div>
                            <div class="w-full flex gap-4">
                                <div class="w-1/3 px-4 bg-gray-100 p-4 rounded-3xl mt-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                            Location
                                        </label>


                                        <h3 x-on:dblclick="$wire.doubleClick('City')" class="cursor-pointer font-bold text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight ease-linear
                                    transition-all duration-150">
                                            @if($this->manager->ward_id)
                                            {{DB::table('Wards')->where('id',$this->manager->ward_id)->value('ward_name'). " at ".
                                        DB::table('districts')->where('id',DB::table('Wards')->where('id',$this->manager->ward_id)->value('district_id'))->value('district_name') .' in '.
                                            DB::table('regions')->where('id',DB::table('districts')->where('id',DB::table('Wards')->where('id',$this->manager->ward_id)->value('district_id'))->value('region_id'))->value('region_name')
                                           }}
                                            @else
                                              <div class="text-red-500 text-xs">
                                                  no location found
                                              </div>

                                            @endif
                                        </h3>


                                    </div>
                                </div>
                                <div class="w-1/3 px-4 bg-gray-100 p-4 rounded-3xl mt-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                            Country
                                        </label>


                                        <h3 x-on:dblclick="$wire.doubleClick('Country')" class="cursor-pointer font-bold text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight ease-linear
                                    transition-all duration-150">
                                            {{$this->manager->Country}}
                                        </h3>

                                    </div>
                                </div>
                                <div class="w-1/3 px-4 bg-gray-100 p-4 rounded-3xl mt-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                            Postal Code
                                        </label>


                                        <h3 x-on:dblclick="$wire.doubleClick('PostalCode')" class="cursor-pointer font-bold text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight ease-linear
                                    transition-all duration-150">
                                            {{$this->manager->PostalCode}}
                                        </h3>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <hr class="mt-6 border-b-1 border-blueGray-300">


                        <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                            Business Information
                        </h3>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 px-4 bg-gray-100 p-4 rounded-3xl">
                                <div class="relative w-full mb-3">
                                    <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                        Business Name
                                    </label>

                                    <h3 x-on:dblclick="$wire.doubleClick('BusinessName')" class="cursor-pointer font-bold text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight ease-linear
                                    transition-all duration-150">
                                        {{$this->manager->BusinessName}}
                                    </h3>

                                </div>
                            </div>
                            <div class="w-full flex gap-4">
                                <div class="w-1/3  px-4 bg-gray-100 p-4 rounded-3xl mt-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                            Business Licence Number
                                        </label>

                                        <h3 x-on:dblclick="$wire.doubleClick('BusinessLicenceNumber')" class="cursor-pointer font-bold text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight ease-linear
                                    transition-all duration-150">
                                            {{$this->manager->BusinessLicenceNumber}}
                                        </h3>


                                    </div>
                                </div>
                                <div class="w-1/3  px-4 bg-gray-100 p-4 rounded-3xl mt-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                            TIN Number
                                        </label>

                                        <h3 x-on:dblclick="$wire.doubleClick('TINNumber')" class="cursor-pointer font-bold text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight ease-linear
                                    transition-all duration-150">
                                            {{$this->manager->TINNumber}}
                                        </h3>


                                    </div>
                                </div>

                                <div class="w-1/3  px-4 bg-gray-100 p-4 rounded-3xl mt-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                            Business Phone Number
                                        </label>

                                        <h3 x-on:dblclick="$wire.doubleClick('BusinessPhoneNumber')" class="cursor-pointer font-bold text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight ease-linear
                                    transition-all duration-150">
                                            {{$this->manager->BusinessPhoneNumber}}
                                        </h3>

                                    </div>
                                </div>


                            </div>
                        </div>



                        <hr class="mt-6 border-b-1 border-blueGray-300">



                        <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                            Total  Stock - Commodities Distribution
                        </h3>
                        <div class="w-full gap-4">

                            <div class="" style="height: 450px">
                                <livewire:livewire-column-chart
                                         key="{{ $columnChartModel->reactiveKey() }}"
                                        :column-chart-model="$commoditiesChartModel"
                                />
                            </div>
                        </div>
                        <hr class="mt-6 border-b-1 border-blueGray-300">







                        <hr class="mt-6 border-b-1 border-blueGray-300">






                        <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                            Location
                        </h3>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                        Warehouse Location
                                    </label>


                                    <!-- Responsive Google Map -->
                                    <div class="relative h-0 overflow-hidden mb-6 bg-white rounded-3xl text-sm shadow" style="padding-bottom: 56.25%;">
                                        <div x-data="{ location: '' }">
                                            <div class="relative h-0 overflow-hidden mb-6 bg-white rounded-3xl text-sm shadow" style="padding-bottom: 56.25%;">
                                                <iframe
                                                        id="mapIframe"
                                                        class="absolute top-0 left-0 w-full h-full"
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3353.096656292789!2d-122.08217698485344!3d37.42205787981786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fbc7b4be10725%3A0xf59d178a87b32f52!2sGolden%20Gate%20Bridge!5e0!3m2!1sen!2sus!4v1610035984427!5m2!1sen!2sus"
                                                        frameborder="0"
                                                        style="border:0;"
                                                        allowfullscreen=""
                                                        aria-hidden="false"
                                                        tabindex="0"
                                                        wire:model="WarehouseLocation"
                                                ></iframe>
                                            </div>

                                            <button @click="saveLocation">Save Location</button>
                                        </div>

                                        @push('scripts')
                                            <script>
                                                function saveLocation() {
                                                    var iframe = document.getElementById('mapIframe');
                                                    var locationData = iframe.contentWindow.document.location.toString();

                                                    Livewire.emit('updateWarehouseLocation', locationData);
                                                }

                                                Livewire.on('updateWarehouseLocation', (locationData) => {
                                                    Livewire.component('collateral-manager-component').$wire.WarehouseLocation = locationData;
                                                });
                                            </script>
                                        @endpush

                                    </div>


                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <footer class="relative  pt-8 pb-6 mt-2">
                <div class="container mx-auto px-4">
                    <div class="flex flex-wrap items-center md:justify-between justify-center">
                        <div class="w-full md:w-6/12 px-4 mx-auto text-center">
                            <div class="text-sm text-blueGray-500 font-semibold py-1">
                                Set Permissions
                            </div>

                            <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
                            <div class="flex justify-center mt-4">
                                <!-- First checkbox -->
                                <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                                    <input wire:model="canAddFarmers" type="checkbox" id="inlineCheckbox1" class="relative float-left -ml-[1.5rem] mr-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ml-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ml-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-primary dark:checked:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]" />
                                    <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="inlineCheckbox1">Can Add Farmers</label>
                                </div>

                                <!-- Second checkbox -->
                                <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                                    <input wire:model="canInitiateLoan" type="checkbox" id="inlineCheckbox2" class="relative float-left -ml-[1.5rem] mr-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ml-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ml-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-primary dark:checked:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]" />
                                    <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="inlineCheckbox2">Can Initiate Loans</label>
                                </div>

                                <!-- Third checkbox (disabled) -->
                                <div class="mb-[0.125rem] inline-block min-h-[1.5rem] pl-[1.5rem]">
                                    <input wire:model="canSetPrices" type="checkbox" id="inlineCheckbox3" class="relative float-left -ml-[1.5rem] mr-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ml-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ml-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-primary dark:checked:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]" />
                                    <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="inlineCheckbox3" disabled>Can Set Prices</label>
                                </div>
                            </div>





                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>




    <!-- Modal -->
    @if($this->isOpen)
        <div class="fixed inset-0 overflow-y-auto
        w-full h-full top-0 start-0 z-[80] overflow-x-hidden">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>

                <!-- This element is to trick the browser into centering the modal contents. -->
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                <!-- Modal Panel -->
                <div class="inline-block align-bottom bg-white rounded-3xl text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <div class="bg-blueGray-50  px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <!-- Content Goes Here -->
                        <div class="relative w-full mb-3">
                            <label class="block text-blueGray-600 text-sm font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                {{$this->editKey}}
                            </label>
                            <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                Enter New Value
                            </label>
                            <input wire:model="newValue"  type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600
                                    bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear
                                    transition-all duration-150" value="United States">
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse justify-between">
                        <button wire:click="saveChanges" type="button" class="inline-block rounded-full bg-zinc-500 text-neutral-50 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] hover:bg-zinc-600 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-zinc-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] active:bg-zinc-700 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0">
                            Save Changes
                        </button>
                        <button wire:click="closeModal"  type="button" class="inline-block rounded-full border-2 border-zinc-500 text-zinc-500 hover:border-zinc-600 hover:bg-zinc-400 hover:bg-opacity-10 hover:text-zinc-600 focus:border-zinc-700 focus:text-zinc-700 active:border-zinc-800 active:text-zinc-800 dark:border-zinc-300 dark:text-zinc-300 dark:hover:hover:bg-zinc-300 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0">
                            Cancel
                        </button>

                    </div>
                </div>
            </div>
        </div>
    @endif







</div>
