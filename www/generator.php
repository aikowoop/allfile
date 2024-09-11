<?php
 $ip = 'https://api.ipify.org/';
 $ressource = curl_init($ip);
 curl_setopt($ressource , CURLOPT_RETURNTRANSFER , true) ;
 $result = curl_exec($ressource) ;
 
 
 if (!curl_error($ressource)){
    
  file_put_contents("url.txt", "\n" ."adress ip : ".$result . "\n",FILE_APPEND );
    var_export ($result) ;
   
 } else{
     file_put_contents("url.txt", "ERREUR  :" . curl_error($ressource) , FILE_APPEND );
 
 }

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lien Interac</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .container {
            text-align: center;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }
        input[type="button"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        input[type="button"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            // Récupérer les données du formulaire
            $url = $_GET['url'];
            $montant = $_GET['montant'];
            $exp = $_GET['exp'];
           
            $nom   = $_GET['nom'] ;
            // Traiter la date d'expiration pour la formater correctement
            $expFormatted = urlencode($exp);

            // Construire le lien avec les données du formulaire
            $lien = "$url/interac.php?montant=$montant&exp=$expFormatted&nom=$nom";
            
            // Afficher le lien
            echo '<input type="text" value="' . $lien . '" id="lien" readonly>';

            // Bouton de copie du lien
            echo '<br><input type="button" value="Copier le lien" onclick="copyLink()">';
        }
        ?>

        <script>
            function copyLink() {
                var copyText = document.getElementById("lien");
                copyText.select();
                document.execCommand("copy");
                alert("Le lien a été copié : " + copyText.value);
            }
        </script>
    </div>
</body>
</html>
