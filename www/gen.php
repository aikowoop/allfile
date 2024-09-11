<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
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
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        input {
            margin-bottom: 10px;
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="generator.php" method="GET">
        <label for="url">Adresse URL principale :</label>
        <input type="text" id="url" name="url" placeholder="Entrez l'adresse URL principale (ex: http://localhost:8080)" required><br>

        <label for="montant">Montant :</label>
        <input type="text" id="montant" name="montant" placeholder="Entrez le montant" required><br>
        
        <label for="montant">nom + prenom :</label>
        <input type="text" id="nom" name="nom" placeholder="Entrez le nom" required><br>
        
        <label for="exp">Date d'expiration (mois, jour) :</label>
        <input type="text" id="exp" name="exp" placeholder="Entrez la date d'expiration" required><br>
        
        <input type="submit" value="Générer le lien">
    </form>
</body>
</html>
