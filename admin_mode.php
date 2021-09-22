<?php

include('includes/db.php');

?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>Режим администратора</title>
<link rel="stylesheet" type="text/css" href="style/user_style.css" />

</head>
<body>
<h2>Вход в режим администратора</h2>

<form method="POST" action="/handle2.php">
  <div class="imgcontainer">
    <img src="images/avatar.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Логин</b></label>
    <input type="text" placeholder="Введите логин" name="login" required>

    <label for="psw"><b>Пароль</b></label>
    <input type="password" placeholder="Введите пароль" name="password" required>
        
    <button type="submit">Войти</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Запомнить
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn"><a href="index.php">Назад</button>
  </div>
</form>
</body>
</html>

