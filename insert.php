<?php
// insert

$connect = new PDO('mysql:host=localhost;dbname=calendar', 'root', '');

$query = "INSERT INTO Students (subject, color, start_time, end_time, editable) VALUES (:subject, :color, :start_time, :end_time, :editable)";
$statement = $connect->prepare($query);
$statement->execute(
array(
 ':subject' => $_POST['title'],
 ':color' => $_POST['color'],
 ':start_time' => $_POST['start'],
 ':end_time' => $_POST['end'],
 ':editable' => $_POST['startEditable']
)
);

?>
