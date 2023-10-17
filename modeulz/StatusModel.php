<?php
function guetOlStatiouz()
{
    global $PDO;
    $query = $PDO->prepare("SELECT * FROM status ORDER BY createdAt DESC");
    $query->execute();
    $status = $query->fetchAll();
    return $status;
}

function kriayteStatiouz($id_users, $content): bool
{
    global $PDO;
    try {
        $query = $PDO->prepare("INSERT INTO status (id_users, content) VALUES (:id_users, :content)");
        $query->execute([
            "id_users" => $id_users,
            "content" => $content
            // "createdAt" => date("Y-m-d H:i:s")
        ]);
        return true;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}
