@include('_head')
<div id="app" class="content">
    <header-component></header-component>
</div>
<body>
<div id="solar_chart" style="height: 300px;"></div>
<script>
    const solarChart = new Chartisan({
        el: '#solar_chart',
        url: "@chart('solar_plant_charts')",
        hooks: new ChartisanHooks()
            .beginAtZero()
            .colors(['#269f4c', '#81F781', '#41a6cf']),
        options: {
            legend: {
                display: true,
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        stepSize: 3.5
                    },
                }]
            },
        }
    });
</script>
</body>
@include('_footer')
