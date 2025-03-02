<div>

    <div class="w-full  bg-blueGray-100 rounded-3xl p-2">

        <div class="w-full rounded-3xl bg-white">
            <div class="relative flex flex-col min-w-0 break-words w-full ">

                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <form>

                        <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                            {{$this->commodity->name}} Overview
                        </h3>

                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                                <!-- Stock Summary -->
                                <div class="bg-gray-100 p-4 rounded-3xl">
                                    <h3 class="text-lg font-semibold mb-2">Total {{$this->commodity->name}} Value</h3>
                                    <p class="text-gray-600 text-4xl font-bold">{{number_format($this->commodity->total_kilos,2)}} Kg</p>
                                </div>

                                <!-- Total Value of Pledged Stock -->
                                <div class="bg-gray-100 p-4 rounded-3xl">
                                    <h3 class="text-lg font-semibold mb-2">Total {{$this->commodity->name}} Amount</h3>
                                    <p class="text-gray-600">500,000 Kgs</p>
                                </div>

                                <!-- Visual Representation of Stock Distribution (Placeholder) -->
                                <div class="bg-gray-100 p-4 rounded-3xl">
                                    <h3 class="text-lg font-semibold mb-2">No of loans covered</h3>
                                    <p class="text-gray-600">700</p>
                                </div>
                            </div>





                        <hr class="mt-6 border-b-1 border-blueGray-300">




                        <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                            Commodity Information
                        </h3>

                        <div class="flex w-full gap-4">

                            <div class="bg-gray-100 p-4 rounded-3xl w-1/2 flex">


                                <div class="w-1/2 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                            Name
                                        </label>

                                        <h3 x-on:dblclick="$wire.doubleClick('name')" class="cursor-pointer font-bold text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight ease-linear
                                    transition-all duration-150">
                                            {{$this->commodity->name}}
                                        </h3>

                                    </div>
                                </div>

                                <div class="w-1/2 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block text-blueGray-600 text-xs font-bold mb-2 font-medium
                                    text-lg tracking-tight text-gray-900 leading-tight" htmlfor="grid-password">
                                            Price Per Kilo
                                        </label>
                                        <h3 x-on:dblclick="$wire.doubleClick('price_per_kilo')" class="cursor-pointer font-bold text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight ease-linear
                                    transition-all duration-150">
                                            {{number_format($this->commodity->price_per_kilo,2)}} TZS
                                        </h3>

                                    </div>
                                </div>

                            </div>

                            <div class="bg-gray-100 p-4 rounded-3xl w-1/2 ">


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

                                <div class="relative flex flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                                    <div class="relative mx-4 mt-4 flex flex-col gap-4 overflow-hidden rounded-none bg-transparent bg-clip-border text-gray-700 shadow-none md:flex-row md:items-center">
                                        <div class="w-max rounded-full bg-blue-700 p-2 text-white">

                                            <svg class="h-6 w-6" data-slot="icon" fill="none" stroke-width="1.5" stroke="#DD0035" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5-3.9 19.5m-2.1-19.5-3.9 19.5"></path>
                                            </svg>
                                        </div>
                                        <div class="w-full flex">
                                            <div class="w-1/2">
                                                <h6 class="block font-sans text-base font-semibold leading-relaxed tracking-normal text-blue-gray-900 antialiased">
                                                    Set new price (TZS)
                                                </h6>
                                                <p class="block max-w-sm font-sans text-sm font-normal leading-normal text-gray-700 antialiased">
                                                    Set new price per kilo
                                                </p>
                                            </div>
                                            <div class="w-1/2 ">



                                                <div class="flex gap-2 ">
                                                    <div class="">

                                                        <input type="text" id="large-input" wire:model="price"
                                                               class="block w-full p-2 yellow border border-gray-300
                                                           rounded-lg bg-gray-50 text-base text-4xl font-semibold focus:ring-blue-500 focus:border-blue-500
                                                           dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                                           dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    </div>

                                                    <div class="rounded-full bg-blue-600 p-2 text-white h-10 w-10 m-auto">

                                                        <svg wire:click="savePrice"  data-slot="icon" class="h-6 w-6 cursor-pointer" fill="none" stroke-width="1.5" stroke="#DD0035" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"></path>
                                                        </svg>
                                                    </div>
                                                </div>





                                            </div>


                                        </div>
                                    </div>

                                    <div class="mt-2"></div>

                                </div>





                            </div>



                        </div>


                        <hr class="mt-6 border-b-1 border-blueGray-300">


                        <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                            Price Fluctuations Overtime
                        </h3>

                        <div class="flex w-full gap-4">

                            <div class="bg-gray-100 p-4 rounded-3xl w-full">

                                <div class="relative flex flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                                    <div class="relative mx-4 mt-4 flex flex-col gap-4 overflow-hidden rounded-none bg-transparent bg-clip-border text-gray-700 shadow-none md:flex-row md:items-center">
                                        <div class="w-max rounded-full bg-blue-700 p-2 text-white">

                                            <svg class="h-6 w-6" data-slot="icon" fill="none" stroke-width="1.5" stroke="#DD0035" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5-3.9 19.5m-2.1-19.5-3.9 19.5"></path>
                                            </svg>
                                        </div>
                                        <div class="w-full flex">
                                            <div class="w-1/2">
                                                <h6 class="block font-sans text-base font-semibold leading-relaxed tracking-normal text-blue-gray-900 antialiased">
                                                    Current Price -  {{number_format($this->commodity->price_per_kilo,2)}} TZS
                                                </h6>
                                                <p class="block max-w-sm font-sans text-sm font-normal leading-normal text-gray-700 antialiased">
                                                    Prices as inputted by the bank
                                                </p>
                                            </div>
                                            <div class="w-1/2 flex gap-2 ">

                                                <div id="date-range-picker" date-rangepicker class="flex items-center">
                                                    <div class="relative">
                                                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#DD0035" viewBox="0 0 20 20">
                                                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                                            </svg>
                                                        </div>
                                                        <input wire:model="startDate" id="datepicker-range-start" name="start" type="text" class="bg-gray-50 border border-gray-300 yellow text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
                                                    </div>
                                                    <span class="mx-4 text-gray-500">to</span>
                                                    <div class="relative">
                                                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#DD0035" viewBox="0 0 20 20">
                                                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                                            </svg>
                                                        </div>
                                                        <input wire:model="endDate" id="datepicker-range-end" name="end" type="text" class="bg-gray-50 border border-gray-300 yellow text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
                                                    </div>
                                                </div>

                                                <div class="rounded-full bg-gray-400 p-2 text-white h-10 w-10 m-auto">

                                                    <svg wire:click="export" class="h-6 w-6 cursor-pointer" data-slot="icon" fill="none" stroke-width="1.5" stroke="#DD0035" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m.75 12 3 3m0 0 3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"></path>
                                                    </svg>
                                                </div>

                                            </div>


                                        </div>
                                    </div>

                                    <div class="mt-2">
                                        <div id="chart"></div>

                                    </div>











                                </div>





                            </div>

                        </div>




                        <hr class="mt-6 border-b-1 border-blueGray-300">



                        <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                            Total Pledged {{$this->commodity->name}} Stock - Commodities Distribution
                        </h3>

                        <div class="flex w-full gap-4">
                            <!-- Stock Summary -->
                            <div class="bg-gray-100 p-4 rounded-3xl w-1/2">
                                <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
                                <div data-te-datatable-init>
                                    <table class="w-full border border-collapse border-gray-300 text-xs rounded-t rounded-b"
                                           style="border-radius: 10px;">
                                        <thead>
                                        <tr>
                                            <th class="border p-2 text-left" style="border-radius: 10px;">Commodity</th>
                                            <th class="border p-2 text-left">Kilos (Kgs)</th>
                                            <th class="border p-2 text-left">Value (TZS)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="border p-2">Tiger Nixon</td>
                                            <td class="border p-2">System Architect</td>
                                            <td class="border p-2">Edinburgh</td>
                                        </tr>
                                        <tr>
                                            <td class="border p-2">Garrett Winters</td>
                                            <td class="border p-2">Accountant</td>
                                            <td class="border p-2">Tokyo</td>
                                        </tr>
                                        <tr>
                                            <td class="border p-2">Ashton Cox</td>
                                            <td class="border p-2">Junior Technical Author</td>
                                            <td class="border p-2">San Francisco</td>
                                        </tr>
                                        <tr>
                                            <td class="border p-2">Cedric Kelly</td>
                                            <td class="border p-2">Senior Javascript Developer</td>
                                            <td class="border p-2">Edinburgh</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                            <!-- Visual Representation of Stock Distribution (Placeholder) -->
                            <div class="bg-gray-100 p-4 rounded-3xl w-1/2 max-h-60">
                                <livewire:livewire-column-chart
                                        {{-- key="{{ $columnChartModel->reactiveKey() }}" --}}
                                        :column-chart-model="$columnChartModel"
                                />
                            </div>
                        </div>




                        <hr class="mt-6 border-b-1 border-blueGray-300">



                        <h3 class="font-medium text-sm mt-3 mb-6 tracking-tight text-gray-900 leading-tight">
                            Release and Repayment
                        </h3>

                        <div class="flex w-full gap-4">

                            <div class="bg-gray-100 p-4 rounded-3xl w-1/3 max-h-60">
                                <livewire:livewire-column-chart
                                        {{-- key="{{ $columnChartModel->reactiveKey() }}" --}}
                                        :column-chart-model="$columnChartModel"
                                />
                            </div>


                            <div class="bg-gray-100 p-4 rounded-3xl w-2/3">
                                <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->

                                <div class="relative">
                                    <input wire:model.live="search" type="text" class=" rounded-3xl peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-700 dark:border-transparent dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Enter name">
                                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#DD0035"
                                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="flex-shrink-0 w-4 h-4 text-gray-500">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                        </svg>


                                    </div>
                                </div>

                                <table class="w-full border border-collapse border-gray-300 text-xs rounded-t rounded-b">
                                    <thead>
                                    <tr>
                                        @foreach ($data['columns'] as $column)
                                            <th class="border p-2 text-left">{{ is_array($column) ? $column['label'] : $column }}</th>
                                        @endforeach
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($data['rows'] as $row)
                                        <tr>
                                            @foreach ($row as $cell)
                                                <td class="border p-2">{{ $cell }}</td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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




    <script>


        const chartData = @json($this->stockPrices);
        //console.log(chartData);
        const chartConfig = {
            series: [
                {
                    name: "Sales",
                    data: chartData.map(item => item.data),
                },
            ],
            chart: {
                type: "line",
                height: 240,
                toolbar: {
                    show: false,
                },
            },
            title: {
                show: "",
            },
            dataLabels: {
                enabled: false,
            },
            colors: ["#020617"],
            stroke: {
                lineCap: "round",
                curve: "smooth",
            },
            markers: {
                size: 0,
            },
            xaxis: {
                axisTicks: {
                    show: false,
                },
                axisBorder: {
                    show: false,
                },
                labels: {
                    style: {
                        colors: "#616161",
                        fontSize: "12px",
                        fontFamily: "inherit",
                        fontWeight: 400,
                    },
                },
                categories: chartData.map(item => item.month),
            },
            yaxis: {
                labels: {
                    style: {
                        colors: "#616161",
                        fontSize: "12px",
                        fontFamily: "inherit",
                        fontWeight: 400,
                    },
                },
            },
            grid: {
                show: true,
                borderColor: "#dddddd",
                strokeDashArray: 5,
                xaxis: {
                    lines: {
                        show: true,
                    },
                },
                padding: {
                    top: 5,
                    right: 20,
                },
            },
            fill: {
                opacity: 0.8,
            },
            tooltip: {
                theme: "dark",
            },
        };

        const chart = new ApexCharts(document.querySelector("#chart"), chartConfig);

        chart.render();
    </script>

    <script>
        document.getElementById('large-input').addEventListener('input', function (e) {
            let input = e.target;
            let value = input.value;

            // Remove non-numeric characters except for the decimal point
            value = value.replace(/[^0-9.]/g, '');

            // Split the value by the decimal point
            let parts = value.split('.');
            let integerPart = parts[0];
            let decimalPart = parts[1] || '';

            console.log(integerPart);
            // Format the integer part with commas using the simplified function
            integerPart = formatNumberWithCommas(integerPart);

            console.log(integerPart);

            // Limit decimal places to 2
            if (decimalPart.length > 2) {
                decimalPart = decimalPart.slice(0, 2);
            }

            // Join the integer part and the decimal part
            if (decimalPart) {
                value = `${integerPart}.${decimalPart}`;
            } else {
                value = integerPart;
            }

            // Set the formatted value back to the input
            input.value = value;
        });

        function formatNumberWithCommas(number) {
            return number.toString().split('').reverse().join('').replace(/(\d{3}(?!$))/g, '$1,').split('').reverse().join('');
        }
    </script>




</div>
