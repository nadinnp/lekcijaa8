<?php

include_once("config.php");

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id=:id";

$getUsers = $connect->prepare($sql);

$getUsers->bindParam(':id', $id);

$getUsers->execute();

header('Location:dashboard.php');

?>