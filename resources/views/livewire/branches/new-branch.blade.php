<div>


    <div class="w-full  bg-blueGray-50 rounded-3xl">

        @if ($this->message)

            <div class="rounded-xl mb-4 bg-teal-100 border-t-4 border-teal-500 text-teal-900 px-4 py-3 shadow-md" role="alert">
                <div class="flex">
                    <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                    <div>
                        <p class="font-bold">Action Status</p>
                        <p class="text-sm">{{ $this->message }} </p>
                    </div>
                </div>
            </div>
        @endif


        <div class="w-full rounded-3xl">
            <div class="relative flex flex-col min-w-0 break-words w-full  bg-blueGray-100 border-0 rounded-3xl">

                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <form>


                        <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                            Branch Information
                        </h3>

                        <div class="flex flex-wrap">


                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                        Branch Name
                                    </label>
                                    <input wire:model="branch_name" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600
                                    bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear
                                    transition-all duration-150" value="Lucky">
                                    @error('branch_name')
                                    <span class="text-red-500 text-xs italic mt-2">This Field Is Required</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                        Phone number
                                    </label>
                                    <input wire:model="phone_number" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600
                                    bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear
                                    transition-all duration-150" value="Jesse">
                                    @error('phone_number')
                                    <span class="text-red-500 text-xs italic mt-2">This Field Is Required</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                        Email
                                    </label>
                                    <input wire:model="email" type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600
                                    bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear
                                    transition-all duration-150" value="Client-4670">
                                    @error('email')
                                    <span class="text-red-500 text-xs italic mt-2">This Field Is Required</span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <hr class="mt-6 border-b-1 border-blueGray-300">


                        <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                            Location
                        </h3>
                        <div class="flex flex-wrap">

                            <div class="w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium text-lg tracking-tight text-gray-900 leading-tight" for="marital_status">
                                        Region
                                    </label>
                                    <select wire:model="region" id="region" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        <option value="">Select Region</option>
                                        @foreach(\Illuminate\Support\Facades\DB::table('regions')->get() as $regionx)
                                            <option value="{{$regionx->id}}">{{$regionx->region_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('region')
                                    <span class="text-red-500 text-xs italic mt-2">This Field Is Required</span>
                                    @enderror
                                </div>
                            </div>


                            @if($region)
                                <div class="w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium text-lg tracking-tight text-gray-900 leading-tight" for="marital_status">
                                            District
                                        </label>
                                        <select wire:model="district" id="district" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                            <option value="">Select District</option>
                                            @foreach(\Illuminate\Support\Facades\DB::table('districts')->where('region_id',$region)->get() as $districtx)
                                                <option value="{{$districtx->id}}">{{$districtx->district_name}}</option>
                                            @endforeach
                                        </select>
                                        @error('district')
                                        <span class="text-red-500 text-xs italic mt-2">This Field Is Required</span>
                                        @enderror
                                    </div>
                                </div>
                            @endif
                            @if($district)
                                <div class="w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium text-lg tracking-tight text-gray-900 leading-tight" for="marital_status">
                                            Ward
                                        </label>
                                        <select wire:model="ward" id="ward" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                            <option value="">Select Ward</option>
                                            @foreach(\Illuminate\Support\Facades\DB::table('wards')->where('district_id',$district)->get() as $wardx)
                                                <option value="{{$wardx->id}}">{{$wardx->ward_name}}</option>
                                            @endforeach
                                        </select>
                                        @error('ward')
                                        <span class="text-red-500 text-xs italic mt-2">This Field Is Required</span>
                                        @enderror
                                    </div>
                                </div>
                            @endif


                        </div>


                        <hr class="mt-6 border-b-1 border-blueGray-300">

                        <div class="w-full flex justify-end">


                            <div class="mt-8">
                                <div wire:loading.remove wire:target="saveBranchInfo">
                                    <button
                                        wire:click="saveBranchInfo"
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

                                <div wire:loading wire:target="saveBranchInfo">
                                    <button
                                        wire:click="saveBranchInfo"
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




                    </form>
                </div>
            </div>

        </div>


        <script>
            // JavaScript to toggle the dropdown
            document.addEventListener('livewire:load', function () {
                Livewire.on('toggleDropdown', () => {
                    const dropdownMenu = document.querySelector('.absolute.right-0.mt-2.rounded-md.shadow-lg.bg-white.ring-1.ring-black.ring-opacity-5.p-1.space-y-1');
                    dropdownMenu.classList.toggle('hidden');
                });
            });
        </script>

        <script>
            window.onload = function() {
                const clearAfter = "{{ session('ClearSuccessAfter') }}";
                if (clearAfter) {
                    setTimeout(function() {
                        @if(session()->has('RegisterStockSuccess'))
                        @php session()->forget('RegisterStockSuccess') @endphp
                        @endif
                    }, 5000); // Clear after 5 seconds (adjust duration as needed)
                }
            }
        </script>


    </div>
</div>
