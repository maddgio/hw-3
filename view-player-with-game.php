<h1>Players with Game</h1>
<div class="card-group">
<?php
while ($lax_player = $Player->fetch_assoc()) {
?>
    <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $lax_player['player_name']; ?></h5>
      <p class="card-text">
        <?PHP
          $games = SelectPlayersByGame($lax_player['player_id']; ?>);
          while ($games = $game->fetch_assoc()) {
        ?>
  <?php
}
?>
      </p>
      <p class="card-text"><small class="text-body-secondary">Player; <?php echo $lax_player['player_id']; ?></small></p>
    </div>
<?PHP
}
?> 
</div>
