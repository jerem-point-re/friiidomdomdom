<?php

function layikeAxssion()
{
    global $bazeURL;

    if (isset($_GET["a"]) && isset($_GET["id_status"]) && isset($_SESSION["user"]) && ($_GET["a"] == "kriayte" || $_GET["a"] == "dilette")) {
        $axssion = $_GET["a"];
        $id_status = $_GET["id_status"];
        $id_users = $_SESSION["user"]["id_users"];
        if ($axssion == "kriayte") {
            kriayteLayike($id_status, $id_users);
        } elseif ($axssion == "dilette") {
            diletteLayike($id_status, $id_users);
        } else {
            echo "Erreur 404 - Axssion inconnue";
        }
    }
    header("Location: $bazeURL");
}

?>