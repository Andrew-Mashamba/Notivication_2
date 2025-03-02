<div>

    <div class="w-full  bg-blueGray-100 rounded-3xl p-2">

        <div class="w-full rounded-3xl bg-white">
            <div class="relative flex flex-col min-w-0 break-words w-full ">

                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">



                        <div id="loanApplicationsChart" class="bg-gray-100 p-4 rounded-3xl mt-6 overflow-hidden" style="height: 300px; width: 100%;">

                        </div>




                    <div>


                        <h3 class="font-medium text-sm mt-6 mb-4 tracking-tight text-gray-900 leading-tight">
                            Loan Applications Overview
                        </h3>

                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                            <!-- Stock Summary -->
                            <div class="bg-gray-100 p-4 rounded-3xl">
                                <h3 class="text-sm font-semibold mb-2">Loan Applications</h3>
                                <p class="text-gray-600 text-xl font-bold">
                                    Number : {{DB::table('applications')->get()->count()}}
                                </p>
                                <p class="text-gray-600 text-sm">
                                    Value : {{number_format(DB::table('applications')->get()->sum('loan_amount'),2)}}
                                </p>
                            </div>

                            <!-- Total Value of Pledged Stock -->
                            <div class="bg-gray-100 p-4 rounded-3xl">
                                <h3 class="text-sm font-semibold mb-2">New Applications</h3>
                                <p class="text-gray-600 text-sm">
                                    Number : {{DB::table('applications')->where('application_status','PENDING')->get()->count()}}
                                </p>
                                <p class="text-gray-600 text-sm">
                                    Value : {{number_format(DB::table('applications')->where('application_status','PENDING')->get()->sum('loan_amount'),2)}}
                                </p>
                            </div>

                            <!-- Visual Representation of Stock Distribution (Placeholder) -->
                            <div class="bg-gray-100 p-4 rounded-3xl">
                                <h3 class="text-sm font-semibold mb-2">Applications Under Review</h3>
                                <p class="text-gray-600 text-sm">
                                    Number : {{DB::table('applications')->where('application_status','UNDER REVIEW')->get()->count()}}
                                </p>
                                <p class="text-gray-600 text-sm">
                                    Value : {{number_format(DB::table('applications')->where('application_status','UNDER REVIEW')->get()->sum('loan_amount'),2)}}
                                </p>
                            </div>

                            <!-- Visual Representation of Stock Distribution (Placeholder) -->
                            <div class="bg-gray-100 p-4 rounded-3xl">
                                <h3 class="text-sm font-semibold mb-2">Applications Awaiting Disbursement</h3>
                                <p class="text-gray-600 text-sm">
                                    Number : {{DB::table('applications')->where('application_status','PENDING DISBURSEMENT')->get()->count()}}
                                </p>
                                <p class="text-gray-600 text-sm">
                                    Value : {{number_format(DB::table('applications')->where('application_status','PENDING DISBURSEMENT')->get()->sum('loan_amount'),2)}}
                                </p>
                            </div>




                            <!-- Total Value of Pledged Stock -->
                            <div class="bg-gray-100 p-4 rounded-3xl">
                                <h3 class="text-sm font-semibold mb-2">Completed Applications</h3>
                                <p class="text-gray-600 text-sm">
                                    Number : {{DB::table('applications')->where('application_status','DISBURSED')->get()->count()}}
                                </p>
                                <p class="text-gray-600 text-sm">
                                    Value : {{number_format(DB::table('applications')->where('application_status','DISBURSED')->get()->sum('loan_amount'),2)}}
                                </p>
                            </div>

                            <!-- Visual Representation of Stock Distribution (Placeholder) -->
                            <div class="bg-gray-100 p-4 rounded-3xl">
                                <h3 class="text-sm font-semibold mb-2">Rejected Applications</h3>
                                <p class="text-gray-600 text-sm">
                                    Number : {{DB::table('applications')->where('application_status','REJECTED')->get()->count()}}
                                </p>
                                <p class="text-gray-600 text-sm">
                                    Value : {{number_format(DB::table('applications')->where('application_status','REJECTED')->get()->sum('loan_amount'),2)}}
                                </p>
                            </div>

                            <!-- Visual Representation of Stock Distribution (Placeholder) -->
                            <div class="bg-gray-100 p-4 rounded-3xl">
                                <h3 class="text-sm font-semibold mb-2">Archived Applications</h3>
                                <p class="text-gray-600 text-sm">
                                    Number : {{DB::table('applications')->where('application_status','ARCHIVED')->get()->count()}}
                                </p>
                                <p class="text-gray-600 text-sm">
                                    Value : {{number_format(DB::table('applications')->where('application_status','ARCHIVED')->get()->sum('loan_amount'),2)}}
                                </p>
                            </div>




                        </div>



                    </div>
                </div>
            </div>

        </div>

    </div>


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
                    {{ $applicationSummary['Under Review'] }},
                    {{ $applicationSummary['Pending Disbursement'] }},
                    {{ $applicationSummary['Disbursed'] }},
                    {{ $applicationSummary['Rejected'] }},
                    {{ $applicationSummary['Archived'] }}
                ],
                labels: [
                    'Pending',
                    'Under Review',
                    'Pending Disbursement',
                    'Disbursed',
                    'Rejected',
                    'Archived'
                ],
                colors: [
                    '#F37228', // Deep Green
                    '#FF8C4A', // Dark Green
                    '#FFA06C', // unGreen
                    '#004080', // Bright Green
                    '#336699', // Lighter Green
                    '#6680B2'  // Lightest Green
                ],
                title: {
                    text: 'Applications Summary'
                }
            };

            var chart = new ApexCharts(document.querySelector("#loanApplicationsChart"), options);
            chart.render();
        //});
    </script>


</div>






