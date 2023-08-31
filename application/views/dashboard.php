<section class="content-header">
    <h1>
        Dashboard
        <small>Version 2.0</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <?php if ($this->fungsi->user_login()->level == 1) { ?>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="glyphicon glyphicon-th"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">ITEMS</span>
                        <span class="info-box-number">
                            <?= $this->fungsi->count_item() ?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-truck"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">SUPPLIERS</span>
                        <span class="info-box-number">
                            <?= $this->fungsi->count_supplier() ?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">CUSTOMERS</span>
                        <span class="info-box-number">
                            <?= $this->fungsi->count_customer() ?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="fa fa-user-plus"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">USERS</span>
                        <span class="info-box-number">
                            <?= $this->fungsi->count_user() ?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
    <?php }
    ; ?>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border text-center">
                    <h3 class="box-title">Stock of Goods </h3><br>
                    <h7 class="title">(Qty)</h7>
                </div>
                <div class="box-body">
                    <div class="chart">
                        <canvas id="lineChart" style="height:350px"></canvas>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border text-center">
                    <h3 class="box-title">Stock of goods sold </h3><br>
                    <h7 class="title">(Qty)</h7>
                </div>
                <div class="box-body">
                    <div class="chart">
                        <canvas id="barChart1" style="height:350px"></canvas>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border text-center">
                    <h3 class="box-title">Proceeds from the sale of items</h3><br>
                    <h7 class="title">(Rp.)</h7>
                </div>
                <div class="box-body">
                    <p class="text-center">
                        <strong>Sales: 1 Jan, 2023 - 31 December, 2023</strong>
                    </p>
                    <div class="chart">
                        <canvas id="barChart" style="height:350px"></canvas>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>


    <!-- /.row -->
</section>
<!-- ChartJS -->
<script src="<?= base_url('asset'); ?>/bower_components/chart.js/Chart.js"></script>
<script>

    // const myChart = (chartType) => {

    // }
    // myChart('lineChart')
    $(function () {
        $.ajax({
            url: '<?= base_url('dashboard/product') ?>',
            dataType: 'json',
            method: 'get',
            success: data => {
                let chartX = []
                let chartY = []
                data.map(data => {
                    chartX.push(data.name)
                    chartY.push(data.stock)
                })
                const chartData = {
                    labels: chartX,
                    datasets: [
                        {
                            fillColor: 'rgba(60,141,188,0.9)',
                            strokeColor: 'rgba(60,141,188,0.8)',
                            pointColor: '#3b8bba',
                            pointStrokeColor: 'rgba(60,141,188,1)',
                            pointHighlightFill: '#fff',
                            pointHighlightStroke: 'rgba(60,141,188,1)',
                            data: chartY
                        }
                    ]
                }
                const ChartOptions = {
                    //Boolean - If we should show the scale at all
                    showScale: true,
                    //Boolean - Whether grid lines are shown across the chart
                    scaleShowGridLines: false,
                    //String - Colour of the grid lines
                    scaleGridLineColor: 'rgba(0,0,0,.05)',
                    //Number - Width of the grid lines
                    scaleGridLineWidth: 1,
                    //Boolean - Whether to show horizontal lines (except X axis)
                    scaleShowHorizontalLines: true,
                    //Boolean - Whether to show vertical lines (except Y axis)
                    scaleShowVerticalLines: true,
                    //Boolean - Whether the line is curved between points
                    bezierCurve: true,
                    //Number - Tension of the bezier curve between points
                    bezierCurveTension: 0.3,
                    //Boolean - Whether to show a dot for each point
                    pointDot: false,
                    //Number - Radius of each point dot in pixels
                    pointDotRadius: 4,
                    //Number - Pixel width of point dot stroke
                    pointDotStrokeWidth: 1,
                    //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
                    pointHitDetectionRadius: 20,
                    //Boolean - Whether to show a stroke for datasets
                    datasetStroke: true,
                    //Number - Pixel width of dataset stroke
                    datasetStrokeWidth: 2,
                    //Boolean - Whether to fill the dataset with a color
                    datasetFill: true,
                    //String - A legend template
                    legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
                    //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                    maintainAspectRatio: true,
                    //Boolean - whether to make the chart responsive to window resizing
                    responsive: true

                }
                var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
                var lineChart = new Chart(lineChartCanvas)
                var lineChartOptions = ChartOptions
                lineChartOptions.datasetFill = false
                lineChart.Line(chartData, lineChartOptions)
            }
        })
        $.ajax({
            url: '<?= base_url('dashboard/item') ?>',
            dataType: 'json',
            method: 'get',
            success: data => {
                const chartData = {
                    labels: [],
                    datasets: [
                        {
                            fillColor: '#f56954',
                            strokeColor: '#f56954',
                            pointColor: '#f56954',
                            data: []
                        }
                    ]
                };

                // Map untuk mengelompokkan item dengan kuantitas
                const itemMap = new Map();

                data.forEach(itemData => {
                    const itemName = itemData.item;
                    const itemQty = parseFloat(itemData.qty); // Mengubah qty menjadi number

                    if (!isNaN(itemQty)) { // Pastikan konversi berhasil
                        if (itemMap.has(itemName)) {
                            itemMap.set(itemName, itemMap.get(itemName) + itemQty);
                        } else {
                            itemMap.set(itemName, itemQty);
                        }
                    }
                });

                // Mengisi chartData dengan item dan kuantitas yang sudah dielompokkan
                for (const [itemName, itemQty] of itemMap.entries()) {
                    chartData.labels.push(itemName);
                    chartData.datasets[0].data.push(itemQty);
                }
                var barChartCanvas = $('#barChart1').get(0).getContext('2d')
                var barChart = new Chart(barChartCanvas)
                var barChartData = chartData

                var barChartOptions = {
                    //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
                    scaleBeginAtZero: true,
                    //Boolean - Whether grid lines are shown across the chart
                    scaleShowGridLines: true,
                    //String - Colour of the grid lines
                    scaleGridLineColor: 'rgba(0,0,0,.05)',
                    //Number - Width of the grid lines
                    scaleGridLineWidth: 1,
                    //Boolean - Whether to show horizontal lines (except X axis)
                    scaleShowHorizontalLines: true,
                    //Boolean - Whether to show vertical lines (except Y axis)
                    scaleShowVerticalLines: false,
                    //Boolean - If there is a stroke on each bar
                    barShowStroke: true,
                    //Number - Pixel width of the bar stroke
                    barStrokeWidth: 2,
                    //Number - Spacing between each of the X value sets
                    barValueSpacing: 30,
                    //Number - Spacing between data sets within X values
                    barDatasetSpacing: 30,
                    //String - A legend template
                    legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
                    //Boolean - whether to make the chart responsive
                    responsive: true,

                    maintainAspectRatio: false
                }

                barChartOptions.datasetFill = false
                barChart.Bar(chartData, barChartOptions)
            }
        })
        $.ajax({
            url: '<?= base_url('dashboard/sale') ?>',
            dataType: 'json',
            method: 'get',
            success: data => {
                let chartY = new Array(12).fill(0); // Membuat array dengan nilai 0 untuk setiap bulan

                data.forEach(sale => {
                    const date = new Date(sale.date); // Mengambil tanggal dari data
                    const month = date.getMonth(); // Mendapatkan bulan dari tanggal (0-11)
                    const currentYear = new Date().getFullYear(); // Tahun saat ini
                    const saleYear = date.getFullYear(); // Tahun dari data

                    if (currentYear === saleYear) {
                        const finalPrice = parseFloat(sale.final_price); // Mengkonversi ke tipe data number
                        if (!isNaN(finalPrice)) { // Pastikan konversi berhasil
                            chartY[month] += finalPrice; // Menambahkan nilai final_price ke bulan yang sesuai
                        }
                    }

                });


                const chartData = {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December '],
                    datasets: [
                        {
                            fillColor: '#00a65a',
                            strokeColor: '#00a65a',
                            pointColor: '#00a65a',
                            pointStrokeColor: 'rgba(60,141,188,1)',
                            pointHighlightFill: '#fff',
                            pointHighlightStroke: 'rgba(60,141,188,1)',
                            data: chartY
                        }
                    ]
                }
                var barChartCanvas = $('#barChart').get(0).getContext('2d')
                var barChart = new Chart(barChartCanvas)
                var barChartData = chartData

                var barChartOptions = {
                    //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
                    scaleBeginAtZero: true,
                    //Boolean - Whether grid lines are shown across the chart
                    scaleShowGridLines: true,
                    //String - Colour of the grid lines
                    scaleGridLineColor: 'rgba(0,0,0,.05)',
                    //Number - Width of the grid lines
                    scaleGridLineWidth: 1,
                    //Boolean - Whether to show horizontal lines (except X axis)
                    scaleShowHorizontalLines: true,
                    //Boolean - Whether to show vertical lines (except Y axis)
                    scaleShowVerticalLines: false,
                    //Boolean - If there is a stroke on each bar
                    barShowStroke: true,
                    //Number - Pixel width of the bar stroke
                    barStrokeWidth: 2,
                    //Number - Spacing between each of the X value sets
                    barValueSpacing: 30,
                    //Number - Spacing between data sets within X values
                    barDatasetSpacing: 30,
                    //String - A legend template
                    legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
                    //Boolean - whether to make the chart responsive
                    responsive: true,

                    maintainAspectRatio: false
                }

                barChartOptions.datasetFill = false
                barChart.Bar(chartData, barChartOptions)
            }
        })
    })
</script>
<script>
    $(document).ready(function () {
        $('#showPreviousYearData').on('click', function () {
            showDataForPreviousYear();
        });

        showCurrentYearData();
    });

    function showDataForPreviousYear() {
        const currentYear = new Date().getFullYear();
        const previousYear = currentYear - 1;

        $.ajax({
            url: '<?= base_url('dashboard/sale') ?>?year=' + previousYear,
            dataType: 'json',
            method: 'get',
            success: data => {
                updateChart(data, previousYear);
            }
        });
    }

    function showCurrentYearData() {
        $.ajax({
            url: '<?= base_url('dashboard/sale') ?>',
            dataType: 'json',
            method: 'get',
            success: data => {
                updateChart(data, new Date().getFullYear());
            }
        });
    }

    function updateChart(data, year) {
        let chartY = new Array(12).fill(0);

        data.forEach(sale => {
            const date = new Date(sale.date);
            const month = date.getMonth();
            const currentYear = new Date().getFullYear();
            const saleYear = date.getFullYear();

            if (currentYear === saleYear) {
                const finalPrice = parseFloat(sale.final_price);
                if (!isNaN(finalPrice)) {
                    chartY[month] += finalPrice;
                }
            }
        });

        const labels = [];
        for (let month = 0; month < 12; month++) {
            labels.push(getMonthName(month) + ' ' + year);
        }

        const chartData = {
            labels: labels,
            datasets: [
                {
                    fillColor: '#00a65a',
                    data: chartY
                }
            ]
        };

        const barChartCanvas = $('#barChart').get(0).getContext('2d');
        const barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: chartData,
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            callback: function (value, index, values) {
                                return 'Rp ' + value.toFixed(2);
                            }
                        }
                    }],
                    xAxes: [{
                        categoryPercentage: 0.8,
                        barPercentage: 0.9
                    }]
                },
                responsive: true,
                maintainAspectRatio: false
            }
        });
    }

    function getMonthName(monthIndex) {
        const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        return months[monthIndex];
    }
</script>