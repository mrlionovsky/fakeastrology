<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head> 
<link href="style.css" rel="stylesheet" type="text/css">
   <meta http-equiv="content-type" content="text/html; charset=windows-1251">
   <title>�������� �� lionovsky.us - ��� ������</title>
</head>
<body text="#000000" bgcolor="#EAEAEA" background="img/back.jpg">
<center><img src="img/logo.gif"></center>
<table width="800" align="center" border="1" bgcolor="#F7F7F7"><tr>
<!-- �� --> 

<?php  
 
$error = $_POST['analog'];

if ($error == 1) {
 $error = "";
} else {
 $error = "<center><h1>�������� ��������� ������!<br>�� �� ��������� ����� �� ������ ��������. ������ �������� �������� �� �����!</h1> <!--";
}

$name = htmlspecialchars($_POST['name']);
$family = htmlspecialchars($_POST['family']);
$zodiac = $_POST['zodiac_me']; 

if (empty($name)) {
  $name = "�������";
}

if (empty($family)) {
  $family = "��������";
}
 
if ($zodiac == 1) {
 $zodiac_n = "����";
} elseif ($zodiac == 2) {  
 $zodiac_n = "�����";
} elseif ($zodiac == 3) {  
 $zodiac_n = "��������";
} elseif ($zodiac == 4) {  
 $zodiac_n = "���";
} elseif ($zodiac == 5) {  
 $zodiac_n = "���";
} elseif ($zodiac == 6) {  
 $zodiac_n = "����";
} elseif ($zodiac == 7) {  
 $zodiac_n = "����";
} elseif ($zodiac == 8) {  
 $zodiac_n = "��������";
} elseif ($zodiac == 9) {  
 $zodiac_n = "���������";
} elseif ($zodiac == 10) {  
 $zodiac_n = "�������";
} elseif ($zodiac == 11) {  
 $zodiac_n = "�������";
} elseif ($zodiac == 12) {  
 $zodiac_n = "�������";    
} elseif ($zodiac == 13) {  
 $zodiac_n = "����";   
} else {
 $zodiac_n = "���-�� ������� �����" ;
}

$weather = $_POST['weather'];
if ($weather == 1) {
 $weather = "��������";
} elseif ($weather == 2) {  
 $weather = "�������";
} elseif ($weather == 3) {  
 $weather = "��������";
} elseif ($weather == 4) {  
 $weather = "������� ��������";
} elseif ($weather == 5) {  
 $weather = "������ ����";
} elseif ($weather == 6) {  
 $weather = "������"; 
} else {
 $weather = "�����-�� ������" ;
} 

$ip = $_SERVER['REMOTE_ADDR'];

$quotes[] = '�� ������ ��� ��������� ������� � ��������';
$quotes[] = '�� ������ ����� ����� ���������';
$quotes[] = '�� �������������� �������� �� ������� ��� ��������� ��������';
$quotes[] = '��� ������� ������ � ����� ������';
$quotes[] = '�� ���������� � ����� �� ������ ����������';
$quotes[] = '��� ������� � ��� ���������� ������ ';
srand ((double) microtime() * 1000000);
$random_number = rand(0,count($quotes)-1);

$you[] = '������� ���������';
$you[] = '���������� � ��������� ��������';
$you[] = '������ � ����-�� ������ � ��� �� �������� ��� ��������';
$you[] = '���������� � ������������� ��� ��� ����������';
$you[] = '���������� � ��������� ��� ��� ����������';
$you[] = '����� ������ ����� ��������� �������� ';
srand ((double) microtime() * 1000000);
$random_number2 = rand(0,count($you)-1);
 
$access = $_COOKIE["astro"];
$meow = $_POST['sex'];

if ($access == 1) {
   $access = "�� ��� �������� ������������ �� ������ :( ������ ����������� ����� ������� ������.";
   } elseif (($access != 1) && ($meow == 4)) {
   $access = "<a href='#' id='myLink' onclick='playAudio();'>���!</a>" ;
   } else {
   $access = "<input type='submit' value='���������'>" ;
} 
 



?>

<!-- �� ����� ���� �����! �� ����� ��������! � ���� �����������! -->

<td width="80%">   


<?php echo $error; ?>

<p>
<b>������������,</b> <?php echo $name; ?> <?php echo $family; ?>. ��� �� ��������, �� <?php echo $zodiac_n ?>.
�� ����� � ��� <?php echo $weather ?>.<br><br> ��� ��, ��� ������ ���������� ������� �� �������� ��� ��� IP - <?php echo $ip ?>, <?php echo ($quotes[$random_number]); ?>, � ���������� ����� ���� - <?php echo rand(219, 235); ?> �����(�).<br> 
������������� ����������� ���� ������ ������ ���������� <?php echo rand(15000, 19000); ?> ��, ������ ������ ���� - <?php echo rand(1300, 2000); ?> ��. ��� �������� ��� �� <?php echo ($you[$random_number2]); ?>.

<br><br>�� �����? ���� <u>��</u>, �� ��������� <font color="#0016DD">������� ����� � <b>������ �����</b></font>, <font color="#D50005">������������ ����� � <b>�������� �����</b></font>, <font color="#8A00DD">������� ����� � <b>����������� �����</b></font> �� 5 ������, ����� ���������, � ������� <u>"��"</u>.<br>
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

<!-- �� ��� �� ����� �������� ������ ��� ������, �� �������. ������� ������ ����� �� ������, � ������ ������� echo rand(X, Y). ���������� ����� � ����� ��������, ����� ���, ��� � ������� ����������. ������ �� ������ ��! -->
<!-- � ��� ���� �������. ���������� ������ ���� ����� ����� -->
<script type="text/javascript">
function playAudio(){
var myAudio = new Audio;
myAudio.src = "meow.wav";
myAudio.play();
}
</script>

</td>

<!-- /�� -->

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
