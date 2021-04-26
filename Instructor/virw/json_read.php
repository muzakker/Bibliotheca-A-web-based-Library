<?php

    $myFile = fopen('users.json', 'r');
    $data = fread($myFile, filesize('users.json'));
    $json = json_decode($data, true);

?>