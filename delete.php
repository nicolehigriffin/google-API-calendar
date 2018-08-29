<?php

//delete.php
$connect = new PDO('mysql:host=localhost;dbname=calendar', 'root', '');

$query = "DELETE from Students WHERE subject=:subject";
$statement = $connect->prepare($query);
$statement->execute(
array(
 ':subject' => $_POST['title']
)
);

?>
