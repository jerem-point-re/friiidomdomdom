<?php
require_once "ottolohad.php";

if (isset($_GET["p"])) {
    $paje = $_GET["p"];
    switch ($paje) {
        case "layike":
            layikeAxssion();
            break;
        case "loguaoute":
            loguaouteAxssion();
            break;
        case "reudgisteur":
            reudgisteurAxssion();
            break;
        case "loguine":
            loguineAxssion();
            break;
        case "statiouz":
            if (!isset($_GET["a"])) {
                echo "Erreur 404 - Action inconnue";
                break;
            }
            $axssion = $_GET["a"];
            if ($axssion == "kriayte") {
                kriayteStatiouzAxssion();
            } else {
                echo "Erreur 404 - Action inconnue";
            }
            break;
        case "kommante":
            if (!isset($_GET["a"]) && !isset($_GET["id_status"])) {
                echo "Erreur 404 - Action inconnue";
                break;
            }
            $axssion = $_GET["a"];
            if ($axssion == "kriayte") {
                $id_status = $_GET["id_status"];
                kriayteKommanteAxssion($id_status);
            } else {
                echo "Erreur 404 - Action inconnue";
            }
            break;
        default:
        echo "Erreur 404";
            break;
    }
} else {
    omAxssion();
}