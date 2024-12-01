<div>

    <div class="w-full  bg-blueGray-100 rounded-3xl p-2">

        <div class="w-full rounded-3xl bg-white">
            <div class="relative flex flex-col min-w-0 break-words w-full ">

                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">



                    <div id="loanApplicationsChart12" class="bg-gray-100 p-4 rounded-3xl mt-6 overflow-hidden" style="height: 300px; width: 100%;">

                    </div>




                    <div>


                        <h3 class="font-medium text-sm mt-6 mb-4 tracking-tight text-gray-900 leading-tight">
                            Stock Overview
                        </h3>

                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                            <!-- Stock Summary -->
                            <div class="bg-gray-100 p-4 rounded-3xl">
                                <h3 class="text-sm font-semibold mb-2">All Stock Registered</h3>
                                <p class="text-gray-600 text-xl font-bold">
                                    Number : {{DB::table('stocks')->get()->count()}}
                                </p>
                                <p class="text-gray-600 text-lg font-bold">
                                    Value : {{number_format(DB::table('stocks')
                                            ->select(DB::raw('SUM(kilos * price_per_kilo) as total'))
                                            ->value('total'),2)}} TZS
                                </p>
                            </div>

                            <!-- Total Value of Pledged Stock -->
                            <div class="bg-gray-100 p-4 rounded-3xl">
                                <h3 class="text-sm font-semibold mb-2">New Stock Registered</h3>
                                <p class="text-gray-600 text-sm">
                                    Number : {{DB::table('stocks')->where('status','PENDING')->get()->count()}}
                                </p>
                                <p class="text-gray-600 text-sm">
                                    Value : {{number_format(DB::table('stocks')
                                            ->where('status','PENDING')
                                            ->select(DB::raw('SUM(kilos * price_per_kilo) as total'))
                                            ->value('total'),2)}} TZS
                                </p>
                            </div>

                            <!-- Visual Representation of Stock Distribution (Placeholder) -->
                            <div class="bg-gray-100 p-4 rounded-3xl">
                                <h3 class="text-sm font-semibold mb-2">Active Stock  Registered</h3>
                                <p class="text-gray-600 text-sm">
                                    Number : {{DB::table('stocks')->where('status','ACTIVE')->get()->count()}}
                                </p>
                                <p class="text-gray-600 text-sm">
                                    Value : {{number_format(DB::table('stocks')
                                            ->where('status','ACTIVE')
                                            ->select(DB::raw('SUM(kilos * price_per_kilo) as total'))
                                            ->value('total'),2)}} TZS
                                </p>
                            </div>

                            <!-- Visual Representation of Stock Distribution (Placeholder) -->
                            <div class="bg-gray-100 p-4 rounded-3xl">
                                <h3 class="text-sm font-semibold mb-2">Released Stock</h3>
                                <p class="text-gray-600 text-sm">
                                    Number : {{DB::table('stocks')->where('status','RELEASED')->get()->count()}}
                                </p>
                                <p class="text-gray-600 text-sm">
                                    Value : {{number_format(DB::table('stocks')
                                            ->where('status','RELEASED')
                                            ->select(DB::raw('SUM(kilos * price_per_kilo) as total'))
                                            ->value('total'),2)}} TZS
                                </p>
                            </div>




                        </div>



                    </div>



                    <div class="w-full">

                        <div id="commodityValuesChart1" class="bg-gray-100 p-4 rounded-3xl mt-2 w-full" style="height: 350px; width: 100%;"></div>


                    </div>


                    <h3 class="font-medium text-sm mt-6 mb-4 tracking-tight text-gray-900 leading-tight">
                        Collateral Report
                    </h3>

                    <div class="bg-gray-100 p-4 rounded-3xl mt-2 overflow-x-auto"  style="width: 1550px">

                        <livewire:reports.clients-table exportable/>

                    </div>


                </div>
            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        //document.addEventListener('DOMContentLoaded', function () {
        var options = {
            chart: {
                type: 'donut',
                height: 250,
                width : '95%'
            },

            series: [
                {{ $applicationSummary['Pending'] }},
                {{ $applicationSummary['Active'] }},
                {{ $applicationSummary['Released'] }}
            ],
            labels: [
                'Pending',
                'Active',
                'Released'
            ],
            colors: [
                '#F37228', // Deep Green
                '#F37228',
                '#004080'
            ],
            title: {
                text: 'Clients Summary'
            }
        };

        var chart = new ApexCharts(document.querySelector("#loanApplicationsChart12"), options);
        chart.render();
        //});
    </script>

    <script>
        // document.addEventListener('DOMContentLoaded', function () {
        const commodityValues = @json($commodityValues2);

        const chartConfig = {
            series: [{
                name: "Value",
                data: commodityValues.map(item => item.value),
            }],
            chart: {
                type: 'bar',
                height: 350,
                width: '100%',
            },
            title: {
                show: false,
            },
            dataLabels: {
                enabled: false,
            },
            colors: ["#005AA9", "#004080", "#0073D1", "#F37228", "#A65200", "#FFA04D"],
            xaxis: {
                categories: commodityValues.map(item => item.name),
                labels: {
                    style: {
                        colors: "#616161",
                        fontSize: "12px",
                        fontFamily: "inherit",
                        fontWeight: 400,
                    },
                },
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
            tooltip: {
                theme: "dark",
            },
        };

        const chartp = new ApexCharts(document.querySelector("#commodityValuesChart1"), chartConfig);
        chartp.render();
        //});
    </script>


</div>






