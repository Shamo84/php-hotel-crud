<?php include 'server.php';
include __DIR__ . '/../partials/header.php';
?>


  <div class="container">
    <div class="row">
      <div class="col-12">
        <ul>
          <li>ID: <?php echo $room[id]; ?></li>
          <li>Numero Stanza: <?php echo $room[room_number]; ?></li>
          <li>Piano: <?php echo $room[floor]; ?></li>
          <li>Numero Letti: <?php echo $room[beds]; ?></li>

        </ul>
      </div>
    </div>
  </div>
<?php  include __DIR__ . '/../partials/footer.php'; ?>
