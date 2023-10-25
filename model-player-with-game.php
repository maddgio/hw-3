<?php
function SelectGamePlayers($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT t.player_id, p.player_name, t.game_id FROM `team` t join player p on t.player_id=p.player_id where p.player_id=?");
        $stmt->bind_param("i", $pid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertGamePlayers($pid, $gid, $pname) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO t.player_id, p.player_name, t.game_id FROM `team` t join player p on t.player_id=p.player_id where p.player_id=?");
        $stmt->bind_param("i", $pid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateGamePlayers($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT t.player_id, p.player_name, t.game_id FROM `team` t join player p on t.player_id=p.player_id where p.player_id=?");
        $stmt->bind_param("i", $pid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteGamePlayers($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT t.player_id, p.player_name, t.game_id FROM `team` t join player p on t.player_id=p.player_id where p.player_id=?");
        $stmt->bind_param("i", $pid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>

