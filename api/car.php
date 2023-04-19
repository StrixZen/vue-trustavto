<title>Добавленные</title>
<head>
  <link rel="stylesheet" href="/css/card.css">
</head>
<a href="/admin.html"><img src="/img/free-icon-add-button-5440293.png" alt="" width="50px"></a>
<?php
// Подключение к базе данных
$host = "localhost";
$username = "root";
$password = "root";
$dbname = "trust_autodb";
$conn = mysqli_connect($host, $username, $password, $dbname);

// Выборка всех автомобилей из базы данных
$sql = "SELECT * FROM car";
$result = $conn->query($sql);


// Вывод карточек с автомобилями
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="card">';
        echo '<img src="'.$row["car_image"].'" alt="'.$row["car_make"].' '.$row["car_model"].'" class="card-img-top">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">'.$row["car_make"].' '.$row["car_model"].'</h5>';
        echo '<p class="card-text">Year: '.$row["car_year"].', Color: '.$row["car_color"].', Price: '.$row["car_price"].'</p>';
        echo '<a href="/buy.html"><button class="test-drive">Тест Drive</button></a>';
        echo '<a href="/buy.html"><button class="buy">Купить</button></a>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "No cars found.";
}

$conn->close();
?>



