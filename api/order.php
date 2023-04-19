<?php
// Подключение к базе данных

require_once 'connect.php';


// Получение данных из формы
$buyer_name = $_POST['buyer_name'];
$surname_name = $_POST['surname_name'];
$buyer_phone = $_POST['buyer_phone'];
$buyer_email = $_POST['buyer_email'];

// Внесение данных в базу данных
$sql = "INSERT INTO orders (name, surname, number, email) VALUES ('$buyer_name', '$surname_name', '$buyer_phone', '$buyer_email')";

if (mysqli_query($conn, $sql)) {
    echo "Спасибо за заказ $buyer_name! С вами свяжутся в ближайшее время.";
} else {
echo "Ошибка при добавлении заказа: " . mysqli_error($conn);
}

mysqli_close($conn);
?>