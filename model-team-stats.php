<?php
function SelectStats($gid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT g.game_id, game_date, game_location, player_id, time_played FROM `lacrosse_games` g join team t on t.game_id WHERE t.player_id=?");
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
