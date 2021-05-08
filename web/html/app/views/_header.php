<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $data['titulo'] ?></title>
    <script src="https://unpkg.com/chart.js@2.9.3/dist/Chart.min.js"></script>
    <script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Ubuntu', sans-serif;
            margin: 0px;
            padding: 0px;
        }
        body {
            background-color: #ffffff;
        }
        header, footer {
            display: flex;
            justify-content: space-between;
            color: #ffffff;
            background-color: #198754;
            border: 7px solid #198754;
            box-shadow: #444444 3px 3px 15px;
        }
        header p {
            margin: 15px;
            font-size: 111%;
        }
        a {
            color: #ffffff;
            text-decoration: unset;
        }
    </style>
</head>
<header>
    <p>Planta fotovoltaica</p>
    <p><a href="https://iescierva.net">IES Ingeniero de la Cierva</a></p>
    <p>Consumo actual de la planta</p>
</header>