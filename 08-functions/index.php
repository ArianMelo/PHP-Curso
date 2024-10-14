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

function calcularIMC($peso, $altura){
  if ($altura > 0) {
    $imc = $peso / ($altura/100 * $altura/100);
    $imcFormatado = number_format($imc, 1,",",".");
    echo "Seu IMC é: ".$imcFormatado;
  } else {
    return "Altura inválida!";
  }
}

calcularIMC(75,180);