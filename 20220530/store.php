<?php
//建立PDO確保連結資料庫
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'root','');

// 資料表
$sql="INSERT INTO `students` (`uni_id`, `seat_num`, `name`, `birthday`, `national_id`, `address`, `parent`, `telphone`, `major`, `secondary`) 
                       values( '{$_POST['uni_id']}', '{$_POST['seat_num']}', '{$_POST['name']}', '{$_POST['birthday']}', '{$_POST['national_id']}', '{$_POST['address']}', '{$_POST['parent']}', '{$_POST['telphone']}', '{$_POST['major']}', '{$_POST['secondary']}')";
$pdo->query($sql);

//echo $sql;
header("location:index.php");
?>