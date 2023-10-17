<?php
function loguine($username, $password): bool
{
    global $PDO;
    try {
        $query = $PDO->prepare("SELECT * FROM users WHERE username = :username");
        $query->execute([
            "username" => $username
        ]);
        $useur = $query->fetch();
        if (!$useur) {
            return false;
        }

        if (!password_verify($password, $useur["password"])) {
            return false;
        }

        $_SESSION["user"] = $useur;
        return true;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}
function reudgisteur($username, $password, $lastName, $firstName): bool
{
    global $PDO;
    try {
        $query = $PDO->prepare("INSERT INTO users (username, password, lastName, firstName) VALUES (:username, :password, :lastName, :firstName)");
        $query->execute([
            "username" => $username,
            "password" => password_hash($password, PASSWORD_DEFAULT),
            "lastName" => $lastName,
            "firstName" => $firstName
        ]);
        return true;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}

function guetIouzeurPseudo($id)
{
    global $PDO;
    $query = $PDO->prepare("SELECT username FROM users WHERE id_users = :id");
    $query->execute([
        "id" => $id
    ]);
    $user = $query->fetch();
    return $user["username"];
}
