<?php
function reudgisteurAxssion()
{
    global $bazeURL;
    if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["lastName"]) && isset($_POST["firstName"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $lastName = $_POST["lastName"];
        $firstName = $_POST["firstName"];
        $verif = reudgisteur($username, $password, $lastName, $firstName);
        if ($verif) {
            header("Location: $bazeURL/?p=loguine");
        } else {
            echo "Erreur lors de l'inscription";
        }
    }

    reudgisteurPaje();
}
