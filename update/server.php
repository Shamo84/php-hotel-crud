<?php include __DIR__ . '/../database.php';

$idroom = $_POST["id"];
$room_number = $_POST["room_number"];
$room_floor = $_POST["floor"];
$room_beds = $_POST["beds"];

$sql = "UPDATE stanze SET room_number = $room_number, floor = $room_floor, beds = $room_beds WHERE id = $idroom";
$result = $conn->query($sql);

if ($result) {
  header('Location: http://localhost/php-hotel-crud/show/show.php?id=' . $idroom);
} else {
  echo "error";
}
$conn->close();
