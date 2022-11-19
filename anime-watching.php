<?php
session_start(); //attenzione! la sessione va avviata prima di qualunque output!
				 //compresi spazi vuoti etc
?>
<!DOCTYPE html>
<html lang="zxx">
<?php

$id= $_GET["id"];
$ep=1;
if(isset($_GET["ep"])){
    $ep= $_GET["ep"];
}



require("config.php");  //file di config con i parametri di connessione
			$mydb = new mysqli(SERVER, UTENTE, PASSWORD, DATABASE);
			if ($mydb->connect_errno) {
				echo "Errore nella connessione a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
				exit();  //termina la pagina
			}
?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/plyr.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.php">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a href="./index.php">Homepage</a></li>
                                <li class="active"><a href="./categories.php">Archivio Anime</a>
                                <li><?php if(isset($_SESSION["id"])){?><a href="./login.php">Ciao <?php echo $_SESSION["nome"]; }?></a></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                    <?php
                    if(isset($_SESSION["id"])){	
			        ?> 
                    <span><a href="#" class="search-switch"><span class="icon_search"></span></a>
                    <a href="./login.php"><span class="icon_profile"></span></a>
                    </div>
                    <?php }else{?>
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <a href="./login.php"><span class="icon_profile"></span></a>
                        <?php }?></div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <?php $query1 = "SELECT * FROM serie WHERE id =".$id;
    $risultato1 = $mydb->query($query1);
    if($risultato1->num_rows > 0){  
        while($qu1 = $risultato1->fetch_assoc()){
            $nome = $qu1['nome'];
        }
    }?>

    <!-- Breadcrumb Begin -->
    <div class="breadcrumSb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                        <a href="./categories.php">Archivio</a>
                        <?php echo "<span>video ".$nome."</span>";?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    
    <?php $query1 = "SELECT episodi.id, episodi.video FROM episodi inner join serie on serie.id = episodi.fkSerie WHERE episodi.id =".$ep;
    $risultato1 = $mydb->query($query1);
    if($risultato1->num_rows > 0){  
        while($qu1 = $risultato1->fetch_assoc()){ 
          $video = $qu1['video'];
        }
    }
    ?>
    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="anime__video__player">
                        <video id="player" playsinline controls data-poster="./videos/anime-watch.jpg">
                           <?php echo "<source src='".$video."' type='video/mp4' />";?>
                            <!-- Captions are optional -->
                            <track kind="captions" label="English captions" src="#" srclang="it" default />
                        </video>
                    </div>
                    <div class="anime__details__episodes">
                        <div class="section-title">
                            <h5>Episodi</h5>
                        </div>
    <?php $query1 = "SELECT episodi.id, episodi.numero FROM episodi inner join serie on serie.id = episodi.fkSerie WHERE episodi.fkSerie =".$id;
    $risultato1 = $mydb->query($query1);
    if($risultato1->num_rows > 0){  
        while($qu1 = $risultato1->fetch_assoc()){ 
          echo "<a href='anime-watching.php?id=".$id."&ep=".$qu1["id"]."'>Ep".$qu1["numero"]."</a>";
        }
    }
    ?>           
                    </div>
                </div>
            </div>
        
            <div class="row">
                <div class="col-lg-8">
                    <div class="anime__details__review">
                        <div class="section-title">
                            <h5>Commenti</h5>
                        </div>
                        <?php $query8 = "SELECT commento.nome,commento.commento,commento.data,commento.fkSerie FROM serie INNER JOIN commento on commento.fkSerie = serie.id WHERE serie.id =".$id."";
                                            $risultato8 = $mydb->query($query8);
                                            if($risultato8->num_rows > 0){  
                                                while($qu8 = $risultato8->fetch_assoc()){
                                                    $nomeCommento = $qu8['nome'];
                                                    $commento = $qu8['commento'];
                                                    $data = $qu8['data'];
                                                ?>
                                                <div class='anime__review__item'>
                                                    <div class='anime__review__item__pic'>
                                                    <?php $query3218 = "SELECT * FROM img ORDER BY RAND() LIMIT 0,1";
                                            $risultato3218 = $mydb->query($query3218);
                                            if($risultato3218->num_rows > 0){  
                                                while($qu3218 = $risultato3218->fetch_assoc()){
                                                    echo "<img src='".$qu3218["img"]."' alt=''>";
                                                }
                                            } ?>   
                                                    </div>
                                                    <div class='anime__review__item__text'><?php
                                                        echo "<h6>".$nomeCommento." - <span>".$data."</span></h6>";
                                                        echo "<p>".$commento."</p>"?>
                                                   </div>
                                                </div>
                                                <?php }
                                            }?>                           
</div>
                    <div class="anime__details__form">
                        <div class="section-title">
                            <h5>Aggiungi un commento</h5>
                            </div>
                            <?php if(isset($_SESSION["id"])){?>
                            <?php echo "<form id='commento' name='commento' method='post' action='commento.script.php?id=".$id."'>"; ?>
                                <textarea name="commento" placeholder="Commento"></textarea>
                                <button type="submit" name="submit" value="commento"><i class="fa fa-location-arrow"></i> Invia</button>
                            </form>
                            <?php }else{
                             echo "<h5 style = color:WHITE;>Devi essere loggato per poter commentare</h5> <div class='col-lg-6'>
                             <div class='login__register'><br><a href='login.php' class='primary-btn'>Loggati ora</a></div></div>";
                            }?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Anime Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__logo">
                        <a href="./index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer__nav">
                        <ul>
                        <li class="active"><a href="./index.php">Homepage</a></li>
                                <li><a href="./categories.php">Archivio Anime</a>
                                <li><?php if(isset($_SESSION["id"])){?><a href="./login.php">Ciao <?php echo $_SESSION["nome"]; }?></a></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Matteo Giangrossi
                      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

                  </div>
              </div>
          </div>
      </footer>
      <!-- Footer Section End -->

      <!-- Search model Begin -->
      <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>

        <form id="search-input" class="search-model-form"  method="post" action="risultatocerca.php">
            <input type="text" id="search-input" placeholder="Cerca qui....." name="cerca" require>
        </form>

    </div>
</div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/player.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>