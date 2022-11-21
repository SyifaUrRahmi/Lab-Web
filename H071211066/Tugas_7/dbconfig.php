<?php

try {
    $con = new PDO('mysql:host=localhost;dbname=kipk', 'root', '', array(PDO::ATTR_PERSISTENT => true));
} catch (PDOException $e) {
    echo $e->getMessage();
}

include_once 'Kipk.php';

$user = new Kipk($con);
