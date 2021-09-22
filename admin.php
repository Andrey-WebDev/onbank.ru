
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>OnБанк</title>
 <link rel="stylesheet" type="text/css" href="style/user_style2.css" />
</head>
<body>
<table width=100% cellspacing="0" cellpadding="0" border="0">
<tr>
<td width="100"><img src="images\logo.jpg" align=center></td>
<td background="images\logo3.jpg">&nbsp </td>
<td width="100"><img src="images\logo2.jpg" align=center></td>
<td background="images\logo3.jpg">&nbsp </td>
<td width="100"><img src="images\logo.jpg" align=center></td>
</tr>
</table>

<table style="background: url(images/tt2.png)"
width= 100%
height=600px
border="1"
bgcolor="#e6e6fa"
cellpadding="10">	
<tr><td
rowspan="2"
style="width:80%" valign="top"><h2 align="center"> Операции по категориям</h2>
<table width="100%">
<div class="dropdown" style="width: 25%">
  <button class="dropbtn">Вклады</button>
  <div class="dropdown-content" style="width: 25%">
    <a href="opening_a_deposit.php">Открытие вклада</a>
    <a href="#">Пополнение вклада</a>
    <a href="#">Закрытие вклада</a>
  </div>
</div>
<div class="dropdown" style="width: 25%">
  <button class="dropbtn">Оплата услуг</button>
  <div class="dropdown-content">
    <a href="#">Сотовая связь</a>
    <a href="#">Интернет</a>
    <a href="#">Телевидение</a>
    <a href="#">Абонентская плата за электричество</a>
    <a href="#">Абонентская плата за газ</a>
    <a href="#">Абонентская плата за воду</a>
  </div>
</div>
<div class="dropdown" style="width: 25%">
  <button class="dropbtn">Переводы</button>
  <div class="dropdown-content">
    <a href="#">С карты на карту</a>
    <a href="#">По номеру телефона на карту и обратно</a>
    <a href="#">Между своими счетами</a>
  </div>
</div>
<div class="dropdown" style="width: 25%">
  <button class="dropbtn">Валюта</button>
  <div class="dropdown-content">
    <a href="#">Покупка валюты</a>
    <a href="#">Продажа валюты</a>
    <a href="#">Обмен валюты</a>
  </div>
</div>
</table>
</td></tr>



<!--САЙДБАР-->

<td bgcolor="#e6e6fa" height=100%>
	<table><tr><td><font size="6"><a href="/index.php">Главное меню</a></tr></td></table><br>
    <table bgcolor="#FFF0F5" width=100%>
      <tr><th style="text-align:left" colspan="3" bgcolor="#4682B4"> <font color= #FFFFFF>Текущие счета</th></tr>
      <tr><td>324455671200</td><td style="text-align:right;">70500</td><td>RUR</td></tr>
      <tr bgcolor="#87CEFA"><td>045754967454</td><td style="text-align:right">56000</td><td>RUR</td></tr>
      <tr><td>520099655503</td><td style="text-align:right">30000</td><td>USD</td></tr>
      <tr bgcolor="#87CEFA"><td>780877989051</td><td style="text-align:right">4550</td><td>EUR</td></tr>
    </table><br>

    <table bgcolor="#FFF0F5" width=100% border="0">
      <tr><th style="text-align:left" colspan="3" bgcolor="#4682B4"><font color= #FFFFFF>Курс валют</th></tr>
      <tr><td bgcolor="#87CEFA">Валюта</td><td bgcolor="#87CEFA">Покупка</td><td bgcolor="#87CEFA">Продажа</td></tr>
      <tr><td bgcolor="#A9A9A9">Доллар США (USD)</td><td>67.4200</td><td>69.9200</td></tr>
      <tr><td bgcolor="#A9A9A9">Евро (EUR)</td><td>76.2600</td><td>78.8600</td></tr>
    </table>
</td>
</table>

<?php
    //Подключение подвала
    require_once("footer.php");
?>

</body>
</html>
