<h1>Team Stats</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Game ID</th>
        <th>Game Date</th>
        <th>Player ID</th>
        <th>Player Name</th>
      </tr>
    </thead>
    <tbody>
<?php $play_game = $GamePlayers->fetch_assoc()) {
?>
<tr>
  <td><?php echo $play_game['game_id']; ?></td>
  <td><?php echo $play_game['game_date']; ?></td>
 <td><?php echo $play_game['player_id']; ?></td>
  <td><?php echo $play_game['player_name']; ?></td>
</tr>
<?PHP
}
?> 
    </tbody>
  </table>
</div>
