<div>


    <div class="w-full  rounded-3xl">

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

                        <h3 class="uppercase font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                            Basic Details
                        </h3>

                        <div class="flex flex-wrap">
                            <div class="w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="text-sm font-medium mb-2" htmlfor="grid-password">
                                        Role Name
                                    </label>
                                    <input wire:model="department_name" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600
                                    bg-gray-100 rounded-3xl text-sm shadow w-full ease-linear
                                    transition-all duration-150" value="" >
                                </div>
                            </div>

                            <div class="w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="text-sm font-medium mb-2" htmlfor="grid-password">
                                        Role Description
                                    </label>
                                    <input wire:model="description" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600
                                    bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear
                                    transition-all duration-150" value="">
                                </div>
                            </div>

                        </div>

                        <hr class="mt-6 border-b-1 border-blueGray-300">

                        <h3 class="uppercase font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                            Set Permissions

                        </h3>

                        <div class="flex flex-wrap">

                            <div class="w-12/12 px-4">
                                <div class="relative w-full mb-3">


                                    <div>
                                        <form wire:submit.prevent="savePermissions">
                                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                                                @foreach($permissions as $permission)

                                                    <label for="hs-checkbox-in-form" class="flex p-3 w-full bg-white border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                                                        <input type="checkbox"
                                                               value="{{ $permission->id }}"
                                                               wire:model="selectedPermissions.{{ $permission->id }}"
                                                               class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                                               id="hs-checkbox-in-form">
                                                        <span class="text-xs text-gray-500 ms-3 dark:text-neutral-400">{{ $permission->permission }}</span>
                                                    </label>

                                                @endforeach
                                            </div>

                                        </form>
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

                            <div class="mt-8">
                                <div wire:loading.remove wire:target="saveRole">
                                    <button
                                            wire:click="saveRole"
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

                                <div wire:loading wire:target="saveRole">
                                    <button
                                            wire:click="saveRole"
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
</div>
