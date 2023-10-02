<?php
function selectStats() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SSELECT team_id, game_id, player_id, time_played, shots FROM `team`");
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
