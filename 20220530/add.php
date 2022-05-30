<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增學生資料</title>
    <style>
        *{
            color: indigo;
        }
        body{
            margin: 10px;
            padding: 20px;
            border: 1px solid indigo;
            border-radius: 5px;
        }

        label{
            display: block;
            padding: 10px;
        }

        label input{
            padding: 3px;
            font-size: 1.2rem;
        }

        input{
            border: 1px solid indigo;
            border-radius: 30px;
        }
    </style>
</head>

<body>
    <h1>新增學生資料</h1>
    <form action="store.php" method="post">
        <label for="">學號：<input type="text" name="uni_id" id="uni_id"></label>
        <label for="">班級座號：<input type="text" name="seat_num" id="seat_num"></label>
        <label for="">姓名：<input type="text" name="name" id="name"></label>
        <label for="">生日：<input type="text" name="birthday" id="birthday"></label>
        <label for="">身分證號碼：<input type="text" name="national_id" id="national_id"></label>
        <label for="">住址：<input type="text" name="address" id="address"></label>
        <label for="">家長：<input type="text" name="parent" id="parent"></label>
        <label for="">電話：<input type="text" name="telphone" id="telphone"></label>
        <label for="">科別：<input type="text" name="major" id="major"></label>
        <label for="">畢業國中：<input type="text" name="secondary" id="secondary"></label>
        <br>
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </form>
</body>

</html>