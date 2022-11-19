<?php
session_start(); //attenzione! la sessione va avviata prima di qualunque output!
				 //compresi spazi vuoti etc
?>
<!DOCTYPE html>
<html lang="zxx">

<?php

require("config.php");  //file di config con i parametri di connessione
			$mydb = new mysqli(SERVER, UTENTE, PASSWORD, DATABASE);
			if ($mydb->connect_errno) {
				echo "Errore nella connessione a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
				exit();  //termina la pagina
			}
?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preload" as="script" href="https://cdn.iubenda.com/cs/iubenda_cs.js"/>
<link rel="preload" as="script" href="https://cdn.iubenda.com/cs/tcf/stub-v2.js"/>
<script src="https://cdn.iubenda.com/cs/tcf/stub-v2.js"></script>
<script>
(_iub=self._iub||[]).csConfiguration={
	cookiePolicyId: 37883469,
	siteId: 2669419,
	localConsentDomain: 'matteogiangrossi1.altervista.org',
	timeoutLoadConfiguration: 30000,
	lang: 'it',
	enableTcf: true,
	tcfVersion: 2,
	tcfPurposes: {
		 "2": "consent_only",
		 "3": "consent_only",
		 "4": "consent_only",
		 "5": "consent_only",
		 "6": "consent_only",
		 "7": "consent_only",
		 "8": "consent_only",
		 "9": "consent_only",
		"10": "consent_only"
	},
	invalidateConsentWithoutLog: true,
	googleAdditionalConsentMode: true,
	consentOnContinuedBrowsing: false,
	banner: {
		position: "top",
		acceptButtonDisplay: true,
		customizeButtonDisplay: true,
		closeButtonDisplay: true,
		closeButtonRejects: true,
		fontSizeBody: "14px",
	},
}
</script>

<script async src="https://cdn.iubenda.com/cs/iubenda_cs.js"></script>
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
                                <li class="active"><a href="./index.php">Homepage</a></li>
                                <li><a href="./categories.php">Archivio Anime</a>
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

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <div class="hero__items set-bg" data-setbg="img/hero/hero-1.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Avventura</div>
                                <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                                <p>Dopo 30 giorni di viaggio in tutto il mondo...</p>
                                <a href="anime-details.php?id=6"><span>Guarda ora</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="img/hero/hero-4.png">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Sport</div>
                                <h2>Haikyuu!!</h2>
                                <p>Dopo aver assistito a una partita di pallavolo, il giovane Shouyou Hinata si pone come personale obbiettivo di diventare "Il piccolo Gigante" ...</p>
                                <a href="anime-details.php?id=5"><span>Guarda ora</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="img/hero/hero-3.png">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Fantasy</div>
                                <h2>Fullmetal Alchemist: Brotherhood</h2>
                                <p>Ambientato in un mondo alternativo simile all'Europa di inizio 1900...</p>
                                <a href="anime-details.php?id=4"><span>Guarda ora</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Ultime uscite</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="categories.php" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <script>!function(d,l,e,s,c){e=d.createElement("script");e.src="//ad.altervista.org/js.ad/size=728X90/?ref="+encodeURIComponent(l.hostname+l.pathname)+"&r="+Date.now();s=d.scripts;c=d.currentScript||s[s.length-1];c.parentNode.insertBefore(e,c)}(document,location)</script>
     <?php  $cont=0;
    $query1 = "SELECT * FROM serie ORDER BY serie.id DESC LIMIT 0,6";
    $risultato1 = $mydb->query($query1);
    if($risultato1->num_rows > 0){  
        while($qu1 = $risultato1->fetch_assoc()){ ?>
          <?php  if($cont==0){
          echo "<div class='row'>";
     }  ?>
                           <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                <?php echo "<a href='anime-details.php?id=".$qu1["id"]."'><div class='product__item__pic set-bg' data-setbg=".$qu1["immagine"].">"; ?>
                                <?php $query2 ="SELECT COUNT(commento.id)as id FROM commento INNER JOIN serie on serie.id = commento.fkSerie WHERE serie.id = ".$qu1["id"]."";
                                        $risultato2 = $mydb->query($query2);
                                        if($risultato2->num_rows > 0){
                                            while($qu2 = $risultato2->fetch_assoc()){
                                                echo "<div class='comment'><i class='fa fa-comments'></i> ".$qu2["id"]."</div>";
                                            }
                                        }
                                         $query18 =" SELECT COUNT(episodi.fkSerie)as episodi FROM serie INNER JOIN episodi on episodi.fkSerie = serie.id WHERE serie.id = ".$qu1["id"]."";
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
                                <?php echo "<div class='view'><i class='fa fa-eye'></i>".$qu1["views"]."</div>"; ?>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                        <?php echo "<li>".$qu1["tipo"]."</li>";?>
                                        </ul>
                                      <?php  echo "<h5><a href='anime-details.php?id=".$qu1["id"]."'>".$qu1["nome"]."</a></h5>"; ?>
                                    </div>
                                </div>
                            </div>
              
     <?php   $cont++; if($cont==3){
          $cont=0;
          echo "  </div>";
          
     } }
    }

    ?> </div>
                    <div class="popular__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Più Popolari</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="categories.php" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <script>!function(d,l,e,s,c){e=d.createElement("script");e.src="//ad.altervista.org/js.ad/size=728X90/?ref="+encodeURIComponent(l.hostname+l.pathname)+"&r="+Date.now();s=d.scripts;c=d.currentScript||s[s.length-1];c.parentNode.insertBefore(e,c)}(document,location)</script>
                        <?php  $cont=0;
    $query1 = "SELECT * FROM serie ORDER BY serie.views DESC LIMIT 0,6";
    $risultato1 = $mydb->query($query1);
    if($risultato1->num_rows > 0){  
        while($qu1 = $risultato1->fetch_assoc()){ ?>
          <?php  if($cont==0){
          echo "<div class='row'>";
     }  ?>
                           <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                <?php echo "<div class='product__item__pic set-bg' data-setbg=".$qu1["immagine"].">"; ?>
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
                                <?php echo "<div class='view'> <i class='fa fa-eye'> </i> ".$qu1["views"]."</div>"; ?>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            
                                    <?php echo "<li>".$qu1["tipo"]."</li>";?>
                                        </ul>
                                      <?php  echo "<h5><a href='anime-details.php?id=".$qu1["id"]."'>".$qu1["nome"]."</a></h5>"; ?>
                                    </div>
                                </div>
                            </div>
              
     <?php   $cont++; if($cont==3){
          $cont=0;
          echo "  </div>";
          
     } }
    }?></div>
                    <div class="popular__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Anime Random</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="categories.php" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <?php  $cont=0;
    $query1 = "SELECT * FROM serie ORDER BY RAND() LIMIT 0,3";
    $risultato1 = $mydb->query($query1);
    if($risultato1->num_rows > 0){  
        while($qu1 = $risultato1->fetch_assoc()){ ?>
          <?php  if($cont==0){
          echo "<div class='row'>";
     }  ?>
                           <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                <?php echo "<div class='product__item__pic set-bg' data-setbg=".$qu1["immagine"].">"; ?>
                               
                                        <?php $query2 ="SELECT COUNT(commento.id)as id FROM commento INNER JOIN serie on serie.id = commento.fkSerie WHERE serie.id = ".$qu1["id"]."";
                                        $risultato2 = $mydb->query($query2);
                                        if($risultato2->num_rows > 0){
                                            while($qu2 = $risultato2->fetch_assoc()){
                                                echo "<div class='comment'><i class='fa fa-comments'></i> ".$qu2["id"]."</div>";
                                            }
                                        }?>
                                <?php echo "<div class='view'><i class='fa fa-eye' > </i>".$qu1["views"]."</div>"; ?>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                        <?php echo "<li>".$qu1["tipo"]."</li>";?>
                                        </ul>
                                      <?php  echo "<h5><a href='anime-details.php?id=".$qu1["id"]."'>".$qu1["nome"]."</a></h5>"; ?>
                                    </div>
                                </div>
                            </div>
              
     <?php   $cont++; if($cont==3){
          $cont=0;
          echo "  </div>";
          
     } }
    }?></div>
                    </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>Top Views</h5>
                            </div>
                            <ul class="filter__controls">
                                <li class="active" data-filter="*">Day</li>
                                <li data-filter=".week">Week</li>
                                <li data-filter=".month">Month</li>
                                <li data-filter=".years">Years</li>
                            </ul>
                            <div class="filter__gallery">
                            <?php $query26 = "SELECT * FROM serie WHERE views>100000 LIMIT 0,2";
                                            $risultato26 = $mydb->query($query26);
                                            if($risultato26->num_rows > 0){  
                                                while($qu26 = $risultato26->fetch_assoc()){?>
                                                 
                                                <?php echo "<div class='product__sidebar__view__item set-bg mix years' data-setbg=".$qu26["immagine"].">"; ?>
                                                <?php  $query18 =" SELECT COUNT(episodi.fkSerie)as episodi FROM serie INNER JOIN episodi on episodi.fkSerie = serie.id WHERE serie.id = ".$qu26["id"]."";
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
                                            <?php $query26 = "SELECT * FROM serie WHERE views>200000 LIMIT 0,1";
                                            $risultato26 = $mydb->query($query26);
                                            if($risultato26->num_rows > 0){  
                                                while($qu26 = $risultato26->fetch_assoc()){?>
                                                <div class="filter__gallery">
                                                <?php echo "<div class='product__sidebar__view__item set-bg mix month' data-setbg=".$qu26["immagine"].">"; ?>
                                                <?php  $query18 =" SELECT COUNT(episodi.fkSerie)as episodi FROM serie INNER JOIN episodi on episodi.fkSerie = serie.id WHERE serie.id = ".$qu26["id"]."";
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
                                            <?php $query26 = "SELECT * FROM serie WHERE views>10000000 LIMIT 0,2";
                                            $risultato26 = $mydb->query($query26);
                                            if($risultato26->num_rows > 0){  
                                                while($qu26 = $risultato26->fetch_assoc()){?>
                                                <div class="filter__gallery">
                                                <?php echo "<div class='product__sidebar__view__item set-bg mix week years' data-setbg=".$qu26["immagine"].">"; ?>
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
                                            <script>!function(d,l,e,s,c){e=d.createElement("script");e.src="//ad.altervista.org/js.ad/size=300X250/?ref="+encodeURIComponent(l.hostname+l.pathname)+"&r="+Date.now();s=d.scripts;c=d.currentScript||s[s.length-1];c.parentNode.insertBefore(e,c)}(document,location)</script>

                           </div>
            </div>
        </div>
    </div>
    
</div>
</div>
</div>
</div>
</section>
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
<center><a href="https://www.iubenda.com/privacy-policy/37883469" rel="noreferrer nofollow" target="_blank">Privacy Policy</a>
- <a href="#" role="button" class="iubenda-advertising-preferences-link">Personalizza tracciamento pubblicitario</a></center>
  <!-- Search model Begin -->
  <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>

        <form id="search-input" class="search-model-form"  method="post" action="risultatocerca.php">
            <input type="text" id="search-input" placeholder="Cerca qui....." name="cerca" required>
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