<?php

function reudgisteurPaje()
{
    $titre = "Reudgisteur";
    ob_start();
?>
    <form method="POST">
        <input type="text" name="username" placeholder="Plassoldeur de iouzeurnayme">
        <input type="text" name="lastName" placeholder="Plassoldeur du nom">
        <input type="text" name="firstName" placeholder="Plassoldeur du prénom">
        <input type="password" name="password" placeholder="Plassoldeur du password">
        <input type="submit" value="S'inscrire">
    </form>

<?php
    $contenu = ob_get_clean();
    require "yayout.php";
}
