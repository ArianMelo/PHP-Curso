<?php 
// Manipulação de arquivos

/*
fopen();
fclose();
fwrite();
!feod();
fgets();
filesize();
*/

// Sempre que o site php for aberto, o documento 'arquivo.txt' receberá o conteúdo da variável $conteúdo, inserido através do comando fopen, que define o destino da inserção e os modos de uso do conteúdo.

// Variável com arquivo que será direcionado.
$arquivo = 'arquivo.txt';
// Variável com conteúdo a ser inserido.
$conteudo = "Conteudo de teste\r\n";
// Tamanho do arquivo para ser percorrido.
$tamanhoArquivo = filesize($arquivo);

// Variável $arquivoAberto que define o comando fopen, que abre o arquivo $arquivo e com modo: a, pesquise os demais modo no site do php.

$arquivoAberto = fopen($arquivo, 'r');

// Equanto não o final do arquivo, a variável $linha irá percorrer o fluxo de $arquivoAberto com o comprimento da variável $tamanhoArquivo, que receberá filesize = $arquivo. Imprimindo a variável $linha no site.

while(!feof($arquivoAberto)):
   $linha = fgets($arquivoAberto, $tamanhoArquivo);
   echo $linha."<br>";
endwhile;

// fwrite: escreve dentro do fopen o conteúdo da variável $conteudo.

//fwrite($arquivoAberto, $conteudo);

// Comando fclose: fecha o arquivo.
fclose($arquivoAberto);