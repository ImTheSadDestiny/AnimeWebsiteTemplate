<?php
session_start(); //attenzione! la sessione va avviata prima di qualunque output!
				 //compresi spazi vuoti etc
?>
<!DOCTYPE html>
<html lang="zxx">
<?php

if(isset($_GET["pag"])){
    $pag = $_GET["pag"];
    $indice = ($pag*9)-9;
}else{
    $pag=1;
    $indice = 0;
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

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                        <a href="./categories.php">Archivio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Section Begin -->
    <section class="product-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="product__page__content">
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        <h4>Tutto</h4>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="product__page__filter">
                                        <p>Order by:</p>
                                        <select>
                                            <option value="">A-Z</option>
                                            <option value="">1-10</option>
                                            <option value="">10-50</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php  $cont=0;
    $query1 = "SELECT * FROM serie ORDER BY serie.nome ASC LIMIT ".$indice.",9";
    $risultato1 = $mydb->query($query1);
    if($risultato1->num_rows > 0){  
        while($qu1 = $risultato1->fetch_assoc()){ ?>
          <?php  if($cont==0){
          echo "<div class='row'>";
     }  ?>
                           <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                 <?php echo "<a href='anime-details.php?id=".$qu1["id"]."'>";
								echo "<div class='product__item__pic set-bg' data-setbg=".$qu1["immagine"].">";
								 ?>
                                <?php $query18 =" SELECT COUNT(episodi.fkSerie)as episodi FROM serie INNER JOIN episodi on episodi.fkSerie = serie.id WHERE serie.id = ".$qu1["id"]."";
                                        $risultato18 = $mydb->query($query18);
                                        if($risultato18->num_rows > 0){
                                            while($qu18 = $risultato18->fetch_assoc()){
                                                 $query14 =" SELECT serie.numEpisodi as numEp FROM serie WHERE id = ".$qu1["id"]."";
                                                    $risultato14 = $mydb->query($query14);
                                                        if($risultato14->num_rows > 0){
                                                            while($qu14 = $risultato14->fetch_assoc()){
                                                echo "<div class='ep'>".$qu18["episodi"]." / ".$qu14["numEp"]."</div>";
                                                            }
                                            }}
                                        }?>
                                       
                                        <?php $query2 ="SELECT COUNT(commento.id)as id FROM commento INNER JOIN serie on serie.id = commento.fkSerie WHERE serie.id = ".$qu1["id"]."";
                                        $risultato2 = $mydb->query($query2);
                                        if($risultato2->num_rows > 0){
                                            while($qu2 = $risultato2->fetch_assoc()){
                                                echo "<div class='comment'><i class='fa fa-comments'></i> ".$qu2["id"]."</div>";
                                            }
                                        }?>
                                     <?php echo "<div class='view'><i class='fa fa-eye'></i>".$qu1["views"]."</div>"; ?>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                        <?php echo "<li>".$qu1["tipo"]."</li>";?>
                                        </ul>
                                      <?php  echo "<h5><a href='anime-details.php?id=".$qu1["id"]."'>".$qu1["nome"]."</a></h5>"; ?>
                                    </div>
                                </div><?PHP echo "</a>" ;?>
                            </div>
              
     <?php   $cont++; if($cont==3){
          $cont=0;
          echo "  </div>";
          
     } }
    }
    ?>   
        </div>
        <?php  $query1 = "SELECT count(id) as num FROM serie";
            $risultato1 = $mydb->query($query1);
            if($risultato1->num_rows > 0){  
                while($qu1 = $risultato1->fetch_assoc()){ 
                    $numeroPagine = $qu1["num"]/9;
                    $numeroPagine = ceil($numeroPagine);

                }}
                $conttttt = 1;?>
                <div class="product__pagination"><?php 

                while($conttttt<=$numeroPagine){
                  
                    if($conttttt == $pag){
                        $conto = $conttttt;
                        echo "<a href='categories.php?pag=".$conttttt."' class='current-page'>".$conttttt."</a>";
                    }else{
                        echo "<a href='categories.php?pag=".$conttttt."'>".$conttttt."</a>";
                    }
                    if($conttttt == $numeroPagine){
                        if($conto == $numeroPagine){
                           echo "<a href='categories.php?pag=".$conto."'><i class='fa fa-angle-double-right'></i></a>";
                        }else{
                            $conto++;
                            echo "<a href='categories.php?pag=".$conto."'><i class='fa fa-angle-double-right'></i></a>";
                        }
                        ?>
                   <?php }
                    $conttttt++;
                }
                    ?> 
</div>
</div>
</div>
</div>
</section>
<script>!function(d,l,e,s,c){e=d.createElement("script");e.src="//ad.altervista.org/js.ad/size=728X90/?ref="+encodeURIComponent(l.hostname+l.pathname)+"&r="+Date.now();s=d.scripts;c=d.currentScript||s[s.length-1];c.parentNode.insertBefore(e,c)}(document,location)</script>
<!-- Product Section End -->

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