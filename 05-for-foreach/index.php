<?php 

// TESTE DE FOR
for ($i = 0; $i < 10; $i):
  echo $i++."<br>";
endfor;

echo"<hr>";

for ($i = 0; $i > -10; $i) {
  echo $i--."<br>";
}

// FOREACH
echo "<hr>";
$names = array("Luis","Roberto","Marcelo");

foreach($names as $i => $value):
  echo $i."-".$value."<br>";
endforeach;