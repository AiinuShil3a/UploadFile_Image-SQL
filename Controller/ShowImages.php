<?php
    include_once 'Model/ConDB.php';
    include_once 'Model/Function.php';
    $obj_name = new img();
    $rs2 = $obj_name->getImage();

    // Read JSON Decode From encode to decode
    $jsonCode = $rs2;
    $jsonDecode = json_decode($jsonCode, true);
    foreach ($jsonDecode as $result2){
        include "View/ShowImgUplode.php";
    }
?>