<?php
$access = $_COOKIE["astro"];

if ($access == 1) {
   $access = "Вы уже получали астропрогноз на завтра :( Кнопка продолжения будет активна завтра.";
   } else {
   $access = "<input type='submit' value='Отправить'>" ;
}   

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
   <meta http-equiv="content-type" content="text/html; charset=windows-1251">
   <title>Гороскоп от lionovsky.us - главная</title>
</head>
<body text="#000000" bgcolor="#EAEAEA" background="img/back.jpg">
<center><img src="img/logo.gif"></center>
<table width="800" align="center" border="1" bgcolor="#F7F7F7"><tr>
<!-- ГТ -->
<td width="80%">
<img src="earth.gif" align="right">  

<!-- Привет, мой юный любитель читать чужой исходник. Полез сюда смотреть, как мы тут астропрогнозы рисуем? Ну, садись и учись. Смотри. Сначал мы напишем такую хуйню и сказочку, что даже Братья Гримм обзавидуются -->

<p><b>Добро пожаловать.</b> Вы попали на страничку, где можно бесплатно получить <u>астрологический прогноз на завтра</u>. Но не просто так, а с применением <u>технологии автоматического прогнозирования и анализа личности</u>.</p>
<p>Что из себя представляет технология <u>автоматического прогнозирования</u>?<br>
Технология основана на анализе чисел и торсионных полей, возникающих при взаимодействии вас с вашим компьютером, и при взаимодействия компьютера с локальной сетью. <br><br>
После того, как в форме ниже вы укажете все необходимые данные, вам будет необходимо приложить 3 пальца к экрану монитора или телефона для анализа полей. Когда вы приложите пальцы, наш сервер свяжется с 
вашим компьютером при помощи спецификации RFC-6214, и получит всю необходимую информацию - ваш угол взгляда относительно монитора, температуру тела, напряжение в вашей сети (для корректировки прогноза). Так же, наш Arduino-сервер 
просканирует небо для получения актуального положения луны и солнца.<p>

<p><b>Обращаем внимание!</b> Из-за высокой нагрузки получение астропрогноза возможно только один раз в сутки. Обязательно запишите свои результаты.</p>

<p> <hr> <center><b>Для получения прогноза, заполните форму ниже.</b><br><br></center>

<!-- Ок. Юзер проникнулся. Тут передаём только name, family, zodiac_me, weather, analog (1). Всё остальное - нафиг, не нужно. -->

<table width="80%" align="center" border="1">
<form action="step_two.php" method="post">

<tr><td width="50%"><b>Ваше имя</b>:</td> <td><input type="text" name="name" width="100%"></td><tr>
<tr><td width="50%"><b>Ваша фамилия</b>:</td> <td><input type="text" name="family" size="20" width="100%"></td></tr>

<tr><td width="50%"><b>Ваш пол</b>:</td> <td>
<select name="sex">
  <option value="1">Мужской</option>
  <option value="2">Женский</option>
  <option value="3">Другой</option>
  <option value="4">Котик</option>

 </select>

<tr><td width="50%"><b>Ваш знак зодиака </b>:</td> <td>
<select name="zodiac_me">
  <option value="1">Овен</option>
  <option value="2">Телец</option>
  <option value="3">Близнецы</option>
  <option value="4">Рак</option>
  <option value="5">Лев</option>
  <option value="6">Дева</option>
  <option value="7">Весы</option>
  <option value="8">Скорпион</option>
  <option value="9">Змееносец</option>
  <option value="10">Стрелец</option>
  <option value="11">Козерог</option>
  <option value="12">Водолей</option>
  <option value="13">Рыбы</option>

 </select>
</td></tr>

<tr><td width="50%"><b>Знак зодиака одного из ваших родителей</b>:<br><small>Уточняющая информация</small></td> <td>
<select name="zodiac_you">
  <option value="1">Овен</option>
  <option value="2">Телец</option>
  <option value="3">Близнецы</option>
  <option value="4">Рак</option>
  <option value="5">Лев</option>
  <option value="6">Дева</option>
  <option value="7">Весы</option>
  <option value="8">Скорпион</option>
  <option value="9">Змееносец</option>
  <option value="10">Стрелец</option>
  <option value="11">Козерог</option>
  <option value="12">Водолей</option>
  <option value="13">Рыбы</option>

 </select>
</td></tr> 

<tr><td width="50%"><b>Место вашего рождения</b>:</td> <td>
<select name="location">
  <option value="1">Европа</option>
  <option value="2">Азия</option>
  <option value="3">Северная Америка</option>
  <option value="4">Южная Америка</option>
  <option value="5">Австралия</option>
  <option value="6">Окания</option>

 </select>

<tr><td width="50%"><b>Вы зашли на сайт с</b>:<br><small>Уточняющая информация</small></td> <td>
<select name="device">
  <option value="1">Компьютер</option>
  <option value="2">Телефон</option>
  <option value="3">Планшет</option>
  <option value="4">Ноутбук</option>
  <option value="5">Другое устройство, напр. смарт-часы</option>

 </select>
</td></tr> 

<tr><td width="50%"><b>Сейчас за вашим окном</b>:<br><small>Влияет на интенсивность магнитного поля</small></td> <td>
<select name="weather">
  <option value="1">Солнце</option>
  <option value="2">Облачно</option>
  <option value="3">Пасмурно</option>
  <option value="4">Дождь, ливень</option>
  <option value="5">Гроза</option>
  <option value="6">Снег</option>

 </select>
 <!-- А это фишка, чтоб юзер случайно вторую форму без первой не открыл -->
 <input type="hidden" name="analog" value="1">

</td></tr>

</table><br> 
<center><?php echo $access ; ?></center>

</form> <br><br>
</p>

<!-- Чпок! И нас переносит на вторую форму. -->


</td>

<!-- /Ув -->

</tr></table>    

<br><br>
<center>(c) <a href="http://lionovsky.us">Lionovsky</a>, 2019</center>
 
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47424376 = new Ya.Metrika2({
                    id:47424376,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47424376" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>
