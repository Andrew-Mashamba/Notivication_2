<div>

    @if(session('message'))
        <div class="bg-blue-500 text-white px-4 py-2 rounded-3xl mb-2 mt-2 w-full">
            {{ session('message') }}
        </div>
    @endif
    <div class="w-full  bg-blueGray-50 rounded-3xl">
        <div class="w-full rounded-3xl">
            <div class="relative flex flex-col min-w-0 break-words w-full  bg-blueGray-100 border-0 rounded-3xl">

                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <div>



                        <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                            Sources Information
                        </h3>

                        <div class="flex flex-wrap">


                            <div class="w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                        Source Name
                                    </label>
                                    <input wire:model="source_name" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600
                                    bg-white rounded-3xl text-sm shadow  w-full ease-linear
                                    transition-all duration-150" value="">
                                    @error('source_name')
                                    <span class="text-red-500 text-xs italic mt-2">This Field Is Required</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                        Source IP
                                    </label>
                                    <input wire:model="source_ip" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600
                                    bg-white rounded-3xl text-sm shadow  w-full ease-linear
                                    transition-all duration-150" value="Jesse">
                                    @error('source_ip')
                                    <span class="text-red-500 text-xs italic mt-2">This Field Is Required</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                        Source ID
                                    </label>
                                    <input wire:model="source_id" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600
                                    bg-white rounded-3xl text-sm shadow  w-full ease-linear
                                    transition-all duration-150" value="Client-4670">
                                    @error('source_id')
                                    <span class="text-red-500 text-xs italic mt-2">This Field Is Required</span>
                                    @enderror
                                </div>
                            </div>


                        </div>



                        <div class="mt-8">
                            <div wire:loading.remove wire:target="saveClientInfo">
                                <button
                                        wire:click="saveClientInfo"
                                        type="button"
                                        class="inline-block rounded-full border-2 border-neutral-800 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-800 transition duration-150 ease-in-out hover:border-neutral-800 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-800 focus:border-neutral-800 focus:text-neutral-800 -0 active:border-neutral-900 active:text-neutral-900 dark:border-neutral-900 dark:text-neutral-900 dark:hover:border-neutral-900 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10 dark:hover:text-neutral-900 dark:focus:border-neutral-900 dark:focus:text-neutral-900 dark:active:border-neutral-900 dark:active:text-neutral-900"
                                        data-te-ripple-init>

                                    <div class="flex gap-2">

                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DD0035" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                                        </svg>

                                        Save
                                    </div>

                                </button>
                            </div>

                            <div wire:loading wire:target="saveClientInfo">
                                <button
                                        wire:click="saveClientInfo"
                                        type="button"
                                        class="inline-block rounded-full border-2 border-neutral-800 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-800 transition duration-150 ease-in-out hover:border-neutral-800 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-800 focus:border-neutral-800 focus:text-neutral-800 -0 active:border-neutral-900 active:text-neutral-900 dark:border-neutral-900 dark:text-neutral-900 dark:hover:border-neutral-900 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10 dark:hover:text-neutral-900 dark:focus:border-neutral-900 dark:focus:text-neutral-900 dark:active:border-neutral-900 dark:active:text-neutral-900"
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

        </div>


    </div>
</div>
