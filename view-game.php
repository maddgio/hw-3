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
while ($Game = $Game->fetch_assoc()) {
?>
<tr>
  <td><?php echo $Game['game_id']; ?></td>
  <td><?php echo $Game['game_date']; ?></td>
  <td><?php echo $Game['game_location']; ?></td>
</tr>
<?PHP
}
?> 
    </tbody>
  </table>
</div>
