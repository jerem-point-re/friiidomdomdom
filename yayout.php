<?php

global $bazeURL;
global $izKonecTed;

?>

<!DOCTYPE html>
<html lang="franglais">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="https://via.placeholder.com/16x16/E5BF63/333?text=F" type="image/x-icon">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="stil.css">
    <title>
        <?= $titre ?> Paje
    </title>
</head>

<body>
    <div class="hideure">
        <div class="nav">
            <ul>
                <li class="logo">
                    <a href="<?= $bazeURL ?>"><img src="logo.png" alt=""></a>
                </li>
            </ul>
            <ul>
                <?php if (!$izKonecTed) { ?>
                    <li><a href="<?= $bazeURL ?>?p=loguine">Loguine</a></li>
                    <li><a href="<?= $bazeURL ?>?p=reudgisteur">Reudgisteur</a></li>
                <?php } ?>
                <?php if ($izKonecTed) { ?>
                    <li><a href="<?= $bazeURL ?>?p=loguaoute">Loguaoute</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="meyin">
        <center>
            <h1>
                <?= $titre ?> Paje
            </h1>
        </center>
        <?= $contenu ?>
    </div>
</body>

</html>