<?php

include '../config.php';

$query = 'SELECT id, accessno, title FROM book';
$result = mysqli_query($link, $query);
$rows = [];

while($row = mysqli_fetch_assoc($result)) {
  array_push($rows, $row);
}

echo json_encode($rows);

?>
