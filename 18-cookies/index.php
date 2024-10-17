<?php 
setcookie('cookie','valor_cookie', time() +3600,'/');
setcookie('biscoito','cidade_residencia', time() +3600,'/');
setcookie('ultima_pesquisa','Volkswagen', time() +3600,"/");

var_dump($_COOKIE);
echo $_COOKIE['ultima_pesquisa'];