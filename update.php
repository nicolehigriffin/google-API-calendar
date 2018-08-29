<?php
//update
$connect = new PDO('mysql:host=localhost;dbname=calendar', 'root', '');

$query = "UPDATE Students SET subject=:subject, start_time=:start_time, end_time=:end_time, editable=:editable WHERE title=:title";
$statement = $connect->prepare($query);
$statement->execute(
array(
  ':subject' => $_POST['subject'],
  ':start_time' => $_POST['start_time'],
  ':end_time' => $_POST['end_time'],
  ':editable' => $_POST['editable']
)
);

?>
