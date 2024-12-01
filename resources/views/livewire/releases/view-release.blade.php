<div class="relative group">
   <div  class="w-full mt-2 rounded-3xl bg-white ring-1 ring-black ring-opacity-5 p-1 space-y-1">

                                @foreach ( $this->release as $application)
                                       @foreach(\Illuminate\Support\Facades\DB::table('applications')
                               ->where('client_id',$application->client_id)
                               ->where('application_status','COLLATERAL RELEASE REQUESTED')
                               ->get() as $application)

                                            <div>

                                                <div class="w-full  bg-blueGray-100 rounded-3xl p-2">

                                                    <div class="w-full rounded-3xl bg-white">
                                                        <div class="relative flex flex-col min-w-0 break-words w-full ">

                                                            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                                                                <div>


                                                                    <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                                                                        Loan Status
                                                                    </h3>

                                                                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                                                                        <!-- Stock Summary -->
                                                                        <div class="bg-gray-100 p-4 rounded-3xl">
                                                                            <h3 class="text-lg font-semibold mb-2">Progress Status</h3>
                                                                            <hr class="mt-6 mb-6 border-b-1 border-blueGray-300">

                                                                            <div class="w-full flex gap-2">
                                                                                <svg class= "h-8 w-8 bg-blue-400 p-1 rounded-3xl my-auto" data-slot="icon" fill="white" stroke-width="2" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"></path>
                                                                                </svg>
                                                                                <p class="text-gray-600 text-sm font-bold tracking-tight text-gray-900 leading-tight my-auto">
                                                                                    {{$application->application_status}}
                                                                                </p>
                                                                            </div>

                                                                        </div>

                                                                        <!-- Stock Summary -->
                                                                        <div class="bg-gray-100 p-4 rounded-3xl">
                                                                            <h3 class="text-lg font-semibold mb-2">Approval Status</h3>
                                                                            <hr class="mt-6  mb-6  border-b-1 border-blueGray-300">

                                                                            <div class="w-full flex gap-2">
                                                                                <svg class= "h-8 w-8 bg-blue-400 p-1 rounded-3xl my-auto" data-slot="icon" fill="white" stroke-width="2" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"></path>
                                                                                </svg>
                                                                                <p class="text-gray-600 text-sm font-bold tracking-tight text-gray-900 leading-tight my-auto">
                                                                                    {{$application->approval_status}}
                                                                                </p>
                                                                            </div>

                                                                        </div>

                                                                        <!-- Stock Summary -->
                                                                        <div class="bg-gray-100 p-4 rounded-3xl">

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

                                                                            <h3 class="text-lg font-semibold mb-2">Actions</h3>

                                                                            <div class="w-full flex">
                                                                                <button wire:click="review({{$application->id}})" class="rounded-3xl w-full h-16 bg-blue-600 text-white border border-gray-300">Send for review</button>
                                                                            </div>

                                                                                <div class="w-full flex">
                                                                                    <button wire:click="release({{$application->id}})" class="rounded-3xl w-full h-16 bg-blue-600 text-white border border-gray-300">Approve</button>
                                                                                </div>


                                                                                <div class="w-full flex">
                                                                                    <button wire:click="reject({{$application->id}})" class="rounded-3xl w-full h-16 bg-blue-600 text-white border border-gray-300">Reject</button>
                                                                                </div>


                                                                        </div>

                                                                    </div>





                                                                    <hr class="mt-6 border-b-1 border-blueGray-300">




                                                                    <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                                                                        Loan Application Information
                                                                    </h3>

                                                                    <div class="flex w-full gap-4">

                                                                        <div class="bg-gray-100 p-4 rounded-3xl w-1/2 max-h-60">


                                                                            <div class="w-full lg:w-6/12 px-4">
                                                                                <div class="relative w-full mb-3">
                                                                                    <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                                                                        Client
                                                                                    </label>

                                                                                    <h3 x-on:dblclick="$wire.doubleClick('first_name')" class="cursor-pointer font-bold text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight ease-linear
                                    transition-all duration-150">
                                                                                        {{\Illuminate\Support\Facades\DB::table('farmers')->where('id',$application->client_id)->value('first_name')}}
                                                                                        {{\Illuminate\Support\Facades\DB::table('farmers')->where('id',$application->client_id)->value('last_name')}}

                                                                                    </h3>

                                                                                </div>
                                                                            </div>

                                                                            <div class="w-full lg:w-6/12 px-4">
                                                                                <div class="relative w-full mb-3">
                                                                                    <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                                                                        Loan Amount
                                                                                    </label>
                                                                                    <h3 x-on:dblclick="$wire.doubleClick('last_name')" class="cursor-pointer font-bold text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight ease-linear
                                    transition-all duration-150">
                                                                                        {{number_format($application->loan_amount,2)}} TZS
                                                                                    </h3>

                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                        <div class="bg-gray-100 p-4 rounded-3xl w-1/2 max-h-60">
                                                                            <div class="w-full lg:w-6/12 px-4">
                                                                                <div class="relative w-full mb-3">
                                                                                    <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                                                                        Tenure
                                                                                    </label>

                                                                                    <h3 x-on:dblclick="$wire.doubleClick('date_of_birth')" class="cursor-pointer font-bold text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight ease-linear
                                    transition-all duration-150">
                                                                                        {{$application->tenure}} Months
                                                                                    </h3>
                                                                                </div>
                                                                            </div>

                                                                            <div class="w-full lg:w-6/12 px-4">
                                                                                <div class="relative w-full mb-3">
                                                                                    <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                                                                        Total Collateral Pledged
                                                                                    </label>

                                                                                    @php
                                                                                        $totalValue = 0;
                                                                                    @endphp
                                                                                    @foreach(\Illuminate\Support\Facades\DB::table('pledges')->where('application_id',$application->id)->get() as $pledge)
                                                                                        @if($pledge)

                                                                                            @php
                                                                                                $commodity = \Illuminate\Support\Facades\DB::table('commodities')->where('id', $pledge->commodity_id)->first();
                                                                                                $pledgeValue = $pledge->kilos * $commodity->price_per_kilo;
                                                                                                $totalValue += $pledgeValue;
                                                                                            @endphp

                                                                                        @endif

                                                                                    @endforeach

                                                                                    <h3  class="font-bold text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight ease-linear
                                        transition-all duration-150">
                                                                                        {{ number_format($totalValue, 2) }} TZS
                                                                                    </h3>

                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                    </div>

                                                                    <hr class="mt-6 border-b-1 border-blueGray-300">


                                                                    <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                                                                        Stocks Pledged As Collateral
                                                                    </h3>

                                                                    <div class="flex flex-wrap">
                                                                        <div class="w-full lg:w-12/12 px-4 bg-gray-100 p-4 rounded-3xl">
                                                                            <div class="relative w-full mb-3 flex flex-wrap">

                                                                                @foreach(\Illuminate\Support\Facades\DB::table('pledges')->where('application_id',$application->id)->get() as $pledge)
                                                                                    @if($pledge)


                                                                                        <div class="w-1/3">
                                                                                            <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                                                                                Commodity : {{\Illuminate\Support\Facades\DB::table('commodities')->where('id',$pledge->commodity_id)->get()->value('name') }}
                                                                                            </label>

                                                                                            <h3 x-on:dblclick="$wire.doubleClick('Address')" class="cursor-pointer font-bold text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight ease-linear
                                    transition-all duration-150">
                                                                                                Kilos : {{number_format($pledge->kilos,2)}} Kgs
                                                                                            </h3>

                                                                                            <h3 x-on:dblclick="$wire.doubleClick('Address')" class="cursor-pointer font-bold text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight ease-linear
                                    transition-all duration-150">
                                                                                                Value : {{number_format((int)$pledge->kilos * (int)\Illuminate\Support\Facades\DB::table('commodities')->where('id',$pledge->commodity_id)->get()->value('price_per_kilo'),2)}} TZS
                                                                                            </h3>
                                                                                        </div>


                                                                                    @endif

                                                                                @endforeach

                                                                            </div>
                                                                        </div>


                                                                    </div>

                                                                    <hr class="mt-6 border-b-1 border-blueGray-300">


                                                                    <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                                                                        Comments
                                                                    </h3>
                                                                    <div class="flex flex-wrap">
                                                                        <div class="w-full flex gap-4 px-4 bg-gray-100 p-4 rounded-3xl">





                                                                            <!-- component -->
                                                                            <div class="flex-1 p:2 sm:p-6 justify-between flex flex-col ">

                                                                                <div id="messages" class="flex flex-col space-y-4 p-3 overflow-y-auto
                                    scrollbar-thumb-blue scrollbar-thumb-rounded scrollbar-track-blue-lighter scrollbar-w-2 scrolling-touch">

                                                                                    @foreach(\Illuminate\Support\Facades\DB::table('comments')->where('application_id',Session::get('Application'))->get() as $comment)
                                                                                        <div class="chat-message">
                                                                                            <div class="flex items-end">
                                                                                                <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 order-2 items-start">
                                                                                                    <div>
                                                                                                        <p class="text-gray-600 text-xs font-semibold mb-2">
                                                                                                            {{\Illuminate\Support\Facades\DB::table('users')->where('id',$comment->user_id)->value('name')}}
                                                                                                        </p>
                                                                                                        <span class="px-4 py-2 rounded-lg inline-block rounded-bl-none bg-gray-300 text-gray-600">
                                                            {{$comment->comment_text}}
                                                        </span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <span class="flex items-center justify-center w-14 h-14 shrink-0 rounded-full bg-white yellow">
                                                    <img src="{{ asset('images/avatar.png') }}" class="rounded-full h-12" alt="Avatar Image" >
                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    @endforeach


                                                                                </div>

                                                                                <hr class="mt-6 border-b-1 border-blueGray-300">

                                                                                <div class="mt-4 mb-2 sm:mb-0">
                                                                                    <div class="relative flex">


                                                                                        <input type="text" placeholder="Write your message!" wire:model="comment"
                                                                                               class="w-full focus:outline-none focus:placeholder-gray-400 text-gray-600
                                                   placeholder-gray-600 pl-12 bg-gray-200 rounded-3xl  py-3">

                                                                                        <div class="absolute right-0 items-center inset-y-0 hidden sm:flex rounded-3xl ">

                                                                                            <button wire:click="saveComment" type="button" class="flex items-center justify-center rounded-3xl px-4 py-3 transition duration-500 ease-in-out text-white bg-blue-600 hover:bg-blue-400 ">

                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#DD0035" class="h-6 w-6 ml-2 transform rotate-90">
                                                                                                    <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path>
                                                                                                </svg>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>



                                                                            <script>
                                                                                const el = document.getElementById('messages')
                                                                                el.scrollTop = el.scrollHeight
                                                                            </script>




                                                                        </div>

                                                                    </div>


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


                                                                    {{--                        <div class="w-full flex gap-4 px-4 bg-gray-100 p-4 rounded-3xl mt-4--}}
                                                                    {{--                        px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse justify-between">--}}
                                                                    {{--                            <button wire:click="sendOffer" type="button" wire:loading.attr="disabled" class="inline-block rounded-full bg-zinc-500 text-neutral-50 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] hover:bg-zinc-600 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-zinc-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] active:bg-zinc-700 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0">--}}
                                                                    {{--                                <span wire:loading.remove>Send the offer</span>--}}
                                                                    {{--                                <span wire:loading>Loading...</span>--}}
                                                                    {{--                            </button>--}}



                                                                    {{--                            <button wire:click="rejectApplication"  type="button" class="inline-block rounded-full border-2 border-zinc-500 text-zinc-500 hover:border-zinc-600 hover:bg-zinc-400 hover:bg-opacity-10 hover:text-zinc-600 focus:border-zinc-700 focus:text-zinc-700 active:border-zinc-800 active:text-zinc-800 dark:border-zinc-300 dark:text-zinc-300 dark:hover:hover:bg-zinc-300 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0">--}}
                                                                    {{--                                Reject--}}
                                                                    {{--                            </button>--}}

                                                                    {{--                        </div>--}}

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

                                @endforeach
       @endforeach
                            </div>
</div>

