<template>
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <div id="load_meter_chart" style="height: 300px"></div>
            <div class="card-body">
                <p class="card-text text-center">Totalizador trifásico </p>
                <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted text-center">Totalizadores del medidor de consumo de las cargas y sus fases</small>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "LOAD.vue",
    mounted() {
        const load_meter_chart = new Chartisan({
            el: '#load_meter_chart',
            url: "/api/chart/load_meter_chart",
            hooks: new ChartisanHooks()
                .beginAtZero()
                .colors(['#cea31f', '#c945e7', '#64cd53'])
        });
    }
}
</script>
