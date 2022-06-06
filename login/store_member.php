<?php

include_once "connect.php";

// 正是做法的話
$acc=$_POST['acc'];
// $acc=chkAcc($acc);

$sql="INSERT INTO `users` (`acc`,`pw`,`birthday`,`passnote`,`email`) 
                  values('{$_POST['acc']}','{$_POST['pw']}','{$_POST['birthday']}','{$_POST['passnote']}','{$_POST['email']}');";

$pdo->exec($sql);

header('location:login.php');

?>