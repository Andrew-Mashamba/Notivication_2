<div>

    <div class="w-full  bg-blueGray-100 rounded-3xl p-2">

        <div class="w-full rounded-3xl bg-white">
            <div class="relative flex flex-col min-w-0 break-words w-full ">

                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <div>

                        <div class="text-center">
                            <!-- Current Profile Photo -->


                            <h3 class="text-lg font-semibold mb-6 mt-2">
                                {{$this->source->service_name}}
                            </h3>

                            <div class="flex gap-2 w-full justify-center">

                                @if($this->source->Status == 'ACTIVE')

                                    <button
                                        type="button"
                                        wire:click="reject"
                                        class="inline-block rounded-3xl  bg-blue-600 px-4 pb-[5px] pt-[6px] text-xs font-medium
                                            uppercase leading-normal text-white transition duration-150 ease-in-out
                                            hover:bg-blue-600 focus:bg-blue-600 focus:outline-none focus:ring-0 active:bg-blue-600-700"
                                        data-te-ripple-init
                                        data-te-ripple-color="light">
                                        Suspend
                                    </button>

                                @else
                                    @if($this->source->Status == 'PENDING')
                                        <button
                                            type="button"
                                            wire:click="approve"
                                            class="inline-block rounded-3xl  bg-blue-600 px-4 pb-[5px] pt-[6px] text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-blue-600 focus:bg-blue-600 focus:outline-none focus:ring-0 active:bg-blue-600-700"
                                            data-te-ripple-init
                                            data-te-ripple-color="light">
                                            Approve
                                        </button>

                                        <button
                                            type="button"
                                            wire:click="reject"
                                            class="inline-block rounded-3xl  bg-blue-600 px-4 pb-[5px] pt-[6px] text-xs font-medium
                                            uppercase leading-normal text-white transition duration-150 ease-in-out
                                            hover:bg-blue-600 focus:bg-blue-600 focus:outline-none focus:ring-0 active:bg-blue-600-700"
                                            data-te-ripple-init
                                            data-te-ripple-color="light">
                                            Reject
                                        </button>


                                    @else
                                        <button
                                            type="button"
                                            wire:click="approve"
                                            class="inline-block rounded-3xl  bg-blue-600 px-4 pb-[5px] pt-[6px] text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-blue-600 focus:bg-blue-600 focus:outline-none focus:ring-0 active:bg-blue-600-700"
                                            data-te-ripple-init
                                            data-te-ripple-color="light">
                                            Approve
                                        </button>
                                    @endif

                                @endif



                            </div>


                        </div>

                        <hr class="mt-6 border-b-1 border-blueGray-300">


                        <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                            Source Information
                        </h3>

                        <div class="flex w-full gap-4">
                            <div class="bg-gray-100 p-4 rounded-3xl w-1/2  flex flex-wrap">
                                @php
                                    $fields = [
                                        'service_name' => 'Subscriber Name',
                                        'service_type' => 'Phone Number',
                                    ];
                                @endphp

                                @foreach($fields as $field => $label)
                                    <div class="w-1/2 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium text-lg tracking-tight text-gray-900 leading-tight">
                                                {{ $label }}
                                            </label>
                                            <h3 x-on:dblclick="$wire.doubleClick('{{ $field }}')" class="cursor-pointer font-bold text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight ease-linear transition-all duration-150">
                                                {{ $this->source->$field }}
                                            </h3>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>

                        <hr class="mt-6 border-b-1 border-blueGray-300">



                    </div>
                </div>
            </div>

        </div>

    </div>




    <!-- Modal -->
    @if($this->isOpen)
        <div class="fixed inset-0 overflow-y-auto
        w-full h-full top-0 start-0 z-[80] overflow-x-hidden">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>

                <!-- This element is to trick the browser into centering the modal contents. -->
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                <!-- Modal Panel -->
                <div class="inline-block align-bottom bg-white rounded-3xl text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <div class="bg-blueGray-50  px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <!-- Content Goes Here -->
                        <div class="relative w-full mb-3">
                            <label class="block text-blueGray-600 text-sm font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                {{$this->editKey}}
                            </label>
                            <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                Enter New Value
                            </label>
                            <input wire:model="newValue"  type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600
                                    bg-white rounded-3xl text-sm shadow focus:outline-none focus:ring w-full ease-linear
                                    transition-all duration-150" value="United States">
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse justify-between">
                        <button wire:click="saveChanges" type="button" class="inline-block rounded-full bg-zinc-500 text-neutral-50 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] hover:bg-zinc-600 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-zinc-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] active:bg-zinc-700 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0">
                            Save Changes
                        </button>
                        <button wire:click="closeModal"  type="button" class="inline-block rounded-full border-2 border-zinc-500 text-zinc-500 hover:border-zinc-600 hover:bg-zinc-400 hover:bg-opacity-10 hover:text-zinc-600 focus:border-zinc-700 focus:text-zinc-700 active:border-zinc-800 active:text-zinc-800 dark:border-zinc-300 dark:text-zinc-300 dark:hover:hover:bg-zinc-300 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0">
                            Cancel
                        </button>

                    </div>
                </div>
            </div>
        </div>
    @endif







</div>


