<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cate result</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    $name = $_GET["name"];
    $type = $_GET["type"];

    require_once('dbconfig.php');
    $connect = mysqli_connect(HOST, USER, PASS,DB)
        or die("Can not connect");
    mysqli_query($connect, "INSERT into categories values (null,'$name','$type')")
        or die("Can not execute query");
    
    echo "<div class='ui container'>Record inserted:<br> Name = $name";
    echo "<br><br><button class='ui teal button'><a href=categories_read.php>Read all records</a></button></div>";
?>
</body>
</html>