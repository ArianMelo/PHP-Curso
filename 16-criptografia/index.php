<?php 
$senha = "12345";
// CRIPTOGRAFIA DE MAO DUPLA - base64

$novaSenha = base64_encode($senha);
echo "base64: ".$novaSenha."<br>";
echo "Sua senha é: ".base64_decode($novaSenha);

echo "<hr>";

// CRIPTOGRAFIA DE MAO ÚNICA - MD5 & Sha1

echo "Md5 :".md5($senha)."<br>";
echo "Sha1: ".sha1($senha)."<br>";

// PASSWORD HASH

$senha_db = '$2y$10$vTEytut6ExruyqOA4tdSAug3mw5u9Mb5OMfS51g2EvOVMwtRz4EsO';

if(password_verify($senha, $senha_db)){
  echo "Senha válida<br>";
} else {
  echo "Senha inválida<br>";
}

$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);

echo $senhaSegura;