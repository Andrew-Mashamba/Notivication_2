<div class="h-full w-full ">




    @if (session()->has('message'))
        <div class="alert alert-success bg-blue-100 fw-bold text-center justify-center ">
            <strong>  {{ session('message') }}  </strong>
        </div>
    @endif


    <div class="w-full bg-gray-100 rounded-lg pl-2 pr-2 pt-1 pb-1 ">
        <!-- message container -->
        <div>


            <div class="w-full flex gap-2">

                <div class="w-1/4 ">

                    <div class="flex items-center justify-center p-2">
                        <div wire:click="loadView('users')" aria-label="card" class="p-6 rounded-3xl cursor-pointer
                                @if($this->viewLoaded == 'users') bg-blue-100 shadow-md @else bg-white shadow-sm @endif  w-full ">

                            <div aria-label="header" class="flex items-center space-x-2">

                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 shrink-0" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DD0035" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                </svg>



                                <div class="space-y-0.5 flex-1 cursor-pointer">
                                    <h3 class="font-medium text-lg tracking-tight text-gray-900 leading-tight">
                                        System Users
                                    </h3>
                                    <p class="text-sm font-normal text-gray-400 leading-none">
                                        Register Edit User Data
                                    </p>
                                </div>




                            </div>

                            <div class="bg-gray-100 text-gray-400 px-4 py-2 rounded-3xl mb-2 mt-2 w-full">
                                {{DB::table('users')->get()->count()}} Users
                            </div>



                        </div>


                    </div>

                </div>

                <div class="w-1/4">
                    <div class="flex items-center justify-center p-2">
                        <div wire:click="loadView('roles')" aria-label="roles" class="p-6 rounded-3xl  cursor-pointer
                                @if($this->viewLoaded == 'roles')  bg-blue-100 shadow-md @else bg-white shadow-sm @endif  w-full ">

                            <div aria-label="header" class="flex items-center space-x-2">

                                <svg data-slot="icon"class="w-8 h-8 shrink-0" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DD0035" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 4.5h14.25M3 9h9.75M3 13.5h5.25m5.25-.75L17.25 9m0 0L21 12.75M17.25 9v12"></path>
                                </svg>


                                <div  class="space-y-0.5 flex-1 cursor-pointer">
                                    <h3 class="font-medium text-lg tracking-tight text-gray-900 leading-tight">
                                        User Roles
                                    </h3>
                                    <p class="text-sm font-normal text-gray-400 leading-none">
                                        Roles management
                                    </p>
                                </div>




                            </div>




                            <div class="bg-gray-100 text-gray-400 px-4 py-2 rounded-3xl mb-2 mt-2 w-full">
                                {{DB::table('roles')->get()->count()}} Role Groups
                            </div>


                        </div>


                    </div>
                </div>
                <div class="w-1/4">
                    <div class="flex items-center justify-center p-2">
                        <div wire:click="loadView('processes')" aria-label="card" class="p-6 rounded-3xl  cursor-pointer
                                @if($this->viewLoaded == 'processes')  bg-blue-100 shadow-md @else bg-white shadow-sm @endif  w-full ">

                            <div aria-label="header" class="flex items-center space-x-2">

                                <svg data-slot="icon" class="w-8 h-8 shrink-0" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DD0035" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 4.5h14.25M3 9h9.75M3 13.5h9.75m4.5-4.5v12m0 0-3.75-3.75M17.25 21 21 17.25"></path>
                                </svg>


                                <div  class="space-y-0.5 flex-1 cursor-pointer">
                                    <h3 class="font-medium text-lg tracking-tight text-gray-900 leading-tight">
                                        Business Processes
                                    </h3>
                                    <p class="text-sm font-normal text-gray-400 leading-none">
                                        Business Processes Setup
                                    </p>
                                </div>




                            </div>


                            <div class="bg-gray-100 text-gray-400 px-4 py-2 rounded-3xl mb-2 mt-2 w-full">
                                Current User : {{auth()->user()->name}}
                            </div>




                        </div>


                    </div>
                </div>

                <div class="w-1/4">
                    <div class="flex items-center justify-center p-2">
                        <div wire:click="loadView('profile')" aria-label="card" class="p-6 rounded-3xl  cursor-pointer
                                @if($this->viewLoaded == 'profile')  bg-blue-100 shadow-md @else bg-white shadow-sm @endif  w-full ">

                            <div aria-label="header" class="flex items-center space-x-2">

                                <svg data-slot="icon" class="w-8 h-8 shrink-0" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DD0035" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 4.5h14.25M3 9h9.75M3 13.5h9.75m4.5-4.5v12m0 0-3.75-3.75M17.25 21 21 17.25"></path>
                                </svg>


                                <div  class="space-y-0.5 flex-1 cursor-pointer">
                                    <h3 class="font-medium text-lg tracking-tight text-gray-900 leading-tight">
                                        User Profile
                                    </h3>
                                    <p class="text-sm font-normal text-gray-400 leading-none">
                                        Current User Details
                                    </p>
                                </div>




                            </div>


                            <div class="bg-gray-100 text-gray-400 px-4 py-2 rounded-3xl mb-2 mt-2 w-full">
                                Current User : {{auth()->user()->name}}
                            </div>




                        </div>


                    </div>
                </div>

            </div>


        </div>
    </div>


    @if($this->viewLoaded == 'users')
        <div class="w-full flex bg-gray-100 h-100 pl-2 pr-2 pt-1 pb-1 ">
            <div class="w-1/4 h-100 bg-gray-100">

                <div class="flex items-center justify-center min-h-screen bg-gray-100 p-2">
                    <div aria-label="card" class="p-6 rounded-3xl bg-white w-full min-h-screen">

                        <div aria-label="header" class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 shrink-0" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DD0035" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                            </svg>


                            <div wire:click="loadView('b')" class="space-y-0.5 flex-1 cursor-pointer">
                                <h3 class="font-medium text-lg tracking-tight text-gray-900 leading-tight">
                                    Users List
                                </h3>
                                <p class="text-sm font-normal text-gray-400 leading-none">
                                    Filter List
                                </p>
                            </div>


                            <a wire:click="setInnerView('a')" class="inline-flex items-center shrink-0 justify-center w-8 h-8 rounded-full text-white bg-blue-200 focus:outline-none cursor-pointer">
                                <div wire:loading.remove wire:target="setInnerView('a')">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DD0035" fill="none"
                                         stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>
                                </div>
                                <div wire:loading wire:target="setInnerView('a')">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6 spin">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                                    </svg>
                                </div>

                            </a>
                        </div>



                        <div aria-label="content" class="mt-9 grid gap-2.5">

                            <div class="">
                                <p class="text-sm font-normal text-gray-400 leading-none mb-2 -mt-4">
                                    Search Users
                                </p>
                                <div class="relative">
                                    <input wire:model.live="search" type="text" class=" rounded-3xl peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-700 dark:border-transparent dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Enter name">
                                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#DD0035"
                                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="flex-shrink-0 w-4 h-4 text-gray-500">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                        </svg>


                                    </div>
                                </div>


                            </div>



                            @foreach(\Illuminate\Support\Facades\DB::table('users')->where('status', 'PENDING')->get() as $user)

                                <a wire:click="loadView({{$user->id}})" class="cursor-pointer ">
                                    <div class="p-2 rounded-3xl bg-gray-100 flex flex-col sm:flex-row relative">



                                        <div class="flex items-center space-x-4">
                                            <span class="flex items-center justify-center w-14 h-14 sm:w-16 sm:h-16 shrink-0 rounded-full bg-white yellow p-1">

                                                <svg data-slot="icon" class="rounded-full h-8 sm:h-10" fill="none" stroke-width="1.5" stroke="#DD0035" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"></path>
                                                </svg>
                                            </span>
                                            <div class="flex flex-col flex-1">
                                                <div class="divide-x divide-gray-200 mt-auto">
                                                    <span class="inline-block px-3 text-xs sm:text-sm leading-none text-gray-400 font-normal first:pl-0">User Name</span>
                                                    <span class="inline-block px-3 text-xs sm:text-sm leading-none text-gray-400 font-normal first:pl-0">{{$user->name}}</span>
                                                </div>

                                                <div class="divide-x divide-gray-200 mt-auto">
                                                    <span class="inline-block px-3 text-xs sm:text-sm leading-none text-gray-400 font-normal first:pl-0">Email</span>
                                                    <span class="inline-block px-3 text-xs sm:text-sm leading-none text-gray-400 font-normal first:pl-0">{{$user->email}}</span>
                                                </div>

                                                <div class="divide-x divide-gray-200 mt-auto">
                                                    <span class="inline-block px-3 text-xs sm:text-sm leading-none text-gray-400 font-normal first:pl-0">status</span>
                                                        <span class="text-xs text-red-500 bg-red-100 rounded-3xl pl-1 pr-1 mr-2">{{ ucwords(str_replace('_', ' ', $user->status)) }}</span>
                                                </div>
                                            </div>

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 sm:w-6 sm:h-6 shrink-0 mt-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#DD0035" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M9 6l6 6l-6 6"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>




{{--                                <a wire:click="loadView({{$user->id}})" class="cursor-pointer">--}}
{{--                                    <div class="flex items-center space-x-2 p-2 rounded-3xl bg-gray-100">--}}


{{--                                        <div class="flex justify-end w-full mr-1 gap-2">--}}
{{--                                            <span class="text-xs text-red-500 bg-red-100 rounded-3xl pl-1 pr-1 mr-2">{{ ucwords(str_replace('_', ' ', $user->status)) }}</span>--}}
{{--                                        </div>--}}

{{--                                        <span class="flex items-center justify-center w-14 h-14 shrink-0 rounded-full bg-white yellow">--}}
{{--                                    <img src="{{ asset('images/avatar.png') }}" class="rounded-full h-12" alt="Avatar Image" >--}}
{{--                                </span>--}}
{{--                                        <div class="flex flex-col flex-1">--}}
{{--                                            <h3 class="text-sm font-medium">{{$user->name}}</h3>--}}
{{--                                            <div class="divide-x divide-gray-200 mt-auto">--}}
{{--                                             <span class="inline-block px-3 text-xs leading-none text-gray-400 font-normal first:pl-0">--}}
{{--                                               Name--}}
{{--                                            </span>--}}
{{--                                                <span class="inline-block px-3 text-xs leading-none text-gray-400 font-normal first:pl-0">--}}
{{--                                           {{$user->email}}--}}
{{--                                            </span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#DD0035" fill="none" stroke-linecap="round" stroke-linejoin="round">--}}
{{--                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"> email</path>--}}
{{--                                            <path d="M9 6l6 6l-6 6"></path>--}}
{{--                                        </svg>--}}
{{--                                    </div>--}}
{{--                                </a>--}}


                            @endforeach




                            <hr class="mt-2 mb-2 border-b-1 border-blueGray-300">

                            @foreach(\Illuminate\Support\Facades\DB::table('users')->where('status', 'ACTIVE')->get() as $user)
                                <a wire:click="loadView({{$user->id}})" class="cursor-pointer relative">
                                    <div class="relative p-2 rounded-3xl bg-gray-100">



                                        <div class="flex items-center space-x-4">
                                        <span class="flex items-center justify-center w-14 h-14 shrink-0 rounded-full bg-white yellow p-1">

                                            <svg data-slot="icon" class="rounded-full h-8" fill="none" stroke-width="1.5" stroke="#DD0035" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"></path>
                                            </svg>

                                        </span>
                                            <div class="flex flex-col flex-1">

                                                <div class="divide-x divide-gray-200 mt-auto">
                                                    <span class="inline-block px-3 text-xs leading-none text-gray-400 font-normal first:pl-0">User Name</span>
                                                    <span class="inline-block px-3 text-xs leading-none text-gray-400 font-normal first:pl-0">{{$user->name}}</span>
                                                </div>
                                                <div class="divide-x divide-gray-200 mt-auto">
                                                    <span class="inline-block px-3 text-xs leading-none text-gray-400 font-normal first:pl-0">Email</span>
                                                    <span class="inline-block px-3 text-xs leading-none text-gray-400 font-normal first:pl-0">{{$user->email}}</span>
                                                </div>
                                                <div class="divide-x divide-gray-200 mt-auto">
                                                    <span class="inline-block px-3 text-xs leading-none text-gray-400 font-normal first:pl-0">Status</span>
                                                    <span class="text-xs text-blue-500 bg-red-100 rounded-3xl pl-1 pr-1 mr-2">{{ ucwords(str_replace('_', ' ', $user->status)) }}</span>
                                                </div>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0 mt-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#DD0035" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M9 6l6 6l-6 6"></path>
                                            </svg>
                                        </div>
                                    </div>

                                </a>
                            @endforeach
                            <hr class="mt-2 mb-2 border-b-1 border-blueGray-300">
                            @foreach(\Illuminate\Support\Facades\DB::table('users')->where('status', 'BLOCKED')->get() as $user)
                                <a wire:click="loadView({{$user->id}})" class="cursor-pointer relative">
                                    <div class="relative p-2 rounded-3xl bg-gray-100">


                                        <div class="flex justify-end w-full mr-4 gap-2">
                                            <span class="text-xs text-red-500 bg-red-100 rounded-3xl pl-1 pr-1 mr-2">{{ ucwords(str_replace('_', ' ', $user->status)) }}</span>
                                        </div>

                                        <div class="flex items-center space-x-4">
                                        <span class="flex items-center justify-center w-14 h-14 shrink-0 rounded-full bg-white yellow p-1">

                                             <svg data-slot="icon" class="rounded-full h-8" fill="none" stroke-width="1.5" stroke="#DD0035" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"></path>
                                            </svg>
                                        </span>
                                            <div class="flex flex-col flex-1">

                                                <div class="divide-x divide-gray-200 mt-auto">
                                                    <span class="inline-block px-3 text-xs leading-none text-gray-400 font-normal first:pl-0">User Name</span>
                                                    <span class="inline-block px-3 text-xs leading-none text-gray-400 font-normal first:pl-0">{{$user->name}}</span>
                                                </div>
                                                <div class="divide-x divide-gray-200 mt-auto">
                                                    <span class="inline-block px-3 text-xs leading-none text-gray-400 font-normal first:pl-0">Email</span>
                                                    <span class="inline-block px-3 text-xs leading-none text-gray-400 font-normal first:pl-0">{{$user->email}}</span>
                                                </div>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0 mt-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#DD0035" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M9 6l6 6l-6 6"></path>
                                            </svg>
                                        </div>
                                    </div>

                                </a>
                            @endforeach



                        </div>

                    </div>


                </div>


            </div>
            <div class="w-3/4">
                <div class="flex items-center justify-center min-h-screen bg-gray-100 p-2">
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

                            <div wire:loading.remove wire:target="innerView">

                                @if($this->viewLoaded == 'users')
                                    @if($this->innerView == "a")
                                        <livewire:users.new-user />
                                    @elseif($this->innerView == "b")
                                        <livewire:users.dashboard />
                                    @else

                                        <livewire:users.view-user />
                                    @endif
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
    @endif









    @if($this->viewLoaded == 'roles')
        <div class="w-full flex bg-gray-100 h-100 pl-2 pr-2 pt-1 pb-1 ">
            <div class="w-1/4 h-100 bg-gray-100">

                <div class="flex items-center justify-center min-h-screen bg-gray-100 p-2">
                    <div aria-label="card" class="p-6 rounded-3xl bg-white w-full min-h-screen">

                        <div aria-label="header" class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 shrink-0" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DD0035" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                            </svg>


                            <div wire:click="loadView('b')" class="space-y-0.5 flex-1 cursor-pointer">
                                <h3 class="font-medium text-lg tracking-tight text-gray-900 leading-tight">
                                    Roles List
                                </h3>
                                <p class="text-sm font-normal text-gray-400 leading-none">
                                    Filter List
                                </p>
                            </div>


                            <a wire:click="setInnerView('a')" class="inline-flex items-center shrink-0 justify-center w-8 h-8 rounded-full text-white bg-blue-200 focus:outline-none cursor-pointer">
                                <div wire:loading.remove wire:target="setInnerView('a')">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DD0035" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>
                                </div>
                                <div wire:loading wire:target="setInnerView('a')">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6 spin">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                                    </svg>
                                </div>

                            </a>
                        </div>



                        <div aria-label="content" class="mt-9 grid gap-2.5">

                            <div class="">
                                <p class="text-sm font-normal text-gray-400 leading-none mb-2 -mt-4">
                                    Search Roles
                                </p>
                                <div class="relative">
                                    <input wire:model.live="search" type="text" class=" rounded-3xl peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-700 dark:border-transparent dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Enter name">
                                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#DD0035"
                                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="flex-shrink-0 w-4 h-4 text-gray-500">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                        </svg>


                                    </div>
                                </div>


                            </div>



                            @foreach(\Illuminate\Support\Facades\DB::table('roles')->where('status', 'PENDING')->get() as $department)
                                <a wire:click="setInnerView({{$department->id}})" class="cursor-pointer relative">
                                    <div class="relative p-2 rounded-3xl bg-gray-100">

                                        <div class="flex justify-end w-full mr-4 gap-2">
                                            <span class="text-xs text-red-500 bg-red-100 rounded-3xl pl-1 pr-1 mr-2">{{ ucwords(str_replace('_', ' ', $department->status)) }}</span>
                                        </div>

                                        <div class="flex items-center space-x-4">
                                        <span class="flex items-center justify-center w-14 h-14 shrink-0 rounded-full bg-white yellow p-1">

                                              <svg data-slot="icon" class="rounded-full h-8" fill="none" stroke-width="1.5" stroke="#DD0035" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"></path>
                                            </svg>
                                        </span>
                                            <div class="flex flex-col flex-1">

                                                <div class="divide-x divide-gray-200 mt-auto">
                                                    <span class="inline-block px-3 text-xs leading-none text-gray-400 font-normal first:pl-0">Role Name</span>
                                                    <span class="inline-block px-3 text-xs leading-none text-gray-400 font-normal first:pl-0">{{$department->department_name}}</span>
                                                </div>
                                                <div class="divide-x divide-gray-200 mt-auto">
                                                    <span class="inline-block px-3 text-xs leading-none text-gray-400 font-normal first:pl-0">Email</span>
                                                    <span class="inline-block px-3 text-xs leading-none text-gray-400 font-normal first:pl-0">{{$department->description}}</span>
                                                </div>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0 mt-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#DD0035" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M9 6l6 6l-6 6"></path>
                                            </svg>
                                        </div>
                                    </div>

                                </a>
                            @endforeach


                            <hr class="mt-2 mb-2 border-b-1 border-blueGray-300">

                            @foreach(\Illuminate\Support\Facades\DB::table('roles')->get() as $department)
                                <a wire:click="setInnerView({{$department->id}})" class="cursor-pointer relative">
                                    <div class="relative p-2 rounded-3xl bg-gray-100">

                                        <div class="flex justify-end w-full mr-4 gap-2">
                                            <span class="text-xs text-red-500 bg-red-100 rounded-3xl pl-1 pr-1 mr-2">{{ ucwords(str_replace('_', ' ', $department->status)) }}</span>
                                        </div>

                                        <div class="flex items-center space-x-4">
                                        <span class="flex items-center justify-center w-14 h-14 shrink-0 rounded-full bg-white yellow p-1">

                                              <svg data-slot="icon" class="rounded-full h-8" fill="none" stroke-width="1.5" stroke="#DD0035" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"></path>
                                            </svg>
                                        </span>
                                            <div class="flex flex-col flex-1">

                                                <div class="divide-x divide-gray-200 mt-auto">
                                                    <span class="inline-block px-3 text-xs leading-none text-gray-400 font-normal first:pl-0">Role Name</span>
                                                    <span class="inline-block px-3 text-xs leading-none text-gray-400 font-normal first:pl-0">{{$department->department_name}}</span>
                                                </div>
                                                <div class="divide-x divide-gray-200 mt-auto">
                                                    <span class="inline-block px-3 text-xs leading-none text-gray-400 font-normal first:pl-0">Email</span>
                                                    <span class="inline-block px-3 text-xs leading-none text-gray-400 font-normal first:pl-0">{{$department->description}}</span>
                                                </div>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0 mt-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#DD0035" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M9 6l6 6l-6 6"></path>
                                            </svg>
                                        </div>
                                    </div>

                                </a>
                            @endforeach





                        </div>

                    </div>


                </div>


            </div>
            <div class="w-3/4">
                <div class="flex items-center justify-center min-h-screen bg-gray-100 p-2">
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

                            <div wire:loading.remove wire:target="innerView">



                                @if($this->viewLoaded == 'roles')
                                    @if($this->innerView == "a")
                                        <livewire:users.new-role />
                                    @elseif($this->innerView == "b")
                                        <livewire:users.role-dashboard />
                                    @else

                                        <livewire:users.view-role />
                                    @endif
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
    @endif







    @if($this->viewLoaded == 'processes')
            <div class="w-full flex bg-gray-100 h-100 pl-2 pr-2 pt-1 pb-1 ">
                <div class="w-1/4 h-100 bg-gray-100">

                    <div class="flex items-center justify-center min-h-screen bg-gray-100 p-2">
                        <div aria-label="card" class="p-6 rounded-3xl bg-white w-full min-h-screen">

                            <div aria-label="header" class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 shrink-0" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DD0035" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                </svg>


                                <div wire:click="loadView('b')" class="space-y-0.5 flex-1 cursor-pointer">
                                    <h3 class="font-medium text-lg tracking-tight text-gray-900 leading-tight">
                                        Processes List
                                    </h3>
                                    <p class="text-sm font-normal text-gray-400 leading-none">
                                        Filter List
                                    </p>
                                </div>


                                <a wire:click="setInnerView('a')" class="inline-flex items-center shrink-0 justify-center w-8 h-8 rounded-full text-white bg-blue-200 focus:outline-none cursor-pointer">
                                    <div wire:loading.remove wire:target="setInnerView('a')">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DD0035" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                        </svg>
                                    </div>
                                    <div wire:loading wire:target="setInnerView('a')">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6 spin">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                                        </svg>
                                    </div>

                                </a>
                            </div>



                            <div aria-label="content" class="mt-9 grid gap-2.5">

                                <div class="">
                                    <p class="text-sm font-normal text-gray-400 leading-none mb-2 -mt-4">
                                        Search Processes
                                    </p>
                                    <div class="relative">
                                        <input wire:model.live="search" type="text" class=" rounded-3xl peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-700 dark:border-transparent dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Enter name">
                                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#DD0035"
                                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="flex-shrink-0 w-4 h-4 text-gray-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                            </svg>


                                        </div>
                                    </div>


                                </div>



                                @foreach(\Illuminate\Support\Facades\DB::table('processes')->get() as $process)
                                    <a wire:click="setInnerView({{$process->id}})" class="cursor-pointer relative">
                                        <div class="relative p-2 rounded-3xl bg-gray-100">


                                            <div class="flex items-center space-x-4">
                                                <span class="flex items-center justify-center w-14 h-14 shrink-0 rounded-full bg-white yellow p-1">

                                                    <svg class="rounded-full h-8" data-slot="icon" fill="none" stroke-width="1.5" stroke="#DD0035" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                      <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21 3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5"></path>
                                                    </svg>
                                                </span>
                                                <div class="flex flex-col flex-1">

                                                    <div class="mt-auto">
                                                        <div class="inline-block text-xs leading-none text-gray-400 font-normal first:pl-0">Process Name</div>
                                                        <div class="inline-block text-xs leading-none text-gray-600 font-semibold first:pl-0">{{$process->process_name}}</div>
                                                    </div>
                                                </div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0 mt-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#DD0035" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M9 6l6 6l-6 6"></path>
                                                </svg>
                                            </div>
                                        </div>

                                    </a>
                                @endforeach



                            </div>

                        </div>


                    </div>


                </div>
                <div class="w-3/4">
                    <div class="flex items-center justify-center min-h-screen bg-gray-100 p-2">
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

                                <div wire:loading.remove wire:target="innerView">



                                    @if($this->viewLoaded == 'processes')
                                        @if($this->innerView == "a")
                                            <livewire:users.new-process />
                                        @elseif($this->innerView == "b")
                                            <livewire:users.process-dashboard />
                                        @else

                                            <livewire:users.view-process />
                                        @endif
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
        @endif








</div>

