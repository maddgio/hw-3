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
?>
