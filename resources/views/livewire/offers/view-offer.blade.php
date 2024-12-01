<div>

    <div class="w-full  bg-blueGray-100 rounded-3xl p-2">

        <div class="w-full rounded-3xl bg-white">
            <div class="relative flex flex-col min-w-0 break-words w-full ">

                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <form>

                        <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                            Offer Overview
                        </h3>

                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-4">
                            <!-- Stock Summary -->
                            <div class="bg-gray-100 p-4 rounded-3xl">
                                <h3 class="text-lg font-semibold mb-2">Response</h3>
                                <p class="text-gray-600 text-2xl font-bold">{{$this->offer->offer_status}}</p>
                            </div>


                        </div>


                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                                <!-- Stock Summary -->
                                <div class="bg-gray-100 p-4 rounded-3xl">
                                    <h3 class="text-lg font-semibold mb-2">Loan value</h3>
                                    <p class="text-gray-600 text-2xl font-bold">{{number_format($this->offer->principle,2)}} TZS</p>
                                </div>

                                <!-- Total Value of Pledged Stock -->
                                <div class="bg-gray-100 p-4 rounded-3xl">
                                    <h3 class="text-lg font-semibold mb-2">Interest</h3>
                                    <p class="text-gray-600">{{number_format($this->offer->interest,2)}} % per month</p>
                                </div>

                                <!-- Visual Representation of Stock Distribution (Placeholder) -->
                                <div class="bg-gray-100 p-4 rounded-3xl">
                                    <h3 class="text-lg font-semibold mb-2">tenure</h3>
                                    <p class="text-gray-600">{{$this->offer->tenure}} Months</p>
                                </div>
                            </div>
                        <hr class="mt-6 border-b-1 border-blueGray-300">
                        <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                            Proposed Schedule
                        </h3>

                        <div class="flex w-full gap-4">

                            <div class="bg-gray-100 p-2 rounded-3xl w-full ">

                                <div id="stability3" class="w-full bg-gray-50 rounded-3xl" >
                                    <div class="w-full bg-white rounded-3xl p-4" >

                                        <table class="w-full">
                                            <thead>
                                            <tr>
                                                <th>INSTALLMENT</th>
                                                <th>INTEREST</th>
                                                <th>PRINCIPLE</th>
                                                <th>BALANCE</th>

                                            </tr>
                                            </thead>
                                            <tbody>



                                            @foreach($this->table as $tr)
                                                <tr>
                                                    <td class="text-xs text-slate-400 dark:text-white text-right">
                                                        <p>{{number_format($tr['Payment'],2)}}</p>
                                                    </td>

                                                    <td class="text-xs text-slate-400 dark:text-white text-right">
                                                        <p>{{number_format($tr['Interest'],2)}}</p>
                                                    </td>

                                                    <td class="text-xs text-slate-400 dark:text-white text-right">
                                                        <p>{{number_format($tr['Principle'],2)}}</p>
                                                    </td>

                                                    <td class="text-xs text-slate-400 dark:text-white text-right">
                                                        <p>{{number_format($tr['balance'],2)}}</p>
                                                    </td>
                                                </tr>
                                            @endforeach

                                            </tbody>

                                            <tfoot>
                                            @foreach($this->tablefooter as $tr)
                                                <tr>
                                                    <td class="text-sm font-bold text-black dark:text-white text-right">
                                                        <p class="text-sm font-bold text-black">{{number_format($tr['Payment'],2)}}</p>
                                                    </td>
                                                    <td class="text-xs text-slate-400 dark:text-white text-right">
                                                        <p class="text-sm font-bold text-black">{{number_format($tr['Interest'],2)}}</p>
                                                    </td>
                                                    <td class="text-xs text-slate-400 dark:text-white text-right">
                                                        <p class="text-sm font-bold text-black">{{number_format($tr['Principle'],2)}}</p>
                                                    </td>
                                                    <td class="text-xs text-slate-400 dark:text-white text-right">
                                                        <p class="text-sm font-bold text-black">{{number_format($tr['balance'],2)}}</p>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tfoot>

                                        </table>


                                    </div>
                                </div>



                            </div>



                        </div>




                        <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                            Action
                        </h3>

                        @if(session('message'))
                            <div class="bg-blue-500 text-white px-4 py-2 rounded-3xl mb-2 mt-2 w-full">
                                {{ session('message') }}
                            </div>
                        @endif
                        @if(session('RegisterStockError'))
                            <div class="bg-red-500 text-white px-4 py-2 rounded-3xl mb-2 mt-2 w-full">
                                {{ session('RegisterStockError') }}
                            </div>
                        @endif
                        <div class="flex w-full gap-4">



                            <div class="bg-gray-100 p-4 rounded-3xl w-full ">

                                <div class="w-full flex gap-4 px-4 bg-gray-100 p-4 rounded-3xl
                        px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse justify-between">
                                    <button wire:click="acceptOffer" type="button" wire:loading.attr="disabled" class="inline-block rounded-full bg-zinc-500 text-neutral-50 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] hover:bg-zinc-600 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-zinc-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] active:bg-zinc-700 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0">
                                        <span wire:loading.remove>Accept the offer</span>
                                        <span wire:loading>Loading...</span>
                                    </button>


                                    <button wire:click="declineApplication"  type="button" class="inline-block rounded-full border-2 border-zinc-500 text-zinc-500 hover:border-zinc-600 hover:bg-zinc-400 hover:bg-opacity-10 hover:text-zinc-600 focus:border-zinc-700 focus:text-zinc-700 active:border-zinc-800 active:text-zinc-800 dark:border-zinc-300 dark:text-zinc-300 dark:hover:hover:bg-zinc-300 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0">
                                        Decline
                                    </button>

                                </div>


                            </div>

                        </div>

                    </form>
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
