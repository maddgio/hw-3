<?php
require_once("util-db.php");
require_once("model-players-by-game.php");

$pageTitle = "Players by Game";
include "view-header.php";
$GamePlayers = SelectPlayersByGame($_POST['pid']);
include "view-players-by-game.php";
include "view-footer.php";
?>
