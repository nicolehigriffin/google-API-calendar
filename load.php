<?php
//load

$connect = new PDO('mysql:host=localhost;dbname=calendar', 'root', '');

$data = array();

$query = "SELECT * FROM Students ORDER BY id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row) {
 $data[] = array(
  'title'   => $row["subject"],
  'color' => $row["color"],
  'start'   => $row["start_time"],
  'end'   => $row["end_time"],
  'editable' => $row["editable"]
 );
}

echo json_encode($data);

?>
