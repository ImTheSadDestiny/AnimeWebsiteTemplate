<?php
session_start(); //attenzione! la sessione va avviata prima di qualunque output!
				 //compresi spazi vuoti etc
?>
<!DOCTYPE html>
<html lang="zxx">
<?php

$id= $_GET["id"];

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
    <?php
        $query2 = "UPDATE serie SET views = views +1 WHERE id =".$id;
        $views = $mydb->query($query2);

    $query1 = "SELECT * FROM serie WHERE id =".$id;
    $risultato1 = $mydb->query($query1);
    if($risultato1->num_rows > 0){  
        while($qu1 = $risultato1->fetch_assoc()){
            $immagine = $qu1['immagine'];
            $nome = $qu1['nome'];
            $trama = $qu1['trama'];
            $rilascio = $qu1['rilascio'];
            $stato = $qu1['stato'];
            $voto = $qu1['voto'];
            $durata = $qu1['durata'];
            $qualita = $qu1['qualità'];
            $tipo = $qu1['tipo'];
            $studio = $qu1['studio'];
            $views = $qu1["views"];
        }
    }


    ?>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                    <a href="./index.php">
                            <img src="img/logo.png" alt=""></a>            
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

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                        <a href="./categories.php">Archivio</a>
                        <?php echo "<span>".$nome."</span>";?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">
                        <?php
                      echo" <div class='anime__details__pic set-bg' data-setbg=".$immagine.">"?>
                                        <?php $query28 ="SELECT COUNT(commento.id)as id FROM commento INNER JOIN serie on serie.id = commento.fkSerie WHERE serie.id = ".$id."";
                                        $risultato28 = $mydb->query($query28);
                                        if($risultato28->num_rows > 0){
                                            while($qu28 = $risultato28->fetch_assoc()){
                                                echo "<div class='comment'><i class='fa fa-comments'></i> ".$qu28["id"]."</div>";
                                            }
                                        }?>
                            <?php echo "<div class='view'><i class='fa fa-eye'></i>".$views."</div>"; ?>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title"><?php
                               echo" <h3>".$nome."</h3>" ?>
                            </div>
                            <h4><font color="white">Trama: </font></h4>
                            <?php echo "<p>".$trama."</p>"?>
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul><?php
                                            echo "<li><span>Tipo:</span> ".$tipo."</li>
                                            <li><span>Studio:</span> ".$studio."</li>
                                            <li><span>Stato:</span> ".$stato."</li>
                                            <li><span>Genre:</span> ";
                                            $query2 = "SELECT genere.nome FROM serie INNER JOIN fkdoppio on fkdoppio.fkSerie = serie.id INNER JOIN genere on fkdoppio.fkGenere = genere.id WHERE serie.id =".$id." GROUP BY genere.id";
                                            $risultato2 = $mydb->query($query2);
                                            if($risultato2->num_rows > 0){  
                                                while($qu2 = $risultato2->fetch_assoc()){
                                                    $genere = $qu2['nome'];
                                                    echo $genere." ";
                                                }
                                            }"</li>
                                        </ul>"?>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul><?php 
                                            echo "<li><span>Voto:</span> ".$voto."</li>
                                            <li><span>Duration:</span> ".$durata."</li>
                                            <li><span>Quality:</span> ".$qualita."</li>
                                            <li><span>Views:</span> ".$views."</li>
                                        </ul> "?>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="anime__details__btn">
                            <?php echo "<a href='./anime-watching.php?id=".$id."' class='watch-btn'><span>Guardalo ora</span> <i class='fa fa-angle-right'></i></a>";?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-8">
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
                    <div class="col-lg-4 col-md-4">
                        <div class="anime__details__sidebar">
                            <div class="section-title">
                                <h5>Serie che ti potrebbero piacere...</h5>
                            </div>
                           <?php $query26 = "SELECT * FROM serie ORDER BY RAND() LIMIT 0,3";
                                            $risultato26 = $mydb->query($query26);
                                            if($risultato26->num_rows > 0){  
                                                while($qu26 = $risultato26->fetch_assoc()){?>
                                                <?php echo "<div class='product__sidebar__view__item set-bg' data-setbg=".$qu26["immagine"].">"; ?>
                                                <?php $query18 =" SELECT COUNT(episodi.fkSerie)as episodi FROM serie INNER JOIN episodi on episodi.fkSerie = serie.id WHERE serie.id = ".$qu26["id"]."";
                                        $risultato18 = $mydb->query($query18);
                                        if($risultato18->num_rows > 0){
                                            while($qu18 = $risultato18->fetch_assoc()){
                                                 $query14 =" SELECT serie.numEpisodi as numEp FROM serie WHERE id = ".$qu26["id"]."";
                                                    $risultato14 = $mydb->query($query14);
                                                        if($risultato14->num_rows > 0){
                                                            while($qu14 = $risultato14->fetch_assoc()){
                                                echo "<div class='ep'>".$qu18["episodi"]." / ".$qu14["numEp"]."</div>";
                                                            }
                                            }}
                                        }?>
                                                    <?php echo "<div class='view'><i class='fa fa-eye'></i>".$qu26["views"]."</div>"; ?>
                                                    <?php  echo "<h5><a href='anime-details.php?id=".$qu26["id"]."'>".$qu26["nome"]."</a></h5>"; ?>
                                                    </div>
                                               <?php }
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