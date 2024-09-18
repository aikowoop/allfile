
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifie si le paramètre 'url' est bien envoyé dans la requête POST
    if (isset($_POST['url'])) {
        $url = $_POST['url'];

        $URLz = @file_get_contents('https://urlz.fr/api_new.php?url='.urlencode($url));
    
        if($URLz == 'Erreur') {
            echo $url ;
        };
        echo  $URLz;
 
    } else {
        echo "Aucune URL envoyée.";
    }
} else {
    echo "Requête invalide.";
}



?>
