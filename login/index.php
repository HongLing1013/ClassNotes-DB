<?php include_once "connect.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問卷系統</title>
    <style>
        nav{
            width: 900px;
            margin: auto;
            text-align: right;
        }
    </style>
</head>
<body>
<nav>
    <?php
    if(isset($_SESSION['user'])){
    ?>
    <a href="logout.php">登出</a>
    <?php
    }else{
    ?>    
        <a href="login.php">登入</a>
    <?php
    }
    ?>
</nav>
<h1 style="text-align:center">問卷</h1>

<?php 

$sql="select * from `users` ";

$users=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

foreach($users as $user){
    echo $user['acc']."<br>";
}

?>
</body>
</html>