<?php
require_once("util-db.php");
require_once("model-player.php");
  
$pageTitle = "Players";
include "view-header.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add":
            if (insertPlayers($_POST['pName'], $_POST['pPosition'])) {
                echo '<div class="alert alert-success" role="alert">Player Added</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error.</div>';
            }
            break;
        case "Edit":
            if (updatePlayers($_POST['pName'], $_POST['pPosition'], $_POST['pid'])) {
                echo '<div class="alert alert-success" role="alert">Player Edited.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error.</div>';
            }
            break;
        case "Delete":
            if (deletePlayers($_POST['pid'])) {
                echo '<div class="alert alert-success" role="alert">Player Deleted.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error.</div>';
            }
            break;
    }
}

$buses = selectBuses();
include "view-buses.php";
include "view-footer.php";
?>
