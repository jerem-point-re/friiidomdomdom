<?php
session_start();
global $bazeURL;
$bazeURL = "http://localhost/etiennev/friiidomdomdom/";

global $izKonecTed;
$izKonecTed = isset($_SESSION["user"]);

foreach (glob("modeulz/*.php") as $filename) {
    require_once $filename;
}
foreach (glob("viouz/*.php") as $filename) {
    require_once $filename;
}
foreach (glob("kontroleurz/*.php") as $filename) {
    require_once $filename;
}
