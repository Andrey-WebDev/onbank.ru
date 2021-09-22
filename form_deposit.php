<?php
  $surname = trim(strip_tags($_POST["surname"]));
  $name = trim(strip_tags($_POST["name"]));
  $middlename = trim(strip_tags($_POST["middlename"]));
  $passport = trim(strip_tags($_POST["passport"]));
  $phone = trim(strip_tags($_POST["phone"]));
  $sum = trim(strip_tags($_POST["sum"]));
  $deposit = trim(strip_tags($_POST["deposit"]));
  $subject = "Регистрация на сайте url_вашего_сайта";
  $msg = "Ваши данные формы регистрации:\n" ."Фамилия: $surname\n" ."Имя: $name\n" ."Отчество: $middlename\n" ."Номер паспорта: $passport"."Телефон: $phone\n"."Сумма вклада: $sum\n"."Вклад: $deposit\n";
  if(!empty($surname) && !empty($name) && !empty($middlename) && !empty($passport) && !empty($phone) && !empty($sum) && !empty($deposit)){
    echo "Спасибо! Операция успешно завершена.";
    }
?>
<br>
<div>
    <button type="button" class="cancelbtn"><a href="user.php">Назад в меню</button>
  </div>