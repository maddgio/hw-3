<h1>Players</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Player ID</th>
        <th>Name</th>
        <th>Postion</th>
        <th>School Year</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($lax_player = $Player->fetch_assoc()) {
?>
<tr>
  <td><?php echo $lax_player['player_id']; ?></td>
  <td><?php echo $lax_player['player_name']; ?></td>
  <td><?php echo $lax_player['player_position']; ?></td>
  <td><?php echo $lax_player['player_year']; ?></td>
<!-- PUT SOMETHING FOR THE LINK HERE -->
</tr>
<?PHP
}
?> 
    </tbody>
  </table>
</div>
