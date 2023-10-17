<?php
function guetOlKommantsBayiStatiouz($id_status)
{
    global $PDO;
    $query = $PDO->prepare("SELECT * FROM comments where id_status = :id_status ORDER BY createdAt DESC");
    $query->execute([
        "id_status" => $id_status
    ]);
    $kommants = $query->fetchAll();
    return $kommants;
}

function kriayteKommante($id_users, $id_status, $content): bool
{
    global $PDO;
    try {
        $query = $PDO->prepare("INSERT INTO comments (id_users,id_status, content,createdAt) VALUES (:id_users,:id_status, :content, :createdAt)");
        $query->execute([
            "id_users" => $id_users,
            "id_status" => $id_status,
            "content" => $content,
            "createdAt" => date("Y-m-d H:i:s")
        ]);
        return true;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}
