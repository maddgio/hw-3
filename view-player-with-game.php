<h1>Players with Game </h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Game ID</th>
        <th>Player ID</th>
        <th>Player Name</th>
      </tr>
    </thead>
    <tbody>
<?PHP 
while ($pgame = $GamePlayers->fetch_assoc()) {
?>
<tr>
  <td><?php echo $pgame['game_id']; ?></td>
 <td><?php echo $pgame['player_id']; ?></td>
  <td><?php echo $pgame['player_name']; ?></td>
</tr>
<?PHP
}
?> 
    </tbody>
  </table>
</div>


<tr>

