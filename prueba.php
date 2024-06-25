<?php
// ZONA HORARIA
date_default_timezone_set('America/Monterrey');
setlocale(LC_TIME, 'es_MX.UTF-8','esp');
$cumple_angie = strtotime("now, 00:00:00");
echo strftime('%A %e de %B', $cumple_angie);
?>