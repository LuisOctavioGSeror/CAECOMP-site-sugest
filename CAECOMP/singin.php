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
      <div class="box" style="height: 620px; width: 390px;">
        <div class="form">
        <?php

          if(isset($_POST['acao'])){
            
            $senha = $_POST['senha'];
            $confirmaSenha = $_POST['confirmaSenha'];

            if($senha != $confirmaSenha)
              echo '<h4 style="color: rgb(0, 0, 0); padding-left: 15%; padding-top: 5%;">senhas não batem!</h4>';
                  
            else if($senha == $confirmaSenha)
              registrar();    
            
  
          }

          function registrar(){  //inserir no banco de dados

            include('config.php');

            date_default_timezone_set('America/Cuiaba');
            $pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USUARIO, SENHA);

            $cursos = array('Engenharia da Computação', 'Engenharia de Controle e Automação', 'Engenharia de Minas', 'Engenharia de Trasportes', 'Engenharia Quimica');
                
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $rga = $_POST['rga'];
            $semestre = $_POST['semestre'];  
            $data = date('Y-m-d H:i:s');
            $senha = $_POST['senha'];
            $confirmaSenha = $_POST['confirmaSenha'];
            $curso = '';
          
            for($i = 1; $i <= 5; $i++){ //verificando qual o curso pelo rga

              if($rga['9'] == $i)
                $curso = $cursos[$i];
                
    
            }
    

            $sql = $pdo->prepare("INSERT INTO `tabela_estudantes` VALUES (null,?,?,?,?,?,?,?)"); //inserirndo na tabela vendas

            $sql->execute(array($nome, $senha, $data, $email, $curso, $semestre, $rga));

            echo '<h6 style="color: rgb(255, 255, 255);">Usuario registrado com sucesso!</h6>';

          }

        ?>
          <h2 style="margin-left: -15%;">Criar conta</h2>
          <form class="form-signin" method="post">
            <div class ="inputBx">                                       <!--login2.css its not responding somehow-->
              <input type="text" name="nome" placeholder=" Nome completo" style="margin-bottom: 15px;" required>
              <input type="text" name="email" placeholder=" e-mail" style="margin-bottom: 15px;" required>
              <input type="text" name="rga" placeholder=" RGA" style="margin-bottom: 15px;" required>
              <input type="text" name="semestre" placeholder=" Semestre" style="margin-bottom: 15px;" required>
              <input type="password" name="senha" placeholder=" Senha" style="margin-bottom: 15px;" required>
              <input type="password" name="confirmaSenha" placeholder=" Confirmar senha" required>
            </div>
            <label class="remember"><input type="checkbox" style="margin-bottom: 25px;"> Mande me noticias por e-mail</label>
            <div class ="inputBx">
              <input type="submit" name="acao" value="Confirmar">
            </div>
          </form>
          <p>Voltar a tela de <a href="/caecomp/" id="change">login</a></p>
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