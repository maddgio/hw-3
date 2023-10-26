
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
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($lacrosse_games = $Game->fetch_assoc()) {
?>
<tr>
        <td><?php echo $lacrosse_games['game_id']; ?></td>
        <td><?php echo $lacrosse_games['game_date']; ?></td>
        <td><?php echo $lacrosse_games['game_location']; ?></td>
        <td>
          <?php
          include "view-games-editform.php";
          ?>
        </td>
  <td>
       <td>
      <form method="post" action="players-by-game.php">
        <input type="hidden" name="pid" value="<?php echo $lacrosse_games['game_id']; ?>">
        <button type="submit" class="btn btn-primary">Players in Game</button>
      </form>
       </td>
  <td>
    <form method="post" action="">
        <input type="hidden" name="pid" value="<?php echo $lacrosse_games['game_id']; ?>">
        <input type="hidden" name="actionType" value="Delete">
        <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?');">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
</svg>
        </button>
      </form>
          
  </td>
    
</tr>
<?PHP
}
?> 
    </tbody>
  </table>
</div>


<div class="row">
  <div class="col">
    <h1>Games</h1>
  </div>
  <div class="col-auto">
    <?php
    include "view-games-newform.php";
    ?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Game ID</th>
        <th>Game Date</th>
        <th>Game Location</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
  <?php
      while ($lacrosse_games = $games->fetch_assoc()) {
  ?>
     <tr>
       <td><?php echo $lacrosse_games['game_id']; ?></td>
        <td><?php echo $lacrosse_games['game_date']; ?></td>
       <td><?php echo $lacrosse_games['game_location']; ?></td>
       <td>
         <?php
         include "view-games-editform.php";
         ?>
       </td>
       <td>
         <form method="post" action="">
           <input type="hidden" name="gid" value="<?php echo $lacrosse_games['game_id']; ?>">
           <input type="hidden" name="actionType" value="Delete">
            <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?');">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
              </svg>
            </button>
          </form>
       </td>
       <td>
         <form method="post" action="players-by-game.php">
           <input type="hidden" name="gid" value="<?php echo $lacrosse_games['game_id']; ?>">
            <button type="submit" class="btn btn-primary">Players by Game</button>
          </form>
       </td>
     </tr>     
  <?php
      }
  ?> 
    </tbody>
  </table>
</div>
