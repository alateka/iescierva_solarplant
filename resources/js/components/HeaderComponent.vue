<template>
    <div>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">¿Que es esto?</h4>
                <p class="text-white">Esta web le proporciona datos actualizados sobre la planta fotovoltaica del instituto.</p>
                <p class="text-white">Se muestra una serie de gráficos con los distintos datos obtenidos
                    desde el propio sistema fotovoltáico del centro</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contacto</h4>
            <ul class="list-unstyled">
                <li><a target="_blank" href="https://goo.gl/maps/3xSqLDpKmdFKPjgA7" class="text-white">C/ La iglesia s/n - Patiño</a></li>
                <li><a target="_blank" href="https://goo.gl/maps/3xSqLDpKmdFKPjgA7" class="text-white">Murcia - 30012</a></li>
                <li><a href="#" class="text-white">Tel: 968 26 69 22</a></li>
            </ul>
                <a target="_blank" href="https://tv.iescierva.net/video/nuestra-planta-fotovoltaica-en-rtve-">
                    <img class="img-fluid img-thumbnail" src="SolarPlant.png">
                </a>
            </div>
        </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
        <a href="https://iescierva.net" class="navbar-brand d-flex align-items-center">
            <img style="height: 35px; margin-right: 7px" src="https://moodle.iescierva.net/pluginfile.php/1/theme_adaptable/favicon/1622388155/favicon.ico"
                 alt="Logo IEScierva"><strong>IES Ingeniero de la Cierva</strong>
        </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>
    </div>
    </div>
</template>

<script>
export default {
    name: "HeaderComponent.vue"
}
</script>
