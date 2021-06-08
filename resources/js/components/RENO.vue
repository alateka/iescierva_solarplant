<template>
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <div id="reno_meter_chart" style="height: 300px"></div>
            <div class="card-body">
                <p class="card-text text-center">Energía renovable generada</p>
                <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted text-center">Desde este gráfico se muestra la energia generada por el sistema fotovoltáico del centro</small>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "RENO.vue",
    mounted() {
        const reno_meter_chart = new Chartisan({
            el: '#reno_meter_chart',
            url: "/api/chart/reno_meter_chart",
            hooks: new ChartisanHooks()
                .beginAtZero()
                .colors(['#5c31d2', '#5978dc', '#e52d2d'])
        });
    }
}
</script>
