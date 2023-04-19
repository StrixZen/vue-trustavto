<?php
// Подключение к базе данных
require_once 'connect.php';



// Получаем данные из формы
$login = $_POST['login'];
$email = $_POST['email'];
$city = $_POST['city'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

// Проверяем, что пароли совпадают
if ($password1 !== $password2) {
  echo 'Пароли не совпадают';
  exit;
}

// Проверяем, что логин и email не заняты другими пользователями
$check_login_sql = "SELECT * FROM users WHERE login='$login'";
$check_login_result = mysqli_query($conn, $check_login_sql);
$check_email_sql = "SELECT * FROM users WHERE email='$email'";
$check_email_result = mysqli_query($conn, $check_email_sql);

if(mysqli_num_rows($check_login_result) > 0){
    echo "Этот логин уже занят";
    exit;
} 
if(mysqli_num_rows($check_email_result) > 0){
    echo "Этот email уже занят";
    exit;
}

// Создаем хэш пароля
$password_hash = password_hash($password1, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (login, email, password_hash, city) VALUES ('$login', '$email', '$password1' , '$city')";

if($conn->query($sql)){
    echo "Добро пожаловать $login!";
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();


// Создаем новую запись в базе данных
// $stmt = $pdo->prepare("INSERT INTO users (login, email, password_hash) VALUES (:login, :email, :password_hash)");
// $stmt->execute(['login' => $login, 'email' => $email, 'password_hash' => $password_hash]);

// Отправляем пользователю сообщение об успешной регистрации
echo 'Регистрация прошла успешно';

// // Перенаправляем пользователя на главную страницу
// header('Location: ./index.html');
// exit;

// header('Location: F:\programmers\openserver\domains\trustavto\index.html');
?>
<a href="../profile.php">К профилю</a>