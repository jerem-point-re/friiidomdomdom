<?php

function izLayikedde($id_status, $id_users)
{
    global $PDO;
    try {
        $query = $PDO->prepare("SELECT * FROM likes WHERE id_users = :id_users AND id_status = :id_status");
        $query->execute([
            "id_users" => $id_users,
            "id_status" => $id_status
        ]);
        $liked = $query->fetch();
        if (!$liked) {
            return false;
        }
        return true;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}

function kriayteLayike($id_status, $id_users)
{
    global $PDO;
    try {
        $query = $PDO->prepare("INSERT INTO likes (id_users, id_status) VALUES (:id_users, :id_status)");
        $query->execute([
            "id_users" => $id_users,
            "id_status" => $id_status
        ]);
        return true;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}

function diletteLayike($id_status, $id_users)
{
    global $PDO;
    try {
        $query = $PDO->prepare("DELETE FROM likes WHERE id_users = :id_users AND id_status = :id_status");
        $query->execute([
            "id_users" => $id_users,
            "id_status" => $id_status
        ]);
        return true;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}

?>