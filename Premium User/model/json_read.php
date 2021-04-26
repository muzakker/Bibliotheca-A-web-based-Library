<?php

    $myFile = fopen('../model/users.json', 'r');
    $data = fread($myFile, filesize('../model/users.json'));
    $json = json_decode($data, true);

?>