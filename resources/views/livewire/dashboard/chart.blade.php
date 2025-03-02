<div>
    <div class="w-full flex items-center justify-center ">
        <div class="mt-2 block w-full" style="height: 200px">

            <div id="loanApplicationsChartxyvv{{$this->variable}}" class="overflow-hidden m-auto" style="height: 200px; width: 100%;">

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        //document.addEventListener('DOMContentLoaded', function () {
        var options = {
            chart: {
                type: 'donut',
                height: 200,
                width : '95%'
            },
            series: [
                {{ $stockSummary['Pending'] }},
                {{ $stockSummary['Pledged'] }},
                {{ $stockSummary['Released'] }}
            ],
            colors: [
                '#004080', // Darker Blue
                '#0073D1', // Lighter Blue
                '#FFA04D'  // Lighter Orange
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

        var chart = new ApexCharts(document.querySelector("#loanApplicationsChartxyvv{{$this->variable}}"), options);
        chart.render();
        //});
    </script>
</div>
