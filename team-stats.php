<?php
require_once("util-db.php");
require_once("model-team-stats.php");

$pageTitle = "Team Stats";
include "view-header.php";
$Stats = selectStats();
include "view-team-stats.php";
include "view-footer.php";
?>
