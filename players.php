

<?php
require_once("util-db.php");
require_once("model-player.php");
$pageTitle = "Players";
include "view-header.php";
if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
    if (insertPlayer($_POST['pName'], $_POST['pPosition'])) {
    echo '<div class="alert alert-success" role="alert">Player Added</div>';
  } else {
    echo '<div class="alert alert-danger" role="alert">Error</div>';
}
    break;
     case "Edit":
    if (updatePlayer($_POST['pName'], $_POST['pPosition'], $_POST['pid'])) {
    echo '<div class="alert alert-success" role="alert">Game Edited</div>';
  } else {
    echo '<div class="alert alert-danger" role="alert">Error</div>';
}
    break;
    case "Delete":
    if (deletePlayer($_POST['pid'])) {
    echo '<div class="alert alert-success" role="alert">Player Deleted</div>';
  } else {
    echo '<div class="alert alert-danger" role="alert">Error</div>';
}
    break;
  }
}
$Game = selectPlayers();
include "view-player.php";
include "view-footer.php";
?>
