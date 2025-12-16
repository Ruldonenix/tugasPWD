<?php
include "config.php";
include "Database.php";
include "Game.php";

$db = new Database($conn);
$game = new Game($db->getConnection());

$id = $_GET["id"];

$game->delete($id);
header("Location: index.php");
?>
