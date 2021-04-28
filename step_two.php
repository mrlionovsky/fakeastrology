<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head> 
<link href="style.css" rel="stylesheet" type="text/css">
   <meta http-equiv="content-type" content="text/html; charset=windows-1251">
   <title>Гороскоп от lionovsky.us - шаг второй</title>
</head>
<body text="#000000" bgcolor="#EAEAEA" background="img/back.jpg">
<center><img src="img/logo.gif"></center>
<table width="800" align="center" border="1" bgcolor="#F7F7F7"><tr>
<!-- ГТ --> 

<?php  
 
$error = $_POST['analog'];

if ($error == 1) {
 $error = "";
} else {
 $error = "<center><h1>Получены ошибочные данные!<br>Вы не заполнили форму на первой странице. Данная страница работать не будет!</h1> <!--";
}

$name = htmlspecialchars($_POST['name']);
$family = htmlspecialchars($_POST['family']);
$zodiac = $_POST['zodiac_me']; 

if (empty($name)) {
  $name = "Товарищ";
}

if (empty($family)) {
  $family = "Анонимус";
}
 
if ($zodiac == 1) {
 $zodiac_n = "овен";
} elseif ($zodiac == 2) {  
 $zodiac_n = "телец";
} elseif ($zodiac == 3) {  
 $zodiac_n = "близнецы";
} elseif ($zodiac == 4) {  
 $zodiac_n = "рак";
} elseif ($zodiac == 5) {  
 $zodiac_n = "лев";
} elseif ($zodiac == 6) {  
 $zodiac_n = "дева";
} elseif ($zodiac == 7) {  
 $zodiac_n = "весы";
} elseif ($zodiac == 8) {  
 $zodiac_n = "скорпион";
} elseif ($zodiac == 9) {  
 $zodiac_n = "змееносец";
} elseif ($zodiac == 10) {  
 $zodiac_n = "стрелец";
} elseif ($zodiac == 11) {  
 $zodiac_n = "козерог";
} elseif ($zodiac == 12) {  
 $zodiac_n = "водолей";    
} elseif ($zodiac == 13) {  
 $zodiac_n = "рыбы";   
} else {
 $zodiac_n = "что-то сломали нахуй" ;
}

$weather = $_POST['weather'];
if ($weather == 1) {
 $weather = "солнечно";
} elseif ($weather == 2) {  
 $weather = "облачно";
} elseif ($weather == 3) {  
 $weather = "пасмурно";
} elseif ($weather == 4) {  
 $weather = "сильная непогода";
} elseif ($weather == 5) {  
 $weather = "гремит гром";
} elseif ($weather == 6) {  
 $weather = "снежно"; 
} else {
 $weather = "какой-то пиздец" ;
} 

$ip = $_SERVER['REMOTE_ADDR'];

$quotes[] = 'вы сидите под небольшим уклоном к монитору';
$quotes[] = 'вы сидите прямо перед монитором';
$quotes[] = 'вы заинтересовано смотрите на монитор под небольшим наклоном';
$quotes[] = 'ваш монитор близко к вашим глазам';
$quotes[] = 'вы находитесь в метре от вашего устройства';
$quotes[] = 'ваш монитор к вам достаточно близко ';
srand ((double) microtime() * 1000000);
$random_number = rand(0,count($quotes)-1);

$you[] = 'немного напряжены';
$you[] = 'находитесь в тревожном ожидании';
$you[] = 'готовы к чему-то новому и вам не терпится это получить';
$you[] = 'находитесь в благоприятной для вас обстановке';
$you[] = 'находитесь в необычной для вас обстановке';
$you[] = 'очень хотите новых необычных ощущений ';
srand ((double) microtime() * 1000000);
$random_number2 = rand(0,count($you)-1);
 
$access = $_COOKIE["astro"];
$meow = $_POST['sex'];

if ($access == 1) {
   $access = "Вы уже получали астропрогноз на завтра :( Кнопка продолжения будет активна завтра.";
   } elseif (($access != 1) && ($meow == 4)) {
   $access = "<a href='#' id='myLink' onclick='playAudio();'>Мяу!</a>" ;
   } else {
   $access = "<input type='submit' value='Отправить'>" ;
} 
 



?>

<!-- Не порть себе магию! Не читай исходник! Я тебя предупредил! -->

<td width="80%">   


<?php echo $error; ?>

<p>
<b>Здравствуйте,</b> <?php echo $name; ?> <?php echo $family; ?>. Как мы понимаем, вы <?php echo $zodiac_n ?>.
За окном у вас <?php echo $weather ?>.<br><br> Так же, при помощи сигнальных пакетов мы выяснили что ваш IP - <?php echo $ip ?>, <?php echo ($quotes[$random_number]); ?>, а напряжение вашей сети - <?php echo rand(219, 235); ?> вольт(а).<br> 
Интенсивность торсионного поля вокруг вашего устройства <?php echo rand(15000, 19000); ?> мВ, вокруг вашего тела - <?php echo rand(1300, 2000); ?> мВ. Это означает что вы <?php echo ($you[$random_number2]); ?>.

<br><br>Всё верно? Если <u>да</u>, то приложите <font color="#0016DD">большой палец к <b>синему кругу</b></font>, <font color="#D50005">указательный палец к <b>красному кругу</b></font>, <font color="#8A00DD">средний палец к <b>фиолетовому кругу</b></font> на 5 секунд, после отпустите, и нажмите <u>"ОК"</u>.<br>
</p>
<p>
<center><img src="scan.jpg"></center><br>

</p>
<form action="my_astro.php" method="post">
<input type="hidden" name="error" value="1">
<input type="hidden" name="zodiac" value="<?php echo $zodiac ?>">
<input type="hidden" name="name" value="<?php echo $name ?>">


<p><center><?php echo $access; ?></center><img src="earth2.gif" align="right"></p><br><br>
</form>

<!-- Ну раз ты такой любитель лазать где попало, то обломлю. Никакой магией здесь не пахнет, а пахнет великим echo rand(X, Y). Выбираются слова и цифры случайно, ровно так, как в обычной астрологии. Теперь ты знаешь всё! -->
<!-- А тут звук котиков. Активируем только если зашёл котик -->
<script type="text/javascript">
function playAudio(){
var myAudio = new Audio;
myAudio.src = "meow.wav";
myAudio.play();
}
</script>

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
