<?php include __DIR__ . '/../database.php';
$idroom = $_POST["id"];

$sql = "SELECT * FROM stanze WHERE id = $idroom";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
  $sql = "DELETE FROM stanze WHERE id = $idroom";
  $result = $conn->query($sql);

  if ($result) {

    header('Location: http://localhost/php-hotel-crud/?roomID=' . $idroom);
  } else {
    echo "query error";
  }

} else {
  echo "questo id non esiste";
}

$conn->close();
