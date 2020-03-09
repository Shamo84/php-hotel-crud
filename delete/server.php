<?php
include __DIR__ . '/../database.php';
$idroom = $_POST["id"];

$sql = "SELECT * FROM stanze WHERE id = $idroom";
$result = $conn->query($sql);
$room = $result->fetch_assoc();

if ($result && $result->num_rows > 0) {
  $sql = "DELETE FROM stanze WHERE id = $idroom";
  $result = $conn->query($sql);

  if ($result) {

    header('Location: http://localhost/php-hotel-crud/?roomNumber=' . $room[room_number]);
  } else {
    echo "query error";
  }

} else {
  echo "questo id non esiste";
}

$conn->close();
