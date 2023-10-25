<?php
require_once("util-db.php");
require_once("model-game.php");

$pageTitle = "Game";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
    if (insertGame($_POST['gDate'], $_POST['gLocation']));
    echo '<div class="alert alert-success" role="alert">Game Added</div>"';
  } else {
    echo '<div class="alert alert-success" role="alert">Error</div>"';
}
    break;
  }
}
$Game = selectGame();
include "view-game.php";
include "view-footer.php";
?>
