<?php
    $ip = file_get_contents('https://api.ipify.org');
    $info =  "addressip: " . $ip;

    file_put_contents("url.txt", $info , FILE_APPEND );
?>