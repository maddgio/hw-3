<?php
function SelectGamePlayers($gid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT t.player_id, p.player_name, t.game_id FROM `team` t join player p on t.player_id=p.player_id WHERE t.player_id=?");
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

