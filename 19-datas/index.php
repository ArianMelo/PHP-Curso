<?php 
// Datas

// Time zone
date_default_timezone_set("America/Sao_paulo");
echo "<hr>";

// Armazenando Data

$date = date("Y-m-d"); //DATE
echo "<br>";
$datetime = date('Y-m-d H:i:s'); //DATETIME
echo "<br>";
echo $datetime;
echo "<br>";
// TIME
$time = time();
echo date('d/m/Y', $time); echo '<br>';

// MKTIME
$data_pagamento =mktime(15,30,00,02,15,2023);
echo date('d/m - h:i', $data_pagamento); 
echo '<br>';

// STRTOTIME
$data = '2019-04-10 13:30:00';

$data = strtotime($data);

echo date('d/m/Y', $data);
/*

echo date('d/m/y');
echo "<br>";
echo date('d/m/Y');
echo "<br>";
echo date('l');
echo "<br>";
echo date('D/M/Y');
echo "<br>";
echo date('d/m/y h');
echo "<br>";
echo date('d/m/y H');
echo "<br>";
echo date('d/m/y H:i:s A');
echo "<br>";

*/