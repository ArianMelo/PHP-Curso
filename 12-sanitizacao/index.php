<html>
  <body>

  <?php
  if(isset($_POST['enviar-formulario'])):
    // ARRAY DE ERROS
    $erros = array();

    // SANITIZAÇÃO
    $nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_SPECIAL_CHARS);

    $idade = filter_input(INPUT_POST, 'idade',FILTER_SANITIZE_NUMBER_INT);
    if(!filter_var($idade, FILTER_VALIDATE_INT)):
      $erros[] = "Idade inválida";
    endif;

    $email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
      $erros[] = "Email inválida";
    endif;

    $url = filter_input(INPUT_POST, 'url',FILTER_SANITIZE_EMAIL);
    if(!filter_var($url, FILTER_VALIDATE_EMAIL)):
      $erros[] = "URL inválida";
    endif;

    if(!empty($erros)):
      foreach($erros as $erro):
        echo "<li> $erro </li>";
      endforeach;
    else:
      echo "Parabéns, seus dados estão corretos";
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