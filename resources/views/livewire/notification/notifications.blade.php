<div class="h-full w-full ">




    @if (session()->has('message'))
        <div class="alert alert-success bg-blue-100 fw-bold text-center justify-center ">
            <strong>  {{ session('message') }}  </strong>
        </div>
    @endif


    <div class="w-full bg-gray-100 rounded-lg pl-2 pr-2 pt-1 pb-1 ">

            <div class="w-full flex gap-2">

                <div class="w-1/3 ">

                    <div class="flex items-center justify-center p-2">
                        <div wire:click="loadView('all')" aria-label="card" class="p-6 rounded-3xl cursor-pointer
                                @if($this->viewLoaded == 'all') bg-red-50 shadow-md @else bg-white shadow-sm @endif  w-full ">

                            <div aria-label="header" class="flex items-center space-x-2">

                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 shrink-0" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F26F20" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5"></path>
                                </svg>

                                <div class="space-y-0.5 flex-1 cursor-pointer">
                                    <h3 class="font-medium text-lg tracking-tight text-gray-900 leading-tight">
                                        System Notifications
                                    </h3>
                                    <p class="text-sm font-normal text-gray-400 leading-none">
                                        List Of all SmS and mails
                                    </p>
                                </div>
                            </div>
                            <div class="bg-red-600 text-white font-bold  px-4 py-2 rounded-3xl mb-2 mt-2 w-full">
                                {{DB::table('notifications')->where('send_status','failed')->get()->count()}} Failed
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-1/3">
                    <div class="flex items-center justify-center p-2">
                        <div wire:click="loadView('sms')" aria-label="sms" class="p-6 rounded-3xl  cursor-pointer
                                @if($this->viewLoaded == 'sms') bg-red-50 shadow-md @else bg-white shadow-sm @endif  w-full ">

                            <div aria-label="header" class="flex items-center space-x-2">
                                <svg data-slot="icon"class="w-8 h-8 shrink-0" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F26F20" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z"></path>
                                </svg>
                                <div  class="space-y-0.5 flex-1 cursor-pointer">
                                    <h3 class="font-medium text-lg tracking-tight text-gray-900 leading-tight">
                                        SMS
                                    </h3>
                                    <p class="text-sm font-normal text-gray-400 leading-none">
                                       All SMS notification
                                    </p>
                                </div>
                            </div>


                            <div class="bg-red-600 text-white font-bold px-4 py-2 rounded-3xl mb-2 mt-2 w-full">
                                {{DB::table('notifications')->where('send_status','failed')->get()->count()}} Failed
                            </div>


                        </div>


                    </div>
                </div>

                <div class="w-1/3">
                    <div class="flex items-center justify-center p-2">
                        <div wire:click="loadView('mail')" aria-label="card" class="p-6 rounded-3xl  cursor-pointer
                                @if($this->viewLoaded == 'mail')  bg-red-50 shadow-md @else bg-white shadow-sm @endif  w-full ">

                            <div aria-label="header" class="flex items-center space-x-2">


                                <svg data-slot="icon" class="w-8 h-8 shrink-0" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F26F20" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"></path>
                                </svg>


                                <div  class="space-y-0.5 flex-1 cursor-pointer">
                                    <h3 class="font-medium text-lg tracking-tight text-gray-900 leading-tight">
                                       Mails
                                    </h3>
                                    <p class="text-sm font-normal text-gray-400 leading-none">
                                       All Mails
                                    </p>
                                </div>

                            </div>
                            <div class="bg-red-600  text-white font-bold  px-4 py-2 rounded-3xl mb-2 mt-2 w-full">
                                Failed : {{DB::table('notifications')->where('send_status','failed')->count()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>



    <div class="w-1/4 h-100   ">
        <div class="flex items-center justify-center   p-2">
            <div aria-label="card" class="p-6 rounded-3xl bg-white w-full ">
                <div aria-label="header" class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 shrink-0" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F26F20" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z"></path>
                    </svg>

                    <div wire:click="loadView('notification')" class="space-y-0.5 flex-1 cursor-pointer">
                        <h3 class="font-medium text-lg tracking-tight text-gray-900 leading-tight">
                            New Notification
                        </h3>
                        <p class="text-sm font-normal text-gray-400 leading-none">
                            SMS/Mails
                        </p>
                    </div>




                <a wire:click="loadView('all')" class="inline-flex items-center shrink-0 justify-center w-8 h-8 rounded-full text-white bg-blue-200 focus:outline-none cursor-pointer">
                        <div wire:loading.remove="" wire:target="loadView('all')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F26F20" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
                            </svg>
                        </div>
                        <div wire:loading="" wire:target="loadView('all')">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6 spin">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"></path>
                            </svg>
                        </div>

                    </a>

                </div>
            </div>
        </div>
    </div>




    @if($this->viewLoaded == 'all')
        <div class="w-full flex bg-gray-100 h-100 pl-2 pr-2 pt-1 pb-1 ">


            <div class="w-full">
                <div class="bg-white p-4 sm:p-6 overflow-hidden mb-2 rounded-lg shadow-md shadow-gray-200">
                            <div wire:loading.remove wire:target="innerView">

                                @if($this->viewLoaded == 'all')
                                        <livewire:notification.notification-table />

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
    @endif


    @if($this->viewLoaded == 'sms')
    <div class="w-full flex bg-gray-100 h-100 pl-2 pr-2 pt-1 pb-1 ">
        <div class="w-full">
            <div class="bg-white p-4 sm:p-6 overflow-hidden mb-2 rounded-lg shadow-md shadow-gray-200">

                        <div wire:loading.remove wire:target="innerView">

                            @if($this->viewLoaded == 'sms')
                                    <livewire:notification.notification-table />

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
    @endif







    @if($this->viewLoaded == 'mail')
    <div class="w-full flex bg-gray-100 h-100 pl-2 pr-2 pt-1 pb-1 ">


        <div class="w-full">
            <div class="bg-white p-4 sm:p-6 overflow-hidden mb-2 rounded-lg shadow-md shadow-gray-200">



                        <div wire:loading.remove wire:target="innerView">

                            @if($this->viewLoaded == 'mail')
                                    <livewire:notification.notification-table />

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
        @endif



        @if($this->viewLoaded == 'notification')
 <div class="w-full flex bg-gray-100 h-100 pl-2 pr-2 pt-1 pb-1 ">
  <div class="w-full">
      <div class="bg-white p-4 sm:p-6 overflow-hidden mb-2 rounded-lg shadow-md shadow-gray-200">
        <div wire:loading.remove wire:target="innerView">
        <div class="hidden lg:col-span-2 lg:block">
            <div class=" flex w-full">
                <div class="w-1/4 h-100   ">

                    <div class="flex items-center justify-center   p-2">
                        <div aria-label="card" class="p-6 rounded-3xl bg-white w-full ">

                            <div aria-label="header" class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 shrink-0" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F26F20" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z"></path>
                                </svg>


                                <div wire:click="loadView('b')" class="space-y-0.5 flex-1 cursor-pointer">
                                    <h3 class="font-medium text-lg tracking-tight text-gray-900 leading-tight">
                                       Compose Mail/SMS
                                    </h3>
                                    <p class="text-sm font-normal text-gray-400 leading-none">
                                        quick action
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                <div class="flex mx-auto   justify-between  mx-auto ">
                    <label class="flex items-center cursor-pointer m-4 ">
                        <input type="checkbox" wire:model="sms_option" class="form-checkbox h-6 w-6 rounded-full text-blue-600 transition duration-200 ease-in-out checked:bg-blue-600 checked:border-transparent" checked="">
                        <span class="ml-3 text-gray-800"> SMS  </span>
                    </label>

                    <label class="flex items-center m-4 cursor-pointer">
                        <input type="checkbox" wire:model="email_option" class="form-checkbox h-6 w-6 rounded-full text-blue-600 transition duration-200 ease-in-out checked:bg-blue-600 checked:border-transparent" checked="">
                        <span class="ml-3 text-gray-800"> Email </span>
                    </label>
                </div>
                </div>
                <div class="w-3/4 h-100   ">
                <div class="flex mx-auto bg-gray-50 border-2 w-full  ">


                    <select id="countries" wire:model="source_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected> Select Source </option>
                        @foreach ($this->sources as $source )
                        <option value="{{ $source->id }}"> {{ $source->source_name }} </option>
                        @endforeach

                      </select>





                </div>




                <div class="flex mx-auto bg-gray-50 border-2  justify-between  ">



                </div>


                <div class="relative">
                    <select wire:model="currentSelection" class="block w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 focus:ring-blue-500 focus:border-blue-500">
                        <option value="" selected>Select an subscribers</option>
                        @foreach($options as $value => $label)
                            <option value="{{ $value }}">{{ $label }}</option>
                        @endforeach
                    </select>

                    <button wire:click="setOption" class="mt-2 inline-flex items-center bg-blue-200 text-white rounded-full px-3 py-1 cursor-pointer">
                        <a class="inline-flex items-center shrink-0 justify-center w-8 h-8 rounded-full text-white bg-blue-200 focus:outline-none cursor-pointer">
                            <div  >
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F26F20" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
                                </svg>
                            </div>
                            <div wire:loading="" wire:target="loadView('a')">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6 spin">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"></path>
                                </svg>
                            </div>

                        </a>

                    </button>

                    <div class="mt-2 flex flex-wrap">
                        @foreach($selected as $selectedOption)
                            <div class="flex items-center bg-blue-200 rounded-full px-3 py-1 text-sm font-semibold text-blue-700 mr-2 mb-2">
                                <span>{{ $options[$selectedOption] }}</span>
                                <button type="button" wire:click="removeOption('{{ $selectedOption }}')" class="ml-2 text-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                        @endforeach
                    </div>




                </div>






                </div>

          </span>
                </div>

                {{-- <div class="flex items-end justify-end ">
                    <div class="bg-green-500 text-white p-2 rounded-lg max-w-xs">Hello!</div>
                </div> --}}

                @foreach($errors->all() as $error)
                <div class="text-xs text-red-600">{{ $error }}</div>
                @endforeach



                <div class="relative mt-4  w-full p-6 bg-gray-50 overflow-y-auto h-[20rem] border-2 rounded-lg">


                    <textarea wire:model="message" type="text" placeholder="Message" class=" relative w-full p-6 bg-gray-50 overflow-y-auto h-[18rem] border-none rounded-lg" name="message" required="">
                    </textarea>

                </div>

                <div class="flex items-center justify-between w-full p-3 border-t border-gray-300">



                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path>
                        </svg>
                    </button>
                    <button wire:click="save" type="save">
                        <svg class="w-5 h-5 text-gray-500 origin-center transform rotate-90" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path>
                        </svg>
                    </button>
                </div>


            </div>
        </div>

        </div>
      </div>
  </div>




  @endif


</div>



