
<div class="row">
<div class="col">
<h1>Games</h1>
</div>
  <div class="col-auto">
<?php
    include "view-games-newform.php";
?>
  </div>
<div>

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
        <input type="hidden" name="pid" value="<?php echo $lacrosse_game['game_id']; ?>">
        <button type="submit" class="btn btn-primary">Players in Game</button>
      </form>
          
  </td>
    
</tr>
<?PHP
}
?> 
    </tbody>
  </table>
</div>
