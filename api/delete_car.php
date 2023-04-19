<?php

// Подключаемся к базе данных
require_once 'connect.php';


// Проверяем соединение
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Обработка отправленной формы
$idToCheck = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $car_id = $_POST["car_id"];
  
    // Запрос на удаление автомобиля из базы данных
    $sql = "DELETE FROM car WHERE car_id = $car_id";
    if ($conn->query($sql)) {
      echo "Автомобиль успешно удален из базы данных";
    } else {
      echo "id автомобиля не найден" . $conn->error;
    }
  }
  
  // Закрытие соединения с базой данных
  $conn->close();
  
  ?>

<a href="/admin.html"><img src="/img/free-icon-add-button-5440293.png" alt="" width="50px"></a>
