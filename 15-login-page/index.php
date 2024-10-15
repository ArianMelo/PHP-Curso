
<?php 
  // CONEXÃO
  require_once 'db_connect.php';

  // SESSÃO
  session_start();

    // BOTÂO ENVIAR
    if (isset($_POST["btn-entrar"])) {
      $erros = array();
      $login = mysqli_real_escape_string($connect, $_POST['login']);
      $senha = mysqli_real_escape_string($connect, $_POST['senha']);

      if(empty($login) || empty($senha)) {
        $erros[] = "<li> o campo login/senha precisa ser preenchido.</li>";
      } else {
        // VERIFICAÇÃO DE LOGIN NO BD
        $sql = "SELECT * FROM usuarios WHERE login = '$login'";
        $resultado = mysqli_query($connect, $sql);

        if (mysqli_num_rows($resultado) > 0) {
          $senha = md5($senha);
          $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
          $resultado = mysqli_query($connect, $sql);
            if (mysqli_num_rows($resultado) == 1) {
              $dados = mysqli_fetch_array($resultado);
              mysqli_close($connect);
              $_SESSION['logado'] = true;
              $_SESSION['id_usuario'] = $dados['id'];
              header('Location: home.php');
            } else {
              $erros[] = "<li> Usuário e senha não conferem </li>";              
            }

      } else {
        $erros[] = "<li>Usuários não encontrado.</li>";
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  
  <h1> Login </h1>

  <?php 
    if(!empty($erros)) {
      echo "<ul>";
      foreach ($erros as $erro) {
        echo $erro;
      }
      echo "</ul>";
    }
  ?>
  
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label for="login">Login:</label>
    <input type="text" name="login" id="login" required><br>

    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha" required><br>

    <button type="submit" name="btn-entrar">Entrar</button>
  </form>

</body>
</html>