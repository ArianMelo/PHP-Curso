<html>
  <body>

  <?php
  if(isset($_POST['enviar-formulario'])):
    // ARRAY DE ERROS
    $erros = array();

    // SANITIZAÇÃO
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