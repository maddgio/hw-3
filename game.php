<?php
require_once("util-db.php");
require_once("model-game.php");
$pageTitle = "Games";
include "view-header.php";
if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
    if (insertGame($_POST['gDate'], $_POST['gLocation'])) {
    echo '<div class="alert alert-success" role="alert">Game Added</div>';
  } else {
    echo '<div class="alert alert-danger" role="alert">Error</div>';
}
    break;
    case "Delete":
    if (deleteGame($_POST['$gid'])) {
    if (deleteGame($_POST['gid'])) {
    echo '<div class="alert alert-success" role="alert">Game Deleted</div>';
  } else {
    echo '<div class="alert alert-danger" role="alert">Error</div>';
}
    break;
  }
}
}
$Game = selectGame();
include "view-game.php";
include "view-footer.php";
?>
