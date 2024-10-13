<?php

// Arrays
$cars = array (1=>"BMW", 2=>"Veloster");
$cars[] = "Amarok";
$cars[10] = "Camaro";
echo $cars[1];
echo "<br>";

$motos = array();
$motos[] = "Yamaka";
$motos[] = "Honda";
$motos[5] = "Suzuki";
echo $motos[5];
echo "<br>";

$clientes = ["Rodrigo", "Marcelo", "Felipe"];
print_r($clientes);
echo "<hr>";

// Count
echo count($cars);
echo "<br>";
$totalCLientes = count($clientes);
echo $totalCLientes;
echo "<hr>";

//FOREACH ARRAY

foreach($cars as $valor) {
  echo $valor."<br>";
}
var_dump($valor);
echo "<hr>";

// ARRAY ASSOCIATIVOS

$pessoas = array("nome" => "Rodrigo", "idade" => 23, "altura" => 1.75);
$pessoas["cidade"] = "Itabuna";

foreach($pessoas as $indeces => $value) {
  echo $indeces.":".$value."<br>";
}

// ARRAYS MULTIDIMENSIONAIS

$times = array(
  "cariocas"=> array("primeiro"=>"Vasco", "segundo"=>"Flamengo", "terceiro"=>"Botafogo"),
  "paulistas"=> array("Corinthias", "São Paulo", "Palmeiras")
);
echo $times["paulistas"][2];
echo "<hr>";

foreach($times["paulistas"] as $indice => $valor) {
  echo $indice.":".$valor."<br>";
}

foreach($times["cariocas"] as $indice => $valor) {
  echo $indice." - ".$valor."<br>";
}
