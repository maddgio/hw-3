<h1>Games</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Date</th>
        <th>Location</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($lacrosse_game = $game->fetch_assoc()) {
?>
<tr>
  <td><?php echo $game['game_id']; ?></td>
  <td><?php echo $game['game_date']; ?></td>
  <td><?php echo $game['game_location']; ?></td>
</tr>
<?php
}
?> 
    </tbody>
  </table>
</div>
