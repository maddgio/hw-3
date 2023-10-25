<?php
require_once("util-db.php");
require_once("model-game.php");

$pageTitle = "Game";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
    insertGame($_POST['gDate'], $_POST['gLocation']);
    break;
  }
}
$Game = selectGame();
include "view-game.php";
include "view-footer.php";
?>
