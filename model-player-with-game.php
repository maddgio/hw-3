<?php
function selectPlayers() {
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
?> 

<?php
function SelectGamePlayers($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT g.game_id, game_date, p.player_id, p.player_name FROM `lacrosse_games` g join team t on t.game_id=g.game_id join player p on p.player_id=t.player_id WHERE t.player_id=?");
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

