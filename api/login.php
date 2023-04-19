<?php
// Подключение к базе данных
session_start();
require_once 'connect.php';
// Обработка запроса на авторизацию
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение введенных пользователем данных
    $email = $_POST['email'];
    $password = $_POST['password1'];
  
    // Поиск пользователя в базе данных
    $sql = "SELECT * FROM users WHERE email='$email' AND password_hash='$password'";
    $result = $conn->query($sql);

     // Проверка результатов запроса
  if ($result->num_rows == 1) {
    // Авторизация прошла успешно
  
  $_SESSION['email'] = $email;

  // Получение информации о пользователе
  $sql = "SELECT * FROM users WHERE email='$email'";
  $result = $conn->query($sql);
  $user = $result->fetch_assoc();

  // Добавление информации о пользователе в сессию
  $_SESSION['login'] = $login;
  $_SESSION['email'] = $email;

  // Перенаправление на страницу профиля
  // header('Location: /index.html');
  echo "Успешная авторизация";
  exit();
  
?>


<?php
  } else {
    // Неверные учетные данные
    echo "Неверный E-mail или пароль";
  }
}

// Закрытие соединения с базой данных
$conn->close();
?>
