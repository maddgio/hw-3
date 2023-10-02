<h1>Team Stats</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Team ID</th>
        <th>Game ID</th>
        <th>Game Date</th>
        <th>Game Location</th>
        <th>Player ID</th>
        <th>Time Played</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($team_stats = $Stats->fetch_assoc()) {
?>
<tr>
  <td><?php echo $team_stats['team_id']; ?></td>
  <td><?php echo $team_stats['game_id']; ?></td>
  <td><?php echo $team_stats['game_date']; ?></td>
  <td><?php echo $team_stats['game_location']; ?></td>
  <td><?php echo $team_stats['player_id']; ?></td>
  <td><?php echo $team_stats['time_played']; ?></td>
</tr>
<?PHP
}
?> 
    </tbody>
  </table>
</div>
