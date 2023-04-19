<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
<a href="addProduct.php">Добавить товар</a>
<?php
$conn = new mysqli("localhost", "vrgvpgpx", "CUjai8", "dpkkxgu-m3");

$sql = "SELECT * FROM product";
if($result = $conn->query($sql)){
    foreach($result as $row){

        echo '<div>';
        echo "<h3>$row[title]</h3>";
        echo "<img src='$row[image]'>";
        echo "<p>$row[description]</p>";
        echo '</div>';

    }
}

?>


</body>
</html>