<?php
function selectGame() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT game_id, game_date, game_location FROM `lacrosse_games` ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertGame($gDate, $gLocation) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `lacrosse_games` (`game_date`, `game_location`) VALUES (?, ?)");
        $stmt->bind_param("ss", $gDate, $gLocation);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateGame($gDate, $gLocation, $gid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update 'lacrosse_games` set (`game_date` = ?, `game_location`=? ) WHERE game_id = ?");
        $stmt->bind_param("ssi", $gDate, $gLocation, $gid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteGame($gid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from lacrosse_games where game_id=?");
        $stmt->bind_param("i", $gid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
