<?php

include("dump.inc.php");
include("rib.class.php");

//my_var_dump($_POST);

$validator = new RIBValidator($_POST["bankcode"], $_POST["agencycode"], $_POST["account"], $_POST["key"]);

//my_var_dump($validator);

if ($validator->isValid()) {
    //echo "valide";
    header("Location: index.php?notif=ok");
    exit;
} else {
    //echo "non valide";
    header("Location: index.php?notif=nok");
    exit;
}