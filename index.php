<?php include 'database.php';
var_dump($rooms);
;?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="dist/app.css">
  <title>Hotel CRUD</title>
</head>
<body>
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
        <td><a href="show/index.php?id=<?php echo $room[id]?>">VIEW</a></td>
        <td><a href="">UPDATE</a></td>
        <td>DELETE</td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</body>
</html>
