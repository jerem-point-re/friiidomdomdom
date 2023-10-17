<?php
function kriayteKommanteAxssion($id_status)
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
        $verif = kriayteKommante($id_users, $id_status, $content);
        if (!$verif) {
            echo "Erreur lors de la création du comentaire";
        } else {
            header("Location: $bazeURL");
        }
    }
}