<?php
function SelectGamePlayers($gid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT g.game_id, game_date, p.player_id, p.player_name FROM `lacrosse_games` g join team t on t.game_id=g.game_id join player p on p.player_id=t.player_id WHERE g.game_id=?");
        $stmt->bind_param("i", $gid);
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
