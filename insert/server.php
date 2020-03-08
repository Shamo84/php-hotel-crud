<?php include __DIR__ . '/../database.php';

$room_number = $_POST["room_number"];
$room_floor = $_POST["floor"];
$room_beds = $_POST["beds"];

$sql = "INSERT INTO stanze (room_number, floor, beds)
VALUES ($room_number, $room_floor, $room_beds);";
$result = $conn->query($sql);

if ($result) {
  header('Location: http://localhost/php-hotel-crud/');
} else {
  echo "error";
}
$conn->close();
