<?php
global $PDO;
if (isset($PDO)) {
    return $PDO;
}

$PDO = new PDO("mysql:host=localhost;dbname=freedom", "root", "");
