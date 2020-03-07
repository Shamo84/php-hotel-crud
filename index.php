<?php
include 'server.php';
include 'partials/header.php';
;?>
<?php if (!empty($_GET["roomID"])): ?>
  <div class="alert alert-danger" role="alert">
    hai cancellato la stanza con ID: <?php echo $_GET["roomID"]?>
  </div>

<?php endif; ?>

<table class="table">
  <thead>
    <tr>
      <th>Room Number</th>
      <th>Floor</th>
      <th></th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($rooms as $room): ?>
      <tr>
        <td><?php echo $room[room_number] ?></td>
        <td><?php echo $room[floor] ?></td>
        <td><a href="show/show.php?id=<?php echo $room[id]?>">VIEW</a></td>
        <td><a href="">UPDATE</a></td>
        <td>
        <form action="delete/delete.php" method="post">
          <input type="hidden" name="id" value="<?php echo $room[id]?>">
          <input type="submit" class="btn-danger" value="DELETE">
        </form>

        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php include 'partials/footer.php'; ?>
