<div>

    <div class="w-full  bg-blueGray-100 rounded-3xl p-2">

        <div class="w-full rounded-3xl bg-white">
            <div class="relative flex flex-col min-w-0 break-words w-full ">

                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">



                    <div id="loanApplicationsChart13345" class="bg-gray-100 p-4 rounded-3xl mt-6 overflow-hidden" style="height: 300px; width: 100%;">

                    </div>




                    <div>


                        <h3 class="font-medium text-sm mt-6 mb-4 tracking-tight text-gray-900 leading-tight">
                            Services Overview
                        </h3>

                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                            <!-- Stock Summary -->
                            <div class="bg-gray-100 p-4 rounded-3xl">
                                <h3 class="text-sm font-semibold mb-2">All Services</h3>
                                <p class="text-gray-600 text-xl font-bold">
                                    Number : <?php echo e(DB::table('services')->get()->count()); ?>

                                </p>
                            </div>


                            <!-- Visual Representation of Stock Distribution (Placeholder) -->
                            <div class="bg-gray-100 p-4 rounded-3xl">
                                <h3 class="text-sm font-semibold mb-2">Active Services</h3>
                                <p class="text-gray-600 text-sm">
                                    Number : <?php echo e(DB::table('services')->where('Status','ACTIVE')->get()->count()); ?>

                                </p>
                            </div>

                            <!-- Total Value of Pledged Stock -->
                            <div class="bg-gray-100 p-4 rounded-3xl">
                                <h3 class="text-sm font-semibold mb-2">Inactive Services</h3>
                                <p class="text-gray-600 text-sm">
                                    Number : <?php echo e(DB::table('services')->where('Status','INACTIVE')->get()->count()); ?>

                                </p>
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
                height: 250,
                width : '95%'
            },

            series: [
                <?php echo e($applicationSummary['Pending']); ?>,
                <?php echo e($applicationSummary['Active']); ?>,
                <?php echo e($applicationSummary['Suspended']); ?>,
                <?php echo e($applicationSummary['Inactive']); ?>

            ],
            labels: [
                'Pending',
                'Active',
                'Suspended',
                'Inactive'
            ],
            colors: [
                '#ff4370', // Darker Blue
                '#DD0035', // Lighter Blue
                '#510b1c',  // Lighter Orange
                '#ff4370'
            ],
            title: {
                text: 'subscribers Summary'
            }
        };

        var chart = new ApexCharts(document.querySelector("#loanApplicationsChart13345"), options);
        chart.render();
        //});
    </script>

    <script>
        // document.addEventListener('DOMContentLoaded', function () {
        const commodityValues = <?php echo json_encode($commodityValues1, 15, 512) ?>;

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

        const chartp = new ApexCharts(document.querySelector("#commodityValuesChart13345"), chartConfig);
        chartp.render();
        //});
    </script>


</div>






<?php /**PATH C:\Apache24\htdocs\notification\resources\views/livewire/services/dashboard.blade.php ENDPATH**/ ?>