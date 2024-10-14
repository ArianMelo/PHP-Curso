<?php 

function exibeNome($nome) {
  echo "Meu nome é $nome";
}

exibeNome("Adriele Santos");
echo "<hr>"; 
function calcularMedia($nome, $n1, $n2, $n3, $n4) {
  $media = ($n1 + $n2 + $n3 + $n4) / 4;
  if($media >= 7):
    echo "$nome foi aprovado com média $media. <br>";
  else:
    echo "$nome foi reprovado <br>";
  endif;
}

calcularMedia("Lucas", 9, 6, 9, 9);