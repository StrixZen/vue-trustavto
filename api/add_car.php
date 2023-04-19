<?php
// Подключение к базе данных

require_once 'connect.php';
// Обработка добавления автомобиля
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['car_make']) && isset($_POST['car_model']) && isset($_POST['car_year']) && isset($_POST['car_color']) && isset($_POST['car_price'])) {
    // Получаем данные из формы
    $car_make = $_POST['car_make'];
    $car_model = $_POST['car_model'];
    $car_year = $_POST['car_year'];
    $car_color = $_POST['car_color'];
    $car_price = $_POST['car_price'];
    // Здесь можно добавить обработку загрузки фото автомобиля

    // Здесь выполняется код для добавления автомобиля в базу данных
    $sql = "INSERT INTO car (`car_make`, `car_model`, `car_year`, `car_color`, `car_price`) VALUES ('$car_make', '$car_model', '$car_year', '$car_color', '$car_price')";
    if($conn->query($sql)){
        header('Location: car.php');
    } else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();
    // Например, можно использовать SQL-запросы, чтобы добавить данные в таблицу базы данных

    // После успешного добавления автомобиля можно перенаправить пользователя на страницу с информацией о новом автомобиле
    // header('Location: /Catalog.html' . $new_car_id);
    exit();
}


?>