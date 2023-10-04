<h1>Games</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Date</th>
        <th>Location</th>
        <th></th>
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
  <td>
      <form method="post" action="players-by-game.php">
        <input tyoe-"hidden" name="gpid" value="<?php echo $lacrosse_game['game_id']; ?>">
        <button type="submit" class="btn btn-primary">Players for Games</button>
      </form>
          
  </td>
    
</tr>
<?PHP
}
?> 
    </tbody>
  </table>
</div>
