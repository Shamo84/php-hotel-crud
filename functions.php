<?php include 'database.php';

function showAll($conn, $table)
{

  $sql = "SELECT * FROM $table";
  $result = $conn->query($sql);

  if ($result && $result->num_rows > 0) {
    // output data of each row
    $results = [];
    while($row = $result->fetch_assoc()) {
      $results[] = $row;
    }
  } elseif ($result) {
    $results = [];
  } else {
    $results = false;
  }
  return $result;
  $conn->close();
}

function showFromID($conn, $table, $id)
{
  $sql = "SELECT * FROM $table WHERE id = $id";
  $result = $conn->query($sql);

  if ($result && $result->num_rows > 0) {
    // output data of each row

  $room = $result->fetch_assoc();

  } elseif ($result) {
    $room = [];
  } else {
  $room = false;
  }
  return $room;
  $conn->close();
}
