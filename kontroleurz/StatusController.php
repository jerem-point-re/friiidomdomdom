<?php
function kriayteStatiouzAxssion()
{
    global $izKonecTed;
    global $bazeURL;
    if (!$izKonecTed) {
        header("Location: $bazeURL/?p=loguine");
        return;
    }
    if (isset($_POST["content"])) {
        $id_users = $_SESSION["user"]["id_users"];
        $content = $_POST["content"];
        $verif = kriayteStatiouz($id_users, $content);
        if (!$verif) {
            echo "Erreur lors de la création du status";
        } else {
            header("Location: $bazeURL");
        }
    }
}