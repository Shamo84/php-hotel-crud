<?php
include __DIR__ . '/../database.php';
include __DIR__ . '/../functions.php';

 $idroom = $_GET["id"];

// $sql = "SELECT * FROM stanze WHERE id = $idroom";
// $result = $conn->query($sql);
//
// if ($result && $result->num_rows > 0) {
//   // output data of each row
//
// $room = $result->fetch_assoc();
//
// } elseif ($result) {
//   echo "0 results";
// } else {
//   echo "query error";
// }
// $conn->close();

$room = showFromID ($conn, "stanze", $idroom);
