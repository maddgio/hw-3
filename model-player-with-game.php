<?php
function SelectGamePlayers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT t.player_id, p.name, t.game_id FROM `team` t join player p on t.player_id=p.player_id WHERE t.player_id=?");
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>

