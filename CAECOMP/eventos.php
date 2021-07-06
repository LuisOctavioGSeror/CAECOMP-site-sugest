<!--Codigo-php-primeiro-depois-html-->
<!---------------------------------------------------------------PHP------------------------------------------------------------------------------>
<?php

    include('config.php');


    //Conectando banco de dados e setando tempo
    date_default_timezone_set('America/Cuiaba');
    $pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USUARIO, SENHA);



    //logout
    if(isset($_GET['loggout'])){
        Painel::logout();
    }
                                    

?>

<style>
    <?php include "css/style.scss" ?>
</style>


<!-------------------------------------------------------------HTML------------------------------------------------------------------------->
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Luis Octavio Galesso Seror">
        <title>Movere Vendas</title>
        <!-- Bootstrap nucleo CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Custom styles for this template -->
        <link rel="icon" href="icons/">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Vollkorn+SC&display=swap" rel="stylesheet">
    </head>
    <body>
        <!--navbar-->
        <nav class="navbar navbar-expand-lg navbar-light navbarrr sticky-top">
            <button class="navbar-toggler col-12" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="col-md-5 nav navbar-nav mr-auto nav-fill d-flex">
                    <li class="nav-item">
                        <a class="nav-link" href="/caecomp/"><h4 id="sobrenos" data-toggle="collapse" data-target=".navbar-collapse.show">HOME</h4></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#O_que_fazemos"><h4 id="nossosservicos" data-toggle="collapse" data-target=".navbar-collapse.show">Eventos</h4></a>
                    </li>
                </ul>
                <a class="col-md-2 col-12" href="#">
                    <img src="caecompIcon2.jpg" width="100" height="100" class="d-inline-block align-top rounded-circle justify-content-center" alt="" loading="lazy">
                </a>
                <ul class="col-md-5 nav navbar-nav mr-auto nav-fill d-flex">
                    <li class="nav-item">
                        <a class="nav-link" href="usuario.php"><h4 id="nossosservicos" data-toggle="collapse" data-target=".navbar-collapse.show">Minha conta</h4></a>
                    </li>    
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout" style="color: black;"><h4 id="localizacao" data-toggle="collapse" data-target=".navbar-collapse.show">logout</h4></a>
                    </li>
                </ul>
            </div>
        </nav>
        <style>
            .container-fluid{
             background-image: url("https://www.transparenttextures.com/patterns/axiom-pattern.png");

            }
        </style>    
        <!----------------------------------------------------lista dos eventos-------------------------------------------->
        <div class="container-fluid">
            <div class="container">
            <p></p>
            <div class="row" style="margin-top: 3%;">
                <div class="card col-12">
                    <h5 class="card-header">Semana da Engenharia</h5>
                    <div class="card-body">
                    <h5 class="card-title">Palestra sobre data engineering com python</h5>
                    <p class="card-text">algum texto legal pq to com pressa.</p>
                    <a href="#" class="btn btn-dark" data-bs-toggle="collapse" data-bs-target="#eventToggleExternalContent1" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="color: #F5C734;">Saiba mais</a>
                    <div class="collapse" id="eventToggleExternalContent1">
                            <div class="bg-lght p-4">
                                <h5 class="text-white h4">Collapsed content</h5>
                                    <span class="text-muted">Toggleable via the navbar brand.</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                    há 3 dias
                    </div>
                </div>
                </div>
                <p></p>
            <div class="row" style="margin-top: 3%;">
                <div class="card col-12">
                    <h5 class="card-header">Semana da Engenharia</h5>
                    <div class="card-body">
                    <h5 class="card-title">Curso de jogos em java</h5>
                    <p class="card-text">algum texto legal pq to com pressa.</p>
                    <a href="#" class="btn btn-dark" data-bs-toggle="collapse" data-bs-target="#eventToggleExternalContent2" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="color: #F5C734;">Saiba mais</a>
                    <div class="collapse" id="eventToggleExternalContent2">
                            <div class="bg-lght p-4">
                                <h5 class="text-white h4">Collapsed content</h5>
                                    <span class="text-muted">Toggleable via the navbar brand.</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                    há 3 dias
                    </div>
                </div>
                </div>
                <p></p>
                <p></p>
            <div class="row" style="margin-top: 3%;">
                <div class="card col-12">
                    <h5 class="card-header">Semana da Engenharia</h5>
                    <div class="card-body">
                    <h5 class="card-title">Curso de PCB</h5>
                    <p class="card-text">algum texto legal pq to com pressa.</p>
                    <a href="#" class="btn btn-dark" data-bs-toggle="collapse" data-bs-target="#eventToggleExternalContent3" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="color: #F5C734;">Saiba mais</a>
                    <div class="collapse" id="eventToggleExternalContent3">
                            <div class="bg-lght p-4">
                                <h5 class="text-white h4">Collapsed content</h5>
                                    <span class="text-muted">Toggleable via the navbar brand.</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                    há 3 dias
                    </div>
                </div>
                </div>
                <div class="row" style="margin-top: 3%;">
                <div class="card col-12">
                    <h5 class="card-header">Semana da Engenharia</h5>
                    <div class="card-body">
                    <h5 class="card-title">Palestra sobre data engineering com python</h5>
                    <p class="card-text">algum texto legal pq to com pressa.</p>
                    <a href="#" class="btn btn-dark" data-bs-toggle="collapse" data-bs-target="#eventToggleExternalContent1" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="color: #F5C734;">Saiba mais</a>
                    <div class="collapse" id="eventToggleExternalContent1">
                            <div class="bg-lght p-4">
                                <h5 class="text-white h4">Collapsed content</h5>
                                    <span class="text-muted">Toggleable via the navbar brand.</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                    há 3 dias
                    </div>
                </div>
                </div>
                <p></p>
            <div class="row" style="margin-top: 3%;">
                <div class="card col-12">
                    <h5 class="card-header">Semana da Engenharia</h5>
                    <div class="card-body">
                    <h5 class="card-title">Curso de jogos em java</h5>
                    <p class="card-text">algum texto legal pq to com pressa.</p>
                    <a href="#" class="btn btn-dark" data-bs-toggle="collapse" data-bs-target="#eventToggleExternalContent2" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="color: #F5C734;">Saiba mais</a>
                    <div class="collapse" id="eventToggleExternalContent2">
                            <div class="bg-lght p-4">
                                <h5 class="text-white h4">Collapsed content</h5>
                                    <span class="text-muted">Toggleable via the navbar brand.</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                    há 3 dias
                    </div>
                </div>
                </div>
                <p></p>
                <p></p>
            <div class="row" style="margin-top: 3%;">
                <div class="card col-12">
                    <h5 class="card-header">Semana da Engenharia</h5>
                    <div class="card-body">
                    <h5 class="card-title">Curso de PCB</h5>
                    <p class="card-text">algum texto legal pq to com pressa.</p>
                    <a href="#" class="btn btn-dark" data-bs-toggle="collapse" data-bs-target="#eventToggleExternalContent3" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="color: #F5C734;">Saiba mais</a>
                    <div class="collapse" id="eventToggleExternalContent3">
                            <div class="bg-lght p-4">
                                <h5 class="text-white h4">Collapsed content</h5>
                                    <span class="text-muted">Toggleable via the navbar brand.</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                    há 3 dias
                    </div>
                </div>
                </div>
                <p></p>

                </div>
                <p></p>
            <style>

                *{
                    font-family: 'Vollkorn SC', serif;
                }

                .navbarrr h4:hover{
                    opacity: 1;
                }
                
                .navbarrr{
                    background: #1C1C1C;
                    /*background: rgba(255, 255, 255, 0.1);*/
                    backdrop-filter: blur(3px);
                    -webkit-transition: all 0.8s ease;
                    transition: all 0.8s ease;
                }
                .navbarrr h4{
                    opacity: 0.5;
                    font-size: 25px;
                    color: #F5C734;
                    -webkit-transition: all 0.8s ease;
                    transition: all 0.8s ease;

                }

                footer h4, footer h5{
                    color: #F5C734;

                }
            </style>
        </div>
               
        <!--footer-->
        <footer>
            <div class="container-fluid" id="footer">
                <div class="row" style="justify-content: center; background-color: #1C1C1C;">
                    <div class="col-md-12" style="margin-top: 1%;">
                        <h4 style="padding-left: 45%;">CAECOMP</h4>
                    </div>
                </div>
                <div class="row" style="background-color: #1C1C1C;">
                    <div class="col-md-12 col-12 social-icon" style="padding-left: 24%; padding-top: 2%;">  
                        <p>
                            <a href="https://www.facebook.com/"><img src='icons/Facebook.jpg'/></a>
                            <a href="https://www.linkedin.com/"><img src='icons/linkedin.jpg' /></a>
                            <a href="https://www.instagram.com/"><img src='icons/insta.jpg' /></a>
                            <a href="https://api.whatsapp.com/"><img src='icons/whatsapp.jpg' /></a>
                        </p>
                    </div>    
                </div>
                <div class="row" style="justify-content: center; text-align: center; background-color: #1C1C1C;">
                    <div class="col-md-12">
                        <h5>Aberto de segunda a sexta das 8:00 às 18:00 e sábado das 8:00 às 12:00</h5>
                        <p></p>
                        <h5>Rua Presidente José Linhares, Quadra 11, Lote 08/09 Sala A - Quilombo, Cuiabá - MT, 78043-538</h5>
                    </div>
                </div>
                <div class="row footer2" style="justify-content: center; background-color: #1C1C1C;">
                    &copy; Desenvolvido por Luis Octavio Galesso Seror Copyright 2021
                </div>
            </div>
        </footer>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
        <script type="text/javascript"> // javascript para o efeito de desaparecer e reaparecer lentamente o maior valor
            $('#menuButton').on('click', function() {
                if ($('#mainMenu').css('opacity') == 0) {
                    $('#mainMenu').css('opacity', 1);
                    $('#mainMenu').css('width', 200);
                    $('#mainMenu').css('height', 100);
                    $('#everyThingElse').css('opacity', 0);
                    
                }
                else {
                    $('#mainMenu').css('opacity', 0);
                    $('#mainMenu').css('width', 0);
                    $('#mainMenu').css('height', 0);
                    $('#everyThingElse').css('opacity', 1);
                
                }
            });
      </script>
    </body>
</html>