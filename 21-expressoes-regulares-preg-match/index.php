<?php 
// Expressões regulares
// Define um padrão a ser usado para procurar ou substituir palavras ou grupos de palavras.
// ^ inicio da expressão, $ final da expressão - /i - case sensitive
// [] conunto de caracteres
// {} ocorrências - ?{0,1} *{0,} +{1,}
// /^[a-z0-9.\-\_]+@[a-z0-9-\_]+\.(com|br|com.br|net)$/
// /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/


$data = "01/04/2024";
$padrãoData = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";
$string = "contato@gmail.com.br";
$padrão = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br)$/i";

if (preg_match($padrãoData, $data)):
   echo "Data válida: $data";
   echo "<hr>";
else:
   echo "Data Inválida";
   echo "<hr><br>";
endif;

if(preg_match($padrão, $string)):
   echo "Email válido: $string";
   echo "<hr>";
else:
   echo "Inválido";
   echo "<hr>";
endif;

