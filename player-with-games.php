<?php
require_once("util-db.php");
require_once("model-player-with-game.php");

$pageTitle = "Player with Game";
include "view-header.php";
$Player = selectPlayersByGame();
include "view-player-with-game.php";
include "view-footer.php";
?>
