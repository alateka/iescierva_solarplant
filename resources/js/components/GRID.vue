<template>
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <div id="grid_meter_chart" style="height: 300px"></div>
            <div class="card-body">
                <p class="card-text text-center">Consumo de la red electrica del instituto </p>
                <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted text-center">Este gráfico estima la cantidad de energía consumida por la red del centro.</small>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "GRID.vue",
    // Se añade el método mounted para especificar que cuando el componemnte sea montado, se ejecutará el código de su interior.
    mounted() {
        // Este código es el que llamará a la clase php GridMeterChart en la cual desarrollamos el gráfico correspondiente + sus datos.
        const grid_meter_chart = new Chartisan({
            el: '#grid_meter_chart',
            url: "/api/chart/grid_meter_chart",
            hooks: new ChartisanHooks()
                .beginAtZero()
                .colors(['#269f4c', '#81F781', '#41a6cf'])
        }); // Al terminar esta función, se generará el gráfico sobre la vista/componente vue
    }
}
</script>
