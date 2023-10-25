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

function inserttGame($gDate, $gLocation) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `lacrosse_games` (`game_date`, `game_location`) VALUES (?, ?)");
        $stmt->bind_param("ss", $gDate, $gLocation);
        $success = $stmt->execute();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateGame($gDate, $gLocation, $gid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update 'lacrosse_games` set (`game_date`, `game_location`) VALUES (?, ?)");
        $stmt->bind_param("ss", $gDate, $gLocation);
        $success = $stmt->execute();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function inserttGame() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `lacrosse_games` (`game_date`, `game_location`) VALUES (?, ?)");
        $stmt->bind_param("ss", $gDate, $gLocation);
        $success = $stmt->execute();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
