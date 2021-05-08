<?php require_once "_header.php"?>
<body>
<div id="solar_chart" style="height: 355px; margin-top: 19px"></div>
<script>
    const chart = new Chartisan({
        el: '#solar_chart',
        data: {
            chart: { labels: [<?= '"'.$data['db_data'][0]['date'].'"'?>] },
            datasets: [
                { name: 'Consumo Total', values: [<?= $data['db_data'][0]['total_consumption'] ?>] },
                { name: 'Consumo Red', values: [<?= $data['db_data'][0]['net_consumption'] ?>] },
                { name: 'Autoconsumo', values: [<?= $data['db_data'][0]['auto_consumption'] ?>] }
            ]
        },
        hooks: new ChartisanHooks()
            .beginAtZero()
            .colors(['#269f4c', '#81F781', '#41a6cf'])
    })
</script>

</body>
<?php require_once "_footer.php"?>
