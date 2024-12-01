
<div>


    <div class="w-full  bg-blueGray-50 rounded-3xl">
        <div class="w-full rounded-3xl">
            <div class="relative flex flex-col min-w-0 break-words w-full  bg-blueGray-100 border-0 rounded-3xl">

                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">

                        @if(session('message'))
                            <div class="bg-blue-500 text-white px-4 py-2 rounded-3xl mb-2 mt-2 w-full">
                                {{ session('message') }}
                            </div>
                        @endif
                        @if(session('RegisterStockError'))
                            <div class="bg-blue-500 text-white px-4 py-2 rounded-3xl mb-2 mt-2 w-full">
                                {{ session('RegisterStockError') }}
                            </div>
                        @endif


                        <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                            Loan Application Details
                        </h3>

                        <div class="flex w-full gap-2">
                            <div class="w-1/3 px-4">
                                <div class="relative group mb-3">
                                    <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                        Select Client
                                    </label>
                                    <button wire:click="toggleDropdownx"
                                            class="inline-flex justify-between w-full px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300  rounded-3xl shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500">
                                  <span class="mr-2">
                                      @if($user)
                                          {{$this->clientName}}
                                      @else
                                          Select
                                      @endif
                                  </span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2 -mr-1"
                                             viewBox="0 0 20 20" fill="#DD0035" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M6.293 9.293a1 1 0 011.414 0L10 11.586l2.293-2.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </button>

                                    <div class="{{ $isOpen ? '' : 'hidden' }} w-full mt-2 rounded-3xl bg-white ring-1 ring-black ring-opacity-5 p-1 space-y-1">
                                        <!-- Search input -->
                                        <input wire:model.debounce.300ms="search"
                                               class="block w-full px-4 py-2 text-gray-800 border rounded-3xl border-gray-300 focus:outline-none"
                                               type="text" placeholder="Search items" autocomplete="off">
                                        <!-- Dropdown content goes here -->
                                        @foreach ($clients as $client)
                                            <a href="#" wire:click.away="closeDropdown({{$client->id}})"
                                               class="rounded-3xl block px-4 py-2 text-gray-700 hover:bg-gray-100 active:bg-blue-100 cursor-pointer">{{ $client->first_name }} {{ $client->last_name }}</a>
                                        @endforeach
                                    </div>

                                </div>

                            </div>

                            <div class="w-1/3 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                        Loan Amount
                                    </label>
                                    <input wire:model="loan_amount" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600
                                    bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear
                                    transition-all duration-150" value="Lucky">
                                    @error('loan_amount')
                                    <span class="text-red-500 text-xs italic mt-2">This Field Is Required</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="w-1/3 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                        Tenure (Months)
                                    </label>
                                    <input wire:model="tenure" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600
                                    bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear
                                    transition-all duration-150" value="Jesse">
                                    @error('tenure')
                                    <span class="text-red-500 text-xs italic mt-2">This Field Is Required</span>
                                    @enderror
                                </div>
                            </div>

                        </div>


                        <div class="flex w-full">
                            <div class="w-full px-4">


                                @if($this->user)
                                    <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                        Select Commodity
                                    </label>
                                    <div class="relative group mb-3">
                                        <div class=" w-full mt-2 rounded-3xl bg-white ring-1 ring-black ring-opacity-5 p-1 space-y-1">
                                            @if($this->commodities)

                                                @foreach (json_decode($this->commodities) as $key=>$commodity)

                                            <div class="flex w-full rounded-3xl block px-4 py-2 text-gray-700 hover:bg-gray-100 active:bg-blue-100 ">
                                                <div class="w-2/12">
                                                    {{DB::table('commodities')->where('id',$commodity->commodity_id)->value('name')}}
                                                </div>
                                                <div class="w-3/12">
                                                    {{DB::table('collateral_managers')->where('id',$commodity->collateral_manager_id)->value('FirstName')}}
                                                </div>


                                                @if(DB::table('stocks')->where('client_id', $this->client_id)
                                                     ->where('commodity_id',$commodity->commodity_id)->value('unit') == 'Kg')
                                                <div class="w-3/12">
                                                    <div>
                                                        {{number_format((DB::table('stocks')->where('client_id', $this->client_id)
                                                     ->where('commodity_id',$commodity->commodity_id)->value('kilos')),2)
                                                        }} Kgs
                                                    </div>
                                                    <div>
                                                        {{number_format((DB::table('stocks')->where('client_id', $this->client_id)
                                                                                                            ->where('commodity_id',$commodity->commodity_id)->value('kilos')*(70/100)
                                                                                                            * (int)DB::table('commodities')->where('id',$commodity->commodity_id)->value('price_per_kilo')
                                                                                                            ),2)}} TZS
                                                    </div>

                                                </div>

                                                <div class="relative w-3/12">
                                                            <input wire:model="kilos.{{$commodity->commodity_id}}"  type="text" id="card-number-input" class="border-1 border-gray-300 px-3 py-3 placeholder-blueGray-300 text-blueGray-600
                                                            bg-white rounded-3xl text-sm  focus:inline w-full " placeholder="100" pattern="^4[0-9]{12}(?:[0-9]{3})?$" required>
                                                            <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                                                                Kgs
                                                            </div>
                                                </div>

                                                @else

                                                    <div class="w-3/12">
                                                        <div>
                                                            {{number_format((DB::table('stocks')->where('client_id', $this->client_id)
                                                         ->where('commodity_id',$commodity->commodity_id)->value('kilos')),2)
                                                            }} Liters
                                                        </div>
                                                        <div>
                                                            {{number_format((DB::table('stocks')->where('client_id', $this->client_id)
                                                                                                                ->where('commodity_id',$commodity->commodity_id)->value('kilos')*(70/100)
                                                                                                                * (int)DB::table('commodities')->where('id',$commodity->commodity_id)->value('price_per_kilo')
                                                                                                                ),2)}} TZS
                                                        </div>

                                                    </div>

                                                    <div class="relative w-3/12">
                                                        <input wire:model="kilos.{{$commodity->commodity_id}}"  type="text" id="card-number-input" class="border-1 border-gray-300 px-3 py-3 placeholder-blueGray-300 text-blueGray-600
                                                            bg-white rounded-3xl text-sm  focus:inline w-full " placeholder="100" pattern="^4[0-9]{12}(?:[0-9]{3})?$" required>
                                                        <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                                                            Liters
                                                        </div>
                                                    </div>

                                                @endif

                                                <div class="relative w-1/12 flex items-center justify-end ">
                                                    <input id="default-checkbox" type="checkbox"
                                                           value="{{$commodity->commodity_id}}"
                                                           wire:model="checked.{{$commodity->commodity_id}}" wire:change="processMark({{$commodity->commodity_id}})" wire:loading.attr="disabled"
                                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500
                                                            dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                </div>
                                            </div>

                                                @endforeach

                                            @endif


                                            <hr class="mt-2 mb-2 border-b-1 border-blueGray-300">
                                            <div class="w-full flex justify-end mt-4 pb-4">

                                                <div class=" w-1/3 flex justify-end gap-2 text-center item-center justify-end mt-2 bg-white">

                                                    <h3 class="font-medium text-lg tracking-tight text-gray-900 leading-tight mr-4">
                                                        Total Collateral : {{number_format($this->valueAmount,2)}} TZS
                                                    </h3>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>

                        </div>

                        <hr class="mt-6 border-b-1 border-blueGray-300">


                        <div class="mt-8">
                            <div wire:loading.remove wire:target="saveClientInfo">
                                <button
                                        wire:click="saveClientInfo"
                                        type="button"
                                        class="inline-block rounded-full border-2 border-neutral-800 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-800 transition duration-150 ease-in-out hover:border-neutral-800 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-800 focus:border-neutral-800 focus:text-neutral-800 focus:outline-none focus:ring-0 active:border-neutral-900 active:text-neutral-900 dark:border-neutral-900 dark:text-neutral-900 dark:hover:border-neutral-900 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10 dark:hover:text-neutral-900 dark:focus:border-neutral-900 dark:focus:text-neutral-900 dark:active:border-neutral-900 dark:active:text-neutral-900"
                                        data-te-ripple-init>

                                    <div class="flex gap-2">

                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="24" height="24"
                                             viewBox="0 0 24 24" stroke-width="1.5" stroke="#DD0035" fill="none"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5"/>
                                        </svg>

                                        Save
                                    </div>

                                </button>
                            </div>

                            <div wire:loading wire:target="saveClientInfo">
                                <button
                                        wire:click="saveClientInfo"
                                        type="button"
                                        class="inline-block rounded-full border-2 border-neutral-800 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-800 transition duration-150 ease-in-out hover:border-neutral-800 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-800 focus:border-neutral-800 focus:text-neutral-800 focus:outline-none focus:ring-0 active:border-neutral-900 active:text-neutral-900 dark:border-neutral-900 dark:text-neutral-900 dark:hover:border-neutral-900 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10 dark:hover:text-neutral-900 dark:focus:border-neutral-900 dark:focus:text-neutral-900 dark:active:border-neutral-900 dark:active:text-neutral-900"
                                        data-te-ripple-init>

                                    <div class="flex gap-2">

                                        <svg xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="black" class="w-6 h-6 spin">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"/>
                                        </svg>

                                        Please Wait...
                                    </div>

                                </button>
                            </div>
                        </div>


                </div>
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
        window.onload = function () {
            const clearAfter = "{{ session('ClearSuccessAfter') }}";
            if (clearAfter) {
                setTimeout(function () {
                    @if(session()->has('RegisterStockSuccess'))
                    @php session()->forget('RegisterStockSuccess') @endphp
                    @endif
                }, 5000); // Clear after 5 seconds (adjust duration as needed)
            }
        }
    </script>

</div>
