<?php
//require_once 'connect.php';

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/main.css">
	<title>Профиль пользователя</title>
    <body>
      <div class="header">
        <div class="header-logo">
            <a href="./index.html"><img src="./img/logo.svg" alt=""></a>
        </div>
        <div class="header-link">
            <a href="./index.html">О нас</a>
            <a href="./Catalog.html">Каталог</a>
            <a href="#map">Где купить</a>
            <a href="./Sale.html">Продать авто</a>
            <a href="./api/car.php">Редакт</a>
        </div>
    </div>
      <form>
        <div class="profile">
          <div class="avatar">
            <img src="./img/user-icon.png" alt="Аватар пользователя">
          </div>
          <div class="info">
            <h1></h1>
            <p>Клиент</p>
            <ul>
              <?php
              //echo $_SESSION['email']
              ?>
              <li><strong>Электронная почта:</strong> ivanov@example.com</li>
              <li><strong>Город:</strong> Москва</li>
             
              <a href="./api/logout.php">Выход</a>
            </ul>
          </div>
        </div>
        <div class="bio">
          <h2>Профиль</h2>
          <p>Это ваш профиль, здесь вы можете управлять своими заказами, а так же отслеживать их.</p>
        </div>
      </form>
      
    </body>
  </html>

  <style>
    .header{
    max-width: 100%;
    height: 120px;
    background-color: #484848;
    display: flex;
    justify-content: space-between;
}

.info a{
  color: white;
}

.header-logo{
    width: 302px;
    height: 47px;
    margin-top: 30px;
    margin-left: 65px;
}

.header-link{
    padding-top: 33px;
    padding-right: 43px;
    margin: 0;
    width: 764px;
    height: 38px;
    display: flex;
    justify-content: space-between;
}

.header-link a{
    text-decoration: none;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 30px;
    line-height: 36px;
    color: #e9dede;
}

.header-link a:hover{
    opacity: 55%;
    color: aliceblue;
    transition: 0.5s linear;
}
    body{
      background-color: #1b1a1a;
    }

    form {
  width: 80%;
  margin: 0 auto;
  background-color: #333;
  color: #fff;
  padding: 20px;
  border-radius: 10px;
}

.profile {
  display: flex;
  align-items: center;
  margin-bottom: 30px;
}

.avatar {
  margin-right: 30px;
}

.avatar img {
  width: 100px;
  height: 100px;
  border-radius: 50%;
}

.info {
  font-size: 20px;
}

.info h1 {
  margin-top: 0;
}

.info p {
  margin-bottom: 10px;
}

.info ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

.info li {
  margin-bottom: 5px;
}

.bio {
  margin-bottom: 30px;
}

.bio h2 {
  margin-top: 0;
}

.bio p {
  margin-bottom: 10px;
}

  </style>
  
