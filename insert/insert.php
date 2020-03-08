<?php
include __DIR__ . '/../partials/header.php';
?>


<div class="container">
  <div class="row">
    <div class="col-12">
      <form action="server.php" method="post">
        <div class="form-group">
          <label for="room_number">Numero Stanza</label>
          <input class="form-control" type="text" name="room_number" value="" placeholder="inserisci il numero di stanza">
        </div>
        <div class="form-group">
          <label for="floor">Piano</label>
          <input class="form-control" type="text" name="floor" value="" placeholder="inserisci il piano">
        </div>
        <div class="form-group">
          <label for="beds">Letti</label>
          <input class="form-control" type="text" name="beds" value="" placeholder="inserisci il numero di letti">
        </div>
        <form action="server.php" method="post">
          <input class="btn-primary form-control" type="submit" value="GENERATE">
        </form>
        </div>
      </form>
    </div>
  </div>
</div>
<?php  include __DIR__ . '/../partials/footer.php'; ?>
