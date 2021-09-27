<html>
<head>
  <title>Connexion à Uninum</title>
  <meta charset="UTF-8" />
  <meta name="author" content="Alexandre De Miranda Lopes" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="keywords" content="Uninum, Projet tuteuré, MMI, Corte" />
  <meta name="description" content="Uninum est un projet Universitaire réalisé par trois étudiants du DUT MMI de l'IUT de Corse dans le cadre de l'année Universitaire 2020/2021" />
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <link rel="stylesheet" href="css/style_login.css" type="text/css" />
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
$mp = array('Entrez un mot de passe :',"Entra parolla d'intesa :");
$btn = array('Se connecter','Cunetassi');
$id = array('Identifiant','Identificazioni');
$com = array('Création de compte','Criazioni di u contu');
  ?>
<body background="#116197">
  <div class="container-fluid">
    <header class="row">
      <a href="Login_Uninum.php" target="_self"><img src="img/drapeau-francais.png" class="drapeau"  /></a>
    <a href="Login_Uninum.php?lang=1" target="_self"><img src="img/drapeau-corse.png" class="drapeau" /></a>
      <div class="col-xs-12 col-sm-12 col-md-12" id="imgaccueil">
        <img src="img/Logo.png">
      </div>
      <center>
        <div class="container" id="log">
          <label for="uname"><?php echo $id[$langue];?></label><br>
          <input type="text" placeholder="<?php echo $id[$langue]; ?>" name="uname" required style="color: black">
          <br>
          <label for="psw"><?php echo $mp[$langue]; ?></label><br>
            <input type="password" placeholder="<?php echo $mp[$langue]; ?>" name="psw" required style="color: black"><br>
            <label> <a href="index.php"><button type="submit"><?php echo $btn[$langue]; ?></button></a></label><br>
           <a href="creation_compte.php"> <p style="color: white; "><?php echo $com[$langue];?></p></a>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>
      </center>
    </header>

  </div>
</body>
</html>
