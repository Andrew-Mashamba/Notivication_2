<div>
    <div class="w-full flex bg-gray-200 h-100">
        <div class="w-1/4 h-100 border border-r bg-gray-200">

            <div class="flex items-center justify-center min-h-screen bg-gray-200 p-2">
                <div aria-label="card" class="p-6 rounded-3xl bg-white w-full min-h-screen">

                    <div aria-label="header" class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 shrink-0" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DD0035" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                        </svg>


                        <div wire:click="loadView('b')" class="space-y-0.5 flex-1 cursor-pointer">
                            <h3 class="font-medium text-lg tracking-tight text-gray-900 leading-tight">
                                Sources
                            </h3>
                            <p class="text-sm font-normal text-gray-400 leading-none">
                                Filter List
                            </p>
                        </div>

                        @if(in_array(15, \Illuminate\Support\Facades\Session::get('permission_items', [])))

                        <a wire:click="loadView('a')" class="inline-flex items-center shrink-0 justify-center w-8 h-8 rounded-full text-white bg-blue-200 focus:outline-none cursor-pointer">
                            <div wire:loading.remove wire:target="loadView('a')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DD0035" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                </svg>
                            </div>
                            <div wire:loading wire:target="loadView('a')">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6 spin">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                                </svg>
                            </div>

                        </a>
                        @endif

                    </div>



                    <div aria-label="content" class="mt-9 grid gap-2.5">

                        <div class="">
                            <p class="text-sm font-normal text-gray-400 leading-none mb-2 -mt-4">
                                Search Sources
                            </p>
                            <div class="relative">
                                <input wire:model.live="search" type="text" class=" rounded-3xl peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent
                                text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-700 dark:border-transparent
                                dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Enter name">
                                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#DD0035"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="flex-shrink-0 w-4 h-4 text-gray-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                    </svg>


                                </div>
                            </div>


                        </div>

                        <hr class="mt-2 mb-2 border-b-1 border-blueGray-300">



                        @foreach($this->client as $client)


                            <a wire:click="loadView({{$client->id}})" class="cursor-pointer">
                                <div class="flex items-center space-x-4 p-2 rounded-3xl bg-gray-100">
                <span class="flex items-center justify-center w-14 h-14 shrink-0 rounded-full bg-white yellow">
                    <img src="{{ asset('images/avatar.png') }}" class="rounded-full h-12" alt="Avatar Image">
                </span>
                                    <div class="flex flex-col flex-1">
                                        <h3 class="text-sm font-medium">
                                            <p class="text-red-600 text-sm font-semibold">{{$client->Status}}</p>
                                        </h3>
                                        <h3 class="text-sm font-medium">{{$client->source_name}} </h3>
                                        <div class="divide-x divide-gray-200 mt-auto">
                                        <span class="inline-block px-3 text-xs leading-none text-gray-400 font-normal first:pl-0">
                                            IP
                                        </span>
                                        <span class="inline-block px-3 text-xs leading-none text-gray-400 font-normal first:pl-0">
                                            {{$client->source_ip}}
                                        </span>
                                        </div>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#DD0035" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M9 6l6 6l-6 6"></path>
                                    </svg>
                                </div>
                            </a>

                        @endforeach

                        <hr class="mt-2 mb-2 border-b-1 border-blueGray-300">


                    </div>

                </div>


            </div>


        </div>
        <div class="w-3/4">
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

                        <div wire:loading.remove wire:target="loadView">
                            @if($this->viewLoaded == "a")
                                <livewire:clients.new-client />
                            @elseif($this->viewLoaded == "b")
                                <livewire:clients.dashboard />
                            @else

                                <livewire:clients.view-client />
                            @endif
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
