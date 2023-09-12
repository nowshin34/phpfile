<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="new.php" method="get">
    <lable>user name</lable><br>
    <input type= "text" name = "user name"><br>
    <lable>password</lable><br>
    <input type="password" name = "password"><br>
    <input type="submit" value="log in"> <br>
    </form>
</body>
</html>
<?php
    echo $_GET["username"];
    echo $_GET["password"];