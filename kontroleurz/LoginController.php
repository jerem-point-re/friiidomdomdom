<?php
function loguineAxssion()
{
    global $bazeURL;
    global $izKonecTed;
    if ($izKonecTed) {
        header("Location: $bazeURL");
    }
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $verif = loguine($username, $password);
        if ($verif) {
            header("Location: $bazeURL");
        } else {
            echo "Erreur lors de la connexion";
        }
    }
    loguinePaje();
}

function loguaouteAxssion()
{
    global $bazeURL;
    session_destroy();
    header("Location: $bazeURL");
}
