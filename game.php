<?php
require_once("util-db.php");
require_once("model-game.php");

$pageTitle = "Game";
include "view-header.php";
$Game = selectGame();
include "view-game.php";
include "view-footer.php";
?>
