<?php
require_once("util-db.php");
require_once("model-team-stats.php");

$pageTitle = "Team Stats";
include "view-header.php";
$Stats = SelectStats($_GET["pid"]);
include "view-team-stats.php";
include "view-footer.php";
?>
