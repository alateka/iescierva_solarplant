@include('_header')
<body>
<div id="solar_chart" style="height: 300px;"></div>
<script>
    const solarChart = new Chartisan({
        el: '#solar_chart',
        url: "@chart('solar_plant_charts')",
        hooks: new ChartisanHooks()
            .beginAtZero()
            .colors(['#269f4c', '#81F781', '#41a6cf'])
    });
</script>
</body>
@include('_footer')
