<?php require_once "_header.php"?>
<body>
<h1>Planta Solar</h1>
<p>Consumo total: <?= $data['total_consumption']?></p>
<p>Consumo Red: <?= $data['net_consumption']?></p>
<p>Autoconsumo: <?= $data['auto_consumption']?></p>
</body>
<?php require_once "_footer.php"?>