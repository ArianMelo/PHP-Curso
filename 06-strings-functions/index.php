<?php 

/*
  strtoupper
  strtolower
  substr
  str_pad
  str_repeat
  strlen
  str_replace
  strpos
*/

$nome = "Bruno Alves";
$novoNome = strtolower($nome);
echo $novoNome;
echo "<hr>";
echo substr($nome, 0,length: 8);
echo "<hr>";

$objeto = "mouse";
$novoObjeto = str_pad($objeto, 10, "*", STR_PAD_BOTH);
echo $novoObjeto;
