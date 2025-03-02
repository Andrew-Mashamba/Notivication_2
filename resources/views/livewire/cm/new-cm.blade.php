<div>

    @if(session('message'))
        <div class="bg-blue-500 text-white px-4 py-2 rounded-3xl mb-2 mt-2 w-full">
            {{ session('message') }}
        </div>
    @endif
    @if(session('RegisterStockError'))
        <div class="bg-red-500 text-white px-4 py-2 rounded-3xl mb-2 mt-2 w-full">
            {{ session('RegisterStockError') }}
        </div>
    @endif

    <div class="w-full  bg-blueGray-50 rounded-3xl">
        <div class="w-full rounded-3xl">
            <div class="relative flex flex-col min-w-0 break-words w-full  bg-blueGray-100 border-0 rounded-3xl">

                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <div>


                        <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                            Business Information
                        </h3>
                        <div class="flex flex-wrap">

                        <div class="w-full flex">
                            <div class="w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                        CM Number
                                    </label>
                                    <input wire:model.defer="CMNumber" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600
                                    bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear
                                    transition-all duration-150" value="{{Session::get("unique_id")}}" disabled>
                                </div>
                            </div>
                            <div class="w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                        Business Name
                                    </label>
                                    <input wire:model.defer="BusinessName" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600
                                    bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear
                                    transition-all duration-150" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                                </div>
                            </div>
                        </div>




                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                        Business Licence Number
                                    </label>
                                    <input wire:model.defer="BusinessLicenceNumber" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600
                                    bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear
                                    transition-all duration-150" value="New York">
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                        TIN Number
                                    </label>
                                    <input wire:model.defer="TINNumber"  type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600
                                    bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear
                                    transition-all duration-150" value="United States">
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                        Business Phone Number
                                    </label>
                                    <input wire:model.defer="BusinessPhoneNumber"  type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600
                                    bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear
                                    transition-all duration-150" value="Postal Code">
                                </div>
                            </div>
                        </div>

                        <hr class="mt-6 border-b-1 border-blueGray-300">

                        <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                            Contact Person Information
                        </h3>

                        <div class="flex flex-wrap">

                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                        Email Address
                                    </label>
                                    <input wire:model.defer="EmailAddress" type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600
                                    bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear
                                    transition-all duration-150" value="example@example.com">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                        First Name
                                    </label>
                                    <input wire:model.defer="FirstName" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600
                                    bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear
                                    transition-all duration-150" value="Lucky">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                        Last Name
                                    </label>
                                    <input wire:model.defer="LastName" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600
                                    bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear
                                    transition-all duration-150" value="Jesse">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                        Phone Number
                                    </label>
                                    <input wire:model.defer="PhoneNumber" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600
                                    bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear
                                    transition-all duration-150" value="">
                                </div>
                            </div>
                        </div>

                        <hr class="mt-6 border-b-1 border-blueGray-300">


                        <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                            Residence Information
                        </h3>
                        <div class="">

                            <div class="flex px-4 gap-2">
                                <div class="relative w-full w-4/12 mb-3">
                                    <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" for="region">
                                        Region/City
                                        @error('region')
                                        <div class="text-red-500 text-xs">{{ $message }}</div>
                                        @enderror
                                    </label>
                                    <select name="region" id="region" wire:model.defer="City" class="block w-full px-4 py-2 text-gray-800 border rounded-3xl border-gray-300 focus:outline-none">
                                        <option value="">Select region</option>
                                        @foreach(DB::table('regions')->get() as $region)
                                            <option value="{{ $region->id }}">{{ $region->region_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="relative w-full w-4/12 mb-3">
                                    <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" for="district">
                                        District
                                        @error('district')
                                        <div class="text-red-500 text-xs">{{ $message }}</div>
                                        @enderror
                                    </label>
                                    <select name="district" id="district" wire:model.defer="District"  class="block w-full px-4 py-2 text-gray-800 border rounded-3xl border-gray-300 focus:outline-none">
                                        <option value="">Select district</option>
                                    </select>
                                </div>

                                <div class="relative w-full w-4/12 mb-3">
                                    <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" for="ward">
                                        Ward
                                        @error('ward')
                                        <div class="text-red-500 text-xs">{{ $message }}</div>
                                        @enderror
                                    </label>
                                    <select name="ward" id="ward" wire:model.defer="Ward"  class="block w-full px-4 py-2 text-gray-800 border rounded-3xl border-gray-300 focus:outline-none">
                                        <option value="">Select ward</option>
                                    </select>
                                </div>
                            </div>





                            <div class="w-full w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                        Address
                                    </label>
                                    <input wire:model.defer="Address" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600
                                    bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear
                                    transition-all duration-150" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                                </div>
                            </div>

                        </div>








                        <livewire:map.map/>
                    </div>
                </div>
            </div>
            <footer class="relative  pt-8 pb-6 mt-2">
                <div class="container mx-auto px-4">
                    <div class="flex flex-wrap items-center md:justify-between justify-center">
                        <div class="w-full md:w-6/12 px-4 mx-auto text-center">

                            <div class="mt-8">
                                <div wire:loading.remove wire:target="saveCollateralManagerInfo">
                                    <button
                                            wire:click="saveCollateralManagerInfo"
                                            type="button"
                                            class="inline-block rounded-full border-2 border-neutral-800 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-800 transition duration-150 ease-in-out hover:border-neutral-800 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-800 focus:border-neutral-800 focus:text-neutral-800 focus:outline-none focus:ring-0 active:border-neutral-900 active:text-neutral-900 dark:border-neutral-900 dark:text-neutral-900 dark:hover:border-neutral-900 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10 dark:hover:text-neutral-900 dark:focus:border-neutral-900 dark:focus:text-neutral-900 dark:active:border-neutral-900 dark:active:text-neutral-900"
                                            data-te-ripple-init>

                                        <div class="flex gap-2">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DD0035" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                                            </svg>

                                            Save
                                        </div>

                                    </button>
                                </div>

                                <div wire:loading wire:target="saveCollateralManagerInfo">
                                    <button
                                            wire:click="saveCollateralManagerInfo"
                                            type="button"
                                            class="inline-block rounded-full border-2 border-neutral-800 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-800 transition duration-150 ease-in-out hover:border-neutral-800 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-800 focus:border-neutral-800 focus:text-neutral-800 focus:outline-none focus:ring-0 active:border-neutral-900 active:text-neutral-900 dark:border-neutral-900 dark:text-neutral-900 dark:hover:border-neutral-900 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10 dark:hover:text-neutral-900 dark:focus:border-neutral-900 dark:focus:text-neutral-900 dark:active:border-neutral-900 dark:active:text-neutral-900"
                                            data-te-ripple-init>

                                        <div class="flex gap-2">

                                            <svg xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="w-6 h-6 spin">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                                            </svg>

                                            Please Wait...
                                        </div>

                                    </button>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>



        <script>
            $(document).ready(function() {
                $('#region').on('change', function() {
                    var regionId = $(this).val();
                    if (regionId) {
                        $.ajax({
                            url: '/nmb/get-districts/' + regionId,
                            type: 'GET',
                            dataType: 'json',
                            success: function(data) {
                                $('#district').empty().append('<option value="">Select district</option>');
                                $.each(data, function(key, value) {
                                    $('#district').append('<option value="' + key + '">' + value + '</option>');
                                });
                                $('#ward').empty().append('<option value="">Select ward</option>');
                            }
                        });
                    } else {
                        $('#district').empty().append('<option value="">Select district</option>');
                        $('#ward').empty().append('<option value="">Select ward</option>');
                    }
                });

                $('#district').on('change', function() {
                    var districtId = $(this).val();
                    if (districtId) {
                        $.ajax({
                            url: '/nmb/get-wards/' + districtId,
                            type: 'GET',
                            dataType: 'json',
                            success: function(data) {
                                $('#ward').empty().append('<option value="">Select ward</option>');
                                $.each(data, function(key, value) {
                                    $('#ward').append('<option value="' + key + '">' + value + '</option>');
                                });
                            }
                        });
                    } else {
                        $('#ward').empty().append('<option value="">Select ward</option>');
                    }
                });
            });
        </script>




</div>
