<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mysqli = new mysqli('localhost', 'root', '', 'my_db');

    /* Проверка соединения */
    if (mysqli_connect_errno()) {
        printf("Подключение невозможно: %s\n", mysqli_connect_error());
        exit();
    }

    $Name = $_POST['name'];
    $Surname = $_POST['surname'];
    $Age = $_POST['age'];
    $Gender = $_POST['gender'];
    $Birthdate = $_POST['birthdate'];
    $Hobby = $_POST['hobby'];
    $Login = $_POST['login'];
    $Password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $Bank_card = $_POST['bank_card'];
    $Resume = $_POST['resume'];
    $Category = $_POST['category'];
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';



    $sql = "INSERT INTO users VALUES ('$Name', '$Surname', '$Age', '$Gender', '$Birthdate', '$Hobby', '$Login', '$Password', '$Bank_card', '$Resume', '$Category')";

  if ($mysqli->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    $mysqli->close();
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul>
    <li><a href=""></a></li>
    <li><a href=""></a></li>
    <li><a href=""></a></li>
    <li><a href=""></a></li>
    <li><a href=""></a></li>
    <li><a href=""></a></li>
    <li><a href=""></a></li>
    <li><a href=""></a></li>
</ul>
</body>
</html>
