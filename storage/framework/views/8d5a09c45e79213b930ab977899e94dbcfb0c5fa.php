<?php use Illuminate\Support\Facades\DB; ?>
<div>

    <div class="w-full flex gap-2">
        <div class="w-full">


            <div class="flex items-center justify-center p-2">
                <div aria-label="card" class="p-6 rounded-3xl bg-white w-full ">


                    <div aria-label="content" class="mt-9 gap-2 w-full flex">

                        <div class="w-1/3">

                            <div class="h-1/3 ">

                            </div>
                            <div class="h-2/3">
                                <div class="w-full">
                                    <div class="flex items-center justify-center text-center w-full ">

                                        <div class="flex space-x-2">

                                            <div class="space-y-0.5 flex-1 cursor-pointer">
                                                <h3 class="font-medium text-lg tracking-tight text-gray-900 leading-tight flex gap-2">

                                                    <svg data-slot="icon" class="w-8 h-8 shrink-0" width="24"
                                                         height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                                         stroke="#DD0035" fill="none" stroke-linecap="round"
                                                         stroke-linejoin="round">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z"></path>
                                                    </svg>


                                                    SMS Distribution
                                                </h3>
                                                <p class="text-sm font-normal text-gray-400 leading-none">
                                                <div class="grid grid-cols-2 divide-x-2 mt-4">
                                                    <div class="pl-2 pr-2">
                                                        <div class="item">
                                                            <dt class="mb-2 text-xl font-extrabold">
                                                                <?php echo e(number_format(DB::table('farmers')->where('Status','ACTIVE')->count())); ?>

                                                            </dt>
                                                            <dd class="text-gray-500 dark:text-gray-400">
                                                                <h3 class="font-medium text-sm tracking-tight text-gray-900 leading-tight">
                                                                    Sent
                                                                </h3>

                                                            </dd>
                                                        </div>
                                                    </div>
                                                    <div class="pl-2 pr-2">
                                                        <div class="item">
                                                            <dt class="mb-2 text-xl font-extrabold">
                                                                <?php echo e(number_format(DB::table('farmers')->where('Status','PENDING')->count())); ?>

                                                            </dt>
                                                            <dd class="text-gray-500 dark:text-gray-400">
                                                                <h3 class="font-medium text-sm tracking-tight text-gray-900 leading-tight">
                                                                    Failed
                                                                </h3>

                                                            </dd>
                                                        </div>
                                                    </div>
                                                </div>
                                                </p>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="w-full flex items-center justify-center ">
                                    <div class="mt-2 block w-full" style="height: 200px">

                                        <div id="loanApplicationsChartxy" class="overflow-hidden m-auto" style="height: 200px; width: 100%;">

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="w-1/3">
                            <div class="w-full flex items-center justify-center ">
                                <div class="w-full" style="height: 300px">



                                    <div id="loanApplicationsChartx" class="overflow-hidden" style="height: 300px; width: 100%;">

                                    </div>



                                </div>
                            </div>
                            <div class="w-full">
                                <div class="flex items-center justify-center text-center w-full ">

                                    <div class="flex space-x-2">

                                        <div class="space-y-0.5 flex-1 cursor-pointer">
                                            <div class="flex flex-col items-center justify-center">

                                                <div class="bottom-section">
                                                        <span class="title font-medium text-lg tracking-tight text-gray-900 leading-tight">
                                                            TOTAL NOTIFICATIONS DISTRIBUTION
                                                        </span>
                                                    <div class="grid grid-cols-2 divide-x-2 mt-4">
                                                        <div class="pl-2 pr-2">
                                                            <div class="item">
                                                                <dt class="mb-2 text-3xl font-extrabold">
                                                                    <?php echo e(number_format(DB::table('stocks')->where('status','PLEDGED')->sum('kilos'),2)); ?>

                                                                </dt>
                                                                <dd class="text-gray-500 dark:text-gray-400">
                                                                    <h3 class="font-medium text-lg tracking-tight text-gray-900 leading-tight">
                                                                        Total SMS
                                                                    </h3>

                                                                </dd>
                                                            </div>
                                                        </div>
                                                        <div class="pl-2 pr-2">
                                                            <div class="item">
                                                                <dt class="mb-2 text-3xl font-extrabold">
                                                                    <?php echo e(number_format(DB::table('stocks')->where('status', 'PLEDGED')->selectRaw('SUM(kilos * price_per_kilo) as total_value')->value('total_value'), 2)); ?>

                                                                </dt>
                                                                <dd class="text-gray-500 dark:text-gray-400">
                                                                    <h3 class="font-medium text-lg tracking-tight text-gray-900 leading-tight">
                                                                        Total Emails
                                                                    </h3>

                                                                </dd>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <p class="text-sm font-normal text-gray-400 leading-none mt-4">

                                                </p>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </div>


                        </div>

                        <div class="w-1/3">

                            <div class="h-1/3">

                            </div>
                            <div class="h-2/3">
                                <div class="w-full">
                                    <div class="flex items-center justify-center text-center w-full ">

                                        <div class="flex space-x-2">

                                            <div class="space-y-0.5 flex-1 cursor-pointer">
                                                <h3 class="font-medium text-lg tracking-tight text-gray-900 leading-tight flex gap-2">

                                                    <svg data-slot="icon" class="w-8 h-8 shrink-0" width="24"
                                                         height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                                         stroke="#DD0035" fill="none" stroke-linecap="round"
                                                         stroke-linejoin="round">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z"></path>
                                                    </svg>


                                                    Emails Distribution
                                                </h3>
                                                <p class="text-sm font-normal text-gray-400 leading-none">
                                                <div class="grid grid-cols-2 divide-x-2 mt-4">
                                                    <div class="pl-2 pr-2">
                                                        <div class="item">
                                                            <dt class="mb-2 text-xl font-extrabold">
                                                                <?php echo e(number_format(DB::table('collateral_managers')->where('Status','ACTIVE')->count())); ?>

                                                            </dt>
                                                            <dd class="text-gray-500 dark:text-gray-400">
                                                                <h3 class="font-medium text-sm tracking-tight text-gray-900 leading-tight">
                                                                    Sent
                                                                </h3>

                                                            </dd>
                                                        </div>
                                                    </div>
                                                    <div class="pl-2 pr-2">
                                                        <div class="item">
                                                            <dt class="mb-2 text-xl font-extrabold">
                                                                <?php echo e(number_format(DB::table('collateral_managers')->where('Status','PENDING')->count())); ?>

                                                            </dt>
                                                            <dd class="text-gray-500 dark:text-gray-400">
                                                                <h3 class="font-medium text-sm tracking-tight text-gray-900 leading-tight">
                                                                    Failed
                                                                </h3>

                                                            </dd>
                                                        </div>
                                                    </div>
                                                </div>
                                                </p>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="w-full flex items-center justify-center ">
                                    <div class="block w-full" style="height: 200px">

                                        <div id="loanApplicationsChartxyz" class="overflow-hidden m-auto" style="height: 200px; width: 100%;">

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>

                </div>


            </div>


        </div>


    </div>


    <div class="w-full flex gap-2">
        <div class="w-full">


            <div class="flex items-center justify-center p-2">
                <div aria-label="card" class="p-6 rounded-3xl bg-white w-full ">


                    <div aria-label="content" class="w-full text-center justify-center">

                        <div class="mb-4">
                            <h3 class="font-medium text-lg tracking-tight text-gray-900 leading-tight flex gap-2">

                                <svg data-slot="icon" class="w-8 h-8 shrink-0" width="24" height="24"
                                     viewBox="0 0 24 24" stroke-width="1.5" stroke="#DD0035" fill="none"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z"></path>
                                </svg>


                                <div class="flex justify-between">
                                    <div>Daily transmissions</div>


                                </div>
                            </h3>

                            <div class="w-full">

                                <div id="commodityValuesChart" class="bg-gray-100 p-4 rounded-3xl mt-2 w-full" style="height: 350px; width: 100%;"></div>


                            </div>



                        </div>


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
                height: 300,
                width : '95%'
            },
            series: [
                <?php echo e($applicationSummary['Pending']); ?>,
                <?php echo e($applicationSummary['Pledged']); ?>,
                <?php echo e($applicationSummary['Released']); ?>

            ],
            colors: [
                '#ff4370', // Darker Blue
                '#DD0035', // Lighter Blue
                '#510b1c'  // Lighter Orange
            ],

            labels: [
                'Pending',
                'Pledged',
                'Released'
            ],
            dataLabels: {
                enabled: false
            },
            legend: {
                show: false
            },
            tooltip: {
                enabled: true
            },
            title: {
                text: ''
            }
        };

        var chart = new ApexCharts(document.querySelector("#loanApplicationsChartx"), options);
        chart.render();
        //});
    </script>


    <script>
        //document.addEventListener('DOMContentLoaded', function () {
        var optionsx = {
            chart: {
                type: 'donut',
                height: 220,
                width : '100%'
            },
            series: [
                <?php echo e($clientsSummary['Active']); ?>,
                <?php echo e($clientsSummary['Resting']); ?>,
                <?php echo e($clientsSummary['Pending']); ?>,
            ],
            colors: [
                '#ff4370', // Darker Blue
                '#DD0035', // Lighter Blue
                '#510b1c'  // Lighter Orange
            ],

            labels: [
                'Active',
                'Resting',
                'Pending',
            ],
            dataLabels: {
                enabled: false
            },
            legend: {
                show: false
            },
            tooltip: {
                enabled: true
            },
            title: {
                text: ''
            }
        };

        var chartx = new ApexCharts(document.querySelector("#loanApplicationsChartxy"), optionsx);
        chartx.render();
        //});
    </script>


    <script>
        //document.addEventListener('DOMContentLoaded', function () {
        var optionsxz = {
            chart: {
                type: 'donut',
                height: 220,
                width : '100%'
            },
            series: [
                <?php echo e($cmSummary['Active']); ?>,
                <?php echo e($cmSummary['Resting']); ?>,
                <?php echo e($cmSummary['Pending']); ?>,
            ],
            colors: [
                '#ff4370', // Darker Blue
                '#DD0035', // Lighter Blue
                '#510b1c'  // Lighter Orange
            ],

            labels: [
                'Active',
                'Resting',
                'Pending',
            ],
            dataLabels: {
                enabled: false
            },
            legend: {
                show: false
            },
            tooltip: {
                enabled: true
            },
            title: {
                text: ''
            }
        };

        var chartxz = new ApexCharts(document.querySelector("#loanApplicationsChartxyz"), optionsxz);
        chartxz.render();
        //});
    </script>


    <script>
       // document.addEventListener('DOMContentLoaded', function () {
            const commodityValues = <?php echo json_encode($commodityValues, 15, 512) ?>;

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

                colors: ["#ff4370", "#DD0035", "#510b1c", "#ff4370", "#DD0035", "#510b1c"],
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

            const chartp = new ApexCharts(document.querySelector("#commodityValuesChart"), chartConfig);
            chartp.render();
        //});
    </script>

</div>
<?php /**PATH /var/www/html/Notivication_2/resources/views/livewire/dashboard/management.blade.php ENDPATH**/ ?>