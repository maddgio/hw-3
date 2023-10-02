<h1>Players</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Player ID</th>
        <th>Name</th>
        <th>Postion</th>
        <th>School Year</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($player = $Players->fetch_assoc()) {
?>
<tr>
  <td><?php echo $player['player_id']; ?></td>
  <td><?php echo $player['player_name']; ?></td>
  <td><?php echo $player['player_position']; ?></td>
  <td><?php echo $player['player_year']; ?></td>
</tr>
<?PHP
}
?> 
    </tbody>
  </table>
</div>
