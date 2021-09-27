<?php
$image_size = getimagesize($_FILES['fichier']['name']);

if ($_FILES['fichier']['error'] > 0) {
$erreur = "Erreur lors de l'envoi du fichier.";
echo $erreur;
}

if ($_FILES['fichier']['size'] > 100000) {
$erreur = "Le fichier est trop lourd";
echo $erreur;
}

$destination = "/Rendu";

$resultat = move_uploaded_file($_FILES['fichier']['name'], $destination);
 include(Travaux.php)
?>