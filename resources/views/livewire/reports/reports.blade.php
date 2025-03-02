



<div>
    <div class="w-full flex  h-100">
        <div class="w-1/4 h-100 border border-r ">

            <div class="flex items-center justify-center min-h-screen  p-2">
                <div aria-label="card" class="p-6 rounded-3xl bg-white w-full min-h-screen">

                    <div aria-label="header" class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 shrink-0" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DD0035" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                        </svg>


                        <div  class="space-y-0.5 flex-1 cursor-pointer">
                            <h3 class="font-medium text-lg tracking-tight text-gray-900 leading-tight">
                                Report
                            </h3>
                            <p class="text-sm font-normal text-gray-400 leading-none">
{{--                                Filter List--}}
                            </p>
                        </div>



                    </div>



                    <div aria-label="content" class="mt-9 grid gap-2.5">

                        <hr class="mt-2 mb-2 border-b-1 border-blueGray-300">
                        @php
                            $menuItems = [
                                //['id' => 1, 'label' => 'General  Report'],
                                //['id' => 2, 'label' => 'Collateral Manager Report'],
                                //['id' => 3, 'label' => 'Stock Flow Report'],
                                //['id' => 4, 'label' => 'Commodity Report'],
                                ['id' => 5, 'label' => 'Clients'],
                                ['id' => 6, 'label' => 'Pledged Stock'],
                                ['id' => 7, 'label' => 'Stock Releases'],
                                ['id' => 8, 'label' => 'Collateral Managers'],
                                ['id' => 9, 'label' => 'Commodities'],
                                ['id' => 10, 'label' => 'Applications'],

                            ];
                        @endphp
                        @foreach($menuItems as $commodity)
                            <a wire:click="menuItemClicked({{$commodity['id']}})" class="cursor-pointer ">
                                <div class="flex items-center space-x-4 p-2 rounded-3xl bg-gray-200  @if($this->tab_id==$commodity['id'])  bg-blue-50 @endif ">
                                <span class="flex items-center justify-center w-14 h-14 shrink-0 rounded-full bg-white yellow">
                                    <img src="{{ asset('images/avatar.png') }}" class="rounded-full h-12" alt="Avatar Image" >
                                </span>
                                    <div class="flex flex-col flex-1">
                                        <div class="flex justify-between">
                                            <h3 class="text-sm font-medium">                                                 {{$commodity['label']}}
                                            </h3>


                                        </div>

                                        <div class="divide-x divide-gray-200 mt-auto">
                                            <span class="inline-block px-3 text-xs leading-none text-gray-400 font-normal first:pl-0">report</span>
                                            <span class="inline-block px-3 text-xs leading-none text-gray-400 font-normal first:pl-0">
                                                {{$commodity['label']}}
                                            </span>
                                        </div>
                                        <div class="divide-x divide-gray-200 mt-auto">

                                        </div>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#DD0035" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M9 6l6 6l-6 6"></path>
                                    </svg>
                                </div>
                            </a>
                        @endforeach


                    </div>

                </div>


            </div>


        </div>
        <div class="w-3/4">
            <div class="flex items-center justify-center min-h-screen  p-2">
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
                    <div aria-label="content" class="mt-9 grid gap-2.5 overflow-x-auto">
{{$this->tab_id}}
                        <div wire:loading.remove wire:target="loadView">
                            @switch($this->tab_id)

                                @case('1')

{{--                                    <livewire:reports.client-loan-account />--}}

                                    <livewire:reports.general />


                                    @break

                                @case('2')
                                    <livewire:reports.clients-details-report />
                                    @break

                                    @case('3')
                                    <livewire:reports.general-report  />
                                    @break

                                    @case('4')
                                             <livewire:reports.general-loan-report />
                                    @break

                                @case('5')
                                    <livewire:reports.clients />
                                    @break

                                @case('6')
                                    <livewire:reports.stocks />
                                    @break

                                @case('7')
                                    <livewire:reports.releases />
                                    @break

                                @case('8')
                                    <livewire:reports.collateral-managers />
                                    @break

                                @case('9')
                                    <livewire:reports.commodities />
                                    @break

                                @case('10')
                                    <livewire:reports.applications />
                                    @break

                                @default


                            @endswitch

                        </div>
                        <div wire:loading wire:target="loadView">

                            <div class="w-full flex items-center justify-center" style="height: 600px;">
                                <div class="mx-auto text-center ">
                                    <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
                                    <div class="mx-auto text-center  inline-block h-12 w-12 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] motion-reduce:animate-[spin_1.5s_linear_infinite]" role="status">
                                        <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...</span>
                                    </div>
                                    <label class="mx-auto text-center  block text-blueGray-600 text-sm font-bold mt-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                        Please wait...
                                    </label>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
