<html>
  <body>

  <?php
  if(isset($_POST['enviar-formulario'])):
    // ARRAY DE ERROS
    $erros = array();

    if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
      echo "Email inválido!<br>";
    endif;

    if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
      echo "Peso inválido!<br>";
    endif;

    if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
      echo "IP inválido!<br>";
    endif;

    if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
      echo "URL inválido!<br>";
    endif;

    if(!empty($erros)):
      foreach($erros as $erro):
        echo "<li> $erro </li>";
      endforeach;
    else:
      echo "Parabéns, seus dados estão corretos!";
    endif;

  endif;
  ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      Idade: <input type="text" name="idade"><br>
      Email: <input type="email" name="email"><br>
      Peso: <input type="text" name="peso"><br>
      IP: <input type="text" type="ip" name="email"><br>
      URL: <input type="text" type="url" name="email"><br>
      <button type="submit" name="enviar-formulario"> Enviar </button><br>
    </form>

  </body>
</html>