<!DOCTYPE html>
<html>
  <head>
    <title>Inscription à Uninum</title>
    <meta charset="UTF-8" />
    <meta name="author" content="Alexandre De Miranda Lopes" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Uninum, Projet tuteuré, MMI, Corte" />
    <meta name="description" content="Uninum est un projet Universitaire réalisé par trois étudiants du DUT MMI de l'IUT de Corse dans le cadre de l'année Universitaire 2020/2021" />
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style_inscription.css" type="text/css" />
    <link rel="icon" type="image/png" sizes="16x16" href="img/Logotriangle.png"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </head>
  <body>

  <?php
$langue = 0;
if(isset($_GET['lang']))
$langue = 1;
$titre = array("Formulaire d'inscription",'Furmulariu');
$nom = array('Votre nom :','Casata :');
$prenom = array('Votre prénom :','Nome :');
$mail = array('Votre adresse E-mail :','Vostru mail :');
$mailC = array('Confirmer le mail :','Cunfirmà u mail :');
$mp = array('Entrez un mot de passe :',"Entra parolla d'intesa :");
$mpc = array('Confirmez le mot de passe :',"Cunfirmà parolla d'intesa :");
$btn = array('Valider','Validà');
  ?>

    <?php
    if (isset($_POST['firstname'])){
      $errormsg ="";
      if (strlen($_POST['firstname']) > 25){
        $errormsg .="Le champs doit être inférieur à 25 caractèress<br>";
      }
      if (strlen($_POST['lastname']) > 25){
        $errormsg .="Le champs nom doit être inférieur à 25 caractèress<br>";
      }
      if (strlen($_POST['mail']) > 100){
        $errormsg .="Le champs mail doit être inférieur à 100 caractèress<br>";
      }
      if (strlen($_POST['psw']) < 8){
      $errormsg .="Vous devez saisir au moins 8 caractères<br>";
      }
      if (strcmp($_POST['psw'], $_POST['psw2']) != 0){
      $errormsg .="Les mots de passe ne sont pas identique <br>";
      }
      if (strcmp($errormsg,"") == 0){
        echo "Inscription terminé.<br>";
      }
      else{
        echo $errormsg."<br><a href='creation_compte.php'> Retour</a>";
      }
    }
    else {

    ?>
   <header class="row">
    <a href="creation_compte.php" target="_self"><img src="img/drapeau-francais.png" class="drapeau"  /></a>
    <a href="creation_compte.php?lang=1" target="_self"><img src="img/drapeau-corse.png" class="drapeau" /></a>
      <div class="col-xs-12 col-sm-12 col-md-12" id="imgaccueil">
        <img src="img/Logo.png">

      </div>
      <div class="container" id="log">
      <form action="creation_compte.php" method="POST">
    <h1>  <?php echo $titre[$langue]; ?> <br></h1>
      <label for="firstname"><?php echo $prenom[$langue]; ?> </label><br>
      <input type="text" name="firstname" id="firstname" required style="color: black"><br>

      <label for="lastname"><?php echo $nom[$langue]; ?> </label><br>
      <input type="text" name="lastname" id="lastname" required style="color: black"><br>

      <label for="mail"><?php echo $mail[$langue]; ?></label><br>
      <input type="mail" name="mail" id="mail" required style="color: black"><br>

      <label for="psw"> <?php echo $mp[$langue]; ?>  </label><br>
      <input type="password" name="psw" id="psw" required style="color: black"><br>

      <label for="psw2"> <?php echo $mpc[$langue]; ?>  </label><br>
      <input type="password" name="psw2" id="psw2" required style="color: black"><br>

      <label><button type="submit"> <?php echo $btn[$langue]; ?> </button></label>
</div>
      </header>
    </form>

    <?php
    }
    ?>
  </body>
</html>
