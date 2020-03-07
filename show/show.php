<?php include 'server.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="http://localhost/php-hotel-crud/dist/app.css">
  <title>SHOW</title>
</head>
<body>
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

</body>
</html>
