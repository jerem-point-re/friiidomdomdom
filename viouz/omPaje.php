<?php

function omPaje($allStatiouz)
{
    global $izKonecTed;
    $titre = "Om";
    ob_start();

    if ($izKonecTed) { ?>
        <form method="POST" action="?p=statiouz&a=kriayte">
            <textarea name="content" placeholder="Nouveau statiouz" cols="37" rows="13" required></textarea>
            <input type="submit" value="Seumite statiouz">
        </form>
    <?php } ?>

    <div class="container">
        
            <?php foreach ($allStatiouz as $s) { ?>
                <div class="card">
                <h3>
                    <?= "By " . guetIouzeurPseudo($s["id_users"]) ?>
                </h3>
                <p>
                    <?= $s["content"] ?>
                </p>

                <?php
                if ($izKonecTed) { ?>
                    <form method="POST" action="?p=kommante&a=kriayte&id_status=<?= $s["id"] ?>">
                        <textarea name="content" placeholder="Plassoldeur du commentaire" cols="37" rows="2" required></textarea>
                        <br><input type="submit" value="Seumite kommante">
                    </form>
                <?php } ?>
                <?php $comments = guetOlKommantsBayiStatiouz($s["id"]);
                if (count($comments) <= 5) {
                    foreach ($comments as $c) { ?>
                        <p>
                            <?= guetIouzeurPseudo($c["id_users"]) . " said: " ?>
                            <?= $c["content"] ?>
                        </p>
                    <?php }
                } else {
                    echo "<br> Too much comments, ouch!";
                }
                ?>

                <div class="layikss">
                    <?php if ($izKonecTed) {
                        
                        if (izLayikedde($s["id"], $_SESSION["user"]["id_users"])) {
                            $axssion = "diletteLayike";
                            $value = "<ion-icon name='heart-outline' size='large'></ion-icon>";
                        } else {
                            $axssion = "kriayteLayike";
                            $value = "<ion-icon name='heart-outline' size='large'></ion-icon>";
                        }?>
                        <a href="?p=layike&a=<?= $axssion ?>&id_status=<?= $s["id"] ?> ">
                            <?= $value ?>
                        </a>
                        <?php } ?>
                </div>
               
                </div>
            <?php } ?>
    
    </div>

<?php

    $contenu = ob_get_clean();
    require "yayout.php";
}

?>