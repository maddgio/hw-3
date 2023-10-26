<?php
function selectPlayer() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT player_id, player_name, player_position, player_year FROM `player`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectPlayerbyGame($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT t.game_id, p.player_id, t.team_id, player_name, t.time_played FROM `player` p join Team t on p.player_id = t.player_id where t.player_id=?");
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

function selectPlayersForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT player_id, player_name FROM `player` order by player_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectGamesForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT game_id, game_date FROM `lacrosse_games` order by game_date");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

