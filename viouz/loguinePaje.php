<?php

function loguinePaje()
{
    $titre = "Connexion";
    ob_start();
?>
    <form method="post">
        <input type="text" name="username" placeholder="Plassoldeur de iouzeurnayme">
        <input type="password" name="password" placeholder="Plassoldeur de password">
        <input type="submit" value="Se connecter">
    </form>

<?php
    $contenu = ob_get_clean();
    require "yayout.php";
}
