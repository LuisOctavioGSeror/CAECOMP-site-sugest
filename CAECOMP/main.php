<!--Codigo-php-primeiro-depois-html-->
<!---------------------------------------------------------------PHP------------------------------------------------------------------------------>
<?php

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
        <title>CAECOMP</title>
        <!-- Bootstrap nucleo CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Custom styles for this template -->
        <link rel="icon" href="caecompIcon.jfif">
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
                        <a class="nav-link" href="#O_SOLAR"><h4 id="sobrenos" data-toggle="collapse" data-target=".navbar-collapse.show">HOME</h4></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="eventos.php"><h4 id="nossosservicos" data-toggle="collapse" data-target=".navbar-collapse.show">Eventos</h4></a>
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

            *{
                font-family: 'Vollkorn SC', serif;

            }

            .navbarrr h4:hover{
                opacity: 1;
            }

            

            #navbar{
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

            .container-fluid{
                background-image: url("https://www.transparenttextures.com/patterns/axiom-pattern.png");

            }

            footer h4, footer h5{
                color: #F5C734;

            }

            .movetxt {
                opacity: 1;
                position: relative;
                -webkit-animation: moving 1.5s normal;
                animation: moving 1.5s normal;
            }

            @keyframes moving {
                from {left: -1000px;}
                to {left: 0px;}
            }

            .moveimg {
                opacity: 1;
                position: relative;
                -webkit-animation: moving2 1.5s normal;
                animation: moving2 1.5s normal;
            }

            .visibility{
                opacity: 0;
                -webkit-transition: all 0.5s ease;
                transition: all 0.5s ease;
            }

            @keyframes moving2 {
                from {right: -1000px;}
                to {right: 0px;}
            }

        </style>
        <!--carrousel-->
        <div class="row" style="top: -100px;">
            <div class="col-md-12">
              <div id="carouselExampleCaptions" class="carousel carousel-fade slide car " data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>

                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="imagem1.jpg" class="d-block w-100 carrouselimage" data-interval="1000" alt="..." style="height: 600px; margin-top: -80px;
                    object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                      <h1>First slide label</h1>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> 
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="imagem2.jpg" class="d-block w-100 carrouselimage" data-interval="1000" alt="..." style="height: 600px; margin-top: -80px;
                    object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                      <h1>Second slide label</h1>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> 
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="imagem3.jpg" class="d-block w-100 carrouselimage" data-interval="1000" alt="..." style="height: 600px; margin-top: -80px;
                    object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                       <h1>Third slide label</h1>
                      <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> 
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="imagem4.jpg" class="d-block w-100 carrouselimage" data-interval="1000" alt="..." style="height: 600px; margin-top: -80px;
                    object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                      <h1>Fourth slide label</h1>
                      <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
        </div>
        <!--about us-->
        <div class="container-fluid" id="aboutUs">
            <div class="row">
                <div class="col-md-7 col-12"  style="margin-top: 10%; margin-bottom: 10%;">
                    <h1 class="">CAECOMP</h1>
                    <p></p>
                    <p>
                        <h5 class="visibility"> 
                            &nbsp Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Etiam eget ligula eu lectus lobortis condimentum. 
                            Aliquam nonummy auctor massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac 
                            turpis egestas. Nulla at risus. Quisque purus magna, auctor et, sagittis ac, posuere eu, lectus. Nam mattis, 
                            felis ut adipiscing. 
                        </h5>
                        <p><h5 class="visibility">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ligula eu lectus lobortis condimentum. 
                            Aliquam nonummy auctor massa. Pellentesque habitant morbi tristique senectus et netus et malesuada 
                            fames ac turpis egestas. Nulla at risus. Quisque purus magna, auctor et, sagittis ac, posuere eu, lectus. 
                            Nam mattis, felis ut adipiscing.</h5></p>
                    </p>                       
                </div>
                <div class="col-md-5 col-12">
                    <p></p>
                    <p></p>
                    <img src="imagem5.jpg" class="visibility" style="margin-top: 10%;" alt="...">
                </div>
            </div>
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
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgZFgHTFiVcm96B32-OT9KggqoyO8jFig&callback=myMap"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous"></script>
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
      <script>
            $(window).scroll(function() {
            $('#aboutUs h5').toggleClass('movetxt', $(this).scrollTop() > 400);
            $('#aboutUs img').toggleClass('moveimg', $(this).scrollTop() > 400);
            
           
            });

            $(window).scroll(function() {

            var scroll = $(window).scrollTop();

                if (scroll > 400) {
                    $('.visibility').css('opacity', 1);

                }
                else if (scroll < 300) {
                    $('.visibility').css('opacity', 0);

                }

            });

        </script>
    </body>
</html>