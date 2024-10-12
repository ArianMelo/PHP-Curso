<?php

// STRING

$name = "Bruno";
var_dump($name);
echo "<br>";
if(is_string($name)):
  echo "É uma string";
else:
  echo "Não é uma string";
endif;
echo "<br>";

// INT, FLOAT, BOOLEAN

// VARIÁVEL
$admin = true;
// COMANDO DE VERIFICAÇÃO DE VARIÁVEL
var_dump($admin);
// CONDIÇÃO DE VERIFICAÇÃO DE BOOLEANO
if(is_bool($admin)):
  echo "É booleano";
else:
  echo "Não é booleano";
endif;
echo "<br>";

// ARRAY - COMPOSTO
$cars = array("Gol","Uno","civic");
echo "<br>";
var_dump($cars);
if(is_array($cars)):
  echo "É um array";
else:
  echo "Não é array";
endif;
echo "<br><br>";
// OBJETO
// CLASSE COM VALOR E FUNÇÃO
class Cliente {

  public $name;
  public function atribuirNome($name) {
    $this->$name = $name;
  }
}
// INSTANCIANDO A CLASSE CLIENTE
$cliente = new Cliente();
$cliente->atribuirNome("Bruno");
var_dump($cliente);

if(is_object($cliente)):
  echo "É um objeto";
else:
  echo "Não é um objeto";
endif;
echo "<br><br>";
