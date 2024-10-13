<?php 

// CONSTANTES
define("NOME", "José Carlos");
define("IDADE", 24);
define("ALTURA", 1.89);
define("CASADO", true);

define("COLORS", ['red', 'green','blue']);

var_dump(NOME);
echo "<br>";
echo 'Meu nome é '.NOME.', minha idade é'.IDADE;echo "<br>";
echo COLORS[0];

function exibeNome(){
  echo NOME;
}

echo exibeNome();