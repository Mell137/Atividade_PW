<?php
define("PI", 3.141592);

$raio = 5;

$area = 4 * PI * pow($raio, 2);
$volume = (4/3) * PI * pow($raio, 3);

echo "Raio: $raio
";
echo "Área da esfera: " . round($area, 2) . "
";
echo "Volume da esfera: " . round($volume, 2);
?>