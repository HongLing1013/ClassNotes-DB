<?php

include_once "connect.php";

$id=$_GET['id'];
$sql="DELETE FROM `users` WHERE `id`='$id'";
$pdo->exec($sql);

unset($SESSION['user']);

header('location:index.php');


?>