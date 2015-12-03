<?php
include "./badge.php";
include "./debadge.php";

session_start();

ini_set('display_errors', 'On');
date_default_timezone_set('Europe/Paris');
error_reporting(E_ALL);
//Connection a la bd------------------------------------------------------------
$db = new PDO('mysql:host=localhost;dbname=pointeusev02', 'root', 'toor');

$action = $_POST['action'];
$user = $_SESSION["user"];

switch ($action) {
    case "badge":
        $badge = new badge($db);

        break;

    case "debadge":
        $debadge = new debadge($db);

        break;


}
?>
