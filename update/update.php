<?php include __DIR__ . '/../show/server.php';
include __DIR__ . '/../partials/header.php';
?>


<div class="container">
  <div class="row">
    <div class="col-12">
      <form action="server.php" method="post">
        <div class="form-group">
          <label for="room_number">Numero Stanza</label>
          <input class="form-control" type="text" name="room_number" value="<?php echo $room[room_number]; ?>">
        </div>
        <div class="form-group">
          <label for="floor">Piano</label>
          <input class="form-control" type="text" name="floor" value="<?php echo $room[floor]; ?>">
        </div>
        <div class="form-group">
          <label for="beds">Letti</label>
          <input class="form-control" type="text" name="beds" value="<?php echo $room[beds]; ?>">
        </div>
        <form action="server.php" method="post">
          <input type="hidden" name="id" value="<?php echo $room[id];?>">
          <input class="form-control" class="btn-primary" type="submit" value="UPDATE">
        </form>
        </div>
      </form>
    </div>
  </div>
</div>
<?php  include __DIR__ . '/../partials/footer.php'; ?>
