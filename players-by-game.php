<?php
require_once("util-db.php");
require_once("model-players-by-game.php");

$pageTitle = "Players by Game";
include "view-header.php";
$GamePlayers = SelectGamePlayers($_POST['gpid']);
include "view-players-by-game.php";
include "view-footer.php";
?>
