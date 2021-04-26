<?php

    $myFile = fopen('../model/renew-users.json', 'r');
    $data = fread($myFile, filesize('../model/renew-users.json'));
    $json = json_decode($data, true);

?>