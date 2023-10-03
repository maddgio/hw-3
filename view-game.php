<h1>Games</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Date</th>
        <th>Location</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($lacrosse_game = $Game->fetch_assoc()) {
?>
<tr>
  <td><?php echo $lacrosse_game['game_id']; ?></td>
  <td><?php echo $lacrosse_game['game_date']; ?></td>
  <td><?php echo $lacrosse_game['game_location']; ?></td>
  <a href="team-stats.php?id=<?php echo $lacrosse_game['game_id']; ?>">
</tr>
<?PHP
}
?> 
    </tbody>
  </table>
</div>
