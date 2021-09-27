<!DOCTYPE html>
<html>
  <head>
    <title>Accueil Uninum</title>
    <meta charset="UTF-8" />
    <meta name="author" content="Alexandre De Miranda Lopes" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Uninum, Projet tuteuré, MMI, Corte" />
    <meta name="description" content="Uninum est un projet Universitaire réalisé par trois étudiants du DUT MMI de l'IUT de Corse dans le cadre de l'année Universitaire 2020/2021" />
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/png" sizes="16x16" href="img/Logotriangle.png" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

  </head>
   <?php
$langue = 0;
if(isset($_GET['lang']))
$langue = 1;
$ac = array('Accueil',"Accolta");
$slt = array('Salut','Salute');
$etu = array('Etudiants','Studienti');
$per = array('Personnels','Persunale');
$rec = array('Recherche','Ricerca');
$par = array('Partenaires Pro','Cumpagni Pro');
$fond = array('Fondation','Fundazione');
$id = array('Identifiant','Identificazioni');
$com = array('Création de compte','Criazioni di u contu');
$res = array('Nos réseaux Sociaux','Reti Suciali');
$bou = array("La boutique de l'Università","A butteguccia di l'Università");
$fid = array("Crédits & mentions légales","Fiduccia & Menzione legale");
$con = array("Contacts","Cuntatti");
$pla = array("plan d'accès","Pianu d'accessu");
$esp = array("Espace presse","Stampa scritta");
$pho = array("Phototèque","Fototecu");
$rec = array("Recrutement","Ricrutamentu");
$mar = array("Marchés publics","Mercatu publicu");
$acc = array("Accessibilité","Accessibilità");
 ?>
  <body id="linear-gradient">
    <div class="container-fluid">
      <header class="row">
        <div class="col-xs-12 col-sm-4 col-md-4" id="imgaccueil">
          <img src="img/Logohorinzontalmono.png">
        </div>
        <div class="nav ui li a col-sm-8">
          <nav class="navbar">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <center>
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              </center>
              </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="https://studia.universita.corsica/"><?php echo $etu[$langue];?></a></li>
                <li><a href="Login_Uninum.php"><?php echo $per[$langue];?></a></li>
                <li><a href="https://ricerca.universita.corsica/"><?php echo $rec[$langue];?></a></li>
                <li><a href="https://pro.universita.corsica/"><?php echo $par[$langue];?></a></li>
                <li><a href="https://fundazione.universita.corsica/"><?php echo $fond[$langue];?></a></li>
                <a href="index.php" target="_self"><img src="img/drapeau-francais.png" class="drapeau"  /></a>
                <a href="index.php?lang=1" target="_self"><img src="img/drapeau-corse.png" class="drapeau" /></a>
              </ul>
            </div>
          </nav>
        </div>
      </header>
      <section class="row">
        <div class="col-xs-12 col-sm-12 col-md-12" id="title">
          <center><h1><?php echo $ac[$langue];?></h1></center>
          <center><h2><?php echo $slt[$langue];?> Alexis Giacobbi</h2></center>
            <br>
        </div>
      </section>
      <section class="row" id="mid">
        <div class="col-xs-12 col-sm-12 col-md-12">
           <img src="img/Univ.jpg" width="140%" height="100%" class="img-responsive">
        </div>
      </section>
     <section class="row " id="corps">
       <div class="col-md-4" id="a">
          <a href="./Cours_En_Ligne.php">
            <img src="img/coursenligne.jpg" class="img-rounded" style="width:100%">
          </a>
        </div>
        <div class="col-md-4" id="a">
          <a href="./EDT.php">
            <img src="img/emploidutemps.jpg" class="img-rounded" style="width:100%">
          </a>
        </div>
        <div class="col-md-4" id="a">
          <a href="https://www.office.com/?auth=2&home=1">
            <img src="img/mail.jpg" class="img-rounded" style="width:100%">
          </a>
        </div>
     </section>
     <br>
      <div class="container" id="video">
  <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HqutiHGSc-g"></iframe>
  </div>
</div>
      <footer class="row">
        <div class="col-xs-12 col-sm-12 col-md-4">
          <div class="icon-bar">
            <div class="title" style="color:white"> <h4><?php echo $res[$langue];?></h4> </div>
      						<a href="https://www.facebook.com/univcorse" target="_blank" title="Facebook"><img src="img/Facebook.png"></a>
      						<a href="https://twitter.com/univcorse" target="_blank" title="Twitter"><img src="img/Twitter.png"></a>
      						<a href="https://www.instagram.com/univcorse/" target="_blank" title="Instagram"><img src="img/Instagram.png"></a>
      						<a href="https://www.linkedin.com/edu/school?id=12495" target="_blank" title="LinkedIn"><img src="img/linkedin.png"></a>
      						<br>
      						<a href="https://www.youtube.com/c/univcorse" target="_blank" title="YouTube"><img src="img/yt.png"></a>
      						<a href="http://www.franceculture.fr/conferences/corse-pasquale-paoli" target="_blank"  title="Retrouvez une sélection de cours et de conférences sur France Culture Conférences, accessible depuis www.franceculture.fr"><img src="img/culture.png"></a>
      						<a href="https://www.universita.corsica/appli" target="_blank" title="Appli"><img src="img/phone.png"></a>
      						<a href="https://www.universita.corsica/fr/flux-rss" target="_blank" title="Flux RSS"><img src="img/wifi.png"></a>
      						<br><br>
      						<div class="title" style="color:white"> <h4><?php echo $bou[$langue];?></h4> </div>
      						<a class="boutiquefooter" href="https://shop.universita.corsica" target="_blank" title="Aller sur la boutique de l'Université de Corse">A butteguccia</a><br>
      		</div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4" id="discord">
          <iframe src="https://discord.com/widget?id=689460305582882856&theme=dark" width="300" height="350" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4" id="discord">
          <a href="https://teams.microsoft.com/l/channel/19%3acedccaa959aa45629f62253028a1c40b%40thread.tacv2/G%25C3%25A9n%25C3%25A9ral?groupId=15698ea5-74f0-4e7f-a72a-aa0d30116650&tenantId=98cf6e20-76a4-49cf-b24b-5c2c7b530ca0" target="_blank"><img src="img/Teams.png"></a>
        </div>
        <center>
        <div class="col-xs-12 col-sm-4 col-md-12">
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="https://www.universita.corsica/fr/mentions-legales/"><?php echo $fid[$langue];?></a></li>
                <li><a href="https://www.universita.corsica/fr/contacts/"><?php echo $con[$langue];?></a></li>
                <li><a href="https://www.universita.corsica/fr/universita/plan-des-campus/"><?php echo $pla[$langue];?></a></li>
                <li><a href="https://www.universita.corsica/fr/presse/"><?php echo $esp[$langue];?></a></li>
                <li><a href="https://phototheque.universita.corsica/"><?php echo $pho[$langue];?></a></li>
                <li><a href="https://www.universita.corsica/fr/recrutement/"><?php echo $rec[$langue];?></a></li>
                <li><a href="https://pro.universita.corsica/plugins/marches_publics/marches_publics-front.php?acces=ok&id_art=469&id_rub=0&id_site=4&id_menu=53&header_plugin=ok"><?php echo $mar[$langue];?></a></li>
                <li><a href="https://www.universita.corsica/fr/accessibilite/"><?php echo $acc[$langue];?></a></li>
              </ul>
            </div>
          </div>
          </center>
        </footer>
      </div>
    </body>
  <script src="js/script.js"></script>
</html>
