<h1>Team Stats</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Game ID</th>
        <th>Game Date</th>
        <th>Game Location</th>
        <th>Player ID</th>
        <th>Player Name</th>
        <th>Time Played</th>
        <th>Shots Made/Saved</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($team_stats = $Stats->fetch_assoc()) {
?>
<tr>
  <td><?php echo $team_stats['game_id']; ?></td>
  <td><?php echo $team_stats['game_date']; ?></td>
  <td><?php echo $team_stats['game_location']; ?></td>
  <td><?php echo $team_stats['player_name']; ?></td>
  <td><?php echo $team_stats['time_played']; ?></td>
  <td><?php echo $team_stats['shots']; ?></td>
</tr>
<?PHP
}
?> 
    </tbody>
  </table>
</div>
