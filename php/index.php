<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP連線資料庫</title>
    <style>
        h1,h2,h3,h4{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>php連線資料庫(DB)-物件導向的方式</h1>
    <?php
    // $dsn="mysql:host=localhost;charset=utf8;dbname=school2";
    // $pdo=new PDO($dsn,'root','');

    // $sql="SELECT `students`.*,`dept`.`code`,`dept`.`name` as '科系' FROM `students`,`dept` WHERE `dept`.`id`=`students`.`dept`";

    // $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_BOTH);

    // echo "<pre>";
    // print_r($rows);
    // echo "</pre>";

/*  echo $rows[0][3];
    echo "<br>";
    echo $rows[0]['birthday']; */
    ?>

    <h1>php連線資料庫(MySQLi)-函式類型</h1>
    <?php
    $conn=mysqli_connect('localhost','root','','school2');
    
    $sql="SELECT `students`.*,`dept`.`code`,`dept`.`name` as '科系' FROM `students`,`dept` WHERE `dept`.`id`=`students`.`dept`";

    $query=mysqli_query($conn,$sql);
    $rows=mysqli_fetch_array($query,MYSQLI_BOTH);

    echo var_dump($query);

    echo "<pre>";
    print_r($rows);
    echo "</pre>";

    // echo $rows[0][3];
    // echo "<br>";
    // echo $rows[0]['birthday'];
    ?>
</body>
</html>