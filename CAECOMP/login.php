<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CAECOMP · Log in</title>
    <link rel="icon" href="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="css/login2.css" >
  </head>
  <body>
    <section id="login">
      <div class="box">
        <div class="form">
        <?php  //-------------------------------------php-login-----------------------------------
              if(isset($_POST['acao'])){
                  $rga = $_POST['rga'];
                  $senha = $_POST['senha'];
                  $sql = BancoDeDados::conectar()->prepare("SELECT * FROM caecomp.tabela_estudantes WHERE rga = ? AND senha = ?"); //interrogações no lugar do valor e execute depois protegem contra sql injection
                  $sql->execute(array($rga,$senha));
                  if($sql->rowCount() == 1){
                      $_SESSION['login'] = true;
                      $_SESSION['rga'] = $rga;
                      $_SESSION['senha'] = $senha;
                      header('Location: '.INCLUDE_PATH_PAINEL);
                      die();
                  }
                  else{
                      echo '<h5 style="color: rgb(0, 0, 0);">Usuario ou senha incorretos!</h5>';
                  } 
              }
    ?><!-------------------------------------------------------------------------------------->
          <h2>Login</h2>
          <form method="post">
            <div class ="inputBx">
              <input type="text" name="rga" placeholder=" RGA" required>
              <img src="icons/user.png">
            </div>
            <div class ="inputBx">
              <input type="password" name="senha" placeholder=" Senha" required>
              <img src="icons/lock.png">
            </div>
            <label class="remember"><input type="checkbox"> Lembre-se de mim</label>
            <div class ="inputBx">
              <input type="submit" name="acao" value="Login">
            </div>
          </form>
          <p>Esqueci a <a href="">senha </a></p>
          <p>Cadastrar <a href="singin.php" id="change">conta</a></p>
        </div>
      </div>
    </section>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script type="text/javascript"> // javascript para o efeito de desaparecer e reaparecer lentamente o maior valor
            $('#change').on('click', function() {
                if ($('#cadastro').css('opacity') == 0) {
                    $('#cadastro').css('opacity', 1);
                }
                else {
                    $('#cadastro').css('opacity', 0);
                }
            });
      </script>
</body>
</html>