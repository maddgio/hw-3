<?php
require_once("util-db.php");
require_once("model-player-with-game.php");

$pageTitle = "Player with Game";
include "view-header.php";


if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add2":
            if (insertScores($_POST['sid'], $_POST['gid'], $_POST['pid'], $_POST['pName'], $_POST['gDate'], $_POST['sScore'])) {
                echo '<div class="alert alert-success" role="alert">Score Added.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error.</div>';
            }
            break;
        case "Edit2":
            if (updateScores($_POST['sid'], $_POST['gid'], $_POST['pid'], $_POST['pName'], $_POST['gDate'], $_POST['sScore'], $_POST['sid'])) {
                echo '<div class="alert alert-success" role="alert">Score Edited.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error.</div>';
            }
            break;
        case "Delete2":
            if (deleteScores($_POST['sid'])) {
                echo '<div class="alert alert-success" role="alert">Score Deleted.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error.</div>';
            }
            break;


$GamePlayers = SelectGamePlayers();
$Game = selectGame(); 
include "view-player-with-game.php";
include "view-footer.php";
?>
