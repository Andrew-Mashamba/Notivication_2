<div>
    <div class="w-full flex bg-gray-200 h-100 p-4">

        <div class="w-full">
            <div class="flex items-center justify-center min-h-screen bg-gray-200 p-2">
                <div aria-label="card" class="p-8 rounded-3xl bg-white w-full min-h-screen">
                    <div aria-label="header" class="flex items-center space-x-2">

                        <svg xmlns="http://www.w3.org/2000/svg"  class="w-8 h-8 shrink-0" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DD0035" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5-3.9 19.5m-2.1-19.5-3.9 19.5" />
                        </svg>

                        <div class="space-y-0.5 flex-1">
                            <h3 class="font-medium text-lg tracking-tight text-gray-900 leading-tight">
                                {{\Illuminate\Support\Facades\Session::get('MainTitle')}}
                            </h3>
                            <p class="text-sm font-normal text-gray-400 leading-none">
                                {{\Illuminate\Support\Facades\Session::get('MainSubTitle')}}
                            </p>
                        </div>

                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif



                    </div>
                    <div aria-label="content" class="mt-9 grid gap-2.5">




                        <div class="container mx-auto">

                            <hr class="mt-6 border-b-1 border-blueGray-300">


                            <h3 class="font-medium text-sm mt-3 tracking-tight text-gray-900 leading-tight">
                                Service Parameters
                            </h3>
                            <!-- List of Service Parameters -->
                            <div class="bg-gray-100 rounded-3xl border-red-500 border-1 my-6 p-2">
                                <table class="min-w-full bg-white rounded-3xl border-red-500 border-1 p-2">
                                    <thead class="rounded-3xl border-red-500 border-1 p-2">
                                    <tr class="rounded-3xl border-red-500 border-1 p-4">

                                        <th class="rounded-3xl  py-2 px-6 bg-gray-200 font-medium text-sm mt-3 tracking-tight text-gray-900 leading-tight" >Service Type</th>
                                        <th class="rounded-3xl  py-2 px-6 bg-gray-200 font-medium text-sm mt-3 tracking-tight text-gray-900 leading-tight">Price per Unit</th>
                                        <th class="rounded-3xl  py-2 px-6 bg-gray-200 font-medium text-sm mt-3 tracking-tight text-gray-900 leading-tight">Limit per Day</th>
                                        <th class="rounded-3xl  py-2 px-6 bg-gray-200 font-medium text-sm mt-3 tracking-tight text-gray-900 leading-tight">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($serviceParameters as $parameter)
                                        <tr class="hover:bg-gray-100">
                                            <td class="py-4 px-6 border-b border-gray-200 font-medium text-sm mt-3 tracking-tight text-gray-900 leading-tight ">{{ $parameter->service_type }}</td>
                                            <td class="py-4 px-6 border-b border-gray-200 font-medium text-sm mt-3 tracking-tight text-gray-900 leading-tight ">{{ $parameter->price_per_unit }}</td>
                                            <td class="py-4 px-6 border-b border-gray-200 font-medium text-sm mt-3 tracking-tight text-gray-900 leading-tight ">{{ $parameter->limit_per_day }}</td>
                                            <td class="py-4 px-6 border-b border-gray-200 font-medium text-sm mt-3 tracking-tight text-gray-900 leading-tight flex justify-end">
                                                <button wire:click="edit({{ $parameter->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded-3xl">
                                                    Edit
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <!-- Edit Form -->
                            @if($editId)


                                <hr class="mt-3 border-b-1 border-blueGray-300">


                                <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                                    Edit Service Parameter
                                </h3>


                                <div class="bg-gray-100 p-6 rounded-3xl">
                                    <form wire:submit.prevent="save">
                                        <div class="mb-4">
                                            <label for="service_type" class="font-medium text-sm mt-3 tracking-tight text-gray-900 leading-tight">Service Type</label>
                                            <input type="text" id="service_type" wire:model="service_type" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600
                                    bg-white rounded-3xl text-sm shadow  w-full ease-linear
                                    transition-all duration-150">
                                            @error('service_type') <span class="text-red-500">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="mb-4">
                                            <label for="price_per_unit" class="font-medium text-sm mt-3 tracking-tight text-gray-900 leading-tight">Price per Unit (TZS)</label>
                                            <input type="text" id="price_per_unit" wire:model="price_per_unit" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600
                                    bg-white rounded-3xl text-sm shadow  w-full ease-linear
                                    transition-all duration-150">
                                            @error('price_per_unit') <span class="text-red-500">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="mb-4">
                                            <label for="limit_per_day" class="font-medium text-sm mt-3 tracking-tight text-gray-900 leading-tight">Limit per Day</label>
                                            <input type="text" id="limit_per_day" wire:model="limit_per_day" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600
                                    bg-white rounded-3xl text-sm shadow  w-full ease-linear
                                    transition-all duration-150">
                                            @error('limit_per_day') <span class="text-red-500">{{ $message }}</span> @enderror
                                        </div>


                                        <button

                                            type="submit"
                                            class="inline-block rounded-full border-2 border-neutral-800 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-800 transition duration-150 ease-in-out hover:border-neutral-800 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-800 focus:border-neutral-800 focus:text-neutral-800 -0 active:border-neutral-900 active:text-neutral-900 dark:border-neutral-900 dark:text-neutral-900 dark:hover:border-neutral-900 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10 dark:hover:text-neutral-900 dark:focus:border-neutral-900 dark:focus:text-neutral-900 dark:active:border-neutral-900 dark:active:text-neutral-900"
                                            data-te-ripple-init>

                                            <div class="flex gap-2">

                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DD0035" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                                                </svg>

                                                Save
                                            </div>

                                        </button>
                                    </form>
                                </div>
                            @endif





                            <hr class="mt-6 border-b-1 border-blueGray-300">


                            <h3 class="font-medium text-sm mt-3 tracking-tight text-gray-900 leading-tight">
                                Manage Service Checks
                            </h3>



                            <div class="pt-6">

                                <!-- Success Message -->
                                @if (session()->has('message'))
                                    <div class="mb-4 p-4 text-green-800 bg-green-200 border border-green-300 rounded">
                                        {{ session('message') }}
                                    </div>
                                @endif

                                <!-- Service Selection -->
                                <div class="mb-4">
                                    <label for="service" class="font-medium text-sm mt-3 tracking-tight text-gray-900 leading-tight">Select Service</label>
                                    <select wire:model="selectedService" id="service" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600
                                    bg-white rounded-3xl text-sm shadow  w-full ease-linear
                                    transition-all duration-150">
                                        <option value="">Choose a Service</option>
                                        @foreach($services as $service)
                                            <option value="{{ $service->id }}">{{ $service->service_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Available Checks -->
                                @if($selectedService)
                                    <div>

                                        <label for="service" class="font-medium text-sm mt-3 tracking-tight text-gray-900 leading-tight">Available Checks</label>
                                        <form wire:submit.prevent="saveChecks">
                                            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 rounded-3xl p-6 bg-gray-100">
                                                @foreach($availableChecks as $check)
                                                    <div class="flex items-center p-2 shadow rounded-3xl bg-white">
                                                        <input
                                                            type="checkbox"
                                                            wire:model="selectedChecks"
                                                            value="{{ $check->id }}"
                                                            id="check-{{ $check->id }}"
                                                            class="mr-2 text-red-600"
                                                        >
                                                        <label for="check-{{ $check->id }}" class="text-sm text-gray-600">
                                                            {{ \Illuminate\Support\Facades\DB::table('checks')->where('id', $check->id)->value('check_name') }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>


                                            <button

                                                type="submit"
                                                class="mt-6 inline-block rounded-full border-2 border-neutral-800 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-800 transition duration-150 ease-in-out hover:border-neutral-800 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-800 focus:border-neutral-800 focus:text-neutral-800 -0 active:border-neutral-900 active:text-neutral-900 dark:border-neutral-900 dark:text-neutral-900 dark:hover:border-neutral-900 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10 dark:hover:text-neutral-900 dark:focus:border-neutral-900 dark:focus:text-neutral-900 dark:active:border-neutral-900 dark:active:text-neutral-900"
                                                data-te-ripple-init>

                                                <div class="flex gap-2">

                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DD0035" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                                                    </svg>

                                                    Save Checks
                                                </div>

                                            </button>

                                        </form>
                                    </div>
                                @endif
                            </div>




                        </div>






                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
