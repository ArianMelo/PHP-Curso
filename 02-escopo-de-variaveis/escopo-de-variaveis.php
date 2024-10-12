<?php

$name = "Bruno";
$num1 = 1;
$num2 = 2;
$num3 = 3;

// Para captar o nome global, use escopo global dentro da função.

function exibeNome() {
  global $name; // trasnforma em escopo global
  //Escopo local
  echo $name;
}

exibeNome();
echo"<hr>";
// OUTRA FORMA DE EXPRESSAR UMA ESCOPO INTERNO PARA GLOBAL
function soma(){
  echo $GLOBALS['num1'] + $GLOBALS['num2'] + $GLOBALS['num3'];
}

soma();